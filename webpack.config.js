const path = require("path");

module.exports = {
  entry: './assets/js/cardapio/index.js',
  output: {
    filename: 'app.js',
    path: path.join(__dirname, '/assets/js/cardapio')
  }
}