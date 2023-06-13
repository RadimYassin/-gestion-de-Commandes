<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CommandeRequest;
use App\Models\Catégorie;
use App\Models\Commande;
use Laravel\Sail\Console\AddCommand;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $commands=Commande::all();
        return view("command.index",["commands"=> $commands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data=Catégorie::all();
        return  view("command.create",["data"=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommandeRequest $request)
    {
    $data=$request->validated();

    $data["image"]=$request->file("image")->store("gestionComande","public");

       Commande::create($data);
    return redirect()->route("commad.index");


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
        $commande=Commande::findOrfail($id);
        $data=Catégorie::all();
        // dd( $commande);
        return view("command.edite",["commande"=> $commande,"data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CommandeRequest $request, $id)
    {

        $commade= $request->Validated();
        // dump( $commade);
        //
        $oldommade=Commande::findOrfail($id);
        // dd($oldommade);

        if ($request->hasFile("image")) {
            $commade["image"]=$request->file("image")->store("gestionComande","public");
        }

        $oldommade->fill( $commade)->save();

        return redirect()->route("commad.index");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        // dd($id);
        $commade=Commande::findOrfail($id);
        $commade->delete();
        return redirect()->route("commad.index");
    }
}
