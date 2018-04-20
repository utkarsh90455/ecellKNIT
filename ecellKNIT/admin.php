<?php
// User name and password for authentication
$username = 'Admin';
$password = 'Kattappa@ecell2017';
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW'] != $password)) {
// The user name/password are incorrect so send the authentication headers
header('HTTP/1.1 401 Unauthorized');
header('WWW-Authenticate: Basic realm="E-Cell KNIT Sultanpur"');
exit('<h2>E-Cell Admin Page. </h2>Sorry, you must enter a valid user name and password to access this page.');
}




?>
<html>
<head>
<title>Stdent Registration Detail</title>
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<div class="container">
</br></br>	
<center><form action="database.php" method="post">
<select id="eventlist" name="eventlist" class="form-control"  >	
<?php
include_once 'dbConnection.php';
$query="SELECT * FROM  `access`";
if ($result = mysqli_query($con, $query)) {
while ($row = mysqli_fetch_assoc($result)){

echo "<option value='".$row['id']."'>".strtoupper($row['name'])."</option>";
}
}
?>
</select>
</br>
<input type="submit" class="btn btn-info"/>
</form></center>
<div>
</body>
</html>
