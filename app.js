const express = require('express');
const app = express();
const db = require('./database');

// Endpoint para obtener datos de la base de datos
app.get('/datos', (req, res) => {
  const sql = 'SELECT * FROM tabla_ejemplo';
  db.query(sql, (err, result) => {
    if (err) {
      console.error('Error al realizar la consulta:', err);
      res.status(500).json({ error: 'Error al realizar la consulta' });
      return;
    }
    res.json(result);
  });
});

// Otros endpoints y configuraciones...

app.listen(3000, () => {
  console.log('Servidor iniciado en el puerto 3000');
});
