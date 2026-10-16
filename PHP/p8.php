<!DOCTYPE html>
<html>
<head>
<title>Constructor and Destructor</title>
</head>
<body>
<h2>Student Details</h2>
<form method="post">
Enter Student Name:
<input type="text" name="name" requried>
<br><br>
Enter Student Age:
<input type="number" name="age" requried>
<br><br>
Enter Course:
<input type="text" name="course" requried>
<br><br>
<input type="submit" name="course" requried>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
class Student
{
function __construct($name,$age,$course)
{
echo "<h3>Constructor is called</h3>";
echo "Student Name:".$name ."<br>";
echo "Student Age:".$age ."<br>";
echo "Student Course:".$course ."<br><br>";
}
function __destuct()
{
echo"<h3>Destructor is called</h3>";
echo"Student object is destroyed.";
}
}
if(isset($_POST['submit']))
{
$name = $_POST['name'];
$age = $_POST['age'];
$course = $_POST['course'];
$student = new Student($name, $age, $course);
}
?>
</body>
</html>