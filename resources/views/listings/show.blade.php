@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ $listing->name }} <span class="float-end"><a href="/" class="btn btn-success btn-sm">Back</a></span></div>
        <div class="card-body">
          <table class="table table-striped">
            <tr>
              <td>Email: {{ $listing->email }}</td>
            </tr>
            <tr>
              <td>Phone #: {{ $listing->phone }}</td>
            </tr>
            <tr>
              <td>Website: <a target="_blank" href="{{ $listing->website }}">{{ $listing->name }}</a></td>
            </tr>
            <tr>
              <td>Address: {{ $listing->address }}</td>
            </tr>
            <tr>
              <td>Bio: {{ $listing->bio }}</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
