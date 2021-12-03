<?php 

    session_start();

?>
<?php
include('h.php');
?>

<html>

<title></title>
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

<div class="w3-container w3-teal">
<div class="w3-display-container w3-text-white">
    <img src="44.jpg" alt="Lights" style="width:100%">

    <div class="w3-display-middle w3-xlarge">

<div class="container" style="padding-top:100px">

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4  w3-round-xlarge" style="background-color:#BC8F8F">
      <h3 align="center" class="w3-round-xlarge" style="text-shadow:1px 1px 0 #444">
      <span class="glyphicon glyphicon-lock" style="text-shadow:1px 1px 0 #444"> </span>
      Form Login</p></h3>


      <body>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>


    <form  name="formlogin" action="login.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
        <div class="col-sm-12">
        <p class="center">
            <input type="text"  name="username" class="form-control w3-round-xlarge w3-margin-top" required placeholder="👤Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
          <p class="center">
            <input type="password" name="password" class="form-control w3-round-xlarge" required placeholder="🔑Password" />
         </div>
        </div>
	</p>
            
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class=" button2 button2 w3-teal w3-round-xlarge w3-block">
            <span class="glyphicon glyphicon-log-in"> </span>
            Login </button>
             </p>

            <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br>
            <a href="register.php">Register</a>
            <br> admin 
                username : 111
                password : 111
                <br> member
                username : m01
                password : m01
          </div>
        </div>  

    </form>
    
</body>
</html>

<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>