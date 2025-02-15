<?php
include("header.php");
?>

<h1 align=center>View Booking</h1>
 <table class="table">
    <thead>
      <tr>
        <th>bookingno</th>
        <th>name </th>
        <th>address</th>
        <th>contactno</th>
       <th>emailid</th>
       <th>date</th>
       <th>service</th>
      <th>price</th>
<th>workdiscription</th>  
      </tr>
    </thead>
    <tbody>
<?php
include("../connection.php");

$rs=mysqli_query($cn,"select * from booking ");
while($a=mysqli_fetch_array($rs))
{
 extract($a);

echo "<tr><td>$bookingno</td><td>$name</td><td>$address</td><td>

$contactno</td><td>$emailid</td><td>$date</td><td>$service</td><td>$price</td><td>$workdiscription</td></tr>";
}
?>
    </tbody>
  </table>
<?php
include("footer.php");
?>
