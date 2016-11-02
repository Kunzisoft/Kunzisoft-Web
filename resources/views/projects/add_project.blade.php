@extends('layouts.template')

@section('title')
  Kunzisoft - Add Project
@endsection

@section('content')

  <div class="section section-project">
    <div class="container">

      <div class="subhead">
        <h2 class="subhead-heading">Create a new project</h2>
        <p class="subhead-description">
          A project contains features and can be link to another tool
        </p>
      </div>

      <div class="row">
        {!! BootForm::open()->action(route('project.store')) !!}
          <div class="col-lg-8">
            <div class="well">
                {!! BootForm::text('Project Name', 'name')->placeholder('My Project'); !!}
                {!! BootForm::textarea('Description', 'description') !!}
                {!! BootForm::text('Required skills', 'skills') !!}
                {!! BootForm::text('Tags, Keywords', 'keywords') !!}
                {!! BootForm::text('Link Projects', 'linkProjects') !!}
                {!! BootForm::text('Collaborators', 'collaborators') !!}
            </div>
          </div>
          <div class="col-lg-4">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Links</h3>
              </div>
              <div class="panel-body">
                {!! BootForm::inputGroup('Github', 'github')->beforeAddon('<i class="fa fa-github"></i>') !!}
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            {!! BootForm::submit('Submit', 'btn-success') !!}
          </div>
        {!! BootForm::close() !!}
      </div>
    </div>
  </div>

@endsection
