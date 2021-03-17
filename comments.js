let comments = [];
loadComments();
//let ggwp = "<?php echo $comments_js;?>";
//alert(ggwp);
//var TOWN = '<?php echo $comments_js;?>'
document.getElementById('comment-add').onclick = function(event){
   // loadComments();
    event.preventDefault = false;
    

    let commentName = document.getElementById('comment-name');
    let commentBody = document.getElementById('comment-body');
    let comment = {
        name : commentName.value,
        body : commentBody.value,
        time : Math.floor(Date.now() / 1000)
    };

    
    comments[comments.length-1]=comment;
    //comments.push(comment);
    //saveComments();
    sumb(comment);
    showComments();
    
    document.querySelector(".form").addEventListener("submit", function (event) {
        event.preventDefault();
       // alert("Форма отправилась");
       // let commentName = document.getElementById('comment-name');
        //let commentBody = document.getElementById('comment-body');
        //commentName.value = "";
        //commentBody.value = "";
    })
   // window.location = window.location.href;
   setTimeout(function() {window.location.reload();}, 1000);
}

function saveComments(){
    localStorage.setItem('comments', JSON.stringify(comments));
}
function loadDate(){

}

function loadComments(){
    //comments = [];
    let data = document.querySelector(".data");
    let temp_comments = [];

    if(data.innerHTML) temp_comments = JSON.parse(data.innerHTML);
    
    for(let i = 0 ; i<temp_comments.length ; i++){
        let comment = {
            name : temp_comments[i][1],
            body : temp_comments[i][2],
            time : temp_comments[i][3]
        }
        comments.push(comment);
        console.log(temp_comments[i]);
    }
    
    //if (localStorage.getItem('comments')) comments = JSON.parse(localStorage.getItem('comments'));
    showComments();
}

function showComments (){
    let commentField = document.getElementById('comment-field');
    let out = '';
    comments.forEach(function(item){
        out += `<p class="text-right small"><em>${timeConverter(item.time)}</em></p>`;
        out += `<p class="alert alert-primary" role="alert">${item.name}</p>`;
        out += `<p class="alert alert-success" role="alert">${item.body}</p>`;
    });
    commentField.innerHTML = out;
}

function timeConverter(UNIX_timestamp){
    var a = new Date(UNIX_timestamp * 1000);
    var months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
    var year = a.getFullYear();
    var month = months[a.getMonth()];
    var date = a.getDate();
    var hour = a.getHours();
    var min = a.getMinutes();
    var sec = a.getSeconds();
    var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec ;
    return time;
  }



  function sumbitComment(){
      alert(3);
    //localStorage.setItem('comments', );

    //var object = {};
    //var formData = new FormData(document.forms.person);
    
    //formData.forEach(function(value, key){
    //    object[key] = value;
    //});
    var json = JSON.stringify(comments);
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", 'http://localhost/комменты/form.php', true);/*/submit*/ 
    xhr.setRequestHeader('Content-type', 'application/json; charset=utf-8');
    // Отсылаем объект в формате JSON и с Content-Type application/json
    xhr.send(json);
  }

  function sumb(comment){
    console.log(comment);
    var json = JSON.stringify(comment);
    var request = new XMLHttpRequest();
    request.open("POST", "http://localhost/комменты/form.php");
    request.setRequestHeader('Content-type', 'application/json; charset=utf-8');
    request.onreadystatechange = function () {
            if (request.readyState == 4 && request.status == 200)
                document.getElementById("output").innerHTML=request.responseText;
    }
    request.send(json);
  }