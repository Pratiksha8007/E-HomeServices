<?php
include("header.php");
$snm=$_GET["service"];
$pr=$_GET["price"];
?>
<h1 align=center>Book Service</h1>
<div class="col-sm-6 col-sm-offset-3">
<div class="row">
<form id=frmreg method="POST" name="frmreg">
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
<input ng-model="contact" id="contactno" type="number" class="form-control" name="contactno" placeholder="Contact No" pattern="\d{10}" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input ng-model="email" id="emailid" type="email" class="form-control" name="emailid" placeholder="Email" required>
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
<input ng-model="date" id="date" name="date" type="date" class="form-control"  placeholder="Date" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-wrench"></i></span>
<input ng-model="services" id="chooseservice" type="text" class="form-control" name="service" placeholder="Choose Service" value="<?php echo $snm; ?>" readonly>

</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
<input ng-model="price" id="price" type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $pr; ?>" readonly>

</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
<input ng-model="work discription" id="workdiscription" type="text" class="form-control" name="workdiscription" placeholder="Work Discription" required>
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
include("connection.php");
$q="insert into booking(name,address,contactno,emailid,date,chooseservice,price,workdiscription) values('$name','$address',$contactno,'$emailid','$date','$service',$price,'$workdiscription')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('thank you for booking');window.location='payment.php?amount=$price'</script>";
}


?>