//Inicialización
var express = require('express');
var app = express();					// express
var mongoose = require('mongoose');		// mongoose para mongodb
var port = process.env.PORT || 8080; 	// Puerto local

// Configuración
mongoose.connect('mongodb://localhost.27017/MeanExample');

app.use(express.static(__dirname + '/angular'));
/*app.use(express.bodyParser())
app.use(express.methodOverride())*/

// Cargamos los endpoints
requiere('./app/routers.js')(app);
app.listen(port);
console.log("APP por el puerto " + port);