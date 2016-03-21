var request = require('request');
var noCache = require('superagent-no-cache');

request
    .get("http://localhost:3000/items")
    .end(function(err, res){
        console.log("hoge");
        console.log(res);
    });

request
    .get("http://localhost:3000/samples")
    .use(noCache)
    .send({name: "Samples"})
    .end(function _requestCallback() {
        console.log("hogehoge");
    });
