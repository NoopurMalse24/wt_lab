const express = require('express');
const app = express();
const bodyParser = require('body-parser');

app.set('view engine', 'ejs');
app.use(express.static('public'));
app.use(bodyParser.urlencoded({ extended: true }));

// GET Route
app.get('/', (req, res) => {
  res.render('index', { bill: null });
});

// POST Route to calculate bill
app.post('/calculate', (req, res) => {
  const units = parseFloat(req.body.units);
  let amount = 0;

  if (units <= 50) {
    amount = units * 3.5;
  } else if (units <= 150) {
    amount = 50 * 3.5 + (units - 50) * 4.0;
  } else if (units <= 250) {
    amount = 50 * 3.5 + 100 * 4.0 + (units - 150) * 5.2;
  } else {
    amount = 50 * 3.5 + 100 * 4.0 + 100 * 5.2 + (units - 250) * 6.5;
  }

  res.render('index', { bill: amount.toFixed(2) });
});

app.listen(3000, () => {
  console.log('Server started on http://localhost:3000');
});
