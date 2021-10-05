<?php

namespace App\Http\Controllers;

use App\Slideshow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SlideshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$slide = Slideshow::all();
        //$slide = DB::table('slideshows')->paginate(10);
        $slide = Slideshow::orderBy('indice_lg','ASC')
            //->orderBy('langues','ASC')
            //->groupBy('level')
            ->get();
            //$slide->withPath('custom/url');


        return view('admin/slidedocument/slideshow',compact('slide'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //formulaire de novelle slide shows
        return view('admin/slidedocument/newslideform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Les messages
        $message_fr = [
            'slide.required'=> 'Vous devez mettre une images',
            'slide.max'    => 'The :attribute ne doit pas depasser cette valeur  :max.',
            'slide.mimes' => 'Le type format de l\'image n\'est pas accepter',

            'logo.required'=> 'The :attribute and :other must match.',
            'logo.max'    => 'The :attribute ne doit pas depasser cette valeur  :max.',
            'logo.mimes' => 'Le type format de l\'image n\'est pas accepter',

            'titlev.required'=> 'Le champ titre ne doit pas etre vide',


            'descdetail.required'=> 'The :attribute is require.',
            'descdetail.max'    => 'Le champs texte ne doit pas depasse les :max caracteres. ',


            'linkv.required'=> 'The :attribute is require.',
            'linkv.url'    => 'Ce n\'est pas un adresse url "http:www.google.com ou https:www.google.com"',

        ];



        //validator
        $request->validate([
            'slide'=>'required|mimes:PNG,JPG,JPEG,png,jpg,jpeg|max:2524',
            'logo'=>'required|mimes:PNG,JPG,png,jpg|max:900',
            'titlev'=>'required',
            'descdetail'=>'required|max:50',
            'linkv'=>'required|url'
        ],$message_fr);

        $nbr = time().'-'.date("Y").date("m").date("d");
        $exte_slide = $request->file(['slide'])->extension();
        $exte_logo = $request->file(['logo'])->extension();
        $newNameImage_slide = $nbr.'-slideshow';
        $newNameImage_logo =$nbr.'-logo';

        $filename_slide = md5_file($request->file('slide')->getRealPath()).$newNameImage_slide.'.'.$exte_slide;
        $filename_logo = md5_file($request->file('logo')->getRealPath()).$newNameImage_logo.'.'.$exte_logo;


        //dd($request->titlev);


        $slide = Slideshow::create([
            'titleview'=>$request->titlev,
            'imgslide'=>$filename_slide,
            'imglogo'=>$filename_logo,
            'contentsd'=>$request->descdetail,
            'link'=>$request->linkv,
            'status'=>$request->stv,
        ]);
        if($slide==true){
            //sauvegarde du fichier dans un repertoire
            $request->file('slide')->storeAs('assets/img/slideshow/',$filename_slide,'public_perso');
            $request->file('logo')->storeAs('assets/img/slideshow/',$filename_logo,'public_perso');

            //update indice avec last id 

            //copier indice id pour duplicaquer les autre langues

            //il faut qu'il duplicate les elements pour la table multilangues
            //on va creer une tables qui va ajouter les (Une seule table pour les autre langues)
        }



        //dd($lastid=$slide->id);

        return redirect(route('slideview'));








        //test code
        //$request->file('slide')->store('assets/img/slideshow/','public_perso');
        //$request->file('logo')->store('assets/img/slideshow/','public_perso');




        //dd($newNameImage_slide);


        //insertion des donnees
        //dd($request->request,$request->files);
        // dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function show($slideshow)
    {
        //Visualisation par ID
        $id = $slideshow;
        $value = Slideshow::find($id);
        //dd($value);
        return view('admin/slidedocument/viewbyidslideshow',compact('value'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function edit(Slideshow $slideshow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slideshow $slideshow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slideshow  $slideshow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slideshow $slideshow)
    {
        //
    }
}
