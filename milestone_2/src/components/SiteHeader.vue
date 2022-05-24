<template>
  <header>
    <div
      class="my_container d-flex justify-content-between align-items-center p-3"
    >
      <img
        src="https://grafica-facile.com/wp-content/uploads/2022/01/spotify-logo.png"
        alt=""
      />
      <div class="d-flex justify-content-between align-items-center column_gap_1">
        <SearchBox v-model="genSelected" @selectChange="searchGen" />
        <SearchArtist v-model="artistSelected" @selectChange="searchArtist" />
      </div>
    </div>
    <!-- /.my_container -->
  </header>
</template>

<script>
import SearchBox from "@/components/SearchBox.vue";
import SearchArtist from "@/components/SearchArtist.vue";
import state from "@/state.js";
export default {
  name: "SiteHeader",
  components: {
    SearchBox,
    SearchArtist,
  },
  data() {
    return {
      genSelected: "",
      artistSelected: "",
    };
  },
  methods: {
    searchGen() {
      //console.log("Searching ...");
      state.genSelected = this.genSelected;
      //console.log(state.genSelected);
    },
    searchArtist() {
      //console.log("Searching ...");
      state.artistSelected = this.artistSelected;
      //console.log(state.genSelected);
    },
  },
};
</script>

<style lang="scss" scoped>
header {
  background-color: #2e3a46;
  img {
    width: 60px;
  }
  form {
    height: 30px;
  }
  button {
    border-color: #1ed760 !important;
    color: #1ed760 !important;
  }
  .column_gap_1 {
    column-gap: 1rem;
  }
}
</style>