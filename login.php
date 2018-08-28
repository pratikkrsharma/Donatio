
<html>

<head>
    <title>Login/Signup</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="first.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #bc8888">
    <?php
	include 'connect.php';
	session_start();
		if(isset($_POST['login']))
		{
		$user_id = mysqli_real_escape_string($connection,$_POST['username']);
		$password =mysqli_real_escape_string($connection,$_POST['password']);
		$sql="SELECT * FROM donor WHERE userid='".$user_id."' and password='".$password."';";
		$result= mysqli_query($connection,$sql);
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if($count==1)
		{
			$_SESSION['login_cust']=$user_id;
			header("location:customer_details.php");
		}
		else
		{
		echo "<script>alert('Invalid username or password! Please try again.');</script>";		
		}
		}

?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default" style="margin-top: -10px; color: whitesmoke">
    
        <div class="container-fluid" style="background-color: whitesmoke; padding: 20px 20px 10px 25px;">
            <a href="index.html"><img src="images/LogoNew.png"></a>
        </div>
        <div class="container-fluid" style="background-color: orange;">
        <div class="navbar-header"  style="padding-left: 20px;">
            <a class="navbar-brand" style="color:whitesmoke" href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>        
        </div>
        <div>
        <ul class="nav navbar-nav" >
            <li>
                <a href="about.html" style="color:whitesmoke">
                    About Us
                </a>
            </li>
            <li>
                <a href="org.html" style="color: whitesmoke">
                    Organisation
                </a>
            </li>
            <li>
                <a href="contact.html" style="margin-right: 820px;color: whitesmoke">
                    Contact
                </a>
            </li>
            <li>
                <a href="login.html" style="color: whitesmoke">
                    Donate
                </a>
            </li>
            <li>
                <a href="login2.html" style="padding-right: 20px;color: whitesmoke">
                    Seeker
                </a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    
    <!-- end of nav bar -->
    
    <div class="container">
    <div class="col-md-12">
        <h1>Donor</h1>
        </div>
    </div>
    <div class="container">
    <div class="row">
	<div class="col-sm-5 background">
		<h4 style= "text-align:left;color:brown;font-size:35px">Login</h4>
		<form class="form-group" action="login.php" method="post">
			<div>
			<label  style="color: aliceblue;font-size:20px" >User ID</label>
			<input style="width: 70%" class="form-control" type="text" name="username" />
			</div>
			<div class="form-group">
			<label style="color: aliceblue;font-size:20px">Password</label>
			<input style="width: 70%"  type="password" class="form-control" name="password"/>
			</div>	    			
			<input class="btn btn-block btn-warning btn-lg" type="submit" name="login" value="Login" style="width:40%;background-color: brown; border-color: brown">
		</form>
	</div>
        <div class="col-md-1"> </div>
	<div class="col-sm-5 background">
	<h4 style="text-align:left; color:white;font-size:40px; color:brown;">Sign Up</h4>
		<form class="form-group" action="org.html" method="post">
		<div class="form-group">
		<label  style="color: aliceblue;font-size:20px" >User ID</label>
		<input  style="width: 70%" class="form-control" type="text"  name="uid" required/>
		</div>
		<div class="form-group">
		<label  style="color: aliceblue;font-size:20px">Name </label>
		<input style="width: 70%" class="form-control" type="text"  name="sname" required/>
		</div>
		<div class="form-group">
		<label  style="color: aliceblue;font-size:20px" >Password</label>
		<input style="width: 70%" class="form-control" type="password"  name="pwd" required/>
		</div>
		<div class="form-group">
		<label  style="color: aliceblue;font-size:20px" >Phone</label>
		<input style="width: 70%" class="form-control" type="text"  name="phn" required/>
		</div>
		<div class="form-group">
		<label  style="color: aliceblue;font-size:20px" >Address</label>
		<input style="width: 70%" class="form-control" type="text"  name="add" required/>
		</div>
		<input class="btn btn-block btn-warning btn-lg" type="submit" name="signin" value="Signin" style="width:40%;background-color: brown; border-color: brown"></form>
    </div>
</div>
    </div>
    
    <!-- start of footer -->
    
    <footer class="footer">    
        <div class="container-fluid ftrbg" style="background-color: orange">
        <ul class="nav navbar-nav" >
            <li>
                <a href="about.html" style="color: whitesmoke; background-color: orange">
                    About Us
                </a>
            </li>
            <li>
                <a href="org.html" style="color: whitesmoke; background-color: orange">
                    Organisation
                </a>
            </li>
            <li>
                <a href="contact.html" style="color: whitesmoke;  background-color: orange">
                    Contact
                </a>
            </li>
            <li>
                <a href="login.html" style="color: whitesmoke; background-color: orange">
                    Donate
                </a>
            </li>
            <li>
                <a href="login2.html" style="color: whitesmoke; background-color: orange">
                    Seeker
                </a>
            </li>
        </ul>
        <button class="ftrbtn" style="background-color: orange" onclick="document.documentElement.scrollTop = 0;">
        <i class="fa fa-hand-o-up" aria-hidden="true"></i>
        </button></div>
        <div class="ftrimg">
            <img src="images/ftrimg.jpg">
        </div>
    </footer>
    </body>
</html>
    
    <!-- end of footer -->