var http = require('http');
var fs = require('fs');

http.createServer(function(req,res){

	fs.readFile("./index.html", function(err,html){
		res.writeHead(200,{"Content-Type":"text/html"});
		res.write(JSON.stringify({nombre:"Leo",username:"LeoAchear"}));
		res.end();
	});
}).listen(8080);
