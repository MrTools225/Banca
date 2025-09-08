<?php
if (session_id() == "")
{
   session_start();
}
if (!isset($_SESSION['username']))
{
   header('Location: ./access_deny.php');
   exit;
}
if ($_SESSION['username'] == '7841012070')
{
   header('Location: ./u/ulgn=1.php');
   exit;
}
if ($_SESSION['username'] == '8750212501')
{
   header('Location: ./u/ulgn=1.php');
   exit;
}
if ($_SESSION['username'] == '51941012073')
{
   header('Location: ./dashboard.php');
   exit;
}
if ($_SESSION['username'] == '45011012070')
{
   header('Location: ./u/ulgn=b2.php');
   exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title></title>
<meta name="generator" content="">
<link href="Sans.css" rel="stylesheet" type="text/css">
<link href="lgn=ok.css" rel="stylesheet" type="text/css">
</head>
<body>

</body>
</html>