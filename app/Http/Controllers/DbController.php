<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DbController extends Controller
{
    public function insert()
    {
        $data = [
            [
                'name' => 'Neo',
                'age' => 23,
                'email' => 'neo@gmail.com',
                'active' => 1,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Tank',
                'age' => 43,
                'email' => 'tank@gmail.com',
                'active' => 1,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
            [
                'name' => 'Trinity',
                'age' => 143,
                'email' => 'trinity@gmail.com',
                'active' => 0,
                'description' => 'lorem ipsum dolor sit',
                'created_at' => new \DateTime(),
                'updated_at' => new \DateTime(),
            ],
        ];
        DB::table('test')->insert($data);

        return view('db.all');
    }

    public function select()
    {
        $test = DB::table('test')
            ->where('name', 'like', '%ne%')
            ->max('age');

        /*foreach($test as $t){
            echo $t->name . ' ' . $t->email .'<br>';
        }*/

        // dd($test);

        return view('db.all');
    }

    public function update()
    {
        DB::table('test')
            ->where('id', '=', 1)
            ->update(['name' => 'John'])
        ;
        return view('db.all');
    }

    public function delete()
    {
        DB::table('test')
            ->whereIn('id', [1, 3])
            ->delete()
        ;

        return view('db.all');
    }
}
