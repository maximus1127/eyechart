var server = require('http').createServer();
server.listen('8000', function () {
    console.log('Server is running on port 8000!');
});

var io = require('socket.io')(server);
var Redis = require('ioredis');
var redisHost = process.env.REDIS_HOST || '127.0.0.1';
var redis = new Redis({
    host: redisHost
});
redis.subscribe('private-default');
redis.on('message', function (channel, message) {
  console.log(channel, message);
    message = JSON.parse(message);
    io.emit(channel + ':' + message.event, message.data);
});
