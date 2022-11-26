@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-8">
		<div class="card">
			<div class="card-header">Create listing <span class="float-end"><a href="/dashboard" class="btn btn-success btn-sm">Back</a></span></div>
			<div class="card-body">
				<form action="/listings" method="POST">
					@csrf
					<div class="mb-3">
						<label for="name" class="form-label">Name</label>
						<input type="text" name="name" class="form-control" placeholder="Company name">
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="text" name="email" class="form-control" placeholder="johndoe@example.com">
					</div>
					<div class="mb-3">
						<label for="phone" class="form-label">Phone #</label>
						<input type="text" name="phone" class="form-control" placeholder="+92 300 1234567">
					</div>
					<div class="mb-3">
						<label for="websitee" class="form-label">Company website</label>
						<input type="text" name="website" class="form-control" placeholder="http://example.com">
					</div>
					<div class="mb-3">
						<label for="address" class="form-label">Address</label>
						<input type="text" name="address" class="form-control" placeholder="Address">
					</div>
					<div class="mb-3">
						<label for="bio" class="form-label">Bio</label>
						<textarea type="textarea" name="bio" class="form-control" rows="5" placeholder="About the company"></textarea>
					</div>
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection