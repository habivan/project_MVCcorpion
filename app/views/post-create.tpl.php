<?php require_once VIEWS . '/incs/header.php' ?> 

	<main class="main py-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
          <h1>New Post</h1>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="title" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title" 
              value="<?=old('title')?>">
              <?php if(isset($errors['title'])):?>
                <div id="validationServer03Feedback" class="invalid-feedback d-block">
                  <?=$errors['title'];?>
                </div>
              <?php endif;?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Excerpt</label>
              <input type="excerpt" name="excerpt" class="form-control" id="exampleFormControlInput1" placeholder="Excerpt"
              value="<?=old('excerpt')?>">
              <?php if(isset($errors['excerpt'])):?>
                <div  class="invalid-feedback d-block">
                  <?=$errors['excerpt'];?>
                </div>
              <?php endif;?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Post</label>
              <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"><?=old('content')?></textarea>
              <?php if(isset($errors['content'])):?>
                <div id="validationServer03Feedback" class="invalid-feedback d-block">
                  <?=$errors['content'];?>
                </div>
              <?php endif;?>
            </div>
            <div class="mb-3">
              <button title="submit" class="btn btn-primary">Create</button>
            </div>
          </form>

				</div>
			</div>
		</div>
	</main>
<?php require_once VIEWS . '/incs/footer.php'?>
