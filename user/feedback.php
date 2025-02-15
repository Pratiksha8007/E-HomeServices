<?php
include("header.php");
?>
<h1 align=center>Feedback form</h1>
<div class="col-sm-6 col-sm-offset-3">
<div class="row">
<form id=frmreg method="POST" name="myForm">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input ng-model="name" id="name" type="text" class="form-control" name="name" placeholder="Name" pattern="\D+" required>
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-print"></i></span>
<select input ng-model="gender" id="gender" class="form-control" name="gender" placeholder="Gender">
<option value="Choose Gender">Gender</option><option>Male</option>
          <option>Female</option>
        </select> 
</div>
<br>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input ng-model="emailid" id="emailid" type="text" class="form-control" name="email" placeholder="Email" required>
</div>
<br>
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
<input ng-model="email" id="date" type="date" class="form-control" name="date" placeholder="Date" required>
</div>
<br>

 <div style="padding-bottom: 18px;">1.Does this website fulfill your needs?<br/>
<select id="que_1" name="que_1" style="max-width : 500px;" class="form-control"><option>Yes</option>
<option>No</option>
</select>
</div>
<div style="padding-bottom: 18px;">2.How is the presentation of website?<br/>
<select id="que_2" name="que_2" style="max-width : 500px;" class="form-control"><option>Very good</option>
<option>Bad</option>
<option>Average</option>
</select>
</div>

<div style="padding-bottom: 18px;">3.Will you visit again to our website?<br/>
<select id="que_3" name="que_3" style="max-width : 500px;" class="form-control"><option>Definitely</option>
<option>Not Sure</option>
</select>
</div>
<div style="padding-bottom: 18px;">4.Did you like our service?<br/>
<select id="que_4" name="que_4" style="max-width : 500px;" class="form-control"><option>Yes </option>
<option>No</option>
</select>
</div>

<div style="padding-bottom: 18px;">5.Do you satisfy by the cost charged by us?<br/>
<select id="que_5" name="que_5" style="max-width : 500px;" class="form-control"><option>Yes</option>
<option>No</option>
<option>Fine</option>
</select>
</div>

<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-comment"></i></span>
<input ng-model="comment" id="comment" type="textarea" TEXTAREA rows="6" cols="50" class="form-control" name="comment" placeholder="Comments" required>
</div>
</TEXTAREA>
<br>
        <INPUT TYPE="submit" name="btnsub" value="Submit">
        <INPUT TYPE="reset" name="reset" value="Reset">
    </FORM>
    
  </BODY>  
</HTML>

<?php
include("footer.php");
if(isset($_POST['btnsub']))
{
extract($_POST);
include("connection.php");
$q="insert into feedback values('$name','$gender','$emailid','$date','$que_1','$que_2','$que_3','$que_4','$que_5','$comment')";
mysqli_query($cn,$q);
mysqli_close($cn);
echo"<script>alert('thank you for your feedback');window.location='index.php'</script>";
}


?>
  