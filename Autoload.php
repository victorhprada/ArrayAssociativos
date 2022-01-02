<?php

spl_autoload_register(
    function(string $nameEspaceClasse): void {
        $caminho = "/src";
        $diretorio_classe = str_replace("//", DIRECTORY_SEPARATOR, $nameEspaceClasse);
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
});