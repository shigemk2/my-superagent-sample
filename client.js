var request = require('superagent');

request
    .get("http://localhost:3000/items")
    .end(function(err, res){
        console.log("hoge");
        console.log(res);
    });