<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="HomePage.css">
        <title>Non-Settled Cheque Report</title>
    </head>
    <body>
        <div>
            <a href="HomePage.html" class="homelink">Back to Home</a></div>
        <br><br>
        <h1>Non-Settled Cheque Report</h1>
        <?php
        include 'Administrator.php';
        
        include 'Cheque.php';
        $host = "localhost";
	$user = "root";
	$pass = "";
	$db = "chequedb";
        $conn = mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());
        $data="SELECT chequeNo, bank, branch, date, amount,returnStatus,settledStatus FROM cheques";
        $result = mysqli_query($conn, $data);
        
        
        ?>
        <center>
        <table bgcolor="white" border="2"  >
            
        <tr >
        <th width="100px">Cheque No</th>
        <th width="100px">Bank</th>
        <th width="100px">Branch</th>
        <th width="100px">Date</th>
        <th width="100px">Amount</th>
        
        
        </tr>
        <?php
       
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                
                if($row["settledStatus"]==0){
                    if($row["returnStatus"]==0){
                        
                    
                    
        ?>            
                <tr>
                        <td class="cell">
                        <button class="button2" onclick="<?php Administrator::getAdmin()->editChequeDetails($row["chequeNo"]) ?>">
                        <?php echo $row["chequeNo"]?></button></td>
                        <td class="cell"><?php echo $row["bank"]?></td>
                        <td class="cell"><?php echo  $row["branch"]?></td>
                        <td class="cell"><?php echo  $row["date"]?></td>
                        <td class="cellAmt"><?php echo $row["amount"]?></td>


                </tr>
        <?php            
                    }
                }
                
            }
        }
        else
            echo "No employees in the database";
        mysqli_close($conn);
        ?>
        
        </table>
        </center>
    </body>
</html>
