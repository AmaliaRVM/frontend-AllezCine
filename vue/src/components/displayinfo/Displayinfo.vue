<template>
    <div class="displayinfo">
        <img class="displayimg" :src="getImage(info.poster_path)" alt="posters"/>
        <div v-if="info.title" class="displaytitle">
            {{info.title}}
        </div>
        <div v-if="info.name" class="displaytitle">
            {{info.name}}
        </div>
        <div v-if="info.release_date" class="displaydate">
            {{info.release_date}}
        </div>
        <div v-if="info.first_air_date" class="displaydate">
            {{info.first_air_date}}
        </div>
        <div class="overview">
            {{info.overview}}
        </div>
        <div v-for="(genre, index) in genres" :key="index" class="genre">
            {{genre.name}}
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import {getImage} from '../../utils/getImage'
import { getYear } from '../../utils/getYear'

export default {

    data () {
        return {
        idMovie: null,
        info: null,
        loading: true,
        errored: false,
        genres: null
        }
    },
    methods: {
        getImage,
        getYear
    },

    mounted () {
        // get film api
        axios
        .get(`https://api.themoviedb.org/3/${this.$router.history.current.params.type}/${this.$router.history.current.params.id}?api_key=7ca673fff2a5fb82abd38a9a0d559c4e&language=en-US`)
        .then(response => {
            this.info = response.data
            })
        .catch(error => {
            this.errored = true
            })
        .finally(() => this.loading = false)

        //get genre api
        axios
        .get(`https://api.themoviedb.org/3/${this.$router.history.current.params.type}/${this.$router.history.current.params.id}?api_key=7ca673fff2a5fb82abd38a9a0d559c4e&language=en-US`)
        .then(response => {
            this.genres = response.data.genres
            })
        .catch(error => {
            this.errored = true
            })
        .finally(() => this.loading = false)
    }

}

</script>

<style>
.displayimg {
    height: 200px;
}

</style>