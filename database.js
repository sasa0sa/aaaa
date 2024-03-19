const mysql = require('mysql');

const connection = mysql.createConnection({
  host: '127.0.0.1',
  user: 'root',
  password: '',
  database: 'base_de_dades',
  port: 3306
});

connection.connect();

module.exports = connection;
