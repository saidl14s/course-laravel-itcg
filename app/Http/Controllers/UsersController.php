<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Jleon\LaravelPnotify\Notify;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User($request -> all());
        $user -> password = bcrypt($request -> password);
        $user -> save();

        Notify::info('Se ha registrado '.$user->name. ' de forma exitosa.');

        return redirect() -> route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user -> delete();

        Notify::success('El usuario '. $user->name .' a sido borrado de manera exitosa.');
        return redirect() -> route('users');
    }

    public function login(Request $request){
        $user = new User($request -> all());

        if(Auth::attempt(['email' => $user->email, 'password' => $user->password])){
            Notify::success('¡Bienvenido '. $user->name.'!');
            return redirect() -> route('users');
        }else{
            Notify::warning('Ocurrio un error, no se ha podido iniciar sesion ');
            return redirect() -> route('index');
        }

    }

    /*
    *   Ajax URL
    */
    public function getUsers(){
        $users = User::select('*');
        return Datatables::of($users)
                ->addColumn('actions', function ($users) {
                    return /*'<a href="'. route("users.edit", $users->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Modificar</a>*/
                    '<a href="'. route("users.destroy", $users->id).'" class="btn btn-xs btn-danger" onclick="return confirm('."'¿Esta seguro que desea eliminarlo?'".')"><i class="glyphicon glyphicon-trash"></i> Borrar</a>
                    '; })
                ->rawColumns(['actions'])
                ->make(true);
    }
}