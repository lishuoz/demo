<template>
  <div>
    <bl-signupmodal :show="showModal" @close="closeModal"></bl-signupmodal>
    <nav class="pagination is-medium block">
      <a class="pagination-previous" @click="previousPage" :disabled="current_page == 1">Previous</a>
      <a class="pagination-next" v-if="auth" @click="nextPage" :disabled="current_page == last_page">Next page</a>
      <a class="pagination-next" @click="showModal = true" v-else>Next Page</a>
      <ul class="pagination-list">
        <li>
          <p>Page {{current_page}} of {{last_page}} is showing</p>
        </li>
      </ul>
    </nav>
    <div class="block">
      <div v-for="load in loads_chunk" >
        <bl-load :load="load" @show="popModal" v-if="!auth"></bl-load>
        <bl-authedload :load="load" @show="popModal" :id="loads.indexOf(load)" v-else></bl-authedload>
      </div>
    </div>
    <nav class="pagination is-medium block">
      <a class="pagination-previous" @click="previousPage" :disabled="current_page == 1">Previous</a>
      <a class="pagination-next" @click="nextPage" :disabled="current_page == last_page">Next page</a>
      <ul class="pagination-list">
        <li>
          <p>Page {{current_page}} of {{last_page}} is showing</p>
        </li>
      </ul>
    </nav>
  </div>

</template>

<script>
  export default {
   props:['loads', 'auth'],
   data(){
    return {
      current_page: 1,
      per_page: 10,
      showModal: false,
      showRegisterModal: false,
    }
  },
  computed: {
    last_page(){
      return Math.ceil(this.loads.length / this.per_page);
    },
    loads_chunk(){
      return this.loads.slice( (this.current_page - 1) * this.per_page, (this.current_page - 1) * this.per_page + (this.per_page - 1));
    },
  },
  methods:{
    nextPage(){
      if(this.current_page == this.last_page){
        return;
      }
      this.current_page++;
    },
    previousPage(){
      if (this.current_page == 1) {
        return;
      }
      this.current_page--;
    },
    closeModal(){
      this.showModal = false;
    },
    popModal(){
      this.showModal = true;
    }
  },
  mounted() {

  }
}
</script>

