<template>
  <div id="app">
    <div id="nav">
      <router-link to="/">HOME</router-link> |
      <router-link to="/film">Films populaires</router-link> |
      <router-link to="/serie">Série Tv</router-link>
    </div>
    <router-view/>
    <Footer/>
  </div>
</template>

<script>

  import Footer from './components/Footer/Footer'

export default {
  components : {
    Footer
  }
}

</script>


<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
/* #nav {
  background-color: black;
  
} */
router-view {
  background-color: #efefef;
}
</style>
