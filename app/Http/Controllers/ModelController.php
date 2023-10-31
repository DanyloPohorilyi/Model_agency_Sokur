<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use App\Models\MyUser;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use PhpParser\Node\Stmt\Echo_;

class ModelController extends Controller
{
    public MyUser $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password']) )
        {
            $this->user = MyUser::find($_SESSION['Id']);
            return view("admin.addModel", array("page" => 3, "user" => $this->user, "isAdmin" => $_SESSION['isAdmin']));
        }
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

        $model = new MyModel();
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

        $exist = MyModel::where("Name", $name)->where("Surname", $surname)->first();
        if ($exist) {
            return redirect("/casting");
        }

        if (!is_dir(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos"))
            mkdir(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos");
        $photo1 = "";
        $photo2 = "";
        $photo3 = "";
        $photo4 = "";
        if ($request->file("photo1") != null) {
            $filename = $request->file("photo1")->getClientOriginalName();
            $request->file("photo1")->move(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos", $filename);
            $photo1 = public_path() . "/assets/models/" . $name . "_" . $surname . "_photos/" . $filename;
        }
        if ($request->file("photo2") != null) {
            $filename = $request->file("photo2")->getClientOriginalName();
            $request->file("photo2")->move(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos", $filename);
            $photo2 = public_path() . "/assets/models/" . $name . "_" . $surname . "_photos/" . $filename;
        }
        if ($request->file("photo3") != null) {
            $filename = $request->file("photo3")->getClientOriginalName();
            $request->file("photo3")->move(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos", $filename);
            $photo3 = public_path() . "/assets/models/" . $name . "_" . $surname . "_photos/" . $filename;
        }
        if ($request->file("photo4") != null) {
            $filename = $request->file("photo4")->getClientOriginalName();
            $request->file("photo4")->move(public_path() . "/assets/models/" . $name . "_" . $surname . "_photos", $filename);
            $photo4 = public_path() . "/assets/models/" . $name . "_" . $surname . "_photos/" . $filename;
        }

        $model->Name = $name;
        $model->Surname = $surname;
        $model->DateOfBirth = date("Y-m-d", strtotime($dateOfBirth));
        $model->Bust = $bust;
        $model->Waist = $waist;
        $model->Hips = $hips;
        $model->Height = $height;
        $model->HairColor = $hairColor;
        $model->EyeColor = $eyeColor;
        $model->Country = $country;
        $model->City = $city;
        $model->Phone = $phone;
        $model->Email = $email;
        $model->InstagramNickname = $instagramNickname;
        $model->PhotoOne = $photo1;
        $model->PhotoTwo = $photo2;
        $model->PhotoThree = $photo3;
        $model->PhotoFour = $photo4;
        $model->Description = $request->description;

        $model->save();
        return redirect("/admin");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    public function showModel()
    {
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password']) )
        {   
            $this->user = MyUser::find($_SESSION['Id']);
            $models = MyModel::all();
            return view("model.show", array('page' => 4, "user" => $this->user, 'isAdmin' => $_SESSION['isAdmin'], 'data' => $models));
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        session_start();
        $model = MyModel::find($id);
        $this->user = MyUser::find($_SESSION['Id']);
            return view('model.edit', array('page' => 4, "user" => $this->user, 'isAdmin' => $_SESSION['isAdmin'], 'object' => $model));
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

        $model = MyModel::find($id);
        $model->Name = $request->name;
        $model->Surname = $request->surname;
        $model->DateOfBirth = $request->date;
        $model->Bust = $request->bust;
        $model->Waist = $request->waist;
        $model->Hips = $request->hips;
        $model->Height = $request->height;
        $model->HairColor = $request->hair;
        $model->EyeColor = $request->eye;
        $model->Country = $request->country;
        $model->City = $request->city;
        $model->Phone = $request->phone;
        $model->Email = $request->email;
        $model->InstagramNickname = $request->inst;
        $model->Description = $request->description;

        if ($request->photo1 != null) {
            if (file_exists($model->PhotoOne))
                unlink($model->PhotoOne);
            $filename = $request->file("photo1")->getClientOriginalName();
            $request->file("photo1")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos",$filename);
            $model->PhotoOne = public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
        }
        if ($request->photo2 != null) {
            if (file_exists($model->PhotoTwo))
                unlink($model->PhotoTwo);
            $filename = $request->file("photo2")->getClientOriginalName();
            $request->file("photo2")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos", $filename);
            $model->PhotoTwo = public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
        }
        if ($request->photo3 != null) {
            if (file_exists($model->PhotoThree))
                unlink($model->PhotoThree);
            $filename = $request->file("photo3")->getClientOriginalName();
            $request->file("photo3")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos",$filename);
            $model->PhotoThree = public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
        }
        if ($request->photo4 != null) {
            if (file_exists($model->PhotoFour))
                unlink($model->PhotoFour);
            $filename = $request->file("photo4")->getClientOriginalName();
            $request->file("photo4")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos", $filename);
            $model->PhotoFour = public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
        }

        $model->save();
        return redirect("/getModel");
    }

    public function delete(int $id)
    {
        $model = MyModel::find($id);
        if(file_exists($model->PhotoOne))
            unlink($model->PhotoOne);
        if(file_exists($model->PhotoTwo))
        unlink($model->PhotoTwo);
        if(file_exists($model->PhotoThree))
        unlink($model->PhotoThree);
        if(file_exists($model->PhotoFour))
        unlink($model->PhotoFour);

        $portfolios = DB::table('portfolios')->where('ModelId', "=", $id)->get();
        
        foreach ($portfolios as $value) {
            if(file_exists(str_replace("\\","/",public_path()).$value->ImagePath))
                unlink(str_replace("\\","/",public_path()).$value->ImagePath);
        }
        foreach ($portfolios as  $value) {
            Portfolio::find($value->Id)->delete();
        }
        
        if(is_dir(public_path()."/assets/auditions/".$model->Name."_".$model->Surname."_photos/"))
            rmdir(public_path()."/assets/auditions/".$model->Name."_".$model->Surname."_photos/");
        if(is_dir(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/"))
            rmdir(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos/");
        $model->delete();
        return redirect("/getModel");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

    }
}
