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
        {!! BootForm::open() !!}
        <div class="col-lg-8">
          <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
            </button>
            <button type="button" class="btn btn-default">
              <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Star
            </button>
          </div>
            {!! BootForm::text('Project Name', 'name') !!}
            {!! BootForm::textarea('Description', 'description') !!}
            {!! BootForm::text('Required skills', 'skills') !!}
            {!! BootForm::text('Tags, Keywords', 'keywords') !!}
            {!! BootForm::text('Link Projects', 'linkProjects') !!}
            {!! BootForm::text('Collaborators', 'collaborators') !!}
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
          {!! BootForm::submit('Submit') !!}
        </div>
        {!! BootForm::close() !!}
      </div>
    </div>
  </div>

@endsection
