<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title?></title>
	<?php
		$this->load->view('css/assets.php');
		$this->load->view('css/assets');
		$this->load->view('navigation_bar/upper-info');
	?>
	
<head>
<body>
	<div class="container">
		<div class="row">
			
		</div>
		<?php
			$this->load->view('navigation_bar/navigationbar');
		?>
		<div class="row">
			<div class="col">
				<div class="carousell-custom" >
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" style="width:100%;height:600px;">
							<img class="d-block w-100" src="https://images.pexels.com/photos/1011509/pexels-photo-1011509.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="First slide">
						</div>
							<div class="carousel-item" style="width:110%;height:600px;">
							<img class="d-block w-100" src="https://images.pexels.com/photos/1080377/pexels-photo-1080377.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
						</div>
						<div class="carousel-item" style="width:100%;height:600px;">
							<img class="d-block w-100" src="https://images.pexels.com/photos/1138173/pexels-photo-1138173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">
							<div class="carousel-caption d-none d-md-block">
								<h5>Belanja</h5>
								<p>sekarang</p>
							</div>
						</div>
					</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style='margin-top:27px;'>
			<div class="container">
				<div class="row">
					<div class="col">
						<h3 class='right-align'>
							SECTION 1
						</h3>
						<p class='right-align'>
							deskripsi section 1
						</p>
					</div>
					<div class="col">
						<img src='https://images.pexels.com/photos/1138173/pexels-photo-1138173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260' style='width:100%'/>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style='margin-top:27px;'>
			<div class="container">
				<div class="row">
					<div class="col">
						<img src='https://images.pexels.com/photos/1138173/pexels-photo-1138173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260' style='width:100%'/>
					</div>
					<div class="col">
						<h3 class='right-align'>
							SECTION 2
						</h3>
						<p class='right-align'>
						deskripsi section 1
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
			<div class="carousell-custom" >
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active" style="width:100%;height:600px;">
						<img class="d-block w-100" src="https://images.pexels.com/photos/1011509/pexels-photo-1011509.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="First slide">
					</div>
						<div class="carousel-item" style="width:110%;height:600px;">
						<img class="d-block w-100" src="https://images.pexels.com/photos/1080377/pexels-photo-1080377.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
					</div>
					<div class="carousel-item" style="width:100%;height:600px;">
						<img class="d-block w-100" src="https://images.pexels.com/photos/1138173/pexels-photo-1138173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h5>Belanja</h5>
							<p>sekarang</p>
						</div>
					</div>
				</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			</div>
		</div>
	</div>
	<footer>
	</footer>
	
	



</body>
</html>