<?php

namespace App\Http\Controllers;
use App\Useers;
use Illuminate\Http\Request;

class UseerController extends Controller
{


    public function store(){

$data=new Useers();

$data->pseudo=request('pseudo');
$data->gender=request('gender');
$data->password=request('password');
            $data->save();


        return redirect()->back()->with('alert', 'Compte crée avec succès!');      
    }



public function test(){


    dd('test');
}

}
