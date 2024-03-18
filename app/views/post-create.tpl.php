<?php 
require_once VIEWS . '/incs/header.php' 

/**
 * @var \myfrm\Validator $validation
 */
?> 

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
              <?=isset($validation) ? $validation->listErrors('title') : '' ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Excerpt</label>
              <input type="excerpt" name="excerpt" class="form-control" id="exampleFormControlInput1" placeholder="Excerpt"
              value="<?=old('excerpt')?>">
              <?=isset($validation) ? $validation->listErrors('excerpt') : '' ?>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Post</label>
              <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="5"><?=old('content')?></textarea>
              <?=isset($validation) ? $validation->listErrors('content') : '' ?>
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
