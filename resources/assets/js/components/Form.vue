<template>
	<div>
		<div class="block">
			<form>
				<div class="field is-horizontal">
					<div class="field-body">
						<div class="field is-grouped">
							<p class="control is-expanded">
								<input class="input is-medium" id="autoOrigin" type="text" placeholder="Origin" name="origin" required>
							</p>
						</div>
						<div class="field">
							<p class="control is-expanded">
								<input class="input is-medium" id="autoDestination" type="text" placeholder="Destination" name="dest" required>
							</p>
						</div>
						<button class="button is-medium is-primary" @click.prevent="submitForm">Search Loads</button>
					</div>
				</div>
			</form>
		</div>
		<div class="block">
			<bl-table :loads="loads" :auth="auth"></bl-table>
		</div>
	</div>
</template>

<script>
	export default {
		mounted() {
			console.log('Component mounted.')
		},
		data(){
			return {
				loads: [],
				auth: false,
			}
		},
		methods: {
			submitForm(){
				var origin = document.getElementById('autoOrigin').value;
				var destination = document.getElementById('autoDestination').value;
				var self = this;
				axios.get('/fetch', {
					params:{
						origin: origin,
						destination: destination,
					}
				})
				.then(function (response) {
					self.loads = response.data.loads;
					self.auth = response.data.auth;
				})
				.catch(function (error) {
					console.log(error);
				})
			}
		}
	}
</script>