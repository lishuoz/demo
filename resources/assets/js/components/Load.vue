<template>
  <div class="card load-card">
    <header class="card-header" @click="show = !show">
      <p class="card-header-title">
        <span class="column ">
          <small>AVAILABLE</small>
          <p class="title is-4">{{load.date}}</p>
        </span>
        <span class="column">
          <small>ORIGIN</small>
          <p class="title is-4">{{load.origin_city}}, {{load.origin_province}}</p>
        </span>
        <span class="column">
          <small>DESTINATION</small>
          <p class="title is-4">{{load.destination_city}}, {{load.destination_province}}</p>
        </span>
      </p>
      <a class="card-header-icon">
        <span class="icon">
          <i class="fa fa-angle-down" v-if="!show" ></i>
          <i class="fa fa-angle-up" v-if="show"></i>
        </span>
      </a>
    </header>
    <div class="card-content" v-show="show" >
      <div class="content columns">
        <div class="column is-one-third">
          <small>TYPE</small>
          <p class="title is-4">{{load.type}}</p>
        </div>
        <div class="column is-one-third">
          <small>SIZE</small>
          <p class="title is-4">{{load.size}}</p>
        </div>
        <div class="column is-one-third">
          <small>RATES</small>
          <p class="title is-4"><span class="tag is-medium is-success">+ 5.00%</span></p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['load'],
    mounted() {
      console.log('Component mounted.')
    },
    data(){
      return {
        show: false,
      }
    }
  }
</script>
<style>
/*    .card-header-column{
      padding: 0 !important;
    }*/
  .load-card{
    margin: 10px auto;
  }
</style>