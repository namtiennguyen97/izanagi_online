<?php

namespace App\Http\Controllers;

use App\BodyPageAdmin;
use App\Hint;
use App\Item;
use Illuminate\Http\Request;

class DisplayController extends Controller
{
    public function index(){
        $hint= Hint::all();
        $item = Item::all();
        $bodyPage = BodyPageAdmin::all();
        return view('mainIndex.index',compact('hint','item','bodyPage'));
    }
}
