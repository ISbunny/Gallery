<?php include_once("includes/login_header.php"); ?>
<?php

if($session->is_signed_in()){
    redirect("index.php");
}
//if($session){
//    include_once("includes/login_nav.php");
//}
if(isset($_POST['submit'])){
    $commentname = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    // METHOD TO CHECK USER FROM DATABASE
    
    $found_user = User::verify_user($commentname,$password);
    
    if($found_user){
        $session->login($found_user);
        redirect("index.php");
    }else{
        $the_message = "Your username and passwords are incorrect";
    }
}else{
$commentname = "";
$password = "";
$the_message = "";
}






?>

<div class="col-md-4 main">
<div class="login-form">

<h4 class="bg-danger"><?php echo $the_message; ?></h4>
	
<form id="login-id" method="post">
	<label for="username">Username</label>
    <div class="input-group mb-2">
	
   <div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
  </div>
    <input type="text" class="form-control" name="username" value="<?php echo htmlentities($commentname); ?>" placeholder="Enter Your Username" >

</div>
<label for="password">Password</label>
<div class="input-group">
	
	<div class="input-group-prepend">
    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-unlock-alt"></i></span>
  </div>
	<input type="password" class="form-control" id="passfield" name="password" value="<?php echo htmlentities($password); ?>" placeholder="Enter Your Password">
	<div class="input-group-append">
     <div class="input-group-text">
      <input type="checkbox" onclick="toggle()">
    </div>
  </div>
	
</div>


<div class="form-group">
<input type="submit" name="submit" value="Submit" class="btn btn-secondary">

</div>


</form>
<div class="back-home">
   
    <a href="../index.php">Want To Go Back To Homepage?</a>
</div>
</div>



</div>
