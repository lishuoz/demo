<template>
    <div>
        <div v-for="load in loads">
            <bl-load :load="load"></bl-load>

        </div>
        <!-- <bl-load></bl-load> -->
    </div>
</template>

<script>
    export default {
     props:['loads', 'auth'],
     created() {
        // if(!this.auth){
        //     this.loads = 
        // }else{
        //     console.log("denglu")
        // }
    }
}
</script>
