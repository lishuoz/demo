@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<nav class="panel">
					<p class="panel-heading">
						Filters
					</p>
					<label class="panel-block checkbox" disabled>
						<input type="checkbox" disabled>
						Van
					</label>
					<label class="panel-block">
						<input type="checkbox">
						Remember me
					</label>
					<div class="panel-block">
						<button class="button is-primary is-outlined is-fullwidth">
							Reset all filters
						</button>
					</div>
				</nav>
			</div>
			<div class="column">
				<div class="block">
					<form>
						<div class="field is-horizontal">
							<div class="field-body">
								<div class="field is-grouped">
									<p class="control is-expanded">
										<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" value="{{ $origin }}" required>
									</p>
								</div>
								<div class="field">
									<p class="control is-expanded">
										<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" value="{{ $dest }}" required>
									</p>
								</div>
								<button class="button is-medium is-primary">Search Loads</button>
							</div>
						</div>
					</form>
				</div>
			<!-- 	<table class="table">
					<thead>
						<tr>
							<th>AVAILABLE</th>
							<th>FROM</th>
							<th>TO</th>
							<th>SIZE</th>
							<th>TYPE</th>
						</tr>
					</thead>
					<tbody>
						
						@if(Auth::check())
						@foreach ($loads as $load)
						<tr>
							<td>{{ $load['date'] }}</td>
							<td>{{ $load['origin_city'] }}, {{ $load['origin_province'] }}</td>
							<td>{{ $load['destination_city'] }}, {{ $load['destination_province'] }}</td>
							<td>{{ $load['size'] }}</td>
							<td>{{ $load['type'] }}</td>
						</tr>
						@endforeach
						@else
						@foreach (array_slice($loads, 0, 5) as $load)
						<tr>
							<td>{{ $load['date'] }}</td>
							<td>{{ $load['origin_city'] }}, {{ $load['origin_province'] }}</td>
							<td>{{ $load['destination_city'] }}, {{ $load['destination_province'] }}</td>
							<td>{{ $load['size'] }}</td>
							<td>{{ $load['type'] }}</td>
						</tr>
						@endforeach
						@foreach (array_slice($loads, 5, count($loads)) as $load)
						<tr>
							<td>{{ $load['date'] }}</td>
							<td><a href="/test" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Login to see all results</a><form id="logout-form" action="/test" method="GET" style="display: none;">
								{{ csrf_field() }}
								<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" value="{{ $origin }}" required>
								<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" value="{{ $dest }}" required>
								<input type="text" name="returnUrl" value="{{ url()->current() }}">
							</form></td>
							
							<td></td>
							<td>{{ $load['size'] }}</td>
							<td>{{ $load['type'] }}</td>
						</tr>
						@endforeach
						@endif
						
					</tbody>
				</table> -->
				<bl-table :proploads="{{ json_encode($loads) }}" auth="{{Auth::check()}}"></bl-table>
			</div>
		</div>
	</div>
</div>
</section>



@endsection
@section('script-footer')
<script type="text/javascript">
	// $(document).ready(function(){
	// 	axios.get('/test')
	// 	.then(function (response) {
	// 		console.log();
	// 	})
	// 	.catch(function (error) {
	// 		console.log(error);
	// 	});

	// })
</script>
@endsection