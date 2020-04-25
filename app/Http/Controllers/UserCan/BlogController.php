<?php


namespace App\Http\Controllers\UserCan;


use App\Blog;
use App\Http\Controllers\Controller;
use App\Http\Service\Blog\BlogServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
//    protected $blogService;
//    public function __construct(BlogServiceInterface $blogService)
//    {
//        $this->blogService = $blogService;
//    }

    public function index()
    {
    $blog = Blog::all();
    return view('user.blog.index',compact('blog'));
    }

    public function create(){
        return view('user.blog.create');
    }

    public function store(Request $request){
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->content = $request->input('content');
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $pushImage = $image->store('images','public');
            $blog->image = $pushImage;
        }
        $owner= Auth::user()->id;
        $blog->user_id = $owner;
        $blog->save();
        return redirect()->route('user.blog.index');

    }
}
