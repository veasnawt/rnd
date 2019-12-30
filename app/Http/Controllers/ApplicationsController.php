<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;
use DataTables;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Applications::latest()->paginate(7);
        return view('applications', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addApplications');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'application_name' => 'required',
          'description'      => 'required',
          'icon'             => 'required|image|max:2048',
          'demo_file'        => 'required'
        ]);
        $icon = $request->file('icon');
        $demo_file = $request->file('demo_file');

        $new_icon_name = rand() . '.' . $icon->
            getClientOriginalExtension();
        $demo_file_name = $demo_file->getClientOriginalName();

        $icon->move(public_path('icons'), $new_icon_name);
        $demo_file->move(public_path('files'), $demo_file_name);

        $form_data = array(
          'application_name'  => $request->application_name,
          'description'       => $request->description,
          'icon'              => $new_icon_name,
          'demo_file'         => $demo_file_name
        );

        Applications::create($form_data);

        return redirect('applications')
                ->with('success', 'Application has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
