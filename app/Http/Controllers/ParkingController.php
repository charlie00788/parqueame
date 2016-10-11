<?php

namespace App\Http\Controllers;

use App\Entities\Parking;
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
                        ->where('state', true)
                        ->get();

        $dispo = ["disponibles" => $disponibles];

        return $dispo;
    }

    public function getUpdate($id)
    {
        $parametros = explode(',', $id);

        Parking::where('id', 1)
                ->update(['state' => $parametros[0]]);
        Parking::where('id', 2)
            ->update(['state' => $parametros[1]]);
        Parking::where('id', 3)
            ->update(['state' => $parametros[2]]);
    }

    public function getParqueo($id)
    {
        $parqueo = Parking::findOrFail($id);
        return view('home.parqueo', compact('parqueo'));
    }

    public function getUpdatePrivate($id, $opcion)
    {
        Parking::where('id', $id)
            ->update(['state' => $opcion]);

        $parqueo = Parking::findOrFail($id);
        return view('home.parqueo', compact('parqueo'));
    }

    public function getgmlp()
    {

        return view('home.gmlp');
    }
}
