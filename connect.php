<?php 

 error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

 $conn = mysqli_connect($server, $username, $password, $dbname);


if(!$conn)
{
	echo "not connected";
}

$FullName = $_POST['FullName'];
$AadharCardNumber = $_POST['AadharCardNumber'];
$LicenseNo = $_POST['LicenseNo'];
$VehicleNo= $_POST['VehicleNo'];
$Address = $_POST['Address'];
$TokenNo = $_POST['TokenNo'];
$ChasisNo = $_POST['ChasisNo'];
$DOB = $_POST['DOB'];

$sql = "INSERT INTO 'details'('FullName', 'AadharCardNumber', 'LicenseNo', 'VehicleNo', 'Address', 'TokenNo', 'ChasisNo', 'DOB'  ) VALUES
('$FullName', '$AadharCardNumber', '$LicenseNo', '$VehicleNo', '$Address' , '$TokenNo', '$ChasisNo', '$DOB')";

$result = mysqli_query($con , $sql);

if($result)
{
	echo "data submitted";
}

else{
	echo "query failed...";
}

?>