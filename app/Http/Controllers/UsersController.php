<?php

namespace App\Http\Controllers;
use App\Models\proyect;
use App\Http\Requests\SaveProjectRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{    
    public function __construct()
        {
            $this->middleware('auth')->except('index', 'show');

        }
    


 
    public function index()
    {
        return view('users.index',[
            'proyectos' => User::latest()->paginate()

        ]);
    }


    public function show()
    {
      return "Hola";

    }

    public function create()
    {
        return view('users.create',[
            'user' => new User
        ]);

    }

    public function store(SaveProjectRequest $request)
    {
     
        
         User::create( $request->validated());// titulo url desc, aproved => true

        return redirect()->route('show-users')->with('status',"Usuario añadido correctamente");
    }

    public function edit(Users $user)
    {
        return view('user.edit',[
            'users' => $user
        ]);

    }
    

    public function update(Proyect $proyect, SaveProjectRequest $request){
        
         $proyect->update($request->validated());
         return redirect()->route('proyects.show',$proyect)->with('status','Proyecto actualizado correctamente');

    }


    public function destroy(Proyect $proyect){
       $proyect->delete();

       return redirect()->route('proyects.index')->with('status','Proyecto eliminado correctamente');

   }

   
}
