<?php require_once 'arr.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
		/>
		<title>Document</title>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Navbar</a>
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-link active" aria-current="page" href="#"
								>Новый заказ</a
							>
							<a class="nav-link" href="#">Заказы</a>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<main>
            <?php foreach($articles as $user):?>
				<div class="card" style="width: 18rem m-5">
					<div class="card-body">
						<h5 class="card-title"><?=$user['author']?></h5>
						<h6 class="card-subtitle mb-2 text-body-secondary"><?=$user['date']?></h6>
						<p class="card-text">
							<?=$user['content']?>
						</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
			<?php endforeach;?>
		</main>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
