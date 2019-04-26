<nav class="navbar navbar-default" style="background-image: url(<?php echo base_url('assets/img/header.jpg'); ?>); height: 129px; margin: ">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	 <a style="margin: 17px 0px 0px 87px" class="navbar-brand" href=" <?php echo base_url("/") ?>" >
    <img src=" <?php echo base_url('assets/img/logo.png'); ?>" >
    </div>
    <div>
       <a class="" href="(<?php echo base_url('assets/img/cart.jpg') ?>)" >
  </a>
    </div>

 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	  
      <ul class="nav navbar-nav navbar-right">
		<li></li>
        <li>
			<?php
				$text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
				$text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
			?>
			<?=anchor('welcome/cart', $text_cart_url)?>
		</li>
		<?php if($this->session->userdata('username')) { ?>
			<li><div style="line-height:50px;">You Are : <?=$this->session->userdata('username')?></div></li>
			<li><?php echo anchor('logout', 'Logout');?></li>
		<?php } else { ?>
			<li><?php echo anchor('login', 'Login');?></li>
		<?php } ?>
      </ul>


	  
    </div>
  </div>
</nav>