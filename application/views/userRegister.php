<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>User Register Page</title>
<link href="<?php echo base_url();?>assets/css/userRegister.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/index.css" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:absolute;text-align:left;left:246px;top:0px;width:1130px;height:197px;z-index:20;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:0;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:21;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:481px;top:155px;width:744px;height:70px;z-index:22;">
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
</ul>
</div>
<div id="wb_Form1" style="position:absolute;left:0px;top:197px;width:441px;height:490px;z-index:23;">
<form name="Form1" method="post" action="<?php echo base_url();?>UserController/userRegister" id="Form1">
<label  style="position:absolute;left:0px;top:0px;width:84px;height:33px;line-height:33px;z-index:1;">First Name : </label>
<label for="" id="Label2" style="position:absolute;left:0px;top:41px;width:76px;height:33px;line-height:33px;z-index:2;">Last Name : </label>
<label for="" id="Label3" style="position:absolute;left:0px;top:82px;width:76px;height:33px;line-height:33px;z-index:3;">Username : </label>
<label for="" id="Label7" style="position:absolute;left:0px;top:113px;width:76px;height:33px;line-height:33px;z-index:4;">Email :</label>
<label for="" id="Label5" style="position:absolute;left:0px;top:154px;width:76px;height:33px;line-height:33px;z-index:5;">Password :</label>
<label for="" id="Label4" style="position:absolute;left:0px;top:195px;width:124px;height:33px;line-height:33px;z-index:7;">Confirm Password :</label>
<label for="" id="Label6" style="position:absolute;left:0px;top:236px;width:150px;height:33px;line-height:33px;z-index:6;">Contact Number :</label>
<label for="" id="Label8" style="position:absolute;left:0px;top:277px;width:124px;height:33px;line-height:33px;z-index:8;">Address :</label>
<input type="text" style="position:absolute;left:141px;top:7px;width:188px;height:16px;line-height:16px;z-index:9;" name="txtFname"  spellcheck="false" required="required">
<input type="text"  style="position:absolute;left:140px;top:48px;width:188px;height:16px;line-height:16px;z-index:10;" name="txtLname"  spellcheck="false" required="required">
<input type="text"  style="position:absolute;left:141px;top:89px;width:188px;height:16px;line-height:16px;z-index:11;" name="txtUsername"  spellcheck="false" required="required">
<input type="email"  style="position:absolute;left:140px;top:120px;width:188px;height:16px;line-height:16px;z-index:12;" name="txtEmail"  spellcheck="false" required="required">
<input type="password" style="position:absolute;left:140px;top:169px;width:188px;height:16px;line-height:16px;z-index:16;" name="txtPassword"  spellcheck="false" required="required">
<input type="password"  style="position:absolute;left:140px;top:202px;width:188px;height:16px;line-height:16px;z-index:13;" name="txtConPwd"  spellcheck="false" required="required">
<input type="text"  style="position:absolute;left:140px;top:236px;width:188px;height:16px;line-height:16px;z-index:15;" name="txtCNum"  spellcheck="false" required="required">
<input type="text"  style="position:absolute;left:140px;top:279px;width:188px;height:16px;line-height:16px;z-index:14;" name="txtAddress"  spellcheck="false" required="required">
<input type="submit" id="Button1" name="btnOk" value="Ok" style="position:absolute;left:31px;top:345px;width:96px;height:25px;z-index:17;">
<a href="<?php echo base_url('redirect/homepage')?>" style="position:absolute;left:191px;top:345px;width:96px;height:25px;z-index:18;">Cancel</a>
<input type="hidden" name="user_type_id" value="2">
</form>
</div>
<div id="wb_Image2" style="position:absolute;left:441px;top:197px;width:931px;height:490px;z-index:24;">
<img src="<?php echo base_url();?>assets/images/whitepuppy-5.jpg" id="Image2" alt=""></div>
</body>
</html>