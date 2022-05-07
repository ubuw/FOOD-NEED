

<html>
<body bgcolor="aliceblue">
<div>
<head><marquee direction="right" width="400px" style="font-size:19px; font-style:italic;">||Thanks For Donating Food||</marquee></p></div>
<style>

table,td,th,tr

{

border-style:solid;

border-width:2px;



font-weight:600;

}

<div>
</style>

<p style="font-size:24px;  font-weight:bold; text-decoration:underline;">Please provide food details: </p>
<form method="GET" action="add.html.php">
<table border="solid" style="margin-top:-21px;">
<tr border="solid">
<td>
<label>Food Name:</label>
<input  style="margin-left:45px;" type="text" id="food1" name="food1" ><br>
<label>Servings Available:   </label>
<input type="text" id="quantity" name="quantity" >
<br><br>
<label>Food Type:   </label><br>
<input style="margin-left:2px;" type="checkbox" id="veg" name="veg" value="Veg">
  <label for="veg"> Veg</label><br>
  <input type="checkbox" id="nonveg" name="nonveg" value="Nonveg" >
  <label for="nonveg"> Non veg</label><br>
  <br>
  <p style="margin-top:2px;">Delivery/Takeaway</p>
  <body>
   <input type="checkbox" id="delivery" name="delivery" value="Delivery">
  <label for="delivery">Delivery</label><br>
 <input type="checkbox" id="takeaway" name="takeaway" value="Takeaway">
  <label for="takeaway">Takeaway</label><br>

  <label for="appt">Select Consumable time(Hrs):</label>
  <input type="number" id="hour" name="hour" > 
 
 
  
<br>
<br>
</td>
</tr>
</table>

<input style="margin-top:10px;" type="submit" name="add" value="Add" value="Add"><br>


<form action="logout.php">
<input type="submit" style="margin-left:1190px; margin-bottom:300px; margin-top:230px;" name="logout" value="Logout" value="Logout"><br>
</form>
</div>
<div>
<p style="margin-top:-900px; margin-left:700px; margin-bottom:300px;">
<?php include 'test.html.php'; ?>
</p>

<p style="margin-bottom:100px;">
</form>

<form style="" method="GET" action="donate_final.html.php">
<input style="margin-top:-10px;" type="submit" name="submit" value="Submit" value="Submit"><br>
</form>
<form style="" method="GET" action="submission_final.html.php">
<input style="margin-top:-20px;" type="submit" name="submission" value="My submission"><br>
</form>
</p>
</body>
<p style=" font-size:20px; margin-top:20px; margin-bottom:-1px; font-weight:bold; text-decoration:underline;">Requested Food</p>
<?php  include 'requested.html.php';  ?>
</div>

</html>

<html>
<div>
<table style="margin-left:700px; margin-top:-270px;  width:-50%;" >
<th>Locate Nearest NGOs</th>
<tr rowspan="10"  height="200px;" width="100%">
<td>
<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d27987.159947502987!2d77.07982793850746!3d28.737621522075596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x390d013a47a1803d%3A0xedfb8cc477815e2f!2sDwarka%2C%20New%20Delhi%2C%20Delhi!3m2!1d28.738267699999998!2d77.0822151!4m5!1s0x390d0130601c73bb%3A0x5c058a49b9da35f1!2sBhagwan%20Parshuram%20Institute%20Of%20Technology%20Guard%20Room%2C%20Sector%2017%2C%20Rohini%2C%20Delhi%2C%20110085!3m2!1d28.7365711!2d77.1126274!5e0!3m2!1sen!2sin!4v1651330290067!5m2!1sen!2sin" width="500" height="300" style="border:0; " allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</td>
</tr>
</table>
</div>
</body>
</html>


