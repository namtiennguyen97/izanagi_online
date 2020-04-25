<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function index()
    {
    $item=  Item::all();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
    return view('admin.item.index',compact('item'));
    }

    public function create(){
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.item.create');
    }
    public function store(Request $request){
        $item= new Item();
        if (!$this->userCan('view-page-admin')) {
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
        $item->type = $request->type;
            $item->user_id = Auth::user()->id;
        $item->save();
        return redirect()->route('itemAdmin.index');
    }

    public function edit($id){

        $item = Item::findOrFail($id);
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.item.edit',compact('item'));
    }

    public function update(Request $request,$id){
        $item = Item::findOrFail($id);
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $item->name = $request->name;
        $item->stats = $request->stats;
        $currentImg = $item->image;
        if ($currentImg){
            Storage::delete('/public/'.$currentImg);
        }
        $image = $request->file('image');
        $pushImage = $image->store('images','public');
        $item->image = $pushImage;
        $item->save();
        return redirect()->route('itemAdmin.index');
    }

    public function destroy($id){
        $item = Item::findOrFail($id);
        $image = $item->image;
        if ($image){
            Storage::delete('/public/'.$image);
        }
        $item->delete();
        return redirect()->route('itemAdmin.index');
    }
}
