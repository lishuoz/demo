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
						<bl-form></bl-form>
					</div>
					<div class="column is-4">
						<div class="box">
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
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection