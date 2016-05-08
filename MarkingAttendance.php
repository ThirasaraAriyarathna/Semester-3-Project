<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Marking Attendance</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HomePage.css">
        
    </head>
    <body>
        <div>
            <a href="HomePage.html" class="homelink">Back to Home</a></div>
        <br><br>
        <?php
        include 'Administrator.php';
        
        $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "employeedb";
        $conn = mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());
        $names="SELECT Name FROM empattendance";
        $result = mysqli_query($conn, $names);
        
        
        ?>
        
        <h1>Marking Attendance</h1>
        <br><br><br><br>
        <center>
        <table bgcolor="white" border="2"  >
            <col width="200">
            <col width="20">
            <col width="20">
            <col width="40">
        <tr >
        <th width="100px">Name</th>
        <th width="100px">Full day</th>
        <th width="100px">Half day</th>
        <th width="100px">OT hours</th>
        </tr>
        <?php
       
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $dbname = $row["Name"];
                
                echo "<tr>";
                    echo "<td>";
                    echo $dbname;
                    echo "</td>";
            ?>    
                    <td class="cell">
                    <div>
                        <label><input type="radio"> </lable>
                    </div></td>

                    <td class="cell">
                    <div>
                        <label><input type="radio"></lable>
                    </div></td>
                    <td contenteditable="true" align="right"></td>
                </tr>
        <?php
            
            }
        }
        else
            echo "No employees in the database"
        ?>
        
        </table>
        </center>
    <br><br>
    <?php 
//    $user=Main :: getUser(); 
//    echo 'sdfghj';
    ?>
   <!-- <button class="submit" onclick="">Submit</button>-->
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="submit" class="submit" name="submit" value="Submit" /><br><br><br>
    <?php
    
    $user=Administrator::getAdmin();
    echo "hfjlfjrj";
    
    
    if($_GET){
        if(isset($_GET['submit'])){
            $user->getSettledChequeReport();
        
    }
    }
    ?>
    </body>
</html>
