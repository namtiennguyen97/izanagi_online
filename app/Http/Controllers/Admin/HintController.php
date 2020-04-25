<?php


namespace App\Http\Controllers\Admin;


use App\Hint;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HintController extends Controller
{
    public function index()
    {
    $hint = Hint::all();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
    return view('admin.hint.index',compact('hint'));
    }

    public function create(){
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.hint.create');
    }

    public function store(Request $request){
        $hint = new Hint();
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $hint->title = $request->input('title');
        $hint->content = $request->input('content');
        $hint->save();
        return redirect()->route('hint.index');
    }

    public function destroy($id){

        $hint = Hint::findOrFail($id);
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $hint->delete();
        return redirect()->route('hint.index');
    }

    public function edit($id){
        $hint = Hint::findOrFail($id);
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        return view('admin.hint.edit', compact('hint'));
    }

    public function update(Request $request, $id){
        $hint = Hint::findOrFail($id);
        if (!$this->userCan('view-page-admin')) {
            return view('errors.er403');
        }
        $hint->title = $request->input('title');
        $hint->content = $request->input('content');
        $hint->save();
        return redirect()->route('hint.index');
    }
    public function homeing(){
        $hint = Hint::all();
        return view('mainIndex.index', compact('hint'));
    }
}
