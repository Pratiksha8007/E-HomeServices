<?php
include("header.php");
?>
<h1 align=center>Sign Up Here</h1>
<div class="col-sm-6 col-sm-offset-3">
<div class="row">
<form id=frmreg method="post" name="myForm">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input ng-model="name" id="nm" type="text" class="form-control" name="nm" placeholder="Name" pattern="\D+" required>
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input ng-model="address" id="address" type="text" class="form-control" name="address" placeholder="Address" pattern="\D+" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input ng-model="contact" id="contact" type="text" class="form-control" name="contact" placeholder="Contact No" pattern="\d{10}" required>
</div>
<br>
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

<button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
 <button type="reset" class="btn btn-danger" id="btnres">Reset</button>
 </form>
<?php

if(isset($_POST['btnsub']))
{
extract($_POST);
include("connection.php");
$q="insert into registration values('$nm','$address','$contact','$email','$pass')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('registration successful');window.location='login.php'</script>";
}
?>
