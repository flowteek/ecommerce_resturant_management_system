<?php session_start();
include "header.php";
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: auto;">
		<div style="width: 100%; margin: 0 auto; margin-top:30px;">
		
<?php include  "connect.php"; ?>

	<form action="order.php" method="post">

		<table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
          <tr>
			<th> <h3 align="center" style="font-size: 1.3em;">Fill Up Your Details To Complete Order</h3> </th>
		<br>
            </tr>
			    <tr align="center">

			    	<td style="color: red">  Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: orange; background-color: black" required="" pattern="[a-z,A-Z]*"></td>
			    		
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Enter Mobile no <br>
			        <input type="number" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: orange; background-color: black" required=""></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: red">   Enter Email address <br>
			        <input type="Email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: orange; background-color: black"></td>
			    </tr>

                <tr align="center">
                	<td style="color: red"> Enter address <br>
                 <input type="text" name="ad" placeholder="enter your address" style="width: 100%; padding: 50px; color: orange; background-color: black">
                </tr>	


				<tr align="center">
                	<td style="color: red">MODE<br>
                 <select name="mode" id="" style="width: 100%; padding: 10px; color: orange; background-color: black">
				<option value=""></option>	
				 <option value="pickup">Pick-up</option>
					<option value="delivery">delivery</option>
				 </select>
                </tr>



                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" class="btn btn-success" value="Confirm Order" style="height: 50px; background-color:lightgreen; color: black; padding: 10px; width: 50%;"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


<?php include "footer.php"; ?>