<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with(['technologies', 'type'])->paginate(4);
        $data = [
            'results' => $projects,
            'success' => true
        ];

        return response()->json($data); //Mi permette di tradurre i dati in un file json
    }

    public function show(string $slug)
    {
        $project = Project::with(['type', 'technologies'])->where('slug', $slug)->first();
        $data = [
            'results' => $project,
            'success' => true
        ];

        if($project){
            return response()->json($data);

        }else{
            $data['success'] = false;
            return response()->json($data, 404);
            
        }

    }
}
