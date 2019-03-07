<?

include 'connectionStrs.php';

$table = 'ratings';

// Create connection
$conn = mysqli_connect('localhost', 'owenyhae_rmr', 'passwordtest', 'owenyhae_ratemyrental');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$landlord = $_POST['landlord'];
$company = $_POST['company'];


if (isset($_POST['communication'])) {
$rCommunication = $_POST['communication'];
} else {
//  echo 'nomatch';
}
if (isset($_POST['maintenance'])) {
$rMaintenance = $_POST['maintenance'];
} else {
//  echo 'nomatch';
}
if (isset($_POST['transparency'])) {
$rTransparency = $_POST['transparency'];
} else {
  //echo 'nomatch';
}
if (isset($_POST['flexibility'])) {
$rFlexibility = $_POST['flexibility'];
} else {
//  echo 'nomatch';
}
if (isset($_POST['trust'])) {
$rTrust = $_POST['trust'];
} else {
//  echo 'nomatch';
}

$landlord = mysqli_real_escape_string($conn, $landlord);
$company = mysqli_real_escape_string($conn, $company);
$rCommunication = mysqli_real_escape_string($conn, $rCommunication);
$rMaintenance = mysqli_real_escape_string($conn, $rMaintenance);
$rTransparency = mysqli_real_escape_string($conn, $rTransparency);
$rFlexibility = mysqli_real_escape_string($conn, $rFlexibility);
$rTrust = mysqli_real_escape_string($conn, $rTrust);

//Add user login details to the users db table.
$sql = "INSERT INTO $table (landlord, company, communication, maintenance, transparency, flexibility, trust) VALUES ('$landlord', '$company', '$rCommunication', '$rMaintenance', '$rTransparency', '$rFlexibility', '$rTrust')";
//Finish query and verify user created in db
if (mysqli_query($conn, $sql)) {

  echo ("<script>window.location.replace ('https://www.ratemyrental.cc/ratingComplete.php');</script>");

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
