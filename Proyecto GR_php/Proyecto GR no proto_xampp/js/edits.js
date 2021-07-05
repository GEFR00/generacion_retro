const navSlide = () => {
    const menu_responsive = document.querySelector('.menu_responsive');
    const nav = document.querySelector('.nav_links');
    const navLinks = document.querySelectorAll('.nav_links li');
    //
    menu_responsive.addEventListener('click', () => {
        //Toggle nav
        nav.classList.toggle('nav_active');
        
        //Animacion Links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
            }
            
        });
        //Animation menú 
        menu_responsive.classList.toggle('toggle');
    });
    
    
}

navSlide();
