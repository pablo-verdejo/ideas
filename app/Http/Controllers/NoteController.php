<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $listanotas = DB::table('notes')->get();
        return view('home',compact('listanotas'));
    }

    public function mostrar(){
        $listanotas = DB::table('notes')->get();
        return view('home',compact('listanotas'));
    }

    public function recibir(Request $request) {
        $datos=$request->except('_token','Crear');
        DB::table('notes')->insertGetId(['title'=>$datos['title'],'description'=>$datos['description']]);
        return redirect('home');
    }

    public function actualizar($id){
        // first --- sirve para filtrar
        $notas=DB::table('notes')->where('id','=',$id)->first();
        return view('actualizar',compact('notas'));
        //return response()->json($alumno);
    }

    public function modificar($id,Request $request){
        //recibimos los datos
        $notas = $request->except('_token','Enviar','_method');
        //return $notas;
        //Insertar los datos en la base de datos
        DB::table('notes')->where('id','=',$id)->update($notas);
        //Mostrar la vista mostrar
        return redirect('home');
    }

    public function borrar($id) {
        //return $id;
        DB::table('notes')->Where('id', '=', $id)->delete();
        //envio a la ruta mostrar
        return redirect('home'); 
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
