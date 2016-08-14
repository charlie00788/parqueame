<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ParkingController extends Controller
{
    public function getAvailable()
    {
        $disponibles = DB::table('parkings')
                        ->join('owners', 'parkings.owner_id', '=', 'owners.id')
                        ->select('parkings.id', 'owners.name', 'parkings.type', 'latitude', 'longitude', 'location')
                        ->get();

        $dispo = ["disponibles" => $disponibles];

        return $dispo;
    }
}
