<?php
namespace App\Http\Controllers;

//use App\User;
use App\Models\UserJob; 
use Illuminate\Http\Response; 
use App\Traits\ApiResponser; 
use Illuminate\Http\Request; 

Class UserJobController extends Controller {
    // use to add your Traits ApiResponser
    use ApiResponser;

    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $userjob = UserJob::all();
        return $this->successResponse($userjob);
    }

    public function show($id)
    {
        $userjob = UserJob::findOrFail($id);
        return $this->successResponse($userjob);
    }
}