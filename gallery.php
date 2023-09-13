<?php include "header.php"; ?>	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>DAILY HEALTHY POST</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>POST</h2>
						<p>Healthy food for the body</p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					
					<?php
							include "connect.php";
							$s = mysqli_query($con,"select * from gallery");
							while($r = mysqli_fetch_array($s))
							{
					?>
						<div class="col-sm-12 col-md-4 col-lg-4">
						
							<a class="lightbox" href="<?php echo "admin/".$r['image']; ?>">
								<img class="img-fluid"  src="<?php echo "admin/".$r['image']; ?>" alt="Gallery Images" style="width: 350px; height: 250px;"
								>

								
							</a>
							<div style="background: goldenrod; text-shadow:1px 1px 10px black; color: white;">
								<p><?php echo $r['description']; ?></p>
							</div>
							
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

<?php include "footer.php"; ?>