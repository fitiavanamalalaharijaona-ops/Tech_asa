const openLogin =
document.getElementById("openLogin");

const authModal =
document.getElementById("authModal");

const closeModal =
document.getElementById("closeModal");

const showRegister =
document.getElementById("showRegister");

const showLogin =
document.getElementById("showLogin");

const loginForm =
document.getElementById("loginForm");

const registerForm =
document.getElementById("registerForm");

if(openLogin){

    openLogin.addEventListener("click",(e)=>{

        e.preventDefault();

        authModal.classList.add("active");

    });

}

if(closeModal){

    closeModal.addEventListener("click",()=>{

        authModal.classList.remove("active");

    });

}

window.addEventListener("click",(e)=>{

    if(e.target === authModal){

        authModal.classList.remove("active");

    }

});

if(showRegister){

    showRegister.addEventListener("click",(e)=>{

        e.preventDefault();

        loginForm.style.display = "none";

        registerForm.style.display = "block";

    });

}

if(showLogin){

    showLogin.addEventListener("click",(e)=>{

        e.preventDefault();

        registerForm.style.display = "none";

        loginForm.style.display = "block";

    });

}

document
.querySelectorAll(".toggle-password")
.forEach(icon=>{

    icon.addEventListener("click",()=>{

        const input =
        document.getElementById(
            icon.dataset.target
        );

        if(input.type === "password"){

            input.type = "text";

            icon.classList.remove("fa-eye");

            icon.classList.add("fa-eye-slash");

        }

        else{

            input.type = "password";

            icon.classList.remove("fa-eye-slash");

            icon.classList.add("fa-eye");

        }

    });

});