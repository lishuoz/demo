<template>
 <table class="table">
    <thead>
        <tr>
            <th>AVAILABLE</th>
            <th>FROM</th>
            <th>TO</th>
            <th>SIZE</th>
            <th>TYPE</th>
        </tr>
    </thead>
    <tbody v-if="auth">
        <tr v-for="load in loads">
            <td>{{ load.date }}</td>
            <td>{{ load.origin_city }}, {{ load.origin_province }}</td>
            <td>{{ load.destination_city }}, {{ load.destination_province }}</td>
            <td>{{ load.size }}</td>
            <td>{{ load.type }}</td>
        </tr>
    </tbody>
    <tbody v-else>
        <tr v-for="load in loads.slice(0,5)">
            <td>{{ load.date }}</td>
            <td>{{ load.origin_city }}, {{ load.origin_province }}</td>
            <td>{{ load.destination_city }}, {{ load.destination_province }}</td>
            <td>{{ load.size }}</td>
            <td>{{ load.type }}</td>
        </tr>
        <tr v-for="load in loads.slice(5, loads.length)">
            <td>{{ load.date }}</td>
            <td><a href="/login">Login to see more</a></td>
            <td></td>
            <td>{{ load.size }}</td>
            <td>{{ load.type }}</td>
        </tr>
    </tbody>
</table>

</template>

<script>
    export default {
        props:['loads', 'auth'],
        data(){
            return {
                // loads: this.proploads
            }
        },
        mounted() {
            console.log(this.auth == 1);
        },
    }
</script>
