<?php
include("header.php");
?>
<h1 align=center>Enquiry Here</h1>
<div class="col-sm-6 col-sm-offset-3">
<div class="row">
<form id=frmreg method="post" name="myForm">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input ng-model="name" id="name" type="text" class="form-control" name="name" placeholder="Name" pattern="\D+" required>
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input ng-model="address" id="address" type="text" class="form-control" name="address" placeholder="Address" pattern="\D+" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input ng-model="contactno" id="contactno" type="text" class="form-control" name="contactno" placeholder="Contact No" pattern="\d{10}" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input ng-model="emailid" id="emailid" type="text" class="form-control" name="emailid" placeholder="Emailid" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
<select input ng-model="service" id="service" class="form-control" name="service" placeholder="Service"><option value="service">service </option>
	<option value="plumber">Plumber</option>
	<option value="electrician">Electrician</option>
	<option value="gardning">Gardning</option>
<option value="refridgerator repair">Refridgerator repair</option>
<option value="painter">Painter</option>
<option value="carpenter">Carpenter</option>
<option value="washing machine">Washing machine</option>
<option value="geyser repair">Geyser repair</option>
<option value="home cleaning">Home cleaning</option>
</select> 
</div>
<br>      
 <center>
 <button type="Submit" name="btnsub"class="btn btn-primary">Submit</button>
 
</center>
</form>
<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
extract($_POST);
include("connection.php");
$q="insert into enquiry(name,address,contactno,emailid,service) values('$name','$address',$contactno,'$emailid','$service')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('thank you for enquiry');window.location='index.php'</script>";
}
?>
