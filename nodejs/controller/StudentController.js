var express = require('express');
var StudentModel = require.main.require('./model/StudentModel');
var router = express.Router();

var user={};

router.get('/lostfound/search/(:value)', function(req, res){
    user= req.params.value;
	StudentModel.lostfoundsearch(user,function(result){
		res.send({result})
	})	
});

router.get('/teacher/search/(:value)', function(req, res){
    user= req.params.value;
	StudentModel.teachersearch(user,function(result){
		res.send({result})
	})	
});

module.exports = router;