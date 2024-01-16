<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class personController extends Controller
{
    public function index(){
        $people = Person::all()->toArray();
        foreach ($people as &$person) {
            $person['link'] = route('person.destroy', $person['id']);
        }
        $data['title'] = "Person";
        $data['person'] = $people;
        return view('person.index', $data);
    }

    public function store(Request $request){
        $person = Person::create($request->only(['fname', 'lname']));
        return response()->json([
            'success' => true,
            'data' => $person->toArray(),
        ]);
    }

    public function destroy(Person $person){
        $person->delete();
        return response()->json([
            'success' => true,
        ]);
    }

    public function edit(Person $person,Request $request){
        $model = new Person();
        $update = $model->updatePartial($person->id, $request->only(['fname', 'lname']));
        return response()->json([
            'success' => true,
            'data' => $update->toArray(),
        ]);
    }

    public function hello(){
        return "Hello World";
    }
}
