<?php
$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "task";
$conn = mysqli_connect( $dbServerName, $dbUsername, $dbPassword, $dbName );
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title>submission status</title>
<link rel = "stylesheet" href = "css/style.css">
</head>
<body>
<div>
<h3 style="width:250px">your data status:</h3>
<?php
$m1 = $_POST["m1"];
$m2 = $_POST["m2"];
$m3 = $_POST["m3"];
$m4 = $_POST["m4"];
$m5 = $_POST["m5"];
$m6 = $_POST["m6"];

if ( in_array( "Save", $_POST ) ) {
    $status = 0;
} else if ( in_array( "Play", $_POST ) ) {
    $status = 1;
}
$query = "insert into task(m1,m2,m3,m4,m5,m6,status)values({$m1},{$m2},{$m3},{$m4},{$m5},{$m6},{$status})";
$result = mysqli_query( $conn, $query );
if ( $result ) {
    echo "Data added sucessfully";
} else {
    die( "Data could not added to the database".mysqli_connect_error() );
}
?>
</div>
</body>
</html>

<?php
mysqli_close( $conn );
?>

