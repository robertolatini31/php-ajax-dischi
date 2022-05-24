<template>
  <div class="col p-4 d-flex justify-content-center">
    <div class="album_card p-3 text-center">
      <img :src="Album.poster" alt="" />
      <h4 class="text-uppercase text-white mt-2">{{ Album.title }}</h4>
      <p class="m-0">{{ Album.author }}</p>
      <span class="m-0">{{ Album.year }}</span>
    </div>
    <!-- /.album_card -->
  </div>
  <!-- /.col -->
</template>

<script>

export default {
  name: "AlbumListComponent",
  props: {
      Album: Object,
  },
  
};
</script>

<style lang="scss" scoped>
.album_card {
        background-color: #2E3A46;
        height: 380px;
        width: 320px;
        img {
           max-width: 200px;
           max-height: 200px;
           object-fit: cover;
        }
        p, span {
            color: #737B7C;
            font-weight: 500;
        }
    }
</style>