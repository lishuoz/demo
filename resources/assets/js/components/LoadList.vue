<template>
  <div>
    <div class="modal" :class="{'is-active': showModal}">
      <div class="modal-background" @click="showModal = false"></div>
      <div class="modal-content">
       <div class="box">
         <div class="columns">
           <div class="column is-half">
             <figure class="image">
               <img src="/img/brand.svg">
             </figure>
           </div>
           <div class="column is-half has-text-centered" id="right-column">
             <h2 class="title is-3">Want to see all loads?</h2>
             <p class="subtitle is-5">We have them!</p>
             <p>Create your <strong>FREE</strong> account in <strong>30</strong> seconds!</p>
             <a @click="changeModal" class="button is-primary is-medium">Create free account</a>
             <p>Already have an account? <a href="/login">Log in</a></p>
           </div>
         </div>
       </div>
     </div>
     <button class="modal-close" @click="showModal = false"></button>
   </div>

   <div class="modal" :class="{'is-active': showRegisterModal}">
    <div class="modal-background" @click="showRegisterModal = false"></div>
    <div class="modal-content animated flip">
     <div class="box">
       <div class="columns">
         <div class="column is-half">
           <figure class="image">
             <img src="/img/brand.svg">
           </figure>
         </div>
         <div class="column is-half has-text-centered">
           <h2 class="title is-3">Create Free Account</h2>
           <form class="form-horizontal" id="signup-form" role="form" method="POST" action="/register">
            <input class="input is-hidden" value="" id="csrf-token" name="_token" type="text" placeholder="Last Name" required>

            <div class="field">
              <p class="control has-icons-left">
                <input class="input" value="" name="firstName" type="text" placeholder="First Name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <p class="control has-icons-left">
                <input class="input" value="" name="lastName" type="text" placeholder="Last Name" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" value="" name="email" type="text" placeholder="Email" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" value=""  name="phone" type="text" placeholder="Phone" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
              </p>
            </div>

            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="password" placeholder="Password" name="password" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </p>
            </div>
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                <span class="icon is-small is-left">
                  <i class="fa fa-lock" aria-hidden="true"></i>
                </span>
              </p>
            </div>
            <p class="control">
              <button class="button is-primary" @click="setToken">Register</button>
            </p>
          </form>
        </div>
      </div>
    </div>
  </div>
  <button class="modal-close" @click="showRegisterModal = false"></button>
</div>

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
  <div v-for="load in loads_chunk">
    <bl-load :load="load"></bl-load>
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
    }
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
    changeModal(){
      this.showModal = false;
      this.showRegisterModal = true;
    },
    setToken(){
      document.getElementById('csrf-token').value = window.Laravel.csrfToken;
    }
  },
  mounted() {

  }
}
</script>
<style>
  #right-column *{
    margin: 15px auto;
  }
</style>
