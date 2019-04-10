<template>
    <div class="displayinfo" v-if="info">
        <div class="picture">
            <img class="displayimg" :src="getImage(info.poster_path)" alt="posters"/>
        </div>
        <div class="about">
            <div class="titledate">
                <div v-if="info.title" class="displaytitle">
                    <h3>{{info.title}}</h3> 
                </div>
                <div v-if="info.name" class="displaytitle">
                    <h3>{{info.name}}</h3>
                </div>
                <div v-if="info.release_date" class="displaydate">
                    <h3>{{getYear(info.release_date)}}</h3>
                </div>
                <div v-if="info.first_air_date" class="displaydate">
                    <h3>{{getYear(info.first_air_date)}}</h3>
                </div>
                <div class="starsOuter">
                    <div class="starsInner">
                        
                    </div>
                </div>
            </div>
            <div class="overview">
                <h4>Synopsis</h4>
                {{info.overview}}
            </div>
            <div v-for="(genre, index) in genres" :key="index" class="genre">
                <button class="button">{{genre.name}}</button>
            </div>
        </div>
    </div>
</template>

<script>
import {getImage} from '../../utils/getImage'
import { getYear } from '../../utils/getYear'
import {getData} from '../../utils/getData'

export default {

    data () {
        return {
            idMovie: null,
            info: {},
            loading: true,
            errored: false,
            genres: null,
        }
    },
    methods: {
        getImage,
        getYear,
        getData
    },

    mounted () {
        // get film api
        
        let type = this.$router.history.current.params.type;
        let id = this.$router.history.current.params.id
        this.info = getData(type, id)
        /* axios
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
        .finally(() => this.loading = false) */
    }

}

</script>

<style>
/* Main container style */

@import url('https://fonts.googleapis.com/css?family=Fira+Sans:600,700');

.displayinfo {
    display: flex;
    justify-content: space-around;
    height: auto;
    padding: 80px;
    background-color: #ebebeb;
}
/* About container style */
.picture {
    height: auto;
    margin-left: auto;
    margin-right: auto;
    padding: 20px;
}
.displayimg {
    height: 300px;

}

.about {
    text-align: justify;
    width: auto;
    margin: 20px;
    padding: 0px 100px 100px 100px;
    font-family:'Fira Sans', sans-serif;
}
/* Title and date container */
.titledate {
    display: flex;
    
}

.displaytitle {
    font-size: 30px;
}

.displaydate {
    padding: 0 30px 0 30px;
}

.starsOuter {
    padding-left: 100px;
}
/*  Overview container*/
.overview {
    padding-right: 40%;
}

.genre {
    display: inline-block;
    padding: 20px 20px 20px 0;
    
}
/* Genre container */
.button{
    background-color:white;
    border: none;
    color: black;
    font-family: 'Fira Sans', sans-serif;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    margin: 4px 2px;
}
</style>