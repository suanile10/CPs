<?php

$this->load->library('session');
$uname=$_SESSION['username'];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Services Page</title>
<link href="<?php echo base_url();?>assets/css/viewServices.css" rel="stylesheet">
</head>
<body>
<picture id="wb_Picture1" style="position:absolute;left:0px;top:197px;width:1375px;height:649px;z-index:4">
<img src="<?php echo base_url();?>assets/images/grup1.jpg" id="Picture1" alt="" srcset="">
</picture>
<div id="Layer1" style="position:absolute;text-align:left;left:245px;top:0px;width:1130px;height:197px;z-index:5;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:0;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:6;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:579px;top:143px;width:744px;height:70px;z-index:7;">
<ul>
<li class="firstmain"><a href="<?php echo base_url();?>redirect/adminDashboard" target="_self">Home</a>
</li>
<li><a href="<?php echo base_url();?>ServiceController/adminService" target="_self">Services</a>
</li>
<li><a href="<?php echo base_url();?>UserController/logout" target="_self">Log&nbsp;Out</a>
</li>
</ul>
</div>
<label for="" id="Label1" style="position:absolute;left:617px;top:796px;width:359px;height:24px;line-height:24px;z-index:8;">Services</label>
<table style="position:absolute;left:438px;top:857px;width:464px;height:92px;z-index:9;" id="Table1" border="1">
<tr>
	<td>S.N.</td>
	<td>Services</td>
	<td>Amount</span></td>
	<td>Update</td>
</tr>
<?php
if( !empty($services) ) {
    // foreach($results as $row) {
    foreach ($services as $row)
    {
      ?>
		<tr>
			<td  ><?= $row->service_id?></td>
			<td  ><?= $row->service_name?></td>
			<td  ><?= $row->service_cost?></td>
			<td> 
			 	<a href="<?php echo base_url();?>ServiceController/getServiceDetails?sid=<?php echo  $row->service_id;?>"><h3>Update </h3></a>
			</td> 

		</tr>
 <?php
  }
}
?>
</table>
</body>
</html>