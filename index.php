<?php 
session_start();

	include("connect.php");
    
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        
		$classid = $_POST['classid'];

		if(!empty($classid))
		{

			$query = "select * from classes where classid = '$classid' limit 1";
			$result = mysqli_query($connect, $query);

			if($result && mysqli_num_rows($result) > 0)
			{
                
				header("Location: act.php");
				die;
			}
		}
			
		echo '<script>alert("Wrong Class ID")</script>';
	}
    else
	{
        echo '';
	}
	



?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
@import url("https://fonts.googleapis.com/css2?family=VT323&display=swap");
* {
  box-sizing: border-box;
}

body {
  background-color: #555;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
}

#classid {
  font-family: inherit;
  color: inherit;
  letter-spacing: 3px;
  border: 1.5px solid;
  border-radius: 0.5rem;
  padding: 0.1rem 0.3rem;
  caret-color: #fff;
}
input:focus {
  border-style: solid;
  outline: none;
}
</style>
</head>
<body>
<div id="app">
<div id="flip"><h2>Class Attendance Sheet</h2></div>
<div id="panel"> 
    <form method="post">
        Class Id:
        <input :style="{ color: color || dynamicText }" id="classid" name="classid" placeholder="XYZ01" type="text" v-model="displayText" @focus="onFocus" @blur="onBlur"/>
        <br><br><input id="button" type="submit" value="Proceed">
</div>
</div>
</body>
</html>
