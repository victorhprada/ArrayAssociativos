<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils
{
    public static function remover(int $elemento, array $array)
    {
        $posiscao =  array_search($elemento, $array, true);
        if(is_int($posiscao))
        {
        unset($array[$posiscao]);
        }else{
            echo "Não foi encontrado no array";
        }
}
    public static function encontrarPessoaComSaldoMaior(int $saldo, array $array): array
    {
        $correntistaComSaldoMaior = array();
        foreach ($array as $chave => $valor)
        {
            if ($valor > $saldo)
            {
                $correntistaComSaldoMaior[] = $chave;
            }

        }
        return $correntistaComSaldoMaior;
    }
}
