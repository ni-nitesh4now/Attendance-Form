
<?php
    include("connect.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        $sname=$_POST['sname'];
        $sid= $_POST['ClgId'];
        $ip = getenv('HTTP_CLIENT_IP')?:
        getenv('HTTP_X_FORWARDED_FOR')?:
        getenv('HTTP_X_FORWARDED')?:
        getenv('HTTP_FORWARDED_FOR')?:
        getenv('HTTP_FORWARDED')?:
        getenv('REMOTE_ADDR');
        
		$qu = "select * from `classroom` where ip = '$ip' ";
        $res = mysqli_query($connect, $qu);


		if(!empty($sname) && !empty($sid))
		{
            if($res && mysqli_num_rows($res) <1 ){
                $act = "INSERT INTO `classroom` (`name`, `Sid`,`ip`) VALUES ('$sname','$sid','$ip')";
                $result = mysqli_query($connect,$act);
                header("Location: success.php");
                die;
            }
            else{
                echo 'Its a proxy';
            }
		}else
		{
			echo "Please enter some valid information!";
		}
	}

    ?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<style>

body {
  background-color: #555;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
}

#panel, #flip, #panel2 {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}
#panel {
  padding: 50px;
}
#panel2 {
  padding: 50px;
}

    </style>
<div id="app">
<div id="flip"><h2>Class Attendance Sheet</h2></div>
<div id="panel2">  
    <form method="post">
        <div> Your Name: <input id="classid2" type="text" name="sname" placeholder="Name" >
        </div><br>
        College ID: <input id="classid3" type="text" name="ClgId" placeholder="College ID" >
        <div><br><input type="submit"/></div>
        <a href="index.php">Click to Change class Code</a>
    </form>   
</div>
</div>
</body>
</html>