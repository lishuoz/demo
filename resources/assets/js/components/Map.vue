<template>
  <div :id="'vuemap'+id"></div>
</template>

<script>
  export default {
    props:['id', 'init'],
    data() {
      return {}
    },
    mounted() {
      
    },
    watch: {
      init: function(){
        this.createMap();
      }
    },
    methods: {
      createMap: function () {
        mapboxgl.accessToken = 'pk.eyJ1IjoibGlzaHVveiIsImEiOiJjaW8xdHQzNXIxYWx1dWdseTcxZG1wYzJmIn0.cUxYf1SfN7aEOUJjcjqCXA';

      // init the map
      var map = new mapboxgl.Map({
        container: 'vuemap'+this.id,
        style: 'mapbox://styles/mapbox/light-v9',
        minzoom: 3.5,
        center: [-74.0073, 40.7124], // Manhattan
        zoom: 10
      })

      map.on('load', function() {
        map.resize();
      })

    }
  }
}
</script>

<style>

</style>
