<?php

namespace App\Http\Controllers;

use App\Models\Audition;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.create', array("page"=> 3));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $audition = new Audition();
        $name = $request->name;
        $surname = $request->surname;
        $dateOfBirth = $request->date;
        $bust = $request->bust;
        $waist = $request->waist;
        $hips = $request->hips;
        $height = $request->height;
        $hairColor = $request->hair;
        $eyeColor = $request->eye;
        $country = $request->country;
        $city = $request->city;
        $phone = $request->phone;
        $email = $request->email;
        $instagramNickname = $request->inst;
        if(!is_dir(public_path()."/assets/auditions/".$name."_".$surname."_photos"))
            mkdir(public_path()."/assets/auditions/".$name."_".$surname."_photos");
        $photo1 = "";
        $photo2 = "";
        $photo3 = "";
        $photo4 = "";
        if($request->file("photo1") != null){
            $filename = $request->file("photo1")->getClientOriginalName();
            $request->file("photo1")->move(public_path()."/assets/auditions/".$name."_".$surname."_photos", $filename);
            $photo1 = public_path()."/assets/auditions/".$name."_".$surname."_photos/".$filename;
        }
        if($request->file("photo2") != null){
            $filename = $request->file("photo2")->getClientOriginalName();
            $request->file("photo2")->move(public_path()."/assets/auditions/".$name."_".$surname."_photos", $filename);
            $photo2 = public_path()."/assets/auditions/".$name."_".$surname."_photos/".$filename;
        }
        if($request->file("photo3") != null){
            $filename = $request->file("photo3")->getClientOriginalName();
            $request->file("photo3")->move(public_path()."/assets/auditions/".$name."_".$surname."_photos", $filename);
            $photo3 = public_path()."/assets/auditions/".$name."_".$surname."_photos/".$filename;
        }
        if($request->file("photo4") != null){
            $filename = $request->file("photo4")->getClientOriginalName();
            $request->file("photo4")->move(public_path()."/assets/auditions/".$name."_".$surname."_photos", $filename);
            $photo4 = public_path()."/assets/auditions/".$name."_".$surname."_photos/".$filename;
        }


        $audition->Name = $name;
        $audition->Surname = $surname;
        $audition->DateOfBirth = date("Y-m-d", strtotime($dateOfBirth));
        $audition->Bust = $bust;
        $audition->Waist = $waist;
        $audition->Hips = $hips;
        $audition->Height = $height;
        $audition->HairColor = $hairColor;
        $audition->EyeColor = $eyeColor;
        $audition->Country = $country;
        $audition->City = $city;
        $audition->Phone = $phone;
        $audition->Email = $email;
        $audition->InstagramNickname = $instagramNickname;
        $audition->PhotoOne = $photo1;
        $audition->PhotoTwo = $photo2;
        $audition->PhotoThree = $photo3;
        $audition->PhotoFour = $photo4;

        $audition->save();
        return redirect("/");
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
}
