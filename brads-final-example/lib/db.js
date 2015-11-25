import path from 'path'
import db from 'mysql-chassis'

db.init({
  host: 'localhost',
  database: 'rockit-express',
  user: 'root',
  password: '',
  sqlPath: path.resolve('sql')
});

export default db
