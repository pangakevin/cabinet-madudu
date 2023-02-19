<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\FichePictures;
use Validator;
use App\Document;
use Image;
Use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $filtres = Document::latest()->orderBy('nom')->get();
        $filtres = Document::select('type')->orderBy('type')->groupBy('type')->get();

        $docs = Document::latest()->orderBy('id','desc')->Paginate(10);

        $countdocs = DB::table('documents')->where('type',"=","Communiqué")->count();
        $countarrets = DB::table('documents')->where('type',"=","Arreté")->count();

        // $communiques = Document::where('type',"=","Communiqué")->latest()->Paginate(2);
        return view('documents.index', compact(['filtres','docs','countdocs','countarrets']))
                ->with('i',(
                    request()
                    ->input('page',1) -1) *5
                );
    }

    public function filtres()
    {
        // $filtres = Document::latest()->orderBy('nom')->get();
        $filtrs = Document::select('type')->orderBy('type')->groupBy('type')->get();

        // $communiques = Document::where('type',"=","Communiqué")->latest()->Paginate(2);
        return view('documents.resultdoc', compact('filtrs'))
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
        //
    }

    public function searchdoc(Request $request)
    {


        $queries = Document::where("nom","like","%$request->search%")
        ->where("type","like","%$request->categorie%")
        ->orWhereBetween("date",[$request->date_in, $request->date_out])
        ->get();

        $types = Document::all();
        $filtres = Document::select('type')->orderBy('type')->groupBy('type')->get();

        $nbrsearch = $queries->count();

        return view('documents.resultdoc', compact(['queries','filtres']))
                ->with('i',(
                    request()
                    ->input('page',1) -1) *5
                );

    }
}
