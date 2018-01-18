<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<link href="<?php echo base_url();?>assets/css/login.css" rel="stylesheet">
</head>
<body>
<div id="wb_Image2" style="position:absolute;left:332px;top:0px;width:1072px;height:678px;z-index:7;">
<img src="<?php echo base_url();?>assets/images/whitepuppy-5.jpg" id="Image2" alt=""></div>
<div id="wb_Image1" style="position:absolute;left:2px;top:0px;width:330px;height:191px;z-index:8;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_Form1" style="position:absolute;left:2px;top:191px;width:330px;height:487px;z-index:9;">
<form name="Form1" method="post" action="<?php echo base_url();?>UserController/userLogin/" id="Form1">
<label for="" id="Label2" style="position:absolute;left:0px;top:82px;width:111px;height:44px;line-height:44px;z-index:0;">Password :</label>
<label for="" id="Label3" style="position:absolute;left:57px;top:214px;width:111px;height:44px;line-height:44px;z-index:1;">New? Be member</label>
<input type="text" id="Editbox1" style="position:absolute;left:6px;top:44px;width:199px;height:28px;line-height:28px;z-index:2;" name="txtUsername" value="" spellcheck="false">
<input type="password" id="Editbox2" style="position:absolute;left:6px;top:126px;width:199px;height:28px;line-height:28px;z-index:3;" name="txtPassword" value="" spellcheck="false">
<input type="submit" id="Button1" name="" value="Login" style="position:absolute;left:66px;top:189px;width:96px;height:25px;z-index:4;">
<a href="<?php echo base_url('redirect/registerHere')?>" style="position:absolute;left:181px;top:234px;width:96px;height:25px;z-index:5;">Register Here</a>
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:111px;height:44px;line-height:44px;z-index:6;">Username :</label>
</form>
</div>
</body>
</html>