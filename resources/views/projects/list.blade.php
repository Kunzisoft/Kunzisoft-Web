@extends('layouts.template')

@section('title')
  Kunzisoft - Projects
@endsection

@section('content')
  <div class="section">
    <div class="container">

      <ul class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active"><a href="{{route('project.index')}}">Projects</a></li>
      </ul>

      <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Projects that needs help</h3>
            </div>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Contributors</th>
                  <th>Popularity</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($projectsList as $key => $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->description }}</td>
                        <td>Me, Polau, Garfield <span class="badge">3</span></td>
                        <td class="td-rating"><input type="hidden" class="rating" data-fractions="2" value="{{ $value->popularity/20 }}" data-readonly /></td>
                        <td class="text-center">
                            <a class="btn btn-sm btn-primary" href="{{ URL::to('project/' . $value->id) }}"><span class="glyphicon glyphicon-tasks"></a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">My contribution</h3>
            </div>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Contributors</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kunzisoft</td>
                  <td>Me, Polau, Garfield <span class="badge">3</span></td>
                </tr>
                <tr>
                  <td>Kunzisoft</td>
                  <td>Me, Polau, Garfield</td>
                </tr>
              </tbody>
            </table>
          </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">My donations</h3>
          </div>
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Donation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Kunzisoft</td>
                <td><input type="hidden" class="rating" data-filled="glyphicon glyphicon-heart" data-empty="glyphicon glyphicon-heart-empty" data-fractions="2" value="{{ $value->popularity/20 }}" data-readonly />&ensp;<span class="badge">3</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">My submitted features</h3>
          </div>
          <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Popularity</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Kunzisoft</td>
                <td>***** <span class="badge">3</span></td>
              </tr>
              <tr>
                <td>Kunzisoft</td>
                <td>*****</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </div>

    <div class="text-center">
      <ul class="pagination pagination-centered">
        <li><a href="#">&laquo;</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </div>

  </div>
</div>

@endsection
