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
    $api = Http::get('https://economia.awesomeapi.com.br/json/daily/USD-BRL/30');
    // $dados = $api->json()['Meta Data'];
    $value = $api->json();
    $valueMes = [];
    $totalMes = 0;
    array_multisort(array_column($value, 'ask'), SORT_DESC, $value);
    
    
   
    // dd($mes);

    $page = $request->get('page', 1);
    $perPage = 30;

    $items = collect($value);

    $values = new LengthAwarePaginator(
        $items->forPage($page, $perPage),
        $items->count(),
        $perPage,
        $page,
        ['path' => $request->url(), 'query' => $request->query()]
    );

    return view('treemap', compact('values'));
}
}
