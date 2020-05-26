<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('portfolio', [
            
            'projects' => Project::latest()->paginate()
        ]);
    }

    public function show($id)
    {  
        return view('projects.show', [
           
            'project' => Project::find($id)
        ]);

        
    }

}