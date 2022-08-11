<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title; ?></title>
</head>
<body>

<h1>Employee - CodeIgniter 3 HMVC</h1>
<a href="<?=base_url('/Attendance')?>">Go to Attendance</a>
<br><br>
<a href="<?=base_url('Employee/dbFun')?>">Go to db Function</a>

</body>
</html>