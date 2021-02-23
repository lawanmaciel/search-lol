<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AppChampController extends Controller
{
    public function index($champ){
        $requestApiVersion = Http::get('https://ddragon.leagueoflegends.com/api/versions.json');
        $responseApiVersion = $requestApiVersion->json();
        $requestApi = Http::get("http://ddragon.leagueoflegends.com/cdn/" . $responseApiVersion[0] . "/data/en_US/champion.json");
        $responseApi = $requestApi->json();

        $compact = $responseApi['data'];
        return view('app.champ', compact('compact'))->with('champ', $champ);
    }
}
