//requerer pastas instaladas
const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');
const handlebars = require('handlebars');
const app = express();
//iniciar servidor colocando a porta
app.listen(3000, function(requesicao, resposta){
    console.log('servidor está rodando');
});
