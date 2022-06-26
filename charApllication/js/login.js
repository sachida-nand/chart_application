const form = document.querySelector(".login form");
const submitBtn = form.querySelector(".button input");
const errorMsg = document.querySelector(".error-text");


form.addEventListener("submit", (e)=>{
    e.preventDefault(); //prevent submit event on by default
})

submitBtn.addEventListener("click", ()=>{
    //let's start ajax

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);

    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                   location.href  = "users.php";
                }else{
                    errorMsg.textContent = data;
                    errorMsg.style.display = "block";
                }
            }
        }
    }
    let formData = new FormData(form); //creating new formData object
    xhr.send(formData);//sending the form data
})