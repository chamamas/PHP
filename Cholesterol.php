<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="PHP.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
</head>
<header class="header">
  <h1>Healthy Calculator</h1>
</header>
<body>
<center>
  <br><br>
  <select onchange="window.location=this.value"  class="myButton">
    <option >select the menu</option>
    <option id="BMI_fun" value="BMI.php">Body Mass Index (BMI)</option>
    <option id="BMR_fun" value="BMR.php">Basal Metabolic Rate (BMR)</option>
    <option id="Cholesterol_fun" value="Cholesterol.php">Cholesterol</option>
  </select>
<div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
  <p>ไขมันแอลดีแอล:</p>
  <input type="text" name='ldl_cholesterol'>
  <br><br>
  <p>ไขมันเอชดีแอล:</p>
  <input type="text" name='hdl_cholesterol'>
  <br><br>
  <p>ไตรกลีเซอไรด์:</p>
  <input type="text" name='triglycerides'>
  <br><br>
  <input type="submit">
</form>
</center>
<center>
<p>
<div class="textAbout">
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$grade = array("ดีมาก","ค่อนข้างสูง","สูง");
$a = $_POST['ldl_cholesterol'] + $_POST['hdl_cholesterol'] + ($_POST['triglycerides']/5);
if ($a<200) {
  echo "ผลการตรวจ : " .$grade[0];
}
else if (($a>=200) && ($a<240))  {
  echo "ผลการตรวจ : " .$grade[1];
}
else if ($a>=240)  {
  echo "ผลการตรวจ : " .$grade[2];
}
}?>
</div>
</p>
</div>
</center>
</body>
</html>
