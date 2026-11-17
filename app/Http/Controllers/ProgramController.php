<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function getallproject()
    {
        $project = Project::all();
        return view('project', [
            'projects' => $project,
        ]
        );
    }
}
