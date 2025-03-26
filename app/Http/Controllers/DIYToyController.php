<?php
namespace App\Http\Controllers;

use App\Models\DIYToy;
use Illuminate\Http\Request;

class DIYToyController extends Controller
{
    public function index()
    {
        $toys = DIYToy::all(); // Retrieve all toys from the database
        return view('diy.index', compact('toys'));
    }

    public function show($id)
    {
        $toy = DIYToy::findOrFail($id); // Retrieve the toy by ID
        return view('diy.show', compact('toy'));
    }

}
