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
              <h2>Gráfico TreeMap As 5 Redes Sociais Mais Usadas No Brasil Em 2023</h2>
          </div>
          <div>
            
            <div class="row bg-dark" style="width: 508px; height: 500px">
                @php
                $valorw = 500*2;
                $valorh = 500*2;
                $y = 0;
                $x = 0;
                $total = 0;
                foreach ($values as $key => $value) {
                    $total += $value['value'];
                }
               
                
                @endphp
            @foreach($values as $key => $value)
            @php
            $tamanho = $value['value']/$total;
            $tamanhow = $tamanho * $valorw;
            $tamanhoh = $tamanho * $valorh;
            if ($x + $tamanho * $valorw >= $valorw) {
                $x = 0;
                $y += $tamanho * $valorh;
            } else {
                $x += $tamanho * $valorw;
            }

            $font = $tamanhow<80? 12:18;
            $cor = 'rgb(163, 35, 26)';

            @endphp
                <div title="{{$value['value']}}M" class="d-flex flex-column justify-content-around align-items-center border" style="background-color: {{$cor}}; width:{{$tamanhow}}px; height:{{$tamanhoh}}px; font-size:{{$font}}px">
        
                    <span>{{$value['name']}}</span>
            
                </div>
                @endforeach
                </div>
            </div>
          
        </div>
      
</body>
</html>