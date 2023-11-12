
<?php 
use App\Classes\ConversorClasse;
$a = new ConversorClasse();
$x = $a->converterRomanoParaArabico($valorRomano);
$y =$a->converterArabicoParaRomano($valorArabico)
?>

    <div>

        <label>Digite um número romado:</label>
        <input type="text" wire:model.live="valorRomano">

        <div>Valor em Número Arabico: {{ $x }}</div>

        <label>Digite um número arabico:</label>
        <input type="number" wire:model.live="valorArabico">

        <div>Valor em Número Romano: <?= $y ?></div>
    </div>


