@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Listings <span class="float-end"><a href="/listings/create" class="btn btn-success btn-sm">Add listing</a></span></div>
        <div class="card-body">
          @if (count($listings))
            <table class="table table-striped">
              <tr>
                <th>Company</th>
                <th><span class="float-end">Actions</span></th>
              </tr>
              @foreach ($listings as $listing)
                <tr>
                  <td>{{ $listing->name }}</td>
                  <td><a href="/listings/{{ $listing->id }}" class="btn btn-info btn-sm float-end">View</a></td>
                </tr>
              @endforeach
            </table>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
