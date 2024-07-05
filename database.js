const mysql = require('mysql');

// Create a MySQL connection pool
const pool = mysql.createPool({
  host: 'localhost',
  database: 'testing',
  user: 'root',
  password: '',
  connectionLimit: 10 // Adjust the connection limit as needed
});

// Test the connection pool
pool.getConnection((err, connection) => {
  if (err) {
    console.error('Error connecting to database:', err);
    return;
  }
  console.log('MySQL Database is connected successfully');
  connection.release(); // Release the connection back to the pool
});

// Export the connection pool
module.exports = pool;
