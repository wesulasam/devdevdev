<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_POST['fname'],$_POST['lname'])) {
$fname=$_POST['fname'];
$lname= $_POST['lname'];

echo "Your first name is {$fname} and surname is {$lname} .";
}
<form action="index.php" method="post">
<input type="text" fname="fname" placeholder="Name"> <br/>
<input type="text" lname="lname" placeholder="lname"> <br/>
<input type="submit">
</form>
?>
</body>
</html>