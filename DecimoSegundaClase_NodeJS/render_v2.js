var http = require('http');
var	fs   = require('fs');

http.createServer(function(req,res){
	if(req.url.indexOf("favicon.ico")>0){ return ;};



	fs.readFile("./index2.html", function(err,html){

		var html_string = html.toString();
		var variables = html_string.match(/[^\{\}]+(?=\})/g);
		var nombre = "";
		console.log('fuera del if');
		if(req.url.indexOf("?")>0){
			console.log('dentro del if');
			var url_data = req.url.split("?");
			var arreglo_parametros = url_data[1].split("&");
			var parametros=[];	
			for(var i = 0; i>=arreglo_parametros.length -1; i--){
				var parametro = arreglo_parametros[i];
				var param_data = parametro.split("=");
				
				parametros[param_data[0]] = param_data[1];
			
			}
				console.log("fuera del for");
			for(var i= variables.length -1; i>=0; i--){
				console.log('entra al for');
				console.log(i + ' ' + variables[i] + ' ' + parametros[variables[i]]);
				var variable = variables[i];
				html_string = html_string.replace("{"+variables[i]+"}", parametros[variables[i]]);
			}
		}

		
		
		res.writeHead(200, {"Content-Type":"text/html"});
		res.write(html);
		res.end();
	});

}).listen(8080)	