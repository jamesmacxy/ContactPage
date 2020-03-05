@extends('layouts.master')

@section('content')

<section>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title">Contact</h5>
			<form action="{{ route('contact.store') }}" method="post">
				{{ csrf_field() }}
				<div class="row">
					<div class="form-group col-sm-6">
						<label for="firstname">Firstname:</label>
						<input type="text" name="firstname" id="firstname" class="form-control">
					</div>
					<div class="form-group col-sm-6">
						<label for="lastname">Lastname:</label>
						<input type="text" name="lastname" id="lastname" class="form-control">
					</div>
					<div class="form-group col-sm-12">
						<label for="email">Email:</label>
						<input type="email" name="email" id="email" class="form-control">
					</div>
					<div class="form-group col-sm-12">
						<label for="description">Message:</label>
						<textarea name="description" id="message" rows="5" class="form-control"></textarea>
					</div>
					<div class="col-sm-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					<input type="hidden" name="recaptcha" id="recaptcha">
				</div>
				@include('includes.form-error')
			</form>
		</div>
	</div>
</section>

@stop


<script src="https://www.google.com/recaptcha/api.js?render={{ RECAPTCHA_KEY }}"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('{{ RECAPTCHA_KEY }}', {action: '/'}).then(function(token) {
       document.getElementById('recaptcha').value = token;
    });
});
</script>
