<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
</head>
<body>

	<h1>Library</h1>

	<a href="/home">Back</a>
	<form >
		
		{{csrf_field()}}



									 <table border="1" >
									 	<thead>
                                    <tr>
                                    	<th>Book ID</th>
                                        <th>Book Name</th>
                                        <th>Author</th></tr>
                                </thead><tbody >
                                     @for($i=0; $i != count ($libraries); $i++)
                                        <td>{{$libraries[$i]->bid}}</td>
                                        <td>{{$libraries[$i]->bname}}</td>
                                        <td>{{$libraries[$i]->author}}</td></tr>
                                    @endfor
                                    
                                </tbody>
                            </table>
                            <td><input type="submit" name="submit" value="update"></td>
	</form>
</body>
</html>