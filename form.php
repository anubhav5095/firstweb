<?php                   //database creation
session_start();
include 'xyzdb.php';
include 'formpost.php';
?>
<!doctype HTML>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Bangers|Berkshire+Swash" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <header>Internshala</header>
  <title>Demo</title>
</head>
<body>
  <h4><marquee style="width:100%" height="100" direction="right" bgcolor="darkred"><img src="iron.jpg" width="160"></marquee></h4>
<ul>
    <li class="header"><a href="#home">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
</ul>

  <hr></hr>

              <!leftside links>
  <nav>
  <ol>
    <li><a href="https://www.youtube.com">Youtube</a></li>
    <li><a href="https://www.yahoo.in">Yahoo</a></li>
    <li><a href="https://www.google.com">Google</a></li>
    <li><a href="https://www.facebook.com">Facebook</a></li>
    <li><a href="#">Instagram</a></li>

    <a href="https://www.fb.com"><img src="logo.png" width="40" height="40"></a>
  </ol>
</nav>
<article>
  <table style="width:50%">
  <td><form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  	<p>			<!form fields>
  Email ID  <input type="email" name="mail">
<br/></br>Username<input type="name" name="name">
</br></br>Phone <input type="number" name="phone" title="Phone" required value=""> <! ye required field k liye hta h>
</br></br>Password <input type="password" name="password" minlength=6 maxlength=12>
</br></br>Confirm Password <input type="password" name="confirmpassword" required value="">
</br></br>
<input type="submit" name="submit" ></p>
</td>
</form></table>
</article>
</fieldset>
</br><footers>Copyright &copy; codebuckets.com</footer>
</body>
</html>
