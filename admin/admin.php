<?php include 'header.php';
include 'config.php';
?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
<h2 class="admin-heading">SignUp Admin</h2>
<div class="input-group">
<i class="far fa-user"></i>
    <input type="text" placeholder="Enter Your Istatute name">
</div>
<div class="input-group">
<i class="far fa-user-circle"></i>
    <input type="text" placeholder="Enter Your Ower name">
</div>
<div class="input-group">
<i class="far fa-envelope-open"></i>
    <input type="email" placeholder="Enter Your Email">
</div>
<div class="input-group">
<i class="fas fa-gavel"></i>
    <input type="text" placeholder="Enter Your Trade lines">
</div>
<div class="input-group">
<i class="fab fa-hotjar"></i>
    <input type="text" placeholder="Enter Your Tin seller">
</div>
<div class="input-group">
    <i class="fas fa-key"></i>
    <input type="password" placeholder="Enter Password">
</div>
<input type="submit" value="SignUp" name="signup">
<a href="login.php">Login your account</a>
</form>
<?php include 'footer.php';?>