import axios from 'axios'

export function getData(type,id) {
    axios
    .get(`https://api.themoviedb.org/3/${type}/${id}?api_key=7ca673fff2a5fb82abd38a9a0d559c4e&language=en-US`)
    .then(response => {
        return response;
    })
    .catch(error => {
        return error
    })
}

