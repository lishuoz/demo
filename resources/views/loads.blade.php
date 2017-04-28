@extends('layouts.app')

@section('content')
<section class="section">
	<div class="container">
		<div class="columns">
			<div class="column is-3">
				<nav class="panel">
					<p class="panel-heading">
						
					</p>
					<div class="panel-block">
						<p class="control has-icons-left">
							<input class="input is-small" type="text" placeholder="Search">
							<span class="icon is-small is-left">
								<i class="fa fa-search"></i>
							</span>
						</p>
					</div>
					<p class="panel-tabs">
						<a class="is-active">All</a>
						<a>Public</a>
						<a>Private</a>
						<a>Sources</a>
						<a>Forks</a>
					</p>
					<a class="panel-block is-active">
						<span class="panel-icon">
							<i class="fa fa-book"></i>
						</span>
						bulma
					</a>
					<a class="panel-block">
						<span class="panel-icon">
							<i class="fa fa-book"></i>
						</span>
						marksheet
					</a>
					<a class="panel-block">
						<span class="panel-icon">
							<i class="fa fa-book"></i>
						</span>
						minireset.css
					</a>
					<a class="panel-block">
						<span class="panel-icon">
							<i class="fa fa-book"></i>
						</span>
						jgthms.github.io
					</a>
					<a class="panel-block">
						<span class="panel-icon">
							<i class="fa fa-code-fork"></i>
						</span>
						daniellowtw/infBoard
					</a>
					<a class="panel-block">
						<span class="panel-icon">
							<i class="fa fa-code-fork"></i>
						</span>
						mojs
					</a>
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
			<div class="column is-6">
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
				@foreach ($loads as $load)
				<div class="block">
					<div class="card">
						<div class="card-content">
							<div class="content">
								Available: <strong>{{ $load['date'] }}</strong>
								<br>
								From: <strong>{{ $load['origin_city'] }}, {{ $load['origin_province'] }}</strong>
								<br>
								To: <strong>{{ $load['destination_city'] }}, {{ $load['destination_province'] }}</strong>
								<br>
								Truck Type: <strong>{{ $load['type'] }}</strong>
								<br>
								Size: <strong>{{ $load['size'] }}</strong>
							</div>
						</div>
						<footer class="card-footer">
							<a class="card-footer-item">Get This Load</a>
						</footer>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
</section>



@endsection
@section('script-footer')
<script type="text/javascript">
	$(document).ready(function(){
		axios.get('/test')
		.then(function (response) {
			console.log();
		})
		.catch(function (error) {
			console.log(error);
		});

	})
</script>
@endsection