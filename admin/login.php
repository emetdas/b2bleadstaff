<?php include 'header.php';?>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
<div class="input-group">
<i class="far fa-envelope-open"></i>
    <input type="text" placeholder="Enter Your Email">
</div>
<div class="input-group">
<i class="fas fa-key"></i>
    <input type="text" placeholder="Enter Your Password">
</div>
</form>
<?php include 'footer.php';?>