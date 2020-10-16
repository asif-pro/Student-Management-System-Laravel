var database = require('./database');

module.exports = {
 
	lostfound: function(user,callback){
		var sql = "select * from lostfound";
		database.getResults(sql, user, function(result){

				callback(result);
		})
	},   
	lostfoundsearch: function(user,callback){
		var sql = "select * from lostfound WHERE lostname LIKE '%"+user+"%' OR lostdescription LIKE '%"+user+"%'";
		database.getResults(sql, user, function(result){

				callback(result);
		})
	},
	
	subject: function(user,callback){
		var sql = "select * from subject,teacher WHERE subject.subject_id=teacher.subject_id AND subject.class_id=?";
		database.getResults(sql, user, function(result){

				callback(result);
		})
	},
	 
}