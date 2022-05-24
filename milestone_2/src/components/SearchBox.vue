<template>
    <select class="form-select"
    :value="genSelected"
    v-on:input="$emit('input', $event.target.value)"
    @change="$emit('selectChange', genSelected)">
        <option value="" disabled selected>Scegli Genere</option>
        <option value="">All</option>
        <option v-for="Genre in Genres" :key="Genre" :value="Genre">{{Genre}}</option>
        
    </select>
</template>

<script>
import axios from 'axios';
export default {
name: 'SearchBox',
props: {
    genSelected: String,
},
data() {
    return {
        Genres: null,
        ApiUrl: 'http://localhost:8888/PHP/php-ajax-dischi/milestone_1/genre.php',
    }
},
methods: {
     callApi() {
            axios.get(this.ApiUrl).then((response) => {
                console.log(response);
                this.Genres = response.data;
            }).catch((error) => {
                console.log(error);
            })
        },
},
mounted() {
    this.callApi();
}
}
</script>

<style lang="scss" scoped>
select {
    max-width: 220px;
}
</style>