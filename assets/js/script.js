//preloader
let loader = document.getElementById("preloader");
window.addEventListener("load", function(){
    loader.style.display = "none";
});



/*-active nav link on scroll--*/
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('section #nav-links a')


window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('section #nav-links a[href*=' + id + ']').classList.add('active');
            });
        };
    });
};

//Email sending success  button 

function noneFunction() {
    document.getElementById("email").style.display = "none";
}