<?php include "header.php"; ?> 
<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>SIGN UP</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
      <table cellpadding="10" cellspacing="12" align="left	">

	  

     <form action="" method="POST"> 

  <tr>
  	<td>
  <input type="text" name="fname" value="" placeholder="Enter Your Fullname" required style="padding: 10px; width: 150%"> <br>  </td>
    </tr>
	<tr>
  	<td>
  <input type="text" name="uid" value="" placeholder="Enter Your Username" required style="padding: 10px; width: 150%"> <br>  </td>
    </tr>
   
   <tr>	
 <td> <input type="password" name="pass" value="" placeholder=" Enter Your password" required style="padding: 10px; width: 150%"> <br> </td>
   </tr>

  <tr>  
 <td> <input type="email" name="email" value="" placeholder="Enter Your Email Address" required style="padding: 10px; width: 150%">  <br> </td>
</tr>

<tr>
  	<td>
  <textarea name="address" id="" cols="30" rows="10" placeholder="Input Your House Address" required style="padding: 10px; width: 150%"></textarea> <br>  </td>
    </tr>
	<tr>
  	<td>
  <input type="number" name="phone" value="" placeholder="Enter Your Phone Number" required style="padding: 10px; width: 150%"> <br>  </td>
    </tr>
    
	<td>
   <input type="checkbox" name="" id=""><a href="terms.html"> Terms and Condition</a><br>  </td>
    </tr>

      <tr>   
<td align="center"> <input type="submit" name="sb" value="Registration Now" class="btn btn-danger">  <br> </td>
   </tr>
  
   <tr>   
<td align="center"> <a href="login.php" style="font-size: 30px">Login Here</a> <br> </td>
   </tr>
    </form>
 </table>

					<?php
					if(isset($_POST['sb']))
					{
						$fname = $_POST['fname'];
						$uid = $_POST['uid'];
						$pass = $_POST['pass'];
						$email = $_POST['email'];
						$address = $_POST['address'];
						$phone = $_POST['phone'];
						include "connect.php";
					mysqli_query($con,"insert into registration(fullname, userid, password, email, address, phone) values('$fname','$uid','$pass','$email','$address','$phone')");
						echo "<script>alert('Registration SuccessFully Please go to Login session');</script>";
				}	
					

					?>





				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
<?php include "footer.php"; ?>