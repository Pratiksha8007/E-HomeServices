<?php
include("header.php");
$fl="plumber";
if(isset($_GET["service"]))
$fl=$_GET["service"];
?>
<img src="images\desktopbanner.png" width=100%>
<h1 align=center>Experience <?php echo ucfirst($fl); ?> flavour</h1>
<div class="row">

<?php
include("connection.php");
$rs=mysqli_query($cn,"select * from cake where cakeflavour='$fl'");
$i=0;
while($a=mysqli_fetch_array($rs))
{
$im=$a["cakeimg"];
$fl=$a["cakeflavour"];
$pr=$a["price"];
echo "<div class='col-md-3'>";
echo "<div class=\"thumbnail\">";
echo "<a href=\"images/$im\" target=\"_blank\">";
echo"<img src=\"images/$im\" class=\"img-responsive\" width=100% height=80%>";
echo "<div class=\"caption\">";
echo"<b>$fl Cake</b><br>Price - $pr</div></a></div></div>";
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