<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function getMacAddress()
    {
        $macAddress = exec('getmac');
        dd($macAddress);
    }
}
