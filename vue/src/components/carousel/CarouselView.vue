<template>
    <Carousel :per-page="1" :mouse-drag="true">
        <Slide v-for="(slide, index) in lists" :key="index">
            <img id="toposter" :src="slide" alt="movie">
        </Slide>
    </Carousel>  
</template>

<script>
import {Carousel,Slide} from 'vue-carousel'
import axios from 'axios'

export default {
    name: 'CarouselView',
    props: {

    },

    data() {
        return{
            lists: []
        }
    },

    mounted () {
        /* var self = this; */
        axios
        .get('https://api.themoviedb.org/3/discover/movie?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=release_date.desc&vote_count.gte=10&vote_average.gte=8&with_original_language=en')
        .then(response=>{
            response.data.results.slice(0, 5).forEach(film => {
                this.lists.push("https://image.tmdb.org/t/p/original"+film.poster_path)
            });
        })
        .catch(function(error){
            throw('Error: ', error);
        })
    },

    components: {
        Carousel,
        Slide
    }

}
</script>

<style>
#toposter {
    width:500px;
    
    
}

</style>
