<?php

namespace App\Http\Controllers;

use App\Book;
use App\Test;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    public function all()
    {
        $test = Test::where('id', '>=', 2)->get();

        foreach ($test as $t){
            echo $t->getUpperName();
        }

        dd($test);
    }

    public function createRecord()
    {
        // Способ номер 5
        $dozer = Test::firstOrNew([
            'name' => 'Tom3',
            'email' => 'tom@gmail.com',
            'age' => 23,
            'description' => 'lomer ipsum text',
            'avatar' => '/images/img/e3mK8qkmZsinFOq3Qj6T9zmZswgpOJGsuBvL0gv1.jpeg'
        ]);
        $dozer->save();

        // Способ номер 4
        /*$dozer = Test::firstOrCreate([
            'name' => 'Tom2',
            'email' => 'tom@gmail.com',
            'age' => 23,
            'description' => 'lomer ipsum text',
            'avatar' => '/images/img/e3mK8qkmZsinFOq3Qj6T9zmZswgpOJGsuBvL0gv1.jpeg'
        ]);*/

        // Способ номер 3
        /*$test = new Test([
            'name' => 'Dozer',
            'email' => 'dozer@gmail.com',
            'age' => 45,
            'description' => 'lomer ipsum text',
            'avatar' => '/images/img/e3mK8qkmZsinFOq3Qj6T9zmZswgpOJGsuBvL0gv1.jpeg'
        ]);

        $test->save(); // для того что бы сохранить запись нужно будет вызвать метод save*/


        // Способ номер 2
        /*Test::create([
            'name' => 'Tom',
            'email' => 'tom@gmail.com',
            'age' => 23,
            'description' => 'lomer ipsum text',
            'avatar' => '/images/img/e3mK8qkmZsinFOq3Qj6T9zmZswgpOJGsuBvL0gv1.jpeg'
        ]);*/


        // Способ номер 1
        /*$test = new Test();

        $test->name = 'John';
        $test->email = 'john@gmail.com';
        $test->age = 23;
        $test->description = 'lomer ipsum text';
        $test->avatar = '/images/img/e3mK8qkmZsinFOq3Qj6T9zmZswgpOJGsuBvL0gv1.jpeg';

        $test->save();*/

        return view('home');
    }

    public function validateAction()
    {
        /*$array = [
            'sex' => 'asdasd',
            'drink' => 'asdasd',
            'gandom' => 'six',
            'dance' => 'asd'
        ];

        $validator = \Validator::make($array, [
            'sex' => 'required|boolean',
            'drink' => 'required|in:vodka,konina,vino',
            'gandom' => 'required|regex:/\d+/',
            'dance' => 'in:striptiz,polka'
        ]);

        if($validator->fails()){
            dd($validator->errors());
        }else{
            echo "нету ошибок";
        }

        die;*/

        return view('model.validate');
    }

    public function storeData(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'age' => 'required|numeric|between:18,45'
        ]);
        Book::create($request->all());

        return redirect()->back();
    }

    public function relation()
    {
        $users = Test::all();

        return view('model.relation', [
            'users' => $users
        ]);
       /* $john = Test::find(2);
        $phones = [
            '+375 29 7776666',
            '+375 29 7776667',
            '+375 29 7776668',
            '+375 29 7776669',
        ];

        foreach ($phones as $phone) {
            $john->phones()->create(['phone_number' => $phone]);
        }

        dd($john);*/
    }

    public function belongs()
    {
        $phones = \App\Phone::get();

        return view('model.belongs', [
            'phones' => $phones
        ]);
    }
}
