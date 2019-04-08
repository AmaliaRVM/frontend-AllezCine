<template>
    <div class="container routEl">
        <h1>Films</h1>
        <div class="row allAffiche">
            <affiche v-for="film in films" :post="film" :key="film.id"/>
        </div>
        <h1>Series</h1>
        <div class="row allAffiche">
            <affiche v-for="serie in series" :post="serie" :key="serie.id"/>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import affiche from '../components/affiche/affiche'
export default {
    data(){
        return {
            films:[],
            series: [],
        }
    },
    components : {
        affiche,
    },
    mounted() {
        var self = this;
        axios.get('https://api.themoviedb.org/3/discover/movie?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=popularity.desc')
        .then( function(res){
            self.films=res.data.results.slice(0,12);
        })
        .catch( function(error){
            throw('Error: ', error);
        })
        axios.get('https://api.themoviedb.org/3/discover/tv?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=popularity.desc')
        .then( function(res){
            self.series=res.data.results.slice(0,12);
        })
        .catch( function(error){
            throw('Error: ', error);
        })
    }
}
</script>

<style>

</style>



