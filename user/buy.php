buy


<?php
session_start();
include("header.php");
$cs=0;
$price=0;
$sr="";

$im="";
$unm=$_SESSION["emailid"];
if(isset($_GET["service"]))
{
$id=$_GET["service"];
$price=$_GET["price"];
}
<div class="row">
include("../connection.php");
$rs=mysqli_query($cn,"select * from services where service='$sr'");
if($a=mysqli_fetch_array($rs))
{
  $sr=$a["servicename"];
$fi=$a["spimg"];

} 
?>

<h1 align=center>Order Details</h1>
<div class="row">
<form id=frmreg method="post" name="myForm">
  <div class="input-group">
<?php
echo "<center><img src=\"../images/$im\" width=200 height=200></center></div>";
?>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="service" type="text" class="form-control" name="service" placeholder="servive" value="<?php echo $cs; ?>" required readonly>

  </div>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="price" type="text" class="form-control" name="price" placeholder="Price" value="<?php echo $price; ?>" required readonly>

  </div>
<br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
   
  var p,w,a;
 p=document.getElementById("price").value;
 w=document.getElementById("wt").value;
a=p*w;
document.getElementById("amt").value=a;
}
</script>
  </div>

<br>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
    <input ng-model="address" id="amt" type="text" class="form-control" name="amt" placeholder="0" required readonly>

  </div>

<br>
 
<br>
        <button type="submit" class="btn btn-primary" id="btnsub" name=btnsub>Add to cart</button>
        <button type="reset" class="btn btn-danger" id="btnres">Reset</button>

</form>




</div>


<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
$unm=$_SESSION['username'];

$wt=$_POST['wt'];
$am=$_POST['amt'];

include("../connection.php");
$q="insert into buy(emailid,price,price,amount) values('$unm',$id,$pr,$wt,$am)";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>window.location='services.php'</script>";
}

?>