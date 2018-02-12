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
<p>ความสูง:</p>
<input type="text" name='height'>
<br><br>
<p>นํ้าหนัก:</p>
<input type="text" name='weight'>
<br><br>
<input type="submit">
</form>
</center>
<center>
<p>
<?php
$heightErr ="";
$weightErr = "";
$a="";
if($_SERVER['REQUEST_METHOD']=="POST"){
echo "<br>";
if (empty($_POST["height"])) {
    $heightErr = "height is required";
    echo $heightErr;
  }
echo "<br>";
if (empty($_POST["weight"])) {
    $weightErr = "weight is required";
    echo $weightErr;
    }
else {
  $a = $_POST['weight'] / ((($_POST['height'])/100)**2);
  echo "ดัชนีมวลกายของคุณ : " .$a;
}
}?>
</p>
</div>
</center>

</body>
</html>
