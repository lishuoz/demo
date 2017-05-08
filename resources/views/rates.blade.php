@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-2">
				<bl-menu default-item="rates"></bl-menu>
			</div>
			<div class="column is-10">
				<h1 class="title is-3">Calculate Your Rate</h1>
				<div class="columns">
					<div class="column is-8">
						<bl-calculator></bl-calculator>
					</div>
					<div class="column is-4">
						<div class="box">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection