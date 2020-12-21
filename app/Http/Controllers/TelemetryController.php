<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TelemetryController extends Controller
{
    public function telemetry()
    {
        $client = new Client();
        if (env('IP_ADDRESS') != null) {
            $response = json_decode($client->get('http://' . env('IP_ADDRESS') . ':25555/api/ets2/telemetry')->getBody()->getContents());

//        dump($response);
            $fuel = $response->truck->fuel;
            $fuelCap = $response->truck->fuelCapacity;
            $percent = $fuel / $fuelCap;
            return view('navbar', compact('response', 'percent'));
        } else {
            return view('ip');
        }
    }

    public function storeIP(Request $request)
    {
        $this->setEnv('IP_ADDRESS',$request->ip);
        return redirect()->route('telemetry');
    }

    private function setEnv($key, $value)
    {
        file_put_contents(app()->environmentFilePath(), str_replace(
            $key . '=' . env($value),
            $key . '=' . $value,
            file_get_contents(app()->environmentFilePath())
        ));
    }
}
