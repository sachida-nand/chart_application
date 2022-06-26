const searchBar = document.querySelector('.users .search input'),
searchBtn = document.querySelector(".users .search button");
usersList = document.querySelector(".users .users-list");


// search inputfield and button hide show 
searchBtn.addEventListener("click", ()=>{
    searchBar.classList.toggle("active");
    searchBar.focus();
    searchBtn.classList.toggle("active");
    searchBar.value = "";
    // searchBtn.classList.add("fa-times");
});

//search users mannualy
searchBar.addEventListener("keyup", ()=>{
    let searchValue = searchBar.value;
   
    if(searchValue != " "){
        searchBar.classList.add('active');
    }else{
        searchBar.classList.remove('active');
    }

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);

    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                usersList.innerHTML = data;
                // console.log(data);  
            }
        }
    }
    xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded");
    xhr.send("searchValue="+searchValue);//sending the form data 
});


// users details show from database 
setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);

    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
               if(!searchBar.classList.contains('active')){// when search bar is not active then add data 
                   usersList.innerHTML = data;
                }
            }
        }
    }
    // let formData = new FormData(form); //creating new formData object
    xhr.send();//sending the form data 


},400)// this function run frequently after 500ms