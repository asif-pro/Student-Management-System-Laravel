
const express = require('express');
const app = express();

var bodyParser = require('body-parser');
const teacher = require("./controller/teacher");
var StudentController= require('./controller/StudentController');
var ParentController= require('./controller/ParentController');

app.use(bodyParser.urlencoded({extended:false}));

app.use('/parent', ParentController);
app.use("/teacher", teacher.routes);
app.use('/student', StudentController);

app.get('/', function(req, res){
	res.send("starting page");
});
app.listen(3333, function(){
    console.log('express http server started at 3333....')
});