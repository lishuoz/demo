<template>
  <div class="card load-card">
    <header class="card-header" @click="show = !show">
      <p class="card-header-title">
        <span class="column ">
          <p class="subtitle is-6"><small>AVAILABLE</small>
          </p>
          <p class="title is-5"><strong>{{load.date}}</strong></p>
        </span>
        <span class="column">
          <p class="subtitle is-6"><small>ORIGIN</small>
          </p>
          <p class="title is-5"><strong>{{load.origin_city}}, {{load.origin_province}}</strong></p>
        </span>
        <span class="column">
          <p class="subtitle is-6"><small>DESTINATION</small></p>
          <p class="title is-5"><strong>{{load.destination_city}}, {{load.destination_province}}</strong></p>
        </span>
      </p>
      <a class="card-header-icon">
        <span class="icon">
          <i class="fa fa-angle-down" v-if="!show"></i>
          <i class="fa fa-angle-up" v-if="show"></i>
        </span>
      </a>
    </header>
    <div class="card-content" v-show="show" >
      <div class="content columns is-multiline">
        <div class="column is-full">
          <bl-map :id="id" class="authed-load-map" :init="!show"></bl-map>
        </div>
        <div class="column is-one-quarter">
          <small>TYPE</small>
          <p class="title is-5"><strong>{{load.type}}</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>SIZE</small>
          <p class="title is-5"><strong>{{load.size}}</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>RATES</small>
          <p class="title is-5"><span class="tag is-success">+ 5.00%</span></p>
        </div>
        <div class="column is-one-quarter">

        </div> 
        <div class="column is-one-quarter">
          <small>COMPANY NAME</small>
          <p class="title is-5 blurred"><strong>Blurred Text</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>PHONE NO.</small>
          <p class="title is-5 blurred"><strong>Blurred Text</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>INSURANCE</small>
          <p class="title is-5 blurred"><strong>Blurred Text</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>CREDITS</small>
          <p class="title is-5 blurred"><strong>Blurred Text</strong></p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['load', 'id'],
    mounted(){

    },
    data(){
      return {
        show: false,
        activate: false,
      }
    },
  }
</script>
<style>
  .load-card{
    margin: 10px auto;
  }
  .authed-load-map{
    height: 250px;
    width: 100%;
  }
</style>