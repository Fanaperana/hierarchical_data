<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;
use Mockery\Matcher\Any;

class RepositoryController extends Controller
{
    //
    public function index(Request $request, $_id=1) {
        $repository = Repository::where('id', 1)->get();

        return view('welcome')->with([
            'repository' => $repository
        ]);
    }
}
