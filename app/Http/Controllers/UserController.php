<?php

namespace App\Http\Controllers;

use App\Models\Subjects;
use App\Models\UserSubject;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $users=User::where('role_id',2)->get();
        return view('Users.index',[
            'users' => $users,
        ]);

    }

    public function create()
    {
        return view('Users.create');
    }

   
    public function store(Request $request){
            
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'password' => 'required',
            ],
            [
                'name.required' => 'El nombre del usuario es requerido',
            ],
            [
                'email.required' => 'El email es requerido',
            ],            
            [
                'phone.required' => 'El celular del usuario es requerido',
            ],
            [
                'password.required' => 'Contraseña requerida',
            ]



    );
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->save();
        return back();
    }

    public function edit($id)
    {

        $user = User::where('id',$id)->first();

        return view('Users.edit',[
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ],
        [
            'name.required' => 'El nombre del usuario es requerido',
        ],
        [
            'email.required' => 'El email es requerido',
        ],            
        [
            'phone.required' => 'El celular del usuario es requerido',
        ],
        [
            'password.required' => 'Contraseña requerida',
        ]


);
    $user = User::where('id',$id)->first();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = $request->password;
    $user->save();
    return back();
    }

    public function delete($id)
    {
        User::where('id',$id)->delete();
        return back();
    }

    public function enrrollSubjects($id)
    {
        $user = User::where('id',$id)->first();
        $subjects = Subjects::get();
        return view('Users.enrroll',[
            'user' => $user,
            'subjects' =>$subjects,
        ]); 
    }

    public function storeEnrrolle(Request $request, $id)
    {
        $request->validate([
            'selectEnrroll' => 'required',

        ],
        [
            'selectEnrroll.required' => 'El campo es requerido',
        ]
        );  
        $pepito = new UserSubject;
        $pepito->user_id = $id;
        $pepito->subject_id = $request->selectEnrroll;
        $pepito->save();
        return back(); 
        
    }

}
