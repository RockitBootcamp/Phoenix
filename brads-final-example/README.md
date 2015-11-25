# Rockit Express

> Rockit-powered Express API server

Automatically generates API endpoints based on MySQL tables. Also allows you to define custom SQL statements for custom API endpoints (or override auto-endpoints).

## Usage

Run the Rockit server with the following command:

```
npm start
```

You should see output similar to the following:

```
10 Nov 16:04:00 - [nodemon] v1.4.1
10 Nov 16:04:00 - [nodemon] to restart at any time, enter `rs`
10 Nov 16:04:00 - [nodemon] watching: *.*
10 Nov 16:04:00 - [nodemon] starting `babel-node server.js`
```

## Configuration

A `config.json` is provided for configuring the server.

### `autocase`

Column names in a table generally use snake_case and will be converted to camelCase as the property name in the JSON and vice versa.

Set this option to `false` to disable automatic conversion between snake_case and camelCase.

### `uploadField`

The field name you'll use for `multipart/file-data` POST requests (i.e. file uploads).

Code example (create a file in `routes/api`, whatever you name that JS file will be the name of the endpoint, e.g. `routes/api/upload.js`→`/api/upload`):

```js
// require config file
var config = require('../../lib/config').json

// require multer
var upload = multer({ dest: './public/files' })

// ...

// configure file upload endpoint on your router
router.post('/', upload.array(config.uploadField, 8), (req, res) => {
  // handle uploaded files here ...


  // required for response
  // put this in a successful callback after e.g. renaming the file(s)
  var filePaths = req.files.map(function (file) {
    return file.path + '_' + file.originalname
  }).join(' /')
  res.location('/' + filePaths).sendStatus(201)
})
```

## API

The API has 2 parts to it, automatic endpoints, and custom endpoints. The automatic endpoints will map directly to MySQL table names. So each endpoint will reference the table name. `GET`, `POST` and `PUT` methods are automatically provided for each of the auto endpoints as well. *`DELETE` is not yet implemented.*

### Automatic Endpoints

The following endpoints and methods are valid. The word `table` refers to the fact that whatever this word is maps (matches) directly to a table of the same name in your MySQL database. All endpoints are under the `/api` route.

```
GET /api/table
GET /api/table/1
POST /api/table
PUT /api/table/1
```

#### Relational Endpoints

Data can be retrieved based on a simple relation, i.e. **comments** which relate to a specific **post**.

```
GET /api/relation/1/table
```

For example

```
GET /api/post/1/comment
```

The example above would give you all **comments** related to **post** with the ID of **1**.

### Custom Endpoints

Custom endpoints require creating a JavaScript file in the `routes/api` directory. See the provided `routes/api/user.js` for example code.

> If you create a custom route script, this will **only** override automatic endpoints for the specific HTTP method created. All methods not explicitly created as a custom endpoint will fallback to being handled by the automatic endpoints.

In order to get the data from your MySQL tables, you will create a `.sql` file with the necessary SQL statement and save that to the `sql` directory. You can name the file anything you like. You use the `selectFile` method to load the file as your SQL statement.

Example:

```js
db.selectFile('all-users', function(error, rows, fields) {
  // ...
})
```

You can also write SQL statements directly in the code, though it's generally better to use a `.sql` file instead.

Example:

```js
db.select('SELECT * FROM ' + resource + ' WHERE ' + resource + '_id = :id', { id: id }, (error, rows, fields) => {
  // ...
})
```
