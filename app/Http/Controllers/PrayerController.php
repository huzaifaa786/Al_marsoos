<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpKernel\Attribute\MapQueryString;
use Symfony\Component\HttpKernel\Exception\HttpException;

class PrayerController extends Controller
{
    public function PayerTime(Request $request)
    {
        $guzzleClient = new \GuzzleHttp\Client();
        $currentDate = \Carbon\Carbon::now();
        
       
        $city = 'Islamabad';
        $country = 'Pakistan';
        
        try {
            $response = $guzzleClient->request('GET', 'http://api.aladhan.com/v1/timingsByCity', [
                'query' => [
                    'city' => $city,
                    'country' => $country,
                    'method' => 8,
                    'day' => $currentDate->day,
                    'month' => $currentDate->month,
                    'year' => $currentDate->year,
                ],
                'headers' => [
                    'X-RapidAPI-Key' => 'cb14412a94mshd2cb779b1b594a6p1f3a4ejsn518b20f5323d',
                    'X-RapidAPI-Host' => 'aladhan.p.rapidapi.com',
                ],
            ]);
        
            $apiResponse = json_decode($response->getBody(), true);
            return response()->json($apiResponse); // Return JSON response
        
        } catch (RequestException $ex) {
            // Handle exception
            $errorResponse = [];
        
            if ($ex->hasResponse()) {
                $errorResponse['status'] = $ex->getResponse()->getStatusCode();
                $errorResponse['message'] = json_decode($ex->getResponse()->getBody(), true);
            } else {
                $errorResponse['status'] = 500; // Internal Server Error
                $errorResponse['message'] = $ex->getMessage();
            }
        
            return response()->json($errorResponse); // Return JSON error response
        }
    
}
}
    


