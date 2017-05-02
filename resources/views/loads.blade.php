@extends('layouts.app')

@section('navbar')
	@parent
@endsection

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-offset-1 is-2">
				@include('layouts.sidebar')
			</div>
			<div class="column is-offset-1 is-6">
				<h1 class="title is-3">Search Your Loads</h1>
				<bl-form></bl-form>
			</div>
		</div>
	</div>
</section>
@endsection