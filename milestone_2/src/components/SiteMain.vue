<template>
  <main class="py-5">
      <div class="container">
          <div class="vh-100 d-flex align-items-center justify-content-center" v-if="filteredArray.length == 0">
              <h1 class="me-4 text-white">Nessun Risultato</h1>
              <button type="button" class="btn btn-success" @click="reset">Reset</button>
          </div>
          <div class="control" v-if="Success">
            <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 align-items-center justify-content-center">
            <AlbumList :Album="Album" v-for="(Album, index) in filteredArray" :key="index"/>
            </div>
            <!-- /.row row-cols-5 -->
          </div>
          <!-- /.control -->
          <div v-else class="d-flex justify-content-center align-items-center text-white">
              <h1>Loading...😴</h1>
          </div>
      </div>
      <!-- /.container -->
  </main>
</template>

<script>
import axios from 'axios';
import AlbumList from '@/components/AlbumListComponent.vue';
import state from "@/state.js";
export default {
    name: 'SiteMain',
    components: {
        AlbumList,
    },
    data() {
        return {
            Albums: null,
            Success: false,
            ApiUrl: 'http://localhost:8888/PHP/php-ajax-dischi/milestone_1/db.php',
        };
    },
    methods: {
        callApi() {
            axios.get(this.ApiUrl).then((response) => {
                console.log(response);
                this.Albums = response.data.response;
                this.Success = response.data.success;
            }).catch((error) => {
                console.log(error);
            })
        },
        reset() {
            state.genSelected = '';
            state.artistSelected = '';
        }
    },
    mounted() {
        this.callApi();
    },
    computed: {
    filteredArray() {
        
       if (state.genSelected.length > 0 && state.artistSelected.length == 0) {
            return  this.Albums.filter(Album => {
                //console.log('album.genre = ' + ' ' + Album.genre.toLowerCase());
                //console.log('genSelected = ' + ' ' + state.genSelected );
                return Album.genre.toLowerCase().includes(state.genSelected)
            })
       } else if (state.genSelected.length == 0 && state.artistSelected.length > 0) {
           return  this.Albums.filter(Album => {
            return Album.author.toLowerCase().includes(state.artistSelected)
           })
       } else if (state.genSelected.length > 0 && state.artistSelected.length > 0) {
           return  this.Albums.filter(Album => {
           return Album.author.toLowerCase().includes(state.artistSelected) && Album.genre.toLowerCase().includes(state.genSelected)
           })
       }
       else {
           return this.Albums
       }
        }
    }
}
</script>

<style lang="scss" scoped>
main {
    background-color: #1E2D3B ;
    button {
    border-color: #1ed760 !important;
    background-color: transparent;
    color: #1ed760 !important;
  }
}
</style>