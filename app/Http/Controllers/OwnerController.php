<?php

namespace App\Http\Controllers;

use App\Entities\Owner;
use App\Entities\Parking;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Styde\Html\Facades\Alert;

class OwnerController extends Controller
{
    public function getOwners()
    {
        $usuario = auth()->user();

        $owners = Owner::where('user_id', $usuario->id)
            ->get();
        
        return view('owner.propietarios', compact('usuario', 'owners'));
    }

    public function getAddOwner()
    {
        $usuario = auth()->user();

        return view('owner.newOwner', compact('usuario'));
    }

    public function postAddOwner(Request $request)
    {
        $rules = [
            'name'      => 'required',
        ];

        $this->validate($request,$rules);

        $prop = new Owner;
        $prop->user_id = $request->user_id;
        $prop->name = $request->name;
        $prop->type = $request->type;
        $prop->save();

        Alert::message('Propietario registrado exitósamente.', 'success');

        return redirect(route('owner.getOwners'));
    }

    public function getDeleteOwner($owner_id)
    {
        $prop = Owner::find($owner_id);
        $prop->delete();

        Alert::message('Propietario eliminado exitósamente', 'danger');

        return redirect(route('owner.getOwners'));
    }

    public function getParkings($owner_id)
    {
        $usuario = auth()->user();

        $parkings = Parking::where('owner_id', $owner_id)
            ->get();

        return view('owner.parqueos', compact('usuario', 'parkings', 'owner_id'));
    }

    public function getAddParking($owner_id)
    {
        $usuario = auth()->user();

        return view('owner.newParking', compact('usuario', 'owner_id'));
    }

    public function postAddParking(Request $request)
    {
        $rules = [
            'location'  => 'required',
            'latitude'  => 'required',
            'longitude' => 'required'
        ];

        $this->validate($request,$rules);

        $parking = new Parking;
        $parking->owner_id = $request->owner_id;
        $parking->location = $request->location;
        $parking->latitude = $request->latitude;
        $parking->longitude = $request->longitude;
        $parking->save();

        Alert::message('Parqueo registrado exitósamente.', 'success');

        return redirect(route('owner.getParkings', $request->owner_id));
    }

    public function getDeleteParking($parking_id, $owner_id)
    {
        $park = Parking::find($parking_id);
        $park->delete();

        Alert::message('Parqueo eliminado exitósamente', 'danger');

        return redirect(route('owner.getParkings', $owner_id));
    }

    public function getChangeState($parking_id)
    {
        $parking = Parking::find($parking_id);
        if ($parking->state == true) $parking->state = false;
        else $parking->state = true;
        $parking->save();

        return redirect(route('owner.getParkings', $parking->owner_id));
    }
}