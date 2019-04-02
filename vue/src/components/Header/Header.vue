<template>
    <div class="header">
        <div id="nav">
            <router-link to="/">HOME</router-link> |
            <router-link to="/film">Films populaires</router-link> |
            <router-link to="/serie">Série Tv</router-link>
        </div>
        <h3>{{header}}</h3>
    </div>
</template>

<script>
export default {
    data() {
        return {
            header: "This is the header"
        }
    }

}
</script>

<style>
.header {
    border: 2px solid black;
}
</style>
