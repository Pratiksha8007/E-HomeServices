<?php
include("header.php");
?>

<h1 align=center>View Registration</h1>
 <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>address Id</th>
        <th>contactno</th>
        <th>emailid</th>
       <th>service</th>
      </tr>
    </thead>
    <tbody>
<?php
include("../connection.php");

$rs=mysqli_query($cn,"select * from enquiry ");
while($a=mysqli_fetch_array($rs))
{
 extract($a);

echo "<tr><td>$name</td><td>$address</td><td>$contactno</td><td>

$emailid</td><td>$service</td></tr>";
}
?>
    </tbody>
  </table>
<?php
include("footer.php");
?>