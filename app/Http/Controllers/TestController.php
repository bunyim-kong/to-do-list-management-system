<?php

namespace App\Http\Controllers;

use App\Models\Task;        
use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index()
    {
        return view('tests.index');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $phone_number = $request->input('phone_number');

        Test::create([
            'name' => $name,
            'number' => $phone_number,
            
        ]);

        // You can perform any necessary operations with the data here, such as saving it to the database.

        return redirect()->route('tests.index')->with('success', 'Data submitted successfully!');
    }
}
