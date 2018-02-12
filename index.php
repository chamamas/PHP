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
<p>
</body>
</html>
