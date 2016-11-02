@extends('layouts.template')

@section('title')
  Kunzisoft - Projects
@endsection

@section('content')
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Projects that needs help</h3>
            </div>
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>Popularity</th>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Contributors</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>****</td>
                  <td>Kunzisoft</td>
                  <td>Kunzisoft Web</td>
                  <td>Me, Polau, Garfield <span class="badge">3</span></td>
                </tr>
                <tr>
                  <td>***</td>
                  <td>Kunzisoft</td>
                  <td>Kunzisoft Web</td>
                  <td>Me, Polau, Garfield</td>
                </tr>
                @foreach($nerds as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->popularity }}</td>
                        <td>
                            <!-- show -->
                            <a class="btn btn-small btn-success" href="{{ URL::to('projects/' . $value->id) }}">Show</a>

                            <!-- edit -->
                            <a class="btn btn-small btn-info" href="{{ URL::to('projects/' . $value->id . '/edit') }}">Edit</a>

                            <!-- delete -->
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
                <td>**** <span class="badge">3</span></td>
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
