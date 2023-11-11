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
    return response()->json(['message' => 'Hello from Laravel!']);
   
}
}
