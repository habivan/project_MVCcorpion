<?php require_once VIEWS . '/incs/header.php' ?> 
	<main class="main py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php foreach($articles as $user):?>
						<div class="card mb-3 ">
							<div class="card-body ">
								<h5 class="card-title"><?=$user['title']?></h5>
								<h6 class="card-subtitle mb-2 text-body-secondary"><?=$user['date']?></h6>
								<p class="card-text">
									<?=$user['content']?>
								</p>
								<a href="posts?id=<?=$user['id']?>" class="card-link">Card link</a>
							</div>
						</div>
					<?php endforeach;?>
					<hr>
					<!-- <nav aria-label="Page navigation example"><ul class="pagination"> -->
						<?php 
							// for ($i=1; $i <= $pages_cnt; $i++) { 
								// echo "<a href='?page={$i}'>{$i}</a>";
							// 	echo '<li class="page-item active"><a class="page-link" href="?page='.$i.'">' . $i . '</a></li>';
							// } 
							echo $pagination;
						?>
					<!-- </ul></nav> -->
				</div>
				<?php require_once VIEWS . '/incs/sidebar.php'?>	
			</div>
		</div>
	</main>
<?php require_once VIEWS . '/incs/footer.php'?>
