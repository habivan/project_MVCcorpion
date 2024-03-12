<?php require_once VIEWS . '/incs/header.php' ?> 
	<main class="main py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php foreach($articles as $user):?>
						<div class="card mb-3 ">
							<div class="card-body ">
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
				</div>
				<?php require_once VIEWS . '/incs/sidebar.php'?>	
			</div>
		</div>
	</main>
<?php require_once VIEWS . '/incs/footer.php'?>
