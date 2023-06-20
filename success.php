<?php
    include("connect.php");

    $display = 'select * from classroom ORDER BY sno ASC';
    $r=mysqli_query($connect,$display);
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
    
body {
  background-color: #555;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  color: black;
}

        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
  
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
<body>
<style>
#panel, #flip{
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
  background-color: green;
  color:black;
  text-align: center;
}
    </style>
<div>  
<div id="flip"><h2>Class Attendance Sheet</h2></div>
<div id="panel"> 
    
<div id="panel2"> 
    Successful!!<br></div>
    <br>
    <button><a href="index.php">Go Back</a></button>
        <h1>Attendance sheet</h1>
        <table>
            <tr>
                <th>Serial No.</th>
                <th>Name</th>
                <th>College Id</th>
                <th>IP Address</th>
            </tr>
            <?php   
                while($rows=mysqli_fetch_assoc($r))
                {
             ?>
            <tr>
                
                <td><?php echo $rows['sno'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['Sid'];?></td>
                <td><?php echo $rows['ip'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>
</div>
</div>
</body>
</html>