<template>
  <div id="app">
    <Header/>
    <Social class="social"></Social>
    <router-view/>
    <Footer/>
  </div>
</template>

<script>

  import Footer from './components/Footer/Footer'
  import Header from './components/Header/Header'
  import Social from './components/Social/Social'

  
export default {
  components : {
    Footer,
    Header,
    Social
    
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

.social{
  position: fixed;
  top: 40vh; 
  width: 150px;
  /* padding-right: 200px; */
  /* left: -150px;  */

}

</style>
