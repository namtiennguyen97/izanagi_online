<?php

namespace App\Http\Controllers;

use App\Hint;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function userCan($action, $option = NULL)
    {
        $user = Auth::user();
        return \Illuminate\Support\Facades\Gate::forUser($user)->allows($action, $option);
    }

}
