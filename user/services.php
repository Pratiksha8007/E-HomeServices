<?php
include("header.php");
$sr="Plumber";
if(isset($_GET["servicename"]))
$sr=$_GET["servicename"];
?>
<h1 align=center>Experience <?php echo ucfirst($sr); ?> services</h1>
<div class="row">
 


<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from addsp where service='$sr'");
$i=0;
while($a=mysqli_fetch_array($rs))
{
$cs=$a["service"];
$nm=$a["name"];
$ad=$a["address"];
$cn=$a["contact"];
$fi=$a["file"];
$ep=$a["experience"];
$pr=$a["price"];
echo "<div class='col-md-3'>";
echo "<div class=\"thumbnail\">";
echo "<a href=buy.php?service=$cs&price=$pr target=\"_blank\">";
echo"<img src=\"images/$fi\" class=\"img-responsive\" width=100% height=100%>";
echo "<div class=\"caption\">";
echo"service-$cs<br>Name-$nm<br>Address-$ad<br>Price - $pr<br>Experience-$ep<br>Contact-$cn<br><a class=\"btn btn-primary\" href=booking.php?service=$cs&price=$pr>Book Now</a></div></div></div>";
$i++;
if($i==3)
{
echo "</div>";
echo "<div class=\"row\">";
$i=0;
}

}
?>
</div>
<?php
include("footer.php");
?>
