<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Service Page</title>
<link href="<?php echo base_url();?>assets/css/updateService.css" rel="stylesheet">
</head>
<body>
<div id="wb_Form1" style="position:absolute;left:0px;top:197px;width:441px;height:490px;z-index:10;">
<form name="Form1" method="post" action="<?php echo base_url();?>ServiceController/updateService/" id="Form1" style="position:absolute;left:0px;top:197px;width:441px;height:490px;z-index:10;>
	<?php
		if( !empty($details) ) {
    // foreach($results as $row) {
    foreach ($details as $udata)
    {
      ?>


<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:150px;height:33px;line-height:33px;z-index:0;">Enter Amount :</label>
<input type="hidden" name="service_id" value="<?php echo $udata->service_id;?>">
<input type="text" id="Editbox1" style="position:absolute;left:141px;top:7px;width:188px;height:16px;line-height:16px;z-index:3;" name="txtCost" value="<?php echo $udata->service_cost;?>" spellcheck="false">
<input type="submit" id="Button1" name="btnOk" value="Ok" style="position:absolute;left:125px;top:98px;width:96px;height:25px;z-index:6;">
 <a href="<?php echo base_url('redirect/adminDashboard')?>"  style="position:absolute;left:125px;top:186px;width:96px;height:25px;z-index:7;"> Cancel </a>
 <?php }  }?> 
</form>
</div>
<div id="Layer1" style="position:absolute;text-align:left;left:246px;top:0px;width:1130px;height:197px;z-index:11;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:8;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:12;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:481px;top:155px;width:744px;height:70px;z-index:13;">
<ul>
<li class="firstmain"><a href="<?php echo base_url();?>redirect/adminDashboard" target="_self">Home</a>
</li>
<li><a href="<?php echo base_url();?>ServiceController/adminService" target="_self">Services</a>
</li>
<li><a href="<?php echo base_url();?>UserController/logout" target="_self">Log Out</a>
</li>
</ul>
</div>
<div id="wb_Image2" style="position:absolute;left:441px;top:197px;width:931px;height:490px;z-index:14;">
<img src="<?php echo base_url();?>assets/images/whitepuppy-5.jpg" id="Image2" alt=""></div>
</body>
</html>