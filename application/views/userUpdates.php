<?php

$this->load->library('session');
$uname=$_SESSION['username'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="<?php echo base_url();?>assets/css/userUpdate.css" rel="stylesheet">
</head>
<body>
<div id="wb_Form1" style="position:absolute;left:0px;top:197px;width:441px;height:490px;z-index:20;">
<form name="Form1" method="post" action="<?php echo base_url();?>UserController/updateUserProfile/" id="Form1">

	<?php
		foreach ($profile as $udata) {
		}

	?>


<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:84px;height:33px;line-height:33px;z-index:0;">First Name : </label>
<label for="" id="Label2" style="position:absolute;left:0px;top:41px;width:76px;height:33px;line-height:33px;z-index:1;">Last Name : </label>
<label for="" id="Label3" style="position:absolute;left:0px;top:82px;width:76px;height:33px;line-height:33px;z-index:2;">Username : </label>
<label for="" id="Label7" style="position:absolute;left:0px;top:113px;width:76px;height:33px;line-height:33px;z-index:3;">Email :</label>
<label for="" id="Label5" style="position:absolute;left:0px;top:154px;width:76px;height:33px;line-height:33px;z-index:4;">Password :</label>
<label for="" id="Label6" style="position:absolute;left:0px;top:236px;width:150px;height:33px;line-height:33px;z-index:5;">Address :</label>
<label for="" id="Label4" style="position:absolute;left:0px;top:195px;width:124px;height:33px;line-height:33px;z-index:6;">Contact Number :</label>

<input type="text" id="Editbox1"
style="position:absolute;left:141px;top:7px;width:188px;height:16px;line-
height:16px;z-index:8;" name="txtFname" value="<?php echo
$udata->first_name;?>" spellcheck="false"> <input type="text" id="Editbox2"
style="position:absolute;left:140px;top:48px;width:188px;height:16px;line-
height:16px;z-index:9;" name="txtLname" value="<?php echo
$udata->last_name;?>" spellcheck="false"> <input type="text" id="Editbox3"
style="position:absolute;left:141px;top:89px;width:188px;height:16px;line-
height:16px;z-index:10;" name="txtUsername" value="<?php echo
$udata->username;?>" spellcheck="false" readonly="readonly" color::#FF0000; ">
<input type="text" id="Editbox4"
style="position:absolute;left:140px;top:120px;width:188px;height:16px;line-
height:16px;z-index:11;" name="txtEmail" value="<?php echo $udata->email;?>"
spellcheck="false"> <input type="text" id="Editbox5"
style="position:absolute;left:141px;top:154px;width:188px;height:16px;line-
height:16px;z-index:12;" name="txtPassword" value="<?php echo
$udata->password;?>" spellcheck="false"> <input type="text" id="Editbox6"
style="position:absolute;left:140px;top:202px;width:188px;height:16px;line-
height:16px;z-index:13;" name="txtCNum" value="<?php echo
$udata->contact_number;?>" spellcheck="false"> <input type="text"
id="Editbox8"
style="position:absolute;left:140px;top:236px;width:188px;height:16px;line-
height:16px;z-index:14;" name="txtAddress" value="<?php echo
$udata->address;?>" spellcheck="false"> <input type="submit" id="Button1"
name="btnOk" value="Ok" style="position:absolute;left:31px;top:345px;width:96p
x;height:25px;z-index:16;"> <a href="<?php echo
base_url('redirect/userDashboard')?>" style="position:absolute;left:191px;top:
350px;width:96px;height:25px;z-index:17;"> Cancel </a>

</form>
</div>
<div id="Layer1" style="position:absolute;text-align:left;left:246px;top:0px;width:1130px;height:197px;z-index:21;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:18;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:22;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:481px;top:155px;width:744px;height:70px;z-index:23;">
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
<div id="wb_Image2" style="position:absolute;left:441px;top:197px;width:931px;height:490px;z-index:24;">
<img src="<?php echo base_url();?>assets/images/whitepuppy-5.jpg" id="Image2" alt=""></div>
</body>
</html>