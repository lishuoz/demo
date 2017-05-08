<template>
    <div>
        <h1 class="title is-3" id="origin" v-show="!show"><a @click="showInput">{{title}}</a></h1>
        <div class="field has-addons column is-half" v-show="show">
          <p class="control">
            <input class="input is-medium" id="autoOrigin" type="text" name="origin" required autofocus>
        </p>
        <p class="control">
         <a class="button is-medium is-primary" @click="changeHeader">Change</a>
     </p>
 </div>
</div>
</template>

<script>
    export default {
        props: ['origin'],
        mounted(){
            //set global origin = whatever get here
        },
        data(){
            return {
                show: false,
                title: this.origin
            }
        },
        methods:{
            showInput(){
                this.show = true;
                document.getElementById('autoOrigin').value = this.title;
            },
            changeHeader(){
                this.title = document.getElementById('autoOrigin').value;
                window.location.href = '/?origin='+this.title;
            }
        },
    }
</script>
