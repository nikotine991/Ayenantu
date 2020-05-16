 <?php

namespace App\Http\Controllers;

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
        $portfolio = [
            ['title' => 'Proyecto #1'],
            ['title' => 'Proyecto #2'],
            ['title' => 'Proyecto #3'],
            ['title' => 'Proyecto #4'],
            ['title' => 'Proyecto #5']
        ];
        return view('portfolio', compact('portfolio'));
    }

}