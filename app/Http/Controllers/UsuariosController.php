<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;
use App\Models\Roles;
use App\Http\Requests\CreateUsuariosRequest;


class UsuariosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     
    public function index()
    {
        //
       

       
        return view('user.index',[
            'roles'=>Roles::pluck('nombre','id'),
            'usuarios'=>User::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( CreateUsuariosRequest $request)
    {
       
        //return User::create([
       /* 'nombre' => $request['nombre'],
        'apellido' => $request['apellido'],
        'email' => $request['email'],
        'direccion' => $request['direccion'],
        'fechaNacimiento' => $request['fechaNacimiento'],
        'password' => Hash::make($request['password']),
       ]);*/
       User::create($request->validated());

      return redirect()->route('usuarios.index')->with('status', 'Se ha creado el usuario correctamente.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuarios)
    {
  
        return view('user.show',[
            'usuario' => $usuarios
        ]);
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuarios)
    {
        

        return view('user.edit',[
            'usuario' => $usuarios,
            'roles'=>Roles::pluck('nombre','id'),
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $usuarios )
    {
        //
        
        $usuarios->update([
            'nombre'=>request('nombre'),
            'apellido'=>request('apellido'),
            'direccion'=>request('direccion'),
            'fechaNacimiento'=>request('fechaNacimiento'),
            'roles_id'=>request('roles_id'),
        ]);
        return redirect()->route('usuarios.show',$usuarios)->with('status', 'Se usuario se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuarios)
    {
        //
        $usuarios->delete();
        return redirect()->route('usuarios.index')->with('status', 'Se ha eliminado correctamente.');
    }
}
