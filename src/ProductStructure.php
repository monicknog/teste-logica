<?php

namespace App;

class ProductStructure
{
    const products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {
        //array para retorno esperado
        $array = array();
        foreach (self::products as $product) {
            /**
             * transforma string em array
             **/
            $aux = explode('-', $product);

            /**
             * verifica se a variação cor ainda não foi adicionada ao array de retorno 
             * para adicionar caso não tenha
             **/

            if (!array_key_exists($aux[0], $array)) {
                $array[$aux[0]] = [];
            }
            /**
             * verifica se o valor de variação está no array 
             * para incrementar a quantidade
             * caso não tenha, inicia o valor da variação
             **/

            if (array_key_exists($aux[1], $array[$aux[0]])) {
                $array[$aux[0]][$aux[1]]++;
            } else {
                $array[$aux[0]][$aux[1]] = 1;
            }
        }

        return $array;
    }
}
