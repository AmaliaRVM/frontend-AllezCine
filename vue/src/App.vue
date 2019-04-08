<template>
  <div id="app">
    <Header/>
    <router-view/>
    <Footer/>
  </div>
</template>

<script>

  import Footer from './components/Footer/Footer'
  import Header from './components/Header/Header'
  

export default {
  components : {
    Footer,
    Header
    
  }
}

</script>


<style>


body {
  margin: 0;
  /* box-sizing: border-box; */
}

#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
/* #nav {
  background-color: black;
  
} */
router-view {
  background-color: #efefef;
}
</style>
