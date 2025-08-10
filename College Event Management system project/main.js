//Header scroll

let nav=document.querySelector(".navbar");
window.onscroll=function(){
    if(document.documentElement.scrollTop>20)
    {
        nav.classList.add("header-scrolled");
    }
    else{
        nav.classList.remove("header-scrolled");
    }
}

//login form

/* document.getElementById('loginform').addEventListener('submit',function(event){
    event.preventDefault();
    const username=document.getElementById('username').value;
    const password=document.getElementById('password').value;

    if(username && password)
    {
        alert('login successfully');
        
    }
    else{
        alert('Please enter a right password')
    }
 })*/
