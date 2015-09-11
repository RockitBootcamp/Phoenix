# PHP Login with Sessions

## Project Background and Description

This project will use your newly acquired PHP skills to create a user login page that validates a username and password. The project will include:

- Server side validation to verify login inputs
- A **friendly** interface to users in the face of validation errors
- A user account page that is only accessible to logged in users

## User Facing Pages (aka "Controllers")

- `index.php`
- `account.php`
- `logout.php`

### `index.php`

The home page will be a simple looking login form. The HTML and CSS have been provided for you and you can change this page as necessary.

The PHP for this page should do the following:

- Initialize the code (see below in this document)
- Check to see if the user is already logged in (has a session). They should be redirected to `account.php` if they are logged in.
- Check to see if the page is in recursive submission mode. If so:
    - Check to make sure the username is valid using the `UsernameValidator` class
    - Check to make sure the password is valid using the `PasswordValidator` class
    - If the username or password values are not valid, error messages should be logged in the `ErrorManager` class
    - After the validation section, check to see if the error manager has any errors.
        - If it doesn't have errors, login the user with the `UserLogin` class.
        - If it does have errors, let the code continue to show the form again with errors for each input field.

#### Extra Credit

- Style the input fields to be red-ish to indicate an error


### `account.php`

The account page can only be accessed if a user is logged in. The PHP for this page should do the following:

- Initialize the code (see below in this document)
- Check to see if the user is not logged in (does not have a session). They should be redirected to `index.php` if so.
- If they are logged in, show a welcome message that says "Hello [name]", with a logout link


### `logout.php`

The PHP for this page should do the following:

- Initialize the code (see below in this document)
- Call the `logout()` method of the `UserLogin` class
- Redirect the user to the `index.php` page.

#### Extra Credit

Display a message like "you are being logged out..." and then redirected after 2 secs to `index.php`


## Classes

For this project, place all your classes in a folder called `classes`. Each class should have its own file and each filename should be exactly the class name with a `.php` extension. Classnames (and filenames) should be in "title case", for example: "UserLogin" is correct and "userLogin" is not.

The classes you need to make are as follows:

- `Validator`
- `PasswordValidator extends Validator`
- `UsernameValidator extends Validator`


### Validation

The `Validator` class will serve as a parent class for `UsernameValidator` and `PasswordValidator`. You will not instantiate the `Validator` class directly, but you will instantiate the two child classes:

```php
$usernameValidator = new UsernameValidator;
$passwordValidator = new PasswordValidator;
```

The `Validator` class will have one method called `isValid($value)`. This method will rely on regular expressions from the child class to determine if the value provided in the argument is valid.

The Regular expressions needed are as follows:

- `/^[a-zA-Z]{5,}$/` for usernames
- `/^[a-zA-Z0-9!@#$%^&*\(\)]{5,}$/` for passwords

The method `isValid($value)` should only return a `true` or `false`

