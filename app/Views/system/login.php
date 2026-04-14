<?= $this->extend('system/layouts/auth') ?>

<?= $this->section('content') ?>
<div class="login-box">
    <div class="login-logo">
        <a href="<?= base_url() ?>index.php">
            <?php

                $title = env('app.name');
                $title = str_replace(" ", "", $title);

                $title_with_subtitle = false;
                $title_first = "";
                $title_last = "";

                if (preg_match('/(?<!^)([A-Z])/', $title, $matches, PREG_OFFSET_CAPTURE))
                {
                    $pos = $matches[0][1];

                    $title_first = substr($title, 0, $pos);
                    $title_last = substr($title, $pos);

                    $title_with_subtitle = true;
                } else
                {
                    $title_first = $title;
                }

            ?>
            <b><?= $title_with_subtitle ? $title_first : $title; ?></b><?= $title_with_subtitle ? $title_last : ""; ?>
        </a>
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">
                Faça login para iniciar sua sessão.
            </p>

            <form action="../../index3.html" method="post">
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

                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">

                            <label for="remember">
                                Lembre de mim
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>

            <p class="mb-1">
                <a href="forgot-password.html">
                    Esqueci minha senha
                </a>
            </p>

            <p class="mb-0">
                <a href="<?= base_url() ?>index.php/register" class="text-center">
                    Criar uma nova conta
                </a>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
