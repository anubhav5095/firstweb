<?php
if(isset($_POST["submit"]))             //isset btata h kaun sa buttn s kya relate htah
{
  $email=$_SESSION['user']=$_POST['mail'];                     //session variable
  $password=$SESSION['user']=$_POST['password'];
  $name=$_POST['name'];
  $mail=$_POST['mail'];
  $phn=$_POST['phone'];
  $psd=$_POST['password'];
  $cpsd=$_POST['confirmpassword'];
  $q= mysql_query("SELECT mail from xyz where mail='$mail'");                       //duplicate primary key entry btata h
  $r=mysql_num_rows($q);
  if($r==0)
  {
  if($psd==$cpsd)
  {
    $query=mysql_query("INSERT INTO xyz(mail,name,phone,password) values('$mail','$name','$phn','$psd')") or die(mysql_error());
    if($query)
    {
      echo"success";
    }
    else echo "fail";
  }
  else echo"password not matched";
  }
  else
  {
    echo "Already registered";
  }
}
?>
