<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class TreeMap extends Controller
{
    public function index(Request $request)
{
    // $api = Http::get('https://economia.awesomeapi.com.br/json/daily/USD-BRL/7');
    
    // $value = $api->json();
    // array_multisort(array_column($value, 'ask'), SORT_DESC, $value);
    $value = [
        ['name'=>'WhatsApp', 'value'=>169],
        ['name'=>'YouTube', 'value'=>142],
        ['name'=>'Instagram', 'value'=>113],
        ['name'=>'Facebook', 'value'=>109],
        ['name'=>'TikTok', 'value'=>82],
        // ['name'=>'x', 'value'=>81],
      
    ];
    
    $values = $value;

    return view('treemap', compact('values'));
}
}
