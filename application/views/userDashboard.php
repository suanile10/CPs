<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
  // unset($_SESSION['user_id']);

   exit;
}
$uname=$_SESSION['username'];
//$uid=$_SESSION['uid'];


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="<?php echo base_url();?>assets/css/dashboard.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/userDashboard.css" rel="stylesheet">
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:2;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="Layer1" style="position:absolute;text-align:left;left:244px;top:0px;width:1130px;height:197px;z-index:3;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:0;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_CssMenu1" style="position:absolute;left:481px;top:157px;width:744px;height:70px;z-index:4;">
<ul>
<li class="firstmain"><a href="#" target="_self">Home</a>
</li>
<li><a href="#" target="_self">Services</a>
</li>
<li><a href="#" target="_self">Help</a>
</li>
<li><a href="#" target="_self">About&nbsp;Us</a>
</li>
<li><a href="#" target="_self">Contact&nbsp;Us</a>
</li>
<li><a href="<?php echo base_url();?>UserController/logout" target="_self">Logout</a>
</li>
</ul>
</div>
<div id="wb_Image2" style="position:absolute;left:0px;top:196px;width:1374px;height:815px;z-index:5;">
<img src="<?php echo base_url();?>assets/images/group.jpg" id="Image2" alt=""></div>
<div id="wb_Image3" style="position:absolute;left:410px;top:422px;width:0px;height:0px;z-index:6;">
<img src="" id="Image3" alt=""></div>
<label for="" id="Label1" style="position:absolute;left:583px;top:207px;width:288px;height:74px;line-height:74px;z-index:7;">Welcome</label>
<label for="" id="Label2" style="position:absolute;left:602px;top:261px;width:183px;height:62px;line-height:62px;z-index:8;"><?php echo "<b>"."$uname"."</b>";?></label>
<div id="wb_CssMenu2" style="position:absolute;left:18px;top:297px;width:336px;height:156px;z-index:9;">
<ul>
<li class="firstmain"><a href="<?php echo base_url();?>redirect/userUpdates" target="_self">Update&nbsp;Profile</a>
</li>
<li><a href="<?php echo base_url();?>redirect/registerService" target="_self">Choose&nbsp;Service</a>
</li>
<li><a href="<?php echo base_url();?>redirect/userViewServices" target="_self">View&nbsp;Service</a>
</li>
</ul>
</div>
</body>
</html>