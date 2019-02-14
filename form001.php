<?php
session_start(); // Session starts here.
?><!DOCTYPE HTML>
<html>
 <head>
 <title>My Friends & Teachers Data</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>My Friends  & Teachers Detail</h2>
 <span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="form002.php" method="post">
 <label>Full Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Enter Your Name" required>
 <label>Email :<span>*</span></label>
 <input name="email" type="email" placeholder="Ex-example@gmail.com" required>
 <label>Contact :<span>*</span></label>
 <input name="contact" type="text" placeholder="10-digit number" required>
 <label>Password :<span>*</span></label>
 <input name="password" type="Password" placeholder="*****" />
 <label>Re-enter Password :<span>*</span></label>
 <input name="confirm" type="password" placeholder="*****" >
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>
