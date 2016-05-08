<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cheque</title>
        <link rel="stylesheet" href="HomePage.css">
    </head>
    <body>
        <div>
            <a href="HomePage.html" class="homelink">Back to Home</a></div>
        <br><br>
        <?php
        include 'Administrator.php';
        $cheque=  Administrator::getAdmin()->getCheque();
        ?>
        
        <h1>Details of cheque no. <?php echo $cheque->getChequeNo();?></h1>
        <form>
            Cheque No:  <input type="text" name="chequeNo" value="<?php $cheque->getChequeNo()?>"> <br>
            Bank name : <input type="text" name="chequeNo" value="<?php $cheque->getBank()?>"> <br>
            Branch name: <input type="text" name="chequeNo" value="<?php $cheque->getBranch()?>"> <br>
            Due date : <input type="text" name="chequeNo" value="<?php $cheque->getDate()?>"> <br>
            Amount : <input type="text" name="chequeNo" value="<?php $cheque->getAmount()?>"> <br>
            Return status : <input type="text" name="chequeNo" value="<?php $cheque->getReturnStatus()?>"> <br>
            Settled status: <input type="text" name="chequeNo" value="<?php $cheque->getSettledStatus()?>"> <br>
            
            
        </form>
        
    </body>
</html>
