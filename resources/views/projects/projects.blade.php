@extends('layouts.template')

@section('title')
  Kunzisoft - Projects
@endsection

@section('content')
  <div class="container">
    <div class="panel panel-default">
      <table class="table table-bordered table-striped table-hover">
        <div class="panel-heading">
          <h3 class="panel-title">Projects that needs help</h3>
        </div>
        <thead>
          <tr class="info">
            <th>Name</th>
            <th>Description</th>
            <th>Contributors</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Kunzisoft</td>
            <td>Kunzisoft Web</td>
            <td>Me, Polau, Garfield</td>
          </tr>
          <tr>
            <td>Kunzisoft</td>
            <td>Kunzisoft Web</td>
            <td>Me, Polau, Garfield</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="col-lg-8 splash-form">
      <form action="https://kunzisoft.hosted.phplist.com/lists/?p=subscribe&amp;id=1" method="post" id="phplistsubscribeform">
        <input type="text" name="email" value="" id="emailaddress" />
        <button class="btn btn-default" type="submit" id="phplistsubscribe">Subscribe</button>
      </form>
    </div>
  </div>
@endsection
