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
				<nav class="level">
					<div class="is-pulled-left has-text-left">
						<p class="heading">Loads This Month </p>
						<p class="title">24,638</p>
					</div>
					<div class="is-pulled-right has-text-right">
						<p class="heading">Total Loads Last Month </p>
						<p class="title">429,779</p>
					</div>
				</nav>
				<progress class="progress is-primary is-large" id="loads-progress" value="30" max="100">30%</progress>

				<bl-form></bl-form>
			</div>
		</div>
	</div>
</section>
@endsection