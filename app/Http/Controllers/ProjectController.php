<?php

namespace App\Http\Controllers;

use App\Project;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // get all projects
        $projectsList = Project::all();
        // load the view and pass the list
        return view('projects.list')->with('projectsList', $projectsList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.add_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $rules = array(
        'name' => 'required|min:1|max:20|alpha',
        'description' => 'required',
      );
      $validator = Validator::make($request->all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('project/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          /*
          $nerd = new Nerd;
          $nerd->name       = Input::get('name');
          $nerd->email      = Input::get('email');
          $nerd->nerd_level = Input::get('nerd_level');
          $nerd->save();
          */
          return Redirect::to('project');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('projects.details_project');
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
