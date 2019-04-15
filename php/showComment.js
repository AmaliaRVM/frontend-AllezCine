var header = document.querySelector('header');
var section = document.querySelector('section');

var requestURL = 'http://localhost/VueJS/test-API/getdata.php';
var request = new XMLHttpRequest();
request.open('GET', requestURL);
request.responseType = 'json';
request.send();

request.onload = function() {
    var commentaries = request.response;
    showComment(commentaries);
}

function showComment(){
    var specComment = ($_GET['movie_id'])['$_GET['id']'];

    for (var i = 0; i < specComment.length; i++){
        var containComment = document.createElement('div');
        var commTitre = document.createElement('Titre');
        var commDesc = document.createElement('textarea');
        var upVote = document.createElement('p');
        var downVote = document.createElement('p');
        var creationTime = document.createElement('p');

        commTitre.textContent = 'Title: ' + specComment[i].title_comment; 
        commDesc.textContent = 'Comment: ' + specComment[i].desc_comment;
        upVote.textContent = 'Upvote: ' + specComment[i].pos_like_count;
        downVote.textContent = 'Downvote: ' + specComment[i].neg_like_count;
        creationTime.textContent = 'Created: ' + specComment[i].creation_time;

        containComment.appendChild(commTitre);
        containComment.appendChild(commDesc);
        containComment.appendChild(upVote);
        containComment.appendChild(downVote);
        containComment.appendChild(creationTime);

        Selection.appendChild(containComment);
}
}