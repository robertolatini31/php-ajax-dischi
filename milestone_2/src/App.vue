<template>
    <div id="app">
    <Header />
    <Main />
  </div>
</template>

<script>
import Header from '@/components/SiteHeader.vue'
import Main from '@/components/SiteMain.vue'

export default {
  name: 'App',
  components: {
   Header,
   Main 
  }
}
</script>

<style lang="scss">
@import '~@/assets/scss/style.scss';
#app {
  background-color: #1E2D3B ;
  height: 100vh;
}
</style>
