<?php

namespace App\Http\Controllers;

use App\Models\Audition;
use App\Models\MyModel;
use App\Models\MyUser;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        if(isset($_SESSION['Login']) && isset($_SESSION['Password'])  )
        {
            $this->user = MyUser::find($_SESSION['Id']);
            $models = DB::table("models")->get();
            return view('admin.index', array("page" => 1, "user" => $this->user, "data" => $models, 'isAdmin' => $_SESSION['isAdmin']));
        }
        else{
            return redirect('/registration');
        }
    }

   
    /**
     * Show the page
     */
    public function getModel(int $id)
    {
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password'])  )
        {   
            $model = MyModel::find($id);
            $this->user = MyUser::find($_SESSION['Id']);
            
            return view("admin.page", array("page" => 1, "isAdmin" => $_SESSION['isAdmin'], "obj" => $model, "user" => $this->user));
        }
    }

    public function gallery(int $id)
    {
        $portfolios = Portfolio::all();
        $modelPortfolios = null;
        $hasPhoto = false;
        foreach ($portfolios as $p) {
            if ($p->ModelId == $id) {
                $hasPhoto = true;
                $modelPortfolios[] = $p;
            }
        }

        return view('portfolio.gallery', array("page" => 1, 'data' => $modelPortfolios, "count" => $hasPhoto ? count($modelPortfolios) : 0));
    }
    /**
     * Show the table of audition
     */
    public function casting()
    {
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password'])  )
        {            
            $this->user = MyUser::find($_SESSION['Id']);
            $auditions = DB::table('auditions')->get();
            return view('admin.casting', array("page" => 2, "user" => $this->user, "isAdmin" => $_SESSION['isAdmin'], "data" => $auditions));
        }
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
        session_start();
        $a = new Audition();
        $id = intval($request->Id);
        $a = Audition::find($id);
        $model = new MyModel();
        $model->Name = $a->Name;
        $model->Surname = $a->Surname;
        $model->DateOfBirth = $a->DateOfBirth;
        $model->Bust = $a->Bust;
        $model->Waist = $a->Waist;
        $model->Hips = $a->Hips;
        $model->Height = $a->Height;
        $model->HairColor = $a->HairColor;
        $model->EyeColor = $a->EyeColor;
        $model->Country = $a->Country;
        $model->City = $a->City;
        $model->Phone = $a->Phone;
        $model->Email = $a->Email;
        $model->InstagramNickname = $a->InstagramNickname;
        if (!is_dir(public_path()."/assets/models/".$a->Name."_". $a->Surname."_photos"))
            mkdir(public_path()."/assets/models/".$a->Name."_". $a->Surname."_photos");
        $p1 = basename($a->PhotoOne);
        $p2 = basename($a->PhotoTwo);
        $p3 = basename($a->PhotoThree);
        $p4 = basename($a->PhotoFour);
        copy($a->PhotoOne, public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p1);
        copy($a->PhotoTwo, public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p2);
        copy($a->PhotoThree, public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p3);
        copy($a->PhotoFour, public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p4);
        $model->PhotoOne = public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p1;
        $model->PhotoTwo = public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p2;
        $model->PhotoThree = public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p3;
        $model->PhotoFour = public_path()."/assets/models/".$a->Name."_".$a->Surname."_photos/".$p4;

        unlink($a->PhotoOne);
        unlink($a->PhotoTwo);
        unlink($a->PhotoThree);
        unlink($a->PhotoFour);
        rmdir(public_path()."/assets/auditions/".$a->Name."_".$a->Surname."_photos/");
        
        if(is_dir(public_path()."/assets/auditions/".$a->Name."_".$a->Surname."_photos/"))
            rmdir(public_path()."/assets/auditions/".$a->Name."_".$a->Surname."_photos/");
        Audition::find($a->Id)->delete();

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
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password'])  )
        {            
            $audition = Audition::find($id);
            
            $this->user = MyUser::find($_SESSION['Id']);
            return view("admin.show", array("page" => 2, "user" => $this->user, "isAdmin" => $_SESSION['isAdmin'], "obj" => $audition));
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
    public function delete($id)
    {

        $a = Audition::find($id);
        unlink($a->PhotoOne);
        unlink($a->PhotoTwo);
        unlink($a->PhotoThree);
        unlink($a->PhotoFour);
        if(is_dir(public_path()."/assets/auditions/".$a->Name."_".$a->Surname."_photos/"))
            rmdir(public_path()."/assets/auditions/".$a->Name."_".$a->Surname."_photos/");
        $a->delete();
        return redirect("/casting");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Audition::find($id);
        return redirect("/admin");
    }
}
