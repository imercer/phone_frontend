<?php session_start(); ?>
<h1>You are calling <?php echo $_SESSION["calling"] ?></h1>

<h3><a href="endcall.php">End Call</a></h3>
<?php $_SESSION["calling"] = "0"; ?>