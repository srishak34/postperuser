<?php

namespace App\Http\Controllers;

use App\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function index()
    {
        $items = test::all();
        return response()->json($items);
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(test $test)
    {
        //
    }

    
    public function edit(test $test)
    {
        //
    }

    
    public function update(Request $request, test $test)
    {
        //
    }

    
    public function destroy(test $test)
    {
        //
    }
}
