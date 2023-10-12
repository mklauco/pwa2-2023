<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $dep = Department::all();
        $depInfo['count'] = $dep->count();
        $depInfo['number_employees'] = $dep->sum('number_employees');
        $depInfo['average'] = $dep->average('number_employees');
        return view('departments.index')->with('departments', $dep)->with('depInfo',
        $depInfo);
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        //
        return view('departments.create');
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        //
    }
    
    /**
    * Display the specified resource.
    */
    public function show(string $id)
    {
        //
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(string $id)
    {
        //
        return view('departments.edit')->with('department', Department::find($id));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(Request $request, string $id)
    {
        //
    }
    
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(string $id)
    {
        Department::find($id)->delete();
        return redirect()->route('departments.index');
    }
}
