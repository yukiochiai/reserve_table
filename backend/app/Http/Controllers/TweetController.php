<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

public function index(Request $request)
{
    $items = DB::select('select * from people');
    return view('tweet.index', ['items'-> $items]);
}
class TweetController extends Controller
{
    //
}
