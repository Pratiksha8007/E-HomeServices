<?php
include("header.php");
?>
<h1 align=center>Add Service Provider</h1>
<div class="col-sm-6 col-sm-offset-3">
<div class="row">
<form id=frmreg method="POST" name="myForm" enctype="multipart/form-data">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<select input ng-model="services" id="chooseservice" class="form-control" name="chooseservice" placeholder="Choose Service"><option value="Choose service">Choose a service </option>
	<option value="plumber">Plumber</option>
	<option value="electrician">Electrician</option>
	<option value="gardening">Gardening</option>
<option value="refridgerator_repair">Refridgerator_repair</option>
<option value="painter">Painter</option>
<option value="carpenter">Carpenter</option>
<option value="washing_machine">Washing_machine</option>
<option value="geyser_repair">Geyser_repair</option>
<option value="home_cleaning">Home_cleaning</option>
</select> 
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input ng-model="name" id="name" type="text" class="form-control" name="name" placeholder="Name" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
<input ng-model="address" id="address" type="text" class="form-control" name="address" placeholder="Address" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
<input ng-model="contact" id="contact" type="text" class="form-control" name="contact" placeholder="Contact No" pattern="\d{10}" required>
</div>
<br>
 
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
<input ng-model="address" id="address" type="file" class="form-control" name="file1" placeholder="Select image"  required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input ng-model="experience" id="experience" type="text" class="form-control" name="experience" placeholder="Experience" pattern="\d+" required>
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
<input ng-model="contact" id="price" type="text" class="form-control" name="charges" placeholder="Charges" pattern="\d+" required>
</div>
<br>
 
        
 <center>
 
<INPUT TYPE="submit" name="btnsub" value="Submit">
 
</center>
</form>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
extract($_POST);
//code for image uploading
$fn=$_FILES['file1']['name'];
$s=$_FILES['file1']['size'];
$tnm=$_FILES['file1']['tmp_name'];

$ptr1=fopen($tnm,"r");
$ptr2=fopen("../images/$fn","w");
$data=fread($ptr1,$s);
fwrite($ptr2,$data);
fclose($ptr1);
fclose($ptr2);
include("connection.php");
$q="insert into addsp values('$chooseservice','$name','$address',$contact,'$fn','$experience','$charges')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('Service Provider Added Successfully');window.location='addsp.php'</script>";
}


?>