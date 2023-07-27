<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subjects;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects=Subjects::get();
        return view('Subjects.index',[
            'subjects' => $subjects,
        ]);

    }

    public function create()
    {
        return view('Subjects.create');
    }

   
    public function store(Request $request){


            //use Illuminate\Support\Facades\Hash;
    
            $request->validate([
                'name' => 'required',
                'intensity' => 'required',
            ],
            [
                'name.required' => 'El nombre de la materia es requerido',
            ],
            [
                'intensity.required' => 'La intensidad de la materia es requerida',
            ]


    );
        $subject= new Subjects;
        $subject->name = $request->name;
        $subject->intensity = $request->intensity;
        $subject->save();
        return back();
    }

    public function edit($id)
    {

        $subject = Subjects::where('id',$id)->first();

        return view('Subjects.edit',[
            'subject' => $subject,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'intensity' => 'required',
        ],
        [
            'name.required' => 'El nombre de la materia es requerido',
        ],
        [
            'intensity.required' => 'La intensidad de la materia es requerida',
        ]
            

);
    $subject = Subjects::where('id',$id)->first();
    $subject->name = $request->name;
    $subject->intensity = $request->intensity;
    $subject->save();
    return url();

    }


    public function delete($id)
    {
        Subjects::where('id',$id)->delete();
        return back();
    }


}
