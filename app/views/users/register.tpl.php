<?php require VIEWS . '/incs/header.php' ?>

<main class="main py-3">

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h3>Register page</h3>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                        <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" 
                        value="<?=old('name')?>">
                        <?=isset($validation) ? $validation->listErrors('name') : '' ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email"
                        value="<?=old('email')?>">
                        <?=isset($validation) ? $validation->listErrors('email') : '' ?>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password"
                        value="<?=old('password')?>">
                        <?=isset($validation) ? $validation->listErrors('password') : '' ?>
                    </div>
                    <button title="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>

<?php require VIEWS . '/incs/footer.php' ?>