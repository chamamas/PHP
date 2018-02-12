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
<p>ความสูง/เซนติเมตร :</p>
<input type="text" name='height'>
<br><br>
<p>นํ้าหนัก/กิโลกรัม :</p>
<input type="text" name='weight'>
<br><br>
<p>อายุ/ปี :</p>
<input type="text" name='age'>
<br><br>
<p>เพศ :</p>
<p>
<input type="radio" name="gender"  value="female">Female
<input type="radio" name="gender"  value="male">Male
</p>
<br><br>
<select name="exercise" class="myButton">
    <option value="1.2">ไม่ออกกำลังกายหรือออกกำลังกายน้อยมาก</option>
    <option value="1.375">ออกกำลังกายน้อยเล่นกีฬา 1-3 วัน/สัปดาห์</option>
    <option value="1.55">ออกกำลังกายปานกลางเล่นกีฬา 3-5 วัน/สัปดาห์</option>
    <option value="1.725">ออกกำลังกายหนักเล่นกีฬา 6-7 วัน/สัปดาห์</option>
    <option value="1.9">ออกกำลังกายหนักมากเป็นนักกีฬา</option>
</select>
<br><br>
<input type="submit">
</form>
</center>
<center>
<p>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
echo "<br>";
$package = $_POST['exercise'];
if ($_POST['gender']=='male') {
  $a = 66 + (13.7*$_POST['weight'])+(5*$_POST['height'])-(6.8*$_POST['age']);
  echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิตของผู้ชาย : " .$a * $_POST["exercise"];
}
if ($_POST['gender']=='female') {
  $a = 665 + (9.6*$_POST['weight'])+(1.8*$_POST['height'])-(4.7*$_POST['age']);
  echo "BMR (Basal Metabolic Rate) พลังงานที่จำเป็นพื้นฐานในการมีชีวิตของผู้หญิง : " .$a * $_POST["exercise"];
}
}?>
</p>
</div>
</center>
<body>
<html>
