@extends('layouts.template')

@section('title')
  Kunzisoft - Add Project
@endsection

@section('content')

  <div class="section section-project">
    <div class="container">

      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><a href="{{route('project.index')}}">Projects</a></li>
        <li class="active">{{ $project->name }}</li>
      </ul>

      <div class="row">
          <div class="col-lg-8">
            <div class="well">
              <div class="alert alert-warning" role="alert">
                <h4>Warning!</h4>
                Edit project information can cause instabilities and break the links used by project stakeholders.
              </div>
                {!! BootForm::open()->action(route('project.update', $project))->put() !!}
                {!! BootForm::text('Project Name', 'name')->defaultValue($project->name); !!}
                {!! BootForm::textarea('Description', 'description')->rows('2')->cols('10')->defaultValue($project->description) !!}
                {!! BootForm::text('Required skills', 'skills') !!}
                {!! BootForm::text('Tags, Keywords', 'keywords') !!}
                {!! BootForm::text('Link Projects', 'linkProjects') !!}
                {!! BootForm::text('Collaborators', 'collaborators') !!}
                {!! BootForm::submit('Edit', 'btn-success') !!}
                {!! BootForm::close() !!}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">Delete</h3>
              </div>
              <div class="panel-body">
                Delete a project is final, you cannot recover information after deletion.
                {!! BootForm::open()->action(route('project.destroy', $project->id))->delete() !!}
                {!! BootForm::submit('Delete', 'btn-danger') !!}
                {!! BootForm::close() !!}
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>

@endsection
