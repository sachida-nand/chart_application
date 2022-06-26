const form = document.querySelector('.typing-area');
const sentBtn = form.querySelector('button');
const inputField = form.querySelector('.input-field');
const chatBox = document.querySelector('.chart-box');

form.addEventListener("submit", (e)=>{
    e.preventDefault();
   
})

sentBtn.addEventListener("click", ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert-chat.php", true);

    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                 inputField.value = ""; //when msg send the value will be blank
                 scrollToButtom();
            }
        }
    }
    let formData = new FormData(form); //creating new formData object
    xhr.send(formData);//sending the form data
});

chatBox.onmouseenter = () =>{
    chatBox.classList.add('active');
}

chatBox.onmouseleave = () =>{
    chatBox.classList.remove('active');
}


setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/get-chat.php", true);

    xhr.onload =()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                   chatBox.innerHTML = data;
                   if(!chatBox.classList.contains('active')){ //not contiain active class scroll to top
                       scrollToButtom();
                   }    
            }
        }
    }
     let formData = new FormData(form); //creating new formData object
    xhr.send(formData);//sending the form data 


},500)// this function run frequently after 500ms


function scrollToButtom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  
}