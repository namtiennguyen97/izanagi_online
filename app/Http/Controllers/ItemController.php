<?php

namespace App\Http\Controllers;

use App\Hint;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item =Item::all();
        return view('clientView.items', compact('item'));
    }

}
