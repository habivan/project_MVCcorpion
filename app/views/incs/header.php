<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		/>
		<base href="<?=PATH?>/">
		<link rel="stylesheet" href="public/assets/main.css">
		<link rel="icon" href="image/favicon-32x32.png" sizes="32x32" type="image/png">
		<title><?=$title ?? 'TITLE'?></title>
	</head>
	<body>
		<div class="wrapper">
			<header class="header">
				<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
					<div class="container-fluid">
						<a class="navbar-brand" href="/">Navbar</a>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-link active text-light" aria-current="page" href="/">Home</a>
								<a class="nav-link" href="about">About</a>
								<a class="nav-link" href="posts/create">New Post</a>
							</div>
						</div>
					</div>
				</nav>
			</header>