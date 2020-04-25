<?php


namespace App\Http\Controllers\UserCan;


use App\Categories;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $item=  Item::all();
        if (!$this->userCan('view-page-guest')) {
            return view('errors.er403');
        }
    return view('user.items.index',compact('item'));
    }
// truyen category vao
//    public function category(){
//        $category = Categories::all();
//        return view('user.items.create',compact('category'));
//    }

    public function create(){
        if (!$this->userCan('view-page-guest')) {
            return view('errors.er403');
        }
        $category = Categories::all();
        return view('user.items.create', compact('category'));
    }
    public function store(Request $request){
        $item = new Item();
        if (!$this->userCan('view-page-guest')) {
            return view('errors.er403');
        }
        $item->name = $request->name;
        $item->stats = $request->stats;
        //upload anh len sv
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $pushImage = $image->store('images','public');
            $item->image = $pushImage;
        }
        $item->user_id = Auth::user()->id;
        $item->type_items = $request->input('type_items');
        $item->save();
        return redirect()->route('user.items.index');
    }
}
