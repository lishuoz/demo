<template>

  <div id='vuemap'></div>
</template>

<script>
  export default {
    data() {
      return {}
    },
    mounted() {
      this.createMap();
    },
    methods: {
      createMap: function () {
        mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';

      // init the map
      map = new mapboxgl.Map({
        container: 'vuemap',
        style: 'mapbox://styles/mapbox/light-v9',
        minzoom: 1.3,
        center: [-74.0073, 40.7124], // Manhattan
        zoom: 16
      })
    }
  }
}
</script>

<style>
  #vuemap{
    height: 400px;
  }
</style>
