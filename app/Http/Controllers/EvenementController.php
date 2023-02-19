<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FichePictures;
use Validator;
use App\Annonce;
use App\Evenement;
use Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Carbon\Carbon;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medias = Evenement::latest()->limit(6)->get();

        $mediacats = Evenement::select('categorie')->orderBy('categorie')->groupBy('categorie')->get();

        
        return view('media.index', compact(['medias','mediacats']))
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        
        $namcats = Evenement::select('categorie')
            ->where('categorie', $request->categorie)
            ->groupBy('categorie')
            ->orderByDesc('categorie')
            ->get();

        $mediacats = Evenement::select('date')
            ->where('categorie', $request->categorie)
            ->groupBy('date')
            ->orderByDesc('date')
            ->get();

        // dd($imagebydates);


        
        return view('media.categoryMedia',compact(['mediacats','namcats']));
    }

    public function mediafilre(Request $request)
    {
        $imagebydates = Evenement::where('date',"=",$request->date)->get();
        // dd($imagebydates);

        $videosbydates = Evenement::select('urls','image','type')->where('date',$request->date)->where('type','Vidéos')->get();

        
        $namcats = Evenement::select('categorie')
            ->where('date', $request->date)
            ->groupBy('categorie')
            ->orderByDesc('categorie')
            ->get();
        
        return view('media.detailGallery',compact(['imagebydates','videosbydates','namcats']));
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
        //
    }
}
