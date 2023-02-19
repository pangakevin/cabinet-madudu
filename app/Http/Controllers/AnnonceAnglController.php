<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FichePictures;
use Validator;
use App\Annonce;
use App\Categorie;
use App\AnnonceAngl;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
/*use Intervention\Image\Facades\Image;*/

class AnnonceAnglController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::with('categorie')->latest()->Paginate(10);

        $artianglas = Annonce::with('categorie')->where('versions',"=","Anglaise")->latest()->Paginate(10);

        $categories = Categorie::latest()->get();

        return view('annonces.annonceangl', compact(['annonces','artianglas','categories']))
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
        return view('annonces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validated = $request->validate();

        request()->validate([
            'titre' => 'required',
            'description'=>'required',
            'categorie_id'=>'required',
            'categorie_id'=>'required',
            'image'=>'required',


        ]);

            $annonce = new Annonce();


            $annonce->titre = $request->input('titre');
            $annonce->description = $request->input('description');
            $annonce->categorie_id = $request->input('categorie_id');
            $annonce->image = $request->file('image');

            if($annonce->image->isValid())
            {
                $chemin = config('images.profil');

                $extension = $annonce->image->getClientOriginalExtension();

                do {
                    $img = Str::random(10) . '.' . $extension;

                } while(file_exists($chemin . '/' . $img));

            if($annonce->image->move($chemin, $img)) {
                /*return view('photo_ok');*/
            }
            }
            $annonce->image = $img;

            $annonce->save();

        return redirect()->route('annonces.index')->with('success','Annonces had created ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $annonce = Annonce::find($id);
        $annonce = Annonce::find($id)->where('versions',"=","Française");
        $categorie = Categorie::find($id);
        return view('annonces.show',compact(['annonce','categories']));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $annonce = Annonce::find($id);

        return view('annonces.edit',compact('annonce'));
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
            'titre' => 'required',
            'description'=>'required',


        ]);

        Annonce::find($id)->update($request->all());

        return redirect()
                ->route('annonces.annonceangl')
                ->with('success','Annonce had created ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Annonce::find($id)->delete();
        return redirect()
                ->route('annonces.annonceangl')
                ->with('success','Annonce a été ajouter');
    }
}

/*composer require laravelcollective/html*/
