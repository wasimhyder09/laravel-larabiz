@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">Delete listing <span class="float-end"><a href="/dashboard" class="btn btn-success btn-sm">Back</a></span></div>
			<div class="card-body">
				<form action="/listings/{{ $listing->id }}" method="POST">
					@csrf
          @method('delete')
					<div class="mb-3">
						<p for="delete" class="form-label">Are you sure you want to delete <span class="fw-bolder fs-5">{{ $listing->name }}</span>?</p>
					</div>
					<input type="submit" class="btn btn-danger" value="Delete">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection