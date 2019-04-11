<template>
    <div class="containermovie">
        <Displayinfo/>
        
        
    </div>
</template>

<script>
import Displayinfo from '../components/displayinfo/Displayinfo.vue'



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
        margin: auto;
        height: auto;
        color: black;
    }
        
</style>
