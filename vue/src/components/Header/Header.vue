<template>
    <div class="header">
        <div class="navbar">
            <ul>
                <li>
                    <router-link id="home" to="/">Home</router-link>
                </li>
                <li>
                    <router-link to="/film">Top Movies</router-link>
                </li>
                <li>
                    <router-link to="/serie">Tv Series</router-link>
                </li>
            </ul>
            <div class="container">
                <input type="text" placeholder="Search...">
                <div class="search"></div>
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    }
}
</script>

<style>
.header {
    border: 2px solid black;
    background-color: black;
    height: 100px;
}
#home {
    color: red;
}
li{
    color:white;
    display: inline-block;
    list-style: none;
    padding: 0 40px;
    
}


</style>
