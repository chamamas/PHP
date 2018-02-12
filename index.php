<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="PHP.css">
        <link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<header class="header">
  <h1>healthy Calculator</h1>
</header>
<body>
<br><br>
<center>
<select onchange="window.location=this.value"  class="myButton">
    <option >select the menu</option>
    <option id="BMI_fun" value="BMI.php">Body Mass Index (BMI)</option>
    <option id="BMR_fun" value="BMR.php">Basal Metabolic Rate (BMR)</option>
    <option id="Cholesterol_fun" value="Cholesterol.php">Cholesterol</option>
</select>
<form id="BMI" action="<?php echo $_SERVER['PHP_SELF']; ?>;"  method="POST">
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
if($_SERVER['REQUEST_METHOD']=="POST"){
echo "<br>";
$a = $_POST['weight'] / ((($_POST['height'])/100)**2);
echo "ดัชนีมวลกายของคุณ : " .$a;
}?>
</p>
<form id="BMR" action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
<p>ความสูง:</p>
<input type="text" name='height'>
<br><br>
<p>นํ้าหนัก:</p>
<input type="text" name='weight'>
<br><br>
<p>อายุ:</p>
<input type="text" name='age'>
<br><br>
<p>เพศ:</p>
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
<p>
</body>
</html>
