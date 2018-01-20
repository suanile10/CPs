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
<title>Services Page</title>
<link href="<?php echo base_url();?>assets/css/registerService.css" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:absolute;text-align:left;left:243px;top:0px;width:1130px;height:197px;z-index:14;">
<div id="wb_Text1" style="position:absolute;left:394px;top:69px;width:302px;height:74px;z-index:0;">
<h1>We Care We Love<br></h1></div>
</div>
<div id="wb_Image1" style="position:absolute;left:1px;top:0px;width:246px;height:197px;z-index:15;">
<img src="<?php echo base_url();?>assets/images/LOGO.jpg.png" id="Image1" alt=""></div>
<div id="wb_CssMenu1" style="position:absolute;left:480px;top:160px;width:744px;height:70px;z-index:16;">
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
<li><a href="#" target="_self">Log&nbsp;Out</a>
</li>
</ul>
</div>
<div id="wb_Image2" style="position:absolute;left:1px;top:197px;width:1372px;height:544px;z-index:17;">
<img src="<?php echo base_url();?>assets/images/grup1.jpg" id="Image2" alt=""></div>
<div id="wb_Image3" style="position:absolute;left:1583px;top:432px;width:0px;height:0px;z-index:18;">
<img src="" id="Image3" alt=""></div>
<!-- <label for="" id="Label1" style="position:absolute;left:573px;top:687px;width:281px;height:65px;line-height:65px;z-index:19;">Our Services</label>
 --><div id="Layer2" style="position:absolute;text-align:left;left:109px;top:1016px;width:28px;height:20px;z-index:20;">
</div>
<table border="1" style="position:absolute;text-align:left;left:660px;top:751px;">
<tr>
	<th><h1>S.N.</h1></th>
    <th><h1>Services</h1></th>
    <th><h1>Cost</h1></th>
</tr>

  <?php
    foreach ($records as $sdata)
    {
      ?>

	<tr>
		
		<td><h3><?= $sdata->service_id?></h3></td>
		<td><h3><?= $sdata->service_name?></h3></td>
		<td><h3><?= $sdata->service_cost?></h3></td>
	</tr>
  <?php
  }
?>


</table>
<div>
<form   action="<?PHP echo base_url();?>ServiceController/selectService"  id="Form1" method="post" style="position:absolute;text-align:left;left:1px;top:751px;">

<input type="hidden" name="username" value="<?php echo $uname;?>">
<label for="" id="Label1" style="position:absolute;left:0px;top:0px;width:260px;height:61px;line-height:61px;z-index:0;">Choose Services</label>
<select name="cmbServices" id="Combobox1" style="position: absolute;left: 335px;top: 0px;width: 310px; height: 69px;" >
 <?php
 foreach ($records as $sdata ) {

 ?>
}
	<option style="font-size:25px; "><?php echo $sdata->service_id?></option>

<?php
}
?>
</select>
<input type="submit" id="Button1"  value="Choose" style="position:absolute;left:276px;top:125px;width:219px;height:61px;z-index:2;">

</form>
</div>
</body>
</html>