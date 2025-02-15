<?php
session_start();
include("header.php");
$am=0;


if(isset($_GET["amount"]))
{
$am=$_GET["amount"];

}
include("../connection.php");

?>

<h1 align=center>Payment...</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
<div class="row">
  <div class="col-md-4">
<div class="thumbnail">
<img src="images\F.png" class="img-rounded" width=80% height=80px>
        <div class="caption">
         <b><p>Pay...</p></b>
        </div>
     </div>
    </div>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input ng-model="email" id="emailid" type="email" class="form-control" name="emailid" placeholder="Email" required>
</div>
<br>
 

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="amount" id="amount" type="text" class="form-control" name="amount" placeholder="Amount" value="<?php

echo $am; ?>" required readonly>

  </div>
<br>

 

  
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Submit</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>




</div>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{

$emailid=$_SESSION['emailid'];


$am=$_POST['amount'];


include("../connection.php");
$rs=mysqli_query($cn,$am);
$bn=0;
if($a=mysqli_fetch_array($rs))
$bn=$a[0];

$q="insert into payment(emailid,amount) values('$emailid',$am)";
mysqli_query($cn,$q);


mysqli_close($cn);
echo"<script>alert('Thank You for ordering');window.location='index.php'</script>";
}

?>