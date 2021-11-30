<html>
<head>
<title>Registration Form</title>
<style>
tr:nth-child(even) {background-color: #f2f2f2}
th {
 background-color: #4CAF50;
 color: white;
}
th, td {
 padding: 15px;
}
</style>
</head>
<body>
<center>
<br><br>
<?php
foreach($_POST as $key=>$value) {
if(empty($_POST[$key])) {
print($message1 = ucwords($key) . "field is required<br>");
break;
}
}
/* Password Matching Validation */
if($_POST['password'] != $_POST['confirm_password']){
print($message2 = 'Passwords should be same<br>');
}
/* Email Validation */
if(!isset($message)) {
if (!filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
print($message3 = "Invalid UserEmail<br>");
}
}
/* Validation to check if gender is selected */
if(!isset($message)) {
if(!isset($_POST["gender"])) {
print($message4 = "Gender field is required<br>");
}
}
/* Validation to check if Terms and Conditions are accepted */
if(!isset($message)) {
if(!isset($_POST["terms"])) {
print($message5 = "Accept Terms and conditions before submit<br>");
}
}
print("<table width='700'><tr><th colspan=2>Student Details</th></tr>");
print("<tr><td align='right'>User Name : </td><td>". $_POST["userName"]."</td></tr>");
print("<tr><td align='right'>USN : </td><td>". $_POST["usn"]."</td></tr>");
print("<tr><td align='right'>Course : </td><td>". $_POST["course"]."</td></tr>");
print("<tr><td align='right'>Branch : </td><td>". $_POST["branch"]."</td></tr>");
print("<tr><td align='right'>First Name : </td><td>". $_POST["firstName"]."</td></tr>");
print("<tr><td align='right'>Last Name : </td><td>". $_POST["lastName"]."</td></tr>");
print("<tr><td align='right'>Password : </td><td>". $_POST["password"]."</td></tr>");
print("<tr><td align='right'>Confirm Password : </td><td>". $_POST["confirm_password"]."</td></tr>");
print("<tr><td align='right'>Email : </td><td>". $_POST["userEmail"]."</td></tr>");
print("<tr><td align='right'>Gender : </td><td>". $_POST["gender"]."</td></tr>");
print("<tr><th colspan=2> </th></tr></table></body></html>");
?>