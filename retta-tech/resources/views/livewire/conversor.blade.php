
<?php 
use App\Classes\ConversorClasse;
$conversor = new ConversorClasse();
$arabico = $conversor->converterRomanoParaArabico($valorRomano);
$romano =$conversor->converterArabicoParaRomano($valorArabico)
?>
<div class="d-flex flex-column align-items-center">
    <div class="row mb-5">
        <h2>Conversor de Número Romano</h2>
    </div>

    <div class="d-flex flex-column align-items-center container col-3 border bg-light">
        <div class="col my-2 mx-2">
            <div class="col mb-4">
            <label class="mb-2">Digite um número Romado:</label>
            <input class="form-control" type="text" wire:model.live="valorRomano">
            </div>
            <div>Valor em Número Arabico: {{ $arabico }}</div>
        </div>
        <div class="col my-2 mx-2">
            <div class="col mb-4">
            <label class="mb-2">Digite um número Arabico:</label>
            <input class="form-control" type="number" wire:model.live="valorArabico">
            </div>
            <div>Valor em Número Romano: <?= $romano ?></div>
        </div>
    </div>
</div>


