 <template>
  <div>
   <div class="modal" :class="{'is-active': show}">
     <div class="modal-background" @click="close"></div>
     <div class="modal-content" v-if="!showSignUpModal">
       <div class="box">
         <div class="columns">
           <div class="column is-half">
             <figure class="image">
               <img src="/img/brand.svg">
             </figure>
           </div>
           <div class="column is-half has-text-centered right-column">
             <h2 class="title is-3">Want to see all loads?</h2>
             <p class="subtitle is-5">We have them!</p>
             <p>Create your <strong>FREE</strong> account in <strong>30</strong> seconds!</p>
             <a @click="changeModal" class="button is-primary is-medium">Create free account</a>
             <p>Already have an account? <a href="/login">Log in</a></p>
           </div>
         </div>
       </div>
     </div>
     <div class="modal-content animated flip" v-else>
       <div class="box">
         <div class="columns">
           <div class="column is-half">
             <figure class="image">
               <img src="/img/brand.svg">
             </figure>
           </div>
           <div class="column is-half has-text-centered right-column">
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
    <button class="modal-close" @click="close"></button>
  </div>
  <!-- <div class="modal" :class="{'is-active': showRegisterModal}">
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
</div> -->
</div>
</template>

<script>
  export default {
    props:['show'],
    data(){
      return {
        showSignUpModal: false,
      }
    },
    methods:{
      changeModal(){
        this.showSignUpModal = true;
      },
      setToken(){
        document.getElementById('csrf-token').value = window.Laravel.csrfToken;
      },
      close(){
        this.$emit('close');
        this.showSignUpModal = false;
      }
    },
    mounted() {

    }
  }
</script>
<style>
  .right-column *{
    margin: 15px auto;
  }
</style>
