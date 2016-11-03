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
            <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
            <li><a href="#specs" data-toggle="tab">Tender Spec</a></li>
            <li class="disabled"><a href="#planning" data-toggle="tab">Gantt</a></li>
            <li><a href="#code" data-toggle="tab">Code</a></li>
            <li><a href="#doc" data-toggle="tab">Documentation</a></li>
            <li><a href="#todo" data-toggle="tab">TODO <span class="badge">3</span></a></li>
            <li><a href="#team" data-toggle="tab">Team <span class="badge">6</span></a></li>
            <li><a href="#contributors" data-toggle="tab">Contributors <span class="badge">5</span></a></li>
          </ul>

          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="description">
              <div class="alert alert-dismissible alert-warning">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>Warning!</h4>
                <p>Best to link project with git manager. <a class="btn btn-sm btn-primary" href="{{ URL::to('project/') }}">Link Git</a></p>
              </div>
              <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="..." alt="logo {{ $project->name }}">
                    <div class="caption">
                      <h4>Thumbnail label</h4>
                      <p>
                        <a href="#" class="btn btn-sm btn-default" role="button">
                          <span class="glyphicon glyphicon-picture"></span>
                        </a>
                        #Tag1 #Tag3
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4">
                  <p>{{ $project->description }}</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="specs">
              <div id="tree"></div>
              <ul class="list-group">
                <li class="list-group-item node-tree" data-nodeid="0">
                  <span class="icon expand-icon glyphicon glyphicon-indent-right"></span>
                  <span class="icon node-icon"></span>
                  Création d'un super projet
                  <span class="badge">60%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-warning" style="width: 60%"></div>
                  </div>
                </li>
              </ul>
              <div class="form-group">
                <label class="control-label">New specification</label>
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input class="form-control" type="text">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Add</button>
                  </span>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="planning">
              <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
            </div>
            <div class="tab-pane fade" id="code">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
            <div class="tab-pane fade" id="doc">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
            <div class="tab-pane fade" id="todo">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
            <div class="tab-pane fade" id="team">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
            <div class="tab-pane fade" id="contributors">
              <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

@endsection
