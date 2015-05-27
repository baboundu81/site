<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
   
<head>
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<!-- Special fonts from Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans|Dancing+Script' rel='stylesheet' type='text/css'>
<!-- Bootsrap css -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" type="text/css" />
<!-- Template css -->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />

</head>

<body>
	<header>
		<div id="reseau" >
			<ul class="list-inline">
				<li> <a href="#" id="fb" target="_blank"></a> </li>
				<li> <a href="#" id="gplus" target="_blank"></a> </li>
				<li> <a href="#" id="yout" target="_blank"></a> </li>
				<li> <a href="#" id="vim" target="_blank"></a> </li>
			</ul>
		</div>
	</header>
	<div class="container-fluid">
		<div class="row">
			<video autoplay="autoplay" muted="" id="bgvid">
				<source src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/video/intro.mp4" type="video/mp4">
			</video>
		</div>
		<div class="row">
			<div id="base-logo">
				<img class="img-responsive center-block" id="img-logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo/lpv_blanc_vert_vcal.png">
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="#">Brand</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
		  </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="#">Link</a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
<jdoc:include type="component" />
<jdoc:include type="modules" name="bottom" />

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js"></script>
	<!-- Specific javascript code for the site --> 
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/site.js"></script>

</body>

</html>