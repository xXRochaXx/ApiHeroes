<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use mysql_xdevapi\Exception;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->query('name');
        $token = '4550209761713105';
        $response = Http::withToken('')->get('https://superheroapi.com/api.php/'.$token.'/search'.'/'.$name);
        $result = json_decode($response, true);
        return view('index', $result);
    }
}
