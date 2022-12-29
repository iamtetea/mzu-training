<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts = Department::all();
        return view('departments', compact('depts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        $request->validate([
            'name' => 'required',
            'branch' => 'required',
            'limit' => 'required',
            'code' => 'required',
        ]);

        $data = new Department();
        $data->name = $request->name;
        $data->branch = $request->branch;
        $data->limit = $request->limit;
        $data->code = $request->code;
        $data->is_active = $request->is_active == 'on' ? 1 : 0;

        // if ($request->is_active == 'on') {
        //     $data->is_active = 1;
        // } else {
        //     $data->is_active = 0;
        // }

        $data->save();
        return redirect('/departments')->with('success', 'Department saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Department::destroy($id);
        return redirect('/departments')->with('success', 'Department deleted successfully');
    }
}
