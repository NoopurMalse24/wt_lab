const mysql = require('mysql2');
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '', // your MySQL root password if set
  database: 'bookstore'
});
connection.connect((err) => {
  if (err) throw err;
  console.log('Connected to MySQL');
});
module.exports = connection;
