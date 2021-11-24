<?
$con = mysqli_connect('localhost', 'root', '',’grab and gear up!’);
The “db_contact” is our database name that we created before.
After connection database you need to take post variable from the form. See the below code
$UserID= $_POST['UserID'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
//inserting records
INSERT INTO `loginpage` (`UserID`, `Username`, `Password`) VALUES (NULL, 'Snigdha', '1234');
//connecting to database
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}

?>