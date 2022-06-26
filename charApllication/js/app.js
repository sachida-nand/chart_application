const pass = document.getElementById('password');
const togglePass = document.querySelector('.form .input-field i');

togglePass.addEventListener("click",()=>{
    if(pass.type === "password"){
        pass.setAttribute("type","text");
        togglePass.classList.add('fa-eye-slash');
    }else{
        pass.setAttribute("type","password");
        togglePass.classList.remove('fa-eye-slash');
    }
});

