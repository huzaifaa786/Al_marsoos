<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Client;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;

class PayerController extends Controller
{
  public function PayerTime()
  {
    $client = new User;
    $request = new Request;

    $request->setRequestUrl('https://aladhan.p.rapidapi.com/calendarByCity');
    $request->setRequestMethod('GET');
    $request->setQuery(new MapQueryString([
      'country' => 'US',
      'year' => Carbon::now()->year,
      'month' => Carbon::now()->month,
      'city' => 'Denver'
    ]));

    $request->setHeaders([
      'x-rapidapi-host' => 'aladhan.p.rapidapi.com',
      'x-rapidapi-key' => 'cJvLRNK0GfdM9WSMbQe3inU7REn8JVy5'
    ]);

    $client->enqueue($request)->send();
    $response = $client->getResponse();
    return $response()->getBody();
    
}
}
