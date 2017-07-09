<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Request as R;

class RequestController extends Controller
{
    public function index()
    {
        $records = DB::table('test')
            ->where('active', 1)
            ->get()
        ;
        return view('request.index', [
            'records' => $records
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except(['_token', 'avatar']);
        $data['active'] = $request->get('active', 0);
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->store('img', 'images');
            $data['avatar'] = \Storage::disk('images')->url($path);
        }

        \DB::table('test')->insert($data);

        return redirect()->route('form');
    }
}
