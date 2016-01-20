<?php use unikent\kent_theme\KentThemeHelper; ?>
<!DOCTYPE html>
<html lang="en-GB">
	<head>
		<title><?php echo $page_title; ?></title>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
		<meta name="robots" content="noindex" />

		<meta name="application-name" content="University of Kent"/>
		<meta name="msapplication-TileColor" content="#ffffff"/>
		<meta name="msapplication-TileImage" content="<?php echo $thumb; ?>" />

		<?php foreach($meta as $name => $content){  ?>
			<meta name="<?php echo $name; ?>" content="<?php echo $content; ?>" />
		<?php } ?>

		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="<?php echo $page_title; ?>" />
		<meta itemprop="image" content="<?php echo $thumb; ?>" />
		<?php if($description){ ?><meta itemprop="description" content="<?php echo $description; ?>" /><?php } ?>

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="summary_large_image" />
		<meta name="twitter:site" content="@unikent" />
		<meta name="twitter:title" content="<?php echo $page_title; ?>" />
		<meta name="twitter:creator" content="@unikent" />
		<meta name="twitter:image:src" content="<?php echo $thumb; ?>" />
		<?php if($description){ ?><meta name="twitter:description" content="<?php echo $description; ?>" /><?php } ?>

		<!-- Open Graph data -->
		<meta property="og:title" content="<?php echo $page_title; ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php echo $thumb; ?>" />
		<meta property="og:site_name" content="The University of Kent" />
		<?php if($description){ ?><meta property="og:description" content="<?php echo $description; ?>" /><?php } ?>

		<link rel="stylesheet" href="<?php KentThemeHelper::getThemeWebRoot();?>assets/css/<?php echo $theme_style;?>" />
		<link rel="stylesheet" href="<?php KentThemeHelper::getThemeWebRoot();?>assets/css/kentfont.css" />

		<script src="<?php KentThemeHelper::getThemeWebRoot();?>assets/js/modernizr.min.js"></script>

		<?php echo $head_markup ;?>
	</head>
	<body>
		<a href="#section_menu" class="sr-only">Jump to section menu</a>
		<a href="#main_content" class="sr-only">Jump to content</a>
		<?php if($beta_bar){ ?>
		<section class="beta-bar navbar">
			<p><span class="beta-bar-beta">BETA</span></p>

			<p>We're testing <a href="https://blogs.kent.ac.uk/webdev/2015/12/04/beta-kent/">a new design</a>.</p>
			<p>It may not be complete or work as intended.</p>
			<p>
				<a href="<?php echo KentThemeHelper::getOriginalSiteLink();?>" class="btn btn-link">Go to original site</a>
			</p>
			<p>
				<button class="btn btn-secondary feedback" onclick="return window.usabilla_live('click');">Give us feedback</button>
			</p>
			<span class="beta-toggler"></span>
		</section>
		<?php } ?>
		<header class="global-header">
			<section class="audience-bar navbar">
				<a class="navbar-brand kf-kent-horizontal" href="/" title="The University of Kent" ><span class="sr-only">The University of Kent</span></a>
				<span class="tag-line">The UK's European university</span>
				<button class="kf pull-right menu-button" aria-controls="global-nav-menu" title="Open main menu" aria-expanded="false"></button>
				<button class="kf-search pull-right search-button" aria-controls="global-nav-search" title="Open search" aria-expanded="false"></button>
			</section>
			<section class="global-nav">
				<?php if($beta_bar){ ?>
					<button class="beta-toggler">BETA</button>
				<?php } ?>
				<a class="main-logo kf-kent-block" href=""><span class="sr-only">The University of Kent</span></a>

				<button class="search-button-full btn btn-accent btn-icon kf-search btn-lg pull-right" aria-controls="global-nav-search" title="Open search"></button>

				<div class="global-nav-menu" id="global-nav-menu" role="menubar">
					<nav class="global-nav-links" role="menu">
						<div class="global-nav-link">
							<a aria-controls="menu-research" aria-expanded="false" role="menuitem">Research</a>
							<div class="global-nav-link-submenu">
								<nav id="menu-research" role="menu">
									<a href="//www.kent.ac.uk/research/" role="menuitem" >
										<span class="global-nav-link-title">Research impact</span>
										<span class="global-nav-link-desc">Making a difference locally and internationally</span>
									</a>
									<a href="//www.kent.ac.uk/enterprise/" role="menuitem">
										<span class="global-nav-link-title">Enterprise</span>
										<span class="global-nav-link-desc">Strong, international network of partnerships and businesses</span>
									</a>
									<a href="//www.kent.ac.uk/courses/postgraduate/types/research.html" role="menuitem">
										<span class="global-nav-link-title">Research degrees</span>
										<span class="global-nav-link-desc">Cutting edge, research-informed programmes</span>
									</a>
									<a href="//www.kent.ac.uk/courses/postgraduate/community/" role="menuitem">
										<span class="global-nav-link-title">Academic excellence</span>
										<span class="global-nav-link-desc">Thriving, intellectual community of world-experts</span>
									</a>
								</nav>
							</div>
						</div>
						<div class="global-nav-link">
							<a aria-controls="menu-study" aria-expanded="false" role="menuitem">Study</a>
							<div class="global-nav-link-submenu">
								<nav id="menu-study" role="menu">
									<a href="//www.kent.ac.uk/courses/why/" role="menuitem">
										<span class="global-nav-link-title">Inspiring teaching</span>
										<span class="global-nav-link-desc">Excellent teaching with individual attention</span>
									</a>
									<a href="//www.kent.ac.uk/courses/undergraduate/" role="menuitem">
										<span class="global-nav-link-title">Undergraduate</span>
										<span class="global-nav-link-desc">Courses to prepare you for a successful future</span>
									</a>
									<a href="//www.kent.ac.uk/courses/postgraduate/" role="menuitem">
										<span class="global-nav-link-title">Postgraduate</span>
										<span class="global-nav-link-desc">Programmes supported by a stimulating support culture</span>
									</a>
									<a href="//www.kent.ac.uk/internationalstudent/study-in-kent/" role="menuitem">
										<span class="global-nav-link-title">International</span>
										<span class="global-nav-link-desc">World-wide links in a supportive, cosmopolitan community</span>
									</a>
								</nav>
							</div>
						</div>
						<div class="global-nav-link">
							<a aria-controls="menu-explore" aria-expanded="false" role="menuitem">Explore</a>
							<div class="global-nav-link-submenu">
								<nav id="menu-explore" role="menu">
									<a href="//www.kent.ac.uk/about/" role="menuitem">
										<span class="global-nav-link-title">UK's European University</span>
										<span class="global-nav-link-desc">Top 16 UK University</span>
									</a>
									<a href="//www.kent.ac.uk/student/experience/" role="menuitem">
										<span class="global-nav-link-title">Inspiring student experience</span>
										<span class="global-nav-link-desc">3rd for student satisfaction</span>
									</a>
									<a href="//www.kent.ac.uk/locations/" role="menuitem">
										<span class="global-nav-link-title">Superb locations</span>
										<span class="global-nav-link-desc">Close to London with European centres. Come visit us.</span>
									</a>
									<a href="//www.kent.ac.uk/accommodation/" role="menuitem">
										<span class="global-nav-link-title">Accommodation and facilities</span>
										<span class="global-nav-link-desc">Living and learning on campus</span>
									</a>
								</nav>
							</div>
						</div>
					</nav>
					<nav class="audience-nav-links" role="menu">
						<a href="//www.kent.ac.uk/student/" role="menuitem">Student</a>
						<a href="//www.kent.ac.uk/campusonline/" role="menuitem">Staff</a>
						<a href="//www.kent.ac.uk/alumni/" role="menuitem">Alumni</a>
						<a href="//www.kent.ac.uk/departments/" role="menuitem">Departments</a>
					</nav>
				</div>
				<div class="global-nav-search" id="global-nav-search">

					<form role="search" method="get" action="https://www.kent.ac.uk/search/">
						<div class="form-group">
							<label for="search" class="sr-only">Search</label>
							<div class="input-group input-group-lg">
								<input type="search" class="form-control" id="search" name="q" placeholder="Search by course, department. keyword... " autocomplete="off">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-accent btn-icon kf-search" aria-label="Search"></button>
								</span>
							</div>
						</div>

						<span class="close-search pull-right" role="button">Close search</span>
					</form>
				</div>
			</section>
			<section class="departmental-nav<?php echo ($slim)?' slim':''; ?>" id="section_menu">
				<header><?php echo $title; ?></header>
				<div class="navbar-toggler" aria-controls="navbar-menu" aria-expanded="false" role="button"><span>Menu</span></div>
				<nav class="navbar-menu" id="navbar-menu" role="menu">
					<?php echo $menu_links; ?>
				</nav>
			</section>
		</header>
		<main id="main_content"<?php echo !empty($main_class) ?' class="' . $main_class .'"' :'' ; ?>>
