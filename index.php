<?php

    /**
     * Questão: O .htaccess existe nesse diretorio ?
     */
    if (!file_exists(__DIR__ . "/.htaccess"))
    {
        /**
         * Vamos carregar o codeigniter caso o mysqli esteja
         * hábilitado.
         */
        if (extension_loaded('mysqli'))
        {
            $htaccess  = "RewriteEngine On\n\n";
            $htaccess .= "# Redireciona tudo para /codeigniter\n";
            $htaccess .= "RewriteRule ^(.*)$ codeigniter/$1 [L]\n";
        } else
        {
            if (extension_loaded('pdo_mysql'))
            {
                /**
                 * Vamos carregar o symfony caso o pdo mysql esteja
                 * hábilitado.
                 */
                $htaccess  = "RewriteEngine On\n\n";
                $htaccess .= "# Redireciona tudo para /symfony\n";
                $htaccess .= "RewriteRule ^(.*)$ symfony/$1 [L]\n";
            }
        }

        /**
         * Vamos gravar um .htaccess para essa instalação.
         */
        file_put_contents(__DIR__ . "/.htaccess", $htaccess);

        /**
         * Vamos fazer refresh
         */
        header("Location: index.php");
        exit;
    }
