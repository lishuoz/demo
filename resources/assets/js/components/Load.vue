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
          <i class="fa fa-angle-down" v-if="!show" ></i>
          <i class="fa fa-angle-up" v-if="show"></i>
        </span>
      </a>
    </header>
    <div class="card-content" v-show="show" >
      <div class="content columns is-multiline">
        <div class="column is-one-quarter">
          <small>TYPE</small>
          <p class="title is-5"><strong>{{load.type}}</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>SIZE</small>
          <p class="title is-5"><strong>{{load.size}}</strong></p>
        </div>
        <div class="column is-one-quarter">
          <small>DETAILS</small>
          <p class="title is-5">
           <span class="icon" title="Rates Per Mile">
            <i class="fa fa-usd" aria-hidden="true"></i>
          </span>
          <span class="icon" title="Ratio Trend">
            <i class="fa fa-bar-chart" aria-hidden="true"></i>
          </span>
          <span class="icon" title="Contact Info">
            <i class="fa fa-address-card-o" aria-hidden="true"></i>
          </span>
          <span class="icon" title="Insurance">
            <i class="fa fa-file-text-o" aria-hidden="true"></i>
          </span>
        </p>
      </div>
        <!-- <div class="column is-one-quarter">
          <small>COMPANY NAME</small>
          <p class="title is-5 blurred"><strong>Blurred Text</strong></p>
        </div> -->
        <div class="column is-one-quarter">
          <a @click="emitPopModal" class="button is-primary is-medium animated rubberBand">Load Details</a>
        </div>
      </div>
    </div>
  </div>

</template>

<script>
  export default {
    props: ['load'],
    mounted() {

    },
    data(){
      return {
        show: false,
      }
    },
    methods:{
      emitPopModal(){
       this.$emit('show');
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