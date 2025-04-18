<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>The Chainsmokers</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!-- Calender-->
		<script type="text/javascript" src="assets/js/calendar.js"></script>
		<link rel="stylesheet" href="assets/css/calendar.css">
		<!-- Calender-->
		 <!-- Data Table -->
		<link rel="stylesheet" type="text/css" href="assets/css/dataTables.dataTables.css">
		<script src="assets/js/jquery-3.7.1.js" type="text/javascript"></script>
		<script src="assets/js/dataTables.js" type="text/javascript"></script>
		<!-- Data Table -->
		<!-- WYSIWYG Editor -->
		<script src="tinymce/js/tinymce/tinymce.min.js" referrerpolicy="origin"></script>
		<script>
		    tinymce.init({
		  selector: '#mytextarea',
		  height: 500,
		  plugins: [
		    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
		    'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
		    'insertdatetime', 'media', 'table', 'help', 'wordcount'
		  ],
		  toolbar: 'undo redo | blocks | ' +
		  'bold italic backcolor | alignleft aligncenter ' +
		  'alignright alignjustify | bullist numlist outdent indent | ' +
		  'removeformat | help',
		  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
		});
    	</script>
		<!-- WYSIWYG Editor -->

		<style>
			#header-wrapper {
				background: #2c2c2c;
			}
			.major > p{
				color: #aaaaaa;
			}
			.wrapper.style2 {
			    background: #2c2c2c;
			    padding: 5em 0 6em 0;
			    text-align: center;
			}
			.wrapper.style2 h2 {
			    color: #ffffff;
			    font-size: 2.5em;
			    margin-bottom: 0.5em;
			}
			.wrapper.style2 p {
			    color: #aaaaaa;
			    font-size: 1.2em;
			    margin-bottom: 0.5em;
			}
		</style>
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" style="padding: 5em 0 6em 0;">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.php">The Chainsmokers</a></h1>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.php?page=left">Left Sidebar</a></li>
									<li class="break"><a href="right-sidebar.php?page=right">Right Sidebar</a></li>
									<li><a href="no-sidebar.php?page=no-side">No Sidebar</a></li>
								</ul>
							</nav>
					</div>
				</div>