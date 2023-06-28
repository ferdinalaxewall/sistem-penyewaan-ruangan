window.addEventListener('scroll', (event) => {
    const scrollVerticalOffset = window.pageYOffset;
    if(scrollVerticalOffset > 100){
        doScrolledNavbar();
    }else{
        closeScrolledNavbar();
    }
})

function doScrolledNavbar(){
    const navbar = document.getElementById('navbar');
    navbar.classList.add('scrolled');
}

function closeScrolledNavbar(){
    const navbar = document.getElementById('navbar');
    navbar.classList.remove('scrolled');
}