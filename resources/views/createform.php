<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>Forms</title>
</head>
<body>
	
<form action="store" method="post">
<label for="Employee_id">Employee_id:</label>
<input type="number" name="Employee_id"><br>
<label for="Name">Name:</label>
<input type="text" name="Name"><br>
<label for="Dpt_Id">Dpt:Id:</label>
<input type="number" name="Dpt_Id"><br>
<label for="Account_no">Account_no:</label>
<input type="text" name="Account_no"><br>
<label for="Serial_no">Serial_no:</label>
<input type="number" name="Serial_no"><br>
<label for="No_plate">No_plate:</label>
<input type="text" name="No_plate"><br>
<label for="Start_date">Start_date:</label>
<input type="date" name="Start_date"><br>
<label for="Stop_date">Stop_date:</label>
<input type="date" name="Stop_date"><br>
<label for="Address">Address:</label>
<input type="text" name="Address"><br>
<label for="Gender">Gender:</label>
<input type="radio" name="Female">Female
<input type="radio" name="Male">Male<br>
<label for="Age">Age:</label>
<input type="number" name="Age"><br>
<label for="Phone_no">Phone_no:</label>
<input type="text" name="Phone_no"><br>
<input type="hidden" name="_token" value="{{ 
csrf_token() }}"> mandatory for crsf token.
or <br>
<?php #echo csrf_token(); ?>
<label for=""></label>
<input type="submit" name="submit" value="submit"><br>

</form>

</body> 
</html>    