<template>
    <div class="containermovie">
        <h1>{{$route.query.page}}</h1>
        <Displayinfo {{post.id}}/>
        
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
        var self = this;
        axios.get('https://api.themoviedb.org/3/discover/movie?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=popularity.desc')
        .then( function(res){
            self.posts=res.data;
            // console.log('Data: ',res.data);
        })
        .catch( function(error){
            throw('Error: ', error);
        })
    }
    
}
</script>

<style>

</style>
