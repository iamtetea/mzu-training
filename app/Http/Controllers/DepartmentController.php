<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depts = Department::with('branches')->orderBy('limit', 'asc')->get();
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
    public function store(DepartmentRequest $request)
    {
        $data = new Department();
        $data->name = $request->name;
        $data->branch = $request->branch;
        $data->limit = $request->limit;
        $data->code = $request->code;
        $data->is_active = $request->is_active == 'on' ? 1 : 0;

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
        // $data = Department::
        $data = Department::findOrFail($id);
        return view('department-details', compact('data'));
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
    public function update(DepartmentRequest $request, $id)
    {
        $data = Department::findOrFail($id);
        $data->name = $request->name;
        $data->branch = $request->branch;
        $data->limit = $request->limit;
        $data->code = $request->code;
        $data->is_active = $request->is_active == 'on' ? 1 : 0;
        $data->save();

        return redirect('/departments')->with('success', 'Department updated successfully');
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

    public function pages()
    {
        return view('pages');
    }
}
