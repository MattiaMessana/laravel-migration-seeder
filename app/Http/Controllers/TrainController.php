<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {
        //ordeBy di default è asc
        $trains = Train::orderBy('date_ticket')->get(); //con metodo all non posso ordinare le query perchè è un metodo statico , quindi ho utilizzato il metodo get
        return view('trains' , compact('trains'));
    }
}
