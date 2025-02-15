<?php
include("header.php");
?>

<h1 align=center>View Registration</h1>
 <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>gender Id</th>
        <th>emailid</th>
        <th>date</th>
       <th>que_1</th>
<th>que_2</th>
<th>que_3</th>
<th>que_4</th>
<th>que_5</th>
<th>comment</th>

      </tr>
    </thead>
    <tbody>
<?php
include("../connection.php");

$rs=mysqli_query($cn,"select * from feedback ");
while($a=mysqli_fetch_array($rs))
{
 extract($a);

echo "<tr><td>$name</td><td>$gender</td><td>$emailid</td><td>$date</td><td>$que_1</td><td>$que_2</td><td>$que_3</td><td>$que_4</td><td>$que_5</td><td>$comment</td><td>

$emailid</td></tr>";
}
?>
    </tbody>
  </table>
<?php
include("footer.php");
?>