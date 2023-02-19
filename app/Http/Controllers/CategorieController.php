<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\FichePictures;
// use Validator;
use App\Person;
use App\Categorie;
// use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CategorieController extends Controller
{
     public function index()
    {
        $categories = Categorie::latest()->Paginate(2);

        return view('annonces.index', compact('categories'))
                ->with('i',(
                    request()
                    ->input('page',1) -1) *5
                );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nom' => 'required',
            'description'=>'required',


        ]);

            $categorie = new Categorie();


            $categorie->nom = $request->input('nom');
            $categorie->description = $request->input('description');

            $categorie->save();

        return redirect()->route('categories.index')->with('success','Categorie had created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = Categorie::find($id);
        return view('categories.show',compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorie = Categorie::find($id);

        return view('categories.edit',compact('categorie'));
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
        request()->validate([
            'nom' => 'required',
            'description'=>'required',


        ]);

        Categorie::find($id)->update($request->all());

        return redirect()
                ->route('categories.index')
                ->with('success','Categorie had created ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categorie::find($id)->delete();
        return redirect()
                ->route('categories.index')
                ->with('success','Categorie a été ajouter');
    }
}
