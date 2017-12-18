
var echo = require('laravel-echo-server')

var options = {
    authHost : "https://dynamarine.dev",
    database : "redis",
    host : null,
    port : "3002",
    sslCertPath : "/etc/nginx/ssl/nginx.crt",
    sslKeyPath : "/etc/nginx/ssl/nginx.key",
    authEndpoint: '/broadcasting/auth',
    socketio: {
        "wsEngine": "uws"
    },
    "protocol": "https",
};

echo.run(options);

