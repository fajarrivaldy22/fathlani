<div class="row">
			<div class="col">
      <?php 
        if(!empty($this->session->userdata("user"))){ ?>
          <p class='text-small text-center' style='text-align:center'>Welcome, <a href='#'><?php print_r($this->session->userdata("user")->first_name); ?></a></p>
          
        <?php }else{ ?>
          <a  href='<?php echo site_url().'/pages/signin'; ?>' class='text-small text-center'><p style='text-align:center'>SIGN IN</p></a>
        <?php }?>
			</div>
			<div class="col">
					<a  href='#' class=' text-center'><i class="fa fa-shopping-cart" style='font-size:26px;text-align:center;'></i></a>
			</div>
			<div class="col">
				<a href='#' class='text-small text-center'><p style='text-align:center'>WHISLIST</p></a>
			</div >
			<div class="col">
				<?php	if(empty($this->session->userdata("user"))){ ?>
          <a  href='<?php echo site_url().'/pages/signin'; ?>' class='text-small text-center'><p style='text-align:center'>SIGN IN</p></a>
        <?php }else{ ?>
          <a  href='<?php echo site_url().'/pages/logout'; ?>' class='text-small text-center'><p style='text-align:center'>LOGOUT</p></a>
        <?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm" >
					<center>
						<div class="icon-body">
							<img style='width:230px;height:90px;' src="<?=base_url('assets/icon/fatlani.png');?>" alt="Italian Trulli">
						</div>
					</center>
			</div>
		</div>
		<div class="row">
			
				<div class="col">
				<div class="container-navbar1">
					

				<nav class="navbar navbar-expand-lg navbar-light bg-white">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
						<ul class="navbar-nav mr-auto mt-2 mt-lg-0" >
						<li class="nav-item ">
							<a class="nav-link text-sm" style='font-size:12px;' href="#">New Realese</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" style='font-size:12px;' href="#">Product<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" style='font-size:12px;' href="#">Collection<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" style='font-size:12px;' href="#">About</a>
						</li>
						</ul>
						<form class="form-inline my-2 my-lg-0">
							<input class=" mr-sm-2 search-custom" type="search" placeholder="Search..." aria-label="Search">
							<button class="my-btn-seacrh my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</nav>			


				</div>
			</div>
		</div>
