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
<table style="position:absolute;left:0px;top:865px;width:1376px;height:92px;z-index:9;" id="Table1">
<tr>
<td class="cell1">First Name</td>
<td class="cell1">Last Name</td>
<td class="cell1">Username</td>
<td class="cell1">Email</span></td>
<td class="cell1">Password</span></td>
<td class="cell1">Contact Number</span></td>
<td class="cell1">Address</span></td>
<td class="cell1">Action</td>
</tr>

<?php
  if($profile->num_rows()>0)
  {
    foreach ($records->result() as $udata) 
    { ?>

		<tr>
			<td class="cell1"><?= $udata->first_name?></td>
			<td class="cell1"><?= $udata->last_name?></td>
			<td class="cell1"><?= $udata->username?></td>
			<td class="cell1"><?= $udata->password?></td>
			<td class="cell1"><?= $udata->contact_number?></td>
			<td class="cell1"><?= $udata->address?></td>
			<td>
				<a href="<?php echo base_url();?>Vehicle_ctrl/getUserDetail?uid=<?php echo  $udata->user_id;?>"><h3>Update </h3></a>
			</td>

		</tr>
	

	<?php } } ?>

</table>
</body>
</html>