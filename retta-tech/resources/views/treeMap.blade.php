<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>treeMap</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  
    
        <div class="d-flex flex-column align-items-center">
          <div class="row">
              <h2>Gráfico TreeMap Dólar Últimos 30 dias</h2>
          </div>
          <div class="container">
            
            <div class="row mx-md-n5 d-flex align-items-center">
                @php
                 $tamanho = 250;
                 $tamanho2 = 280;

                @endphp
            @foreach($values as $value)
            @php
            $tamanho -= $value['ask'];
            $tamanho2 -= $value['ask'];
            $font = $tamanho<80? 12:18;
            $cor = 'rgb(163, 35, 26)';
            if($value['ask'] < 0){
                $cor = 'rgb(115, 24, 17)';
            }
            @endphp
                <div class="d-flex flex-column justify-content-around align-items-center my-1 mx-1 border" style="background-color: {{$cor}}; width:{{$tamanho}}px; height:{{$tamanho2}}px; font-size:{{$font}}px">
                    <span>R${{number_format($value['ask'], 3, ',', ' ')}}</span>
                    <span>{{date('d/m/Y', $value['timestamp'])}}</span>
            
                </div>
                @endforeach
                </div>
            </div>
          
        </div>
      
</body>
</html>