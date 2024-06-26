console.log('its running');
var hamburger = document.querySelector('.hamburger');
var links = document.querySelector('.link');
var top = document.querySelector('.top');
var bottom = document.querySelector('.bottom');
var shoes = document.querySelector('.shoes');
var fullset = document.querySelector('.fullSet');
var Uname = document.getElementById('name');
var icon = document.getElementById('icon');
hamburger.addEventListener('click',()=>{
    links.classList.toggle('active');
});
Uname.addEventListener('click',()=>{
    if(icon.class == 'fa-solid fa-angle-up'){
        icon.setAttribute('class','fa-solid fa-angle-down')
    }
    else{
        icon.setAttribute('class','fa-solid fa-angle-up')
    }
});
// top.addEventListener('click',()=>{
//     location.href = 'http://127.0.0.1:8000/top';
// });
// bottom.addEventListener('click',()=>{
//     location.href = 'http://127.0.0.1:8000/bottom';
// });
// shoes.addEventListener('click',()=>{
//     location.href = 'http://127.0.0.1:8000/shoes';
// });
// fullset.addEventListener('click',()=>{
//     location.href = 'http://127.0.0.1:8000/fullset';
// });