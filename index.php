<?php

    /**
     * Vamos carregar o codeigniter caso o mysqli esteja
     * hábilitado.
     */
    if (extension_loaded('mysqli'))
    {
        include __DIR__ . "/codeigniter/public/index.php";
        die();
    }

    /**
     * Vamos carregar o symfony caso o pdo mysql esteja
     * hábilitado.
     */
    if (extension_loaded('pdo_mysql'))
    {
        include __DIR__ . "/symfony/public/index.php";
        die();
    }
