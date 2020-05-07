<?php


namespace App\Http\Controllers\Admin;


use App\BlogCategories;
use App\BodyPageAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BodyPageController extends Controller
{
    public function index(){
        $bodyPage = BodyPageAdmin::all();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.bodyPageCRUD.index', compact('bodyPage'));
    }

    public function create(){
        $blogCategories = BlogCategories::all();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.bodyPageCRUD.create', compact('blogCategories'));
    }

    public function store(Request $request){
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $bodyPage = new BodyPageAdmin();
        $bodyPage->hint = $request->input('hint');
        $bodyPage->title = $request->input('title');
        $bodyPage->categories_id = $request->input('categories_id');
        if ($request->hasFile('image')){
          $bodyImage = $request->file('image');
          $pushImage = $bodyImage->store('images','public');
          $bodyPage->image = $pushImage;
        }
        $bodyPage->save();
        return redirect()->route('bodyPage.index');
    }

    public function edit($id){
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $bodyPage = BodyPageAdmin::findOrFail($id);
        return view('admin.bodyPageCRUD.edit', compact($bodyPage));
    }

    public function update($id, Request $request){
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $bodyPage = BodyPageAdmin::findOrFail($id);
        $bodyPage->hint = $request->input('hint');
        $bodyPage->title = $request->input('title');
        $bodyPage->categories_id = $request->input('categories_id');
        $currentImage = $bodyPage->image;
        if ($currentImage){
            Storage::delete('/public/'.$currentImage);
        }
        $bodyImage = $request->file('image');
        $pushImage = $bodyImage->store('images','public');
        $bodyPage->image = $pushImage;
        $bodyPage->save();
        return redirect()->route('bodyPage.index');
    }
    public function destroy($id){
        $bodyPage = BodyPageAdmin::findOrFail($id);
        $bodyPage->delete();
        return redirect()->route('bodyPage.index');
    }
}
