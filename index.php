<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="HomePage.css">
        <link rel="stylesheet" href="loginPage.css">
        <title>SHAKUNI PVT(Ltd)</title>
    </head>
    <body>
        <?php
          
            include 'Administrator.php';  
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "userdb";
	
            if (isset($_POST["submit"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$conn = mysqli_connect($host, $user, $pass, $db) or die("Connection failed: " . mysqli_connect_error());
		$sql = "SELECT usertype, username, password FROM UserTb";
		$result = mysqli_query($conn, $sql);
		
	
               
		if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $dbuser = $row["username"];
                        $dbpass = $row["password"];
                        $dbuserT=$row["usertype"];
                        if ($username == $dbuser && $password == $dbpass){
                            if($dbuserT=="Administrator"){
                                Administrator::getAdmin()->setPassword($password);
                                Administrator::getAdmin()->setUsername($username);
                                                                
                            }
                            else if($dbuserT=="Clerk"){
                                echo 'cle';
                                Clerk::setClerk($username,$password);
                                
                            }

                            header("Location: HomePage.html");
                            break;
                        }
                 
                    }
                 
                }
		mysqli_close($conn);

	}
        
        ?>
        
        <div class="wrap">
		<div class="avatar">
                    <a href="#"><img src="images/user-icon.svg"></a>
		</div>
		<form action="#" method="POST">
		<input type="text" placeholder="username" name="username" required>
		<div class="bar">
			<i></i>
		</div>
		<input type="password" placeholder="password" name="password" required>
		<a href="" class="forgot_link">forgot ?</a>
		<input type="submit" name="submit" value="Sign in">
		
	</form>
                </div>
    
        
    </body>
</html>
