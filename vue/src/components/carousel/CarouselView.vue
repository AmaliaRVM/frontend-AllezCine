<template>
    <Carousel :per-page="1" :mouse-drag="true">
        <Slide v-for="(slide, index) in lists" :key="index">
            Slide {{ slide }} Content
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
            lists: ['test1', 'test2', 'test3']
        }
    },

    mounted () {
        axios.get('https://api.themoviedb.org/3/discover/movie?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=release_date.desc&vote_count.gte=10&vote_average.gte=8&with_original_language=en')
        .then(function(res){
            console.log('Data: ', res.data);
        })
        .catch(function(error){
            console.log('Error: ', error);
        })
    },

    components: {
        Carousel,
        Slide
    }

}
</script>

<style>


</style>
