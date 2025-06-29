// server/server.js
const express = require('express');
const bodyParser = require('body-parser');
const identityRoutes = require('./routes/identity');

const app = express();

app.use(bodyParser.json());
app.use('/identity', identityRoutes);

const PORT = process.env.PORT || 5000;
app.listen(PORT, () => {
  console.log(`Server running on port ${PORT}`);
});
