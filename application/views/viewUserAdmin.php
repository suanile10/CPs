<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'logoutform')
{
   if (session_id() == "")
   {
      session_start();
   }
   unset($_SESSION['username']);
  // unset($_SESSION['fullname']);
   header('Location: login');
   exit;
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<link href="<?php echo base_url();?>assets/css/viewUserAdmin.css" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:absolute;text-align:left;left:245px;top:0px;width:1130px;height:197px;z-index:4;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:0;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:0px;top:0px;width:246px;height:197px;z-index:5;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:579px;top:143px;width:744px;height:70px;z-index:6;">
<ul>
<li class="firstmain"><a href="#" target="_self">Home</a>
</li>
<li><a href="#" target="_self">Services</a>
</li>
<li><a href="#" target="_self">Log&nbsp;Out</a>
</li>
</ul>
</div>
<picture id="wb_Picture1" style="position:absolute;left:0px;top:197px;width:1375px;height:649px;z-index:7">
<img src="<?php echo base_url();?>assets/images/grup1.jpg" id="Picture1" alt="" srcset="">
</picture>
<label for="" id="Label1" style="position:absolute;left:593px;top:797px;width:359px;height:24px;line-height:24px;z-index:8;">User Details</label>
<table  border='1' style="position:absolute;left:0px;top:865px;width:1376px;height:92px;z-index:9;" id="Table1">
<tr>
<td  >First Name</td>
<td  >Last Name</td>
<td  >Username</td>
<td  >Email</span></td>
<td  >Password</span></td>
<td  >Contact Number</span></td>
<td  >Address</span></td>
<td  >Action</td>
</tr>
<?php
if( !empty($details) ) {
    // foreach($results as $row) {
    foreach ($details as $row)
    {
      ?>
		<tr>
			<td  ><?= $row->first_name?></td>
			<td  ><?= $row->last_name?></td>
			<td  ><?= $row->username?></td>
			<td  ><?= $row->email?></td>
			<td  ><?= $row->password?></td>
			<td  ><?= $row->contact_number?></td>
			<td  ><?= $row->address?></td>
			<td> 
			 	<a href="<?php echo base_url();?>Vehicle_ctrl/getUserDetail?uid=<?php echo  $row->user_id;?>"><h3>Update </h3></a>
			</td> 

		</tr>
 <?php
  }
}
?>
</table>
</body>
</html>