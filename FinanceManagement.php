<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Finance Management</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HomePage.css">
    </head>
    <body>
        <div>
            <a href="HomePage.html" class="homelink">Back to Home</a></div>
        <br><br>
       
    <center><h1>Finance Management</h1></center>
    <br><br>
    <?php 
     include 'Administrator.php';
    ?>
    
    <form action="<?php echo $_SERVER['PHP_SELF']?>">
    <input type="submit" class="button1" name="settledCheques" value="Settled Cheques" /><br><br><br>
    <input type="submit" class="button1" name="nonSettledCheques" value="Non-settled Cheques" /><br><br><br>
    <input type="submit" class="button1" name="returnedCheques" value="Returned Cheques" /><br><br><br>
    <input type="submit" class="button1" name="businessReport" value="Business Report" /><br><br><br>
    </form>   
    
 
    <?php
    
    $user=Administrator::getAdmin();
   
    echo Administrator::getAdmin()->getPassword();
    if($_GET){
        if(isset($_GET['settledCheques'])){
            $user->getSettledChequeReport();
        }elseif(isset($_GET['nonSettledCheques'])){
            $user->getNonSettledChequeReport();
        }elseif(isset($_GET['returnedCheques'])){
            $user->getReturnedChequeReport();
        }elseif(isset($_GET['businessReport'])){
            $user->getBusinessReport();
        }
    }
    
    
    ?>
    
     
    
    
    
    </body>
</html>
