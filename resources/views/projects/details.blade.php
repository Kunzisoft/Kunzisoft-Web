@extends('layouts.template')

@section('title')
  Kunzisoft - Projects
@endsection

@section('content')
<div class="section">
  <div class="container">

    <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="{{route('project.index')}}">Projects</a></li>
      <li class="active">{{ $project->name }}</li>
    </ul>

    <div class="subhead">
      <div class="pull-left">
          <h2 class="subhead-heading">{{ $project->name }}&emsp;<small><input type="hidden" class="rating" data-fractions="2" value="{{ $project->popularity/20 }}" /></small></h2>
      </div>
      <div class="pull-right">

        <div class="btn-group pull-right" role="group">
          <div class="btn-group dropdown-notifications sw-open">
            <a href="#" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown">
              Last change
              <span class="badge">3</span>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa fa-th"></i> View all changes</a></li>
            </ul>
          </div>
          <a class="btn btn-sm btn-default" href="{{ URL::to('project/' . $project->id . '/edit') }}"><span class="glyphicon glyphicon-cog"></span></a>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <div class="well">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#home" data-toggle="tab">Description</a></li>
            <li><a href="#home" data-toggle="tab">Tender Spec</a></li>
            <li class="disabled"><a>Gantt</a></li>
            <li><a href="#home" data-toggle="tab">Code</a></li>
            <li><a href="#home" data-toggle="tab">Documentation</a></li>
            <li><a>TODO <span class="badge">3</span></a></li>
            <li><a href="#home" data-toggle="tab">Contributors <span class="badge">5</span></a></li>
          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="home">
              <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <p>Best to link project with git manager. <a class="btn btn-sm btn-primary" href="{{ URL::to('project/') }}">Link Git</a></p>
              </div>
              <p>{{ $project->description }}</p>
            </div>
            <div class="tab-pane fade" id="profile">
              <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
            </div>
            <div class="tab-pane fade" id="dropdown1">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
            </div>
            <div class="tab-pane fade" id="dropdown2">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

@endsection
