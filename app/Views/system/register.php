<?= $this->extend('system/layouts/auth') ?>

<?= $this->section('content') ?>
<div class="register-box">
    <div class="register-logo">
        <a href="<?= base_url() ?>index.php">
            <?php

                $title = env('app.name');
                $title_list = explode(" ", $title);
                $title_with_subtitle = false;
                $title_first = "";
                $title_last = "";

                if (count($title_list) > 1)
                {
                    $title_with_subtitle = true;
                    $title_first = $title_list[0];
                    $title_last = $title_list[1];
                } else
                {
                    $title_first = $title;
                }

            ?>
            <b><?= $title_with_subtitle ? $title_first : $title; ?></b><?= $title_with_subtitle ? $title_last : ""; ?>
        </a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">
                Crie uma nova conta
            </p>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success mb-3" role="alert">
                    <?= session()->getFlashdata('success') ?>
                </div>
            <?php endif; ?>

            <form action="<?= site_url('register') ?>" method="post">
                <?= csrf_field() ?>

                <div class="input-group mb-3">
                    <input type="text" class="form-control <?= isset($errors['name']) ? 'is-invalid' : '' ?>" name="name" value="<?= old('name') ?>" placeholder="Nome completo">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    <?php if (isset($errors['name'])): ?>
                        <div class="invalid-feedback">
                            <?= esc($errors['name']) ?>
                        </div>
                    <?php endif; ?>
                </div>



                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>

                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" placeholder="Retype password">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                  </div>
                </div>
            </form>

            <a href="login.html" class="text-center">
                I already have a membership
            </a>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
