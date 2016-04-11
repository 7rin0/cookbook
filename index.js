// Thanks to http://code.tutsplus.com/tutorials/real-time-chat-with-nodejs-socketio-and-expressjs--net-31708

// Create application
var express = require("express");
var app = express();
var port = 3700;

// Define route
// app.get("/", function(req, res){
//     res.send("It works!");
// });

app.set('views', __dirname + '/src/tpl');
app.set('view engine', "pug");
app.engine('pug', require('pug').__express);
app.get("/", function(req, res){
    res.render("index");
});

// Run Server
app.use(express.static(__dirname + '/web'));
var io = require('socket.io').listen(app.listen(port));
console.log("Listening on port " + port);


io.sockets.on('connection', function (socket) {
    socket.emit('message', { message: 'welcome to the chat' });
    socket.on('send', function (data) {
        io.sockets.emit('message', data);
    });
});
