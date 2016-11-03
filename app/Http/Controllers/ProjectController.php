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
        return view('projects.create');
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
        'name' => 'required|min:1|max:20|alpha_num',
        'description' => 'required|max:250',
      );
      $validator = Validator::make($request->all(), $rules);

      // process the login
      if ($validator->fails()) {
          return Redirect::to('project/create')
              ->withErrors($validator)
              ->withInput(Input::except('password'));
      } else {
          // store
          $projectToSave = new Project;
          $projectToSave->name = Input::get('name');
          $projectToSave->description = Input::get('description');
          $projectToSave->popularity = 50; // 50% at start
          $projectToSave->save();
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
        // get the project
        $projectGet = Project::find($id);
        // show the view and pass the project to it
        return view('projects.details')->with('project', $projectGet);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the project
        $projectGet = Project::find($id);
        // show the edit form and pass the nerd
        return view('projects.edit')->with('project', $projectGet);
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
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'name' => 'required', //TODO validation
            'description' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('project/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $projectToUpdate = Project::find($id);
            $projectToUpdate->name = Input::get('name');
            $projectToUpdate->description = Input::get('description');
            $projectToUpdate->save();

            return Redirect::to('project/' . $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $projectToDelete = Project::find($id);
      $projectToDelete->delete();

      // redirect
      //Session::flash('message', 'Successfully deleted the project!');
      return Redirect::to('project');
    }
}
