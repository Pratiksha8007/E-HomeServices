<?php
session_start();
include("header.php");
?>
<h1 align=center>Login Here</h1>
<div class="row">
<?php

if(isset($_POST['btnsub']))
{
$emailid=$_POST['email'];
$pass=$_POST['pass'];

include("connection.php");
$q="select * from registration where emailid='$emailid'and password='$pass'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
$_SESSION['emailid']=$email;
echo"<script>alert('login successful');window.location='user/index.php'</script>";
}
else
echo"<center><b><font color=red>Incorrect emailid or password</font></b></center>";
mysqli_close($cn);
}
?>
<form id=frmreg method="post" name="myForm"><br>


  
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input ng-model="email" id="email" type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<br>
  <div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
<input ng-model="pass" id="pass" type="password" class="form-control" name="pass" placeholder="password" required>
</div>
<br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label><input type="checkbox"> Remember me</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      
<button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
 <button type="reset" class="btn btn-danger" id="btnres">Reset</button>
    </div>
  </div>
</form>
 

