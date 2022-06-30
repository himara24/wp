<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog Site Template">
	<meta name="author" content="https://youtube.com/FollowAndrew">
	<link rel="shortcut icon" href="images/logo.png">

	<!-- FontAwesome CSS-->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> -->
	<!-- Bootstrap CSS-->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   -->
	<!-- Theme CSS -->
	<!-- <link rel="stylesheet" href="wp-content/themes/himara/style.css"> -->

	<?php
	wp_head();

	?>

</head>

<body>

	<?php
	get_header();
	?>

	<article class="content px-3 py-5 p-md-5">

		<?php

		if( have_posts() ){
			while ( have_posts() ){
				the_post();
				the_content();
			}
		}

		?>



	</article>



	<?php
	get_footer();
	?>