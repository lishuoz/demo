@extends('layouts.app')

@section('navbar')
@parent
@endsection

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-2">
				<bl-menu default-item="loads"></bl-menu>
			</div>
			<div class="column is-10">
				<h1 class="title is-3">Search Your Loads</h1>
				<div class="columns">
					<div class="column is-8">
						<form action="/loads" method="get" class="block">
							<div class="field is-horizontal">
								<div class="field-body">
									<div class="field is-grouped">
										<p class="control is-expanded">
											<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" value="{{ empty($origin) ? '' : $origin }}" required autofocus>
										</p>
									</div>
									<div class="field">
										<p class="control is-expanded">
											<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" value="{{ empty($destination) ? '' : $destination }}" name="destination" required>
										</p>
									</div>
									<button class="button is-medium is-primary">Search Loads</button>
								</div>
							</div>
						</form>

						@if(!empty($loads))
						<bl-loadlist :loads="{{json_encode($loads)}}" :auth="{{json_encode(Auth::check())}}"></bl-loadlist>
						@endif

					</div>
					<div class="column is-4">
						<div class="box animated fadeInUp">
							<nav class="level">
								<div class="is-pulled-left has-text-left">
									<p class="heading">Loads This Month</p>
									<p class="title">24,638</p>
								</div>
								<div class="is-pulled-right has-text-right">
									<p class="heading">Total Loads Last Month </p>
									<p class="title">429,779</p>
								</div>
							</nav>
							<progress class="progress is-primary is-large" id="loads-progress" value="30" max="100">30%</progress>
						</div>
						<div class="box animated fadeInUp">
							<h2 class="title is-5"><strong>March 2017 Top Active Lanes</strong></h2>
							<table class="table">
								<thead>
									<tr>
										<th>Origin</th>
										<th>Destination</th>
										<th>Search</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Regina</td>
										<td>Toronto</td>
										<td><a href="/loads?origin=Regina%2C+SK%2C+Canada&destination=Toronto%2C+ON%2C+Canada" class="button is-outlined is-primary">Search</a></td>
									</tr>
									<tr>
										<td>Toronto</td>
										<td>Regina</td>
										<td><a href="/loads?origin=Toronto%2C+ON%2C+Canada&destination=Regina%2C+SK%2C+Canada" class="button is-outlined is-primary" class="button is-outlined is-primary">Search</a></td>
									</tr>
									<tr>
										<td>Moncton</td>
										<td>Halifax</td>
										<td><a href="loads?origin=Moncton%2C+NB%2C+Canada&destination=Halifax%2C+NS%2C+Canada" class="button is-outlined is-primary">Search</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection