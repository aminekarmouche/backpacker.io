<?php
/**
 * Created by PhpStorm.
 * User: Amine
 * Date: 15/07/2015
 * Time: 00:44
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class searchController extends Controller
{

    public function search()
    {
        //cities included
        $cities = array('CASABLANCA' => 'Casablanca',
            'RABAT' => 'Rabat',
            'MEKNES' => 'Meknes'
        );
        return view('pages.search', compact('cities'));
    }

    public function show()
    {

        return view('welcome');
    }

}