<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use App\Models\MyUser;
use App\Models\Portfolio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public $isAdmin = true;
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
            $this->isAdmin = $_SESSION['isAdmin'];
            $this->user = MyUser::find($_SESSION['Id']);
            $models = MyModel::all();
            $page = 5;
            if(!$this->isAdmin)
            $page=3;
            return view('portfolio.index', array("page" => $page, "user" => $this->user, "isAdmin" => $this->isAdmin, 'data'=>$models));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        session_start();
        if(isset($_SESSION['Login']) && isset($_SESSION['Password'])  )
        {   
            $portfolios = DB::table('portfolios')->get();
            $this->user = MyUser::find($_SESSION['Id']);
            $models = DB::table('models')->get();
            return view("portfolio.table", array('page'=> 6, "user" => $this->user, 'isAdmin' => $_SESSION['isAdmin'], 'data' => $portfolios, 'model' => $models));
        }
    }

    // public function gallery(int $id)
    // {
    //     session_start();
    //     $portfolios = Portfolio::all();
    //     $modelPortfolios = null;
    //     foreach($portfolios as $p)
    //     {
    //         if($p->ModelId == $id)
    //         {
    //             $modelPortfolios[] = $p;
    //         }
    //     }
    //     return view('portfolio.gallery', array("page" => 1, "isAdmin" => $_SESSION['isAdmin'], 'data' => $modelPortfolios));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = intval($request->modelSelect);

        $model = MyModel::find($id);
        $portfolio = new Portfolio();

        if(!is_dir(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos"))
            mkdir(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos");
        $photoPath = "";
        if($request->file("photo") != null){
            $filename = $request->file("photo")->getClientOriginalName();
            $request->file("photo")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos", $filename);
            $photoPath = "/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
        }
        $portfolio->ImagePath = $photoPath;

        $portfolio->ModelId = $id;
        $portfolio->save();
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
        session_start();
        $portfolio = Portfolio::find($id);
        $models = MyModel::all();
        $this->user = MyUser::find($_SESSION['Id']);
        return view("portfolio.edit", array('page' => 6, "user" => $this->user, 'isAdmin' => $_SESSION['isAdmin'], 'object' => $portfolio, 'data' => $models));
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

        $portfoliio = Portfolio::find($id);
        $idModel = intval($request->modelSelect);
        $model = MyModel::find($idModel);
        $portfoliio->ModelId = $idModel;
        if ($request->photo != null) {
            if (file_exists(public_path().$portfoliio->ImagePath))
                unlink(public_path().$portfoliio->ImagePath);
            $filename = $request->file("photo")->getClientOriginalName();
            $request->file("photo")->move(public_path()."/assets/models/".$model->Name."_".$model->Surname."_photos",$filename);
            $portfoliio->ImagePath = "/assets/models/".$model->Name."_".$model->Surname."_photos/".$filename;
            
        }
        $portfoliio->save();
        return redirect("/portfolio/create");
    }

    public function delete(int $id)
    {
        $portfolio = Portfolio::find($id);
        if(file_exists(public_path().$portfolio->ImagePath))
            unlink(public_path().$portfolio->ImagePath);
        Portfolio::find($id)->delete();
        return redirect("/portfolio/create");
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
