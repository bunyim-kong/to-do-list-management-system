<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    //
    public function index()
    {
        $testsData = Test::all();
        return view('test.index', compact('testsData'));
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $ph = $request->input('phone_number');

        Test::create([
            'name'=>$name,
            'phone_number'=>$ph,
        ]);

        return view('test.index')->with('success', 'Data created successfully!');
    }

    public function edit($id) {
        $test = Test::findOrFail($id);
        return view('test.edit', compact('test'));
    }

    public function update(Request $request, Test $test)
    {
        dd($test);
        $test->update([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
        ]);

        return view('test.index')->with('success', 'Data updated successfully!');
    }
}
