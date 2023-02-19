<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FichePictures;
use Validator;
use App\Annonce;
use App\Categorie;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
/*use Intervention\Image\Facades\Image;*/

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('categorie')){
            return "OKAY";
        }
        $posts = Annonce::with('categorie')->latest()->offset(0)->limit(3)->get();

        $connexes = Annonce::with('categorie')->latest()->simplePaginate(4);

        $artianglas = Annonce::with('categorie')->where('versions',"=","Anglaise")->latest()->Paginate(6);

        $artifrans = Annonce::with('categorie')->where('versions',"=","Française")->latest()->Paginate(6);

        $categories = Categorie::latest()->get();

        return view('annonces.show', compact(['connexes','posts']))
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
    public function show($annonce)
    {
        // $annonce = Annonce::with('categorie')->find($id)->where('versions',"=","Française");

        $annonce = Annonce::with('categorie')->where('slug','=',$annonce)->firstOrFail();
        // $annonce = Annonce::find($id);
        // $categorie = Categorie::find($id);
        return view('annonces.show',compact('annonce'));
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
                ->route('annonces.index')
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
                ->route('annonces.index')
                ->with('success','Annonce a été ajouter');
    }
}

/*composer require laravelcollective/html*/
