<template>
  <div :id="'vuemap'+id"></div>
</template>

<script>
  export default {
    props:['id', 'init', 'origin', 'destination'],
    data() {
      return {
      }
    },
    mounted() {

    },
    watch: {
      init: function(){
        this.createMap();
      }
    },
    methods: {
      createMap() {
        mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';

      // init the map
      var map = new mapboxgl.Map({
        container: 'vuemap'+this.id,
        style: 'mapbox://styles/mapbox/light-v9',
        minzoom: 3.5,
        center: [-79.3832, 43.6532], // Toronto
        zoom: 10
      })

      var mapOrigin = this.origin;
      var mapDestination = this.destination;

      map.on('load', function() {
        directions.setOrigin(mapOrigin);
        directions.setDestination(mapDestination); 
        map.resize();
      })

      var directions = new MapboxDirections({
        accessToken: mapboxgl.accessToken,
        profile: 'driving',
        controls: {
          'inputs': false,
          'instructions': false,
        },
      });

      map.addControl(directions);

    }
  }
}
</script>

<style>

</style>
