<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/
 
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style.css" />
  <!-- Bootstrap Core CSS -->
  <link href="CareRott_files/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="CareRott_files/agency.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="CareRott_files/font-awesome.css" rel="stylesheet" type="text/css">
<link href="CareRott_files/css_002.css" rel="stylesheet" type="text/css">
<link href="CareRott_files/css_003.css" rel="stylesheet" type="text/css">
<link href="CareRott_files/css.css" rel="stylesheet" type="text/css">
<link href="CareRott_files/css_004.css" rel="stylesheet" type="text/css">
<link href="css/reset.css">

</head>
<body>
    <?php include 'nav.php' ?>
<div class="form">
    <p><a href="index.php">Home</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
    <h2>View Records</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">
    <thead>
    <tr><th><strong>S.No</strong></th><th><strong>Name</strong></th><th><strong>Age</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from users ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["username"]; ?></td><td align="center"><?php echo $row["age"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

</div>
</body>
</html>
