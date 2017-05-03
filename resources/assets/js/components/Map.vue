<template>
  <div id='map1'></div>
</template>

<script>
  import mapboxgl from 'mapbox-gl-vue';

  export default {
    data() {
      return {}
    },
    mounted() {
      this.createMap();
    // console.log('what');
  },
  methods: {
    createMap: function () {
      console.log('map here');

      mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';

      // init the map
      this.map = new mapboxgl.Map({
        container: 'map1',
        style: 'mapbox://styles/mapbox/light-v9',
        minzoom: 1.3,
        center: [-74.0073, 40.7124], // Manhattan
        zoom: 16
      })

      // this.map.addControl(new mapboxgl.Navigation())
    }
  }
}
</script>

<style>
  #map1{
    height: 400px;
  }
</style>
