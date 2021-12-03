<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: index.php");
            }
        }

    }


?>

<?php
include('h.php');
?>

<html>

<title>admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style type="text/css">
#btn{
width:100%;
}
p.three {
border-style: ridge;
}

.center {
  text-align: center;
  color: red;
}

.button {
  padding: 15px 170px;
}
.button1 {font-size: 15px;}
.button2 {
  padding: 15px 120px;
}
.button2 {font-size: 16px;}

</style>


<!DOCTYPE html>
<html lang="en">
<head>
<div class="w3-container w3-teal">
<div class="w3-display-container w3-text-white">
    <img src="44.jpg" alt="Lights" style="width:100%">

    <div class="w3-display-middle w3-xlarge">

<div class="container" style="padding-top:100px">

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4 w3-round-xlarge" style="background-color:#BC8F8F">
      <h3 align="center" class="w3-round-xlarge" style="text-shadow:1px 1px 0 #444">
      <span class="glyphicon glyphicon-lock" style="text-shadow:1px 1px 0 #444"> </span>
      Register Page</p></h3>

</head>
<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">


    <form  name="formlogin" action="login.php" method="POST" id="login" class="form-horizontal">
    <div class="form-group">
        <div class="col-sm-12">
        <p class="center">
            <input type="text"  name="username" class="form-control w3-round-xlarge w3-margin-top" required placeholder="Enter your username" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
        <p class="center">
            <input type="text"  name="password" class="form-control w3-round-xlarge w3-margin-top" required placeholder="Enter your password" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
        <p class="center">
            <input type="text"  name="firstname" class="form-control w3-round-xlarge w3-margin-top" required placeholder="Enter your firstname" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
        <p class="center">
            <input type="text"  name="lastname" class="form-control w3-round-xlarge w3-margin-top" required placeholder="Enter your lastname" />
          </div>
        </div>
	</p>
        <div class="form-group">
          <div class="col-sm-12">
          <button type="submit" name="submit" value="Submit" class=" button2 button2 w3-teal w3-round-xlarge w3-block">
          <span class="glyphicon glyphicon-log-in"> </span>
            submit </button>
             </p>
             </div>
        </div>


        <!-- <label for="username">Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" name="firstname" placeholder="Enter your firstname" required>
        <br>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" placeholder="Enter your lastname" required>
        <br>
        <input type="submit" name="submit" value="Submit"> -->
    
    </form>

    <a href="index.php">Go back to index</a>
    
</body>
</html>