<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        $data = [
            'response' => $projects,
            'success' => true
        ];

        return response()->json($data); //Mi permette di tradurre i dati in un file json
    }
}
