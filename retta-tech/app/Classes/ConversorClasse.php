<?php
namespace App\Classes;
class ConversorClasse{
    private $arrayNumero = [
        'I'=>1, 
        'IV'=>4,
        'V'=>5,
        'IX'=>9,
        'X'=>10,
        'XL'=>40, 
        'L'=>50,
        'XC'=>90, 
        'C'=>100,
        'CD'=>400, 
        'D'=>500,
        'CM'=>900, 
        'M'=>1000
    ];

    public function converterRomanoParaArabico($n)
    {  
        if(ctype_digit($n)){
            return 'Informe um número Romano';

        }
        $nRomanos = strtoupper($n);
        $numeros = $this->arrayNumero;
        $numeroRetorno = 0;
        for($i = 0; $i < strlen($nRomanos); $i++) {
            if(!array_key_exists($nRomanos[$i], $numeros)){
                $numeroRetorno = 'Error.';
                break;
            }
            $proxValue = isset($nRomanos[$i+1]) && array_key_exists($nRomanos[$i+1], $numeros) ? $numeros[$nRomanos[$i+1]] :0;

            if($proxValue>$numeros[$nRomanos[$i]]) {
                $numeroRetorno += $proxValue-$numeros[$nRomanos[$i]];
                $i++;
            }
            else{
                $numeroRetorno += $numeros[$nRomanos[$i]];
            }


        }
        
        return $numeroRetorno;
    }

    public function converterArabicoParaRomano($n)
    {   
        $nArabico = (int) $n;
        $numeros = $this->arrayNumero;

        $numeroRetorno = '';
        foreach(array_reverse($numeros) as $sibolo => $value) {
            while($nArabico>=$value) {
                $numeroRetorno .= $sibolo;
                $nArabico -= $value;
            }

        }
        
        return $numeroRetorno;


    }
}