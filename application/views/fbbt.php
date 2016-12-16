<!DOCTYPE html>
<html>
<head>
<?php $this->load->helper('url');?>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 	 <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.css'?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>

  <style type="text/css">
  	.fbg{
  		background-color: #4867aa;
  		height: 82px;
  		}
  	.fblogo3{
  			height: 75px;
  			margin-top: 7px;	
  			}
  	.txt 	{
  			margin-left: -38px;
  			}
  	.ftxt		{
  			color: white;
			font-size: 12px;
			font-family:sans-serif;
  			}
  	.blank  {
  			margin-right:-28px;

  			}
  	.fbtxt	{ font-size: 20px;font-family: Helvetica, Arial, sans-serif;
  			font-weight: bold;
  			padding-left: 150px;
		 	 }
  	.line   {line-height: 8px;
  		padding-top : 15px;
  		padding-left: 19px;

  			}
  			.box{
  				margin-left: 80px;
  			}
  			.stxt
  			{
  				padding-bottom: 25px;
  				line-height: 20px;
  				margin-left: 10px;
  			}
  			.input-lg
  			{
  				border:solid 1px #bdc7d8;
  			}
  			.btn-success
  			{
  				border:solid px #bdc7d8;
  			}
  			.lstxt
  			{
  			color: #777;font-size: 11px; width: 316px;
  			}
	  		.btmsg
	  		{
	  		color: #666;font-size: 13px;font-weight: bold;padding-top: 15px;
	  		}
  </style>

</head>
<body>

<div class="container-fluid">
<div class="row fbg ">

	 <div class="col-md-2 col-md-offset-1 col-xs-offset-2  col-xs-7 col-sm-offset-2 col-sm-6">
	 <img class="fblogo3 img-responsive" src="<?php echo base_url().'images/fblogo3.png'?>">
 	</div> <!--logo-->


 	<div class="col-md-1 col-md-offset-3 blank"></div>
 	<!-- blank div is margin lft -25-->
 		
	<form action="<?php echo base_url().'index.php/welcome/authUser'?>" method="POST">
 	<div class=" col-md-5 hidden-xs hidden-sm ">
 	<div class="row line">
	<div class=" col-md-5 ">
	<label class="ftxt">Email or Phone</label><br>
	<input type="text" name="username">
	</div>

    <div class=" col-md-5 txt ">
    <label class="ftxt">Password</label><br>
    <input type="password" name="password"><br><br>
    <label class="ftxt">forgotten account</label>
    </div>

    <div class=" col-md-3 txt "><br>
    <button type="submit" class="btn btn-primary">login</button>
    </div>
    </div>
    </div></form>

</div><!-- close row-->
</div><!-- close container-->




<div class="container-fluid">
<div class="row" style="background:linear-gradient(white, #D3D8E8)">



 <div class="col-md-6 hidden-xs hidden-sm fbtxt"><br><br><!-- md 2nd page-->
 	
 			<span > Facebook helps you connect and share with the<br> people in your life.</span><br><br>
			<img id="fbi" src="<?php echo base_url().'images\fb2nd.png'?>">
 </div>

 <div class="col-md-5 col-md-offset- hidden-xs hidden-sm"><br><br>
     
     	<div class="row box">

     		<div class="stxt"><span style="font-size: 36px;font-weight: bold"> Create an account</span><br><br>
				<span class="h4">It's free and always will be.</span></div>							
 			<div class="col-md-6">
 			<input type="text" placeholder="First name" class="input-lg" style=" width: 90%">
 			</div>
			<div class="col-md-6">
			<input type="text" placeholder="Surname" class=" input-lg" style="width:90%">
			<br><br></div>
     		<div class="col-md-12" style="line-height: 12px">
			<input type="text" placeholder="Mobile nbr or email"
			 class="box2 input-lg" style="width: 95%">
			 <label id="email_err"></label>
			<br><br>
			</div>

			<div class="col-md-12" style="line-height: 12px">
			<input type="text" placeholder=" Re-enter mobile or email" 
			class="box2 input-lg" style="width: 95%">
			<label id="email2_err"></label>
			<br><br></div>
			
			<div class="col-md-12">
			<input type="password" placeholder="New password" 
			class="box2 input-lg"  style="width: 95%"><label id="pswd_err"></label>
			</div>
		
		<div class="col-md-12"><br><br><span class="h4">Birthday</span></div>
		<div class="col-md-12">
			<select class="col-md-2 input-sm">
			<option selected>day</option>
			<option>1</option>
			<option>2</option>
			<option>3</option>
		</select>
		<select class=" col-md-2 input-sm" style="width:18%">
			<option selected="">month</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>
		<select class="col-md-2 input-sm">
			<option selected="">year</option>
			<option>2001</option>
			<option>2002</option>
			<option>2003</option>
		</select>
		<div class="col-md-5 ftxt"><a href=""> why do i need to provide my date of birth</a><br><br></div>
		<div class="col-md-7">
		<h4><input type="radio" name="a" value="x"> <strong class="h4">Female</strong>
		<input type="radio" name="a" value="y" ><strong class="h4">Male</strong></h4>
		<div class="lstxt">By clicking Create an account, you agree to our Terms and that you have read our Data Policy, including our Cookie Use.</div><br>
		</div>

		<button type="button" class="btn-success btn-lg"><strong>Create an accound</strong></button><br><br>
		</div>
		<div class="btmsg">
		Create a Page for a celebrity, band or business.</div>

		</div><br><br>

	</div>
</div>
		
</div><!--close row-->
<div class="row">
	<div class="col-xs-12 col-sm-12 hidden-md hidden-lg"> 
		<div class="row">
			<form role="form" method="post" action="">

				<div class="col-xs-offset-2 col-xs-8  col-sm-6 col-sm-offset-3"><br>
					<label>Email or Phone</label><br>
					<input type="text" name="ename" class="form-control input-lg">
				</div>

				<div class="col-xs-offset-2  col-xs-8 col-sm-6 col-sm-offset-3">
					<label>Password</label><br>
					<input type="password" name="ename" class="form-control input-lg">

				</div>

				<div class="col-xs-offset-2 col-xs-8  col-sm-6 col-sm-offset-3"><br>
					<p>
					<button type="submit" class="btn btn-primary btn-lg" style="width: 100%">login</button>
				</div>
				<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3" ><br>
				<button type="submit" class="btn btn-success btn-lg" style="width: 100%">Create New Account</button>
				<br><br><label style="float: left"><a href="#">forgotten account?</a> help</label>
				</div>
			</form>
		</div>
	</div>
</div>
</div><!--close 2 container-->

</body>
</html>