

let mobileBtn = document.getElementsByClassName('mobile-btn')[0];
let navBar = document.getElementsByClassName('navbar')[0];


mobileBtn.addEventListener('click', () => {
    navBar.classList.toggle('is-open');
 
});