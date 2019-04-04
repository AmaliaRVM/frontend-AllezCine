<template>
    <div class="film">
        <h1>Top séries</h1>
        <div id="containFilm">
            <affiche v-for="post in posts.results" :post="post" :key="post.id"/>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import affiche from '../components/affiche/affiche'
export default {
    data(){
        return {
            posts:[]
        }
    },
    components : {
        affiche,
    },
    mounted() {
        var self = this;
        axios.get('https://api.themoviedb.org/3/discover/tv?api_key=2704afc9f60b8ac59b4f28b3a0252704&language=en-US&sort_by=popularity.desc')
        .then( function(res){
            self.posts=res.data;
            console.log('Data: ',res.data);
        })
        .catch( function(error){
            console.log('Error: ', error);
        })
    }
}
</script>

<style>

.allImg {
    width: 100%;
}

/* #img {
    background-image: url('post.poster_path')
} */

</style>
