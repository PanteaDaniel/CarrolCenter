<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'title' ); ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">

	<?php wp_head();?>

</head>
<body>
	<header>
		<!--<h1><a href="<?php home_url('/')?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>-->
	</header>
	<div class="navbar pt-0 pb-0">

	<div class="container pr-1 pl-1">
	<nav class="align-center">
		<?php
        $args = array( 'theme_location' => 'top');
        ?>
        <?php wp_nav_menu( $args);?>
	</nav>
</div>
</div>

	<!--<nav class="navbar navbar-expand-sm pt-0 pb-0">

  <div class="container">


  <ul class="navbar-nav">
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown">WHO WE SERVE</a>
			<ul class="dropdown-menu">

				<li><a class="dropdown-item" href="#">Children</a></li>
				<li><a class="dropdown-item" href="#">Teens</a></li>
				<li><a class="dropdown-item" href="#">Adults</a></li>
				<li><a class="dropdown-item" href="#">Seniors</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#">WHO WE ARE</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#">GET INVOLVED</a>
    </li>
		<li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#">EXPLORE MORE</a>
    </li>
		<li class="nav-item">
      <a class="nav-link" href="#">GET IN TOUCH</a>
    </li>
  </ul>
</div>
</nav>-->
<div class="container-fluid p-0 headerContainer">
  <div class="lentilaContainer">
		<div class="lentila">
			<p class="lentilaTitle">Our Founder</p>
			<div class="lentilaTextContainer">
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/quotation_mark1_img.png" class="qoutationMark1" >
				<p class="lentilaText">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				<img src="<?php echo get_bloginfo( 'template_directory' ); ?>/images/quotation_mark2_img.png" class="qoutationMark2" >
			</div>
		</div>
	</div>
</div>
