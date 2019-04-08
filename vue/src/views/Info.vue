<template>
    <div class="containermovie">
        <Displayinfo/>
        
    </div>
</template>

<script>
import Displayinfo from '../components/displayinfo/Displayinfo.vue'
import axios from 'axios'

export default {
    components: {
        Displayinfo,
    },

    data(){
        return {
            posts:[]
        }
    },

    mounted() {
        
    }
    
}
</script>

<style>
    .containermovie { 
        background-color: white;
        height: 500px;
        color: black;
    }
        
</style>
