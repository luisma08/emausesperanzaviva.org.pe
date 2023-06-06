var link = document.querySelector('.link');

var donacion1 = document.querySelector('.donacion-1');
var donacion2 = document.querySelector('.donacion-2');
var donacion3 = document.querySelector('.donacion-3');
var donacion4 = document.querySelector('.donacion-4');
var donacion5 = document.querySelector('.donacion-5');
var donacion6 = document.querySelector('.donacion-6');
var donacion7 = document.querySelector('.donacion-7');
var donacion8 = document.querySelector('.donacion-8');

const activity1 = document.querySelector(".activity1");
const activity2 = document.querySelector(".activity2");
const ShowMore = document.querySelector(".show-content");

var donacionContent1 = document.querySelector(".donacion-content-1");
var donacionContent2 = document.querySelector(".donacion-content-2");
var donacionContent3 = document.querySelector(".donacion-content-3");
var donacionContent4 = document.querySelector(".donacion-content-4");
var donacionContent5 = document.querySelector(".donacion-content-5");
var donacionContent6 = document.querySelector(".donacion-content-6");
var donacionContent7 = document.querySelector(".donacion-content-7");
var donacionContent8 = document.querySelector(".donacion-content-8");

link.addEventListener("click", e => {
    e.preventDefault();

    activity1.classList.remove("d-none");
    activity2.classList.remove("d-none");
    ShowMore.classList.add('d-none');

});

donacion1.addEventListener("click", e => {
    e.preventDefault();

    //donacionContent1.classList.remove("d-block");
    donacionContent2.classList.add("d-none");
    donacionContent3.classList.add("d-none");
    donacionContent4.classList.add("d-none");
    donacionContent5.classList.add("d-none");
    donacionContent6.classList.add("d-none");
    donacionContent7.classList.add("d-none");
    donacionContent8.classList.add("d-none");

});

donacion2.addEventListener("click", e => {
    e.preventDefault();

    donacionContent2.classList.remove("d-none");
    donacionContent1.classList.add("d-none");
    donacionContent3.classList.add("d-none");
    donacionContent4.classList.add("d-none");
    donacionContent5.classList.add("d-none");
    donacionContent6.classList.add("d-none");
    donacionContent7.classList.add("d-none");
    donacionContent8.classList.add("d-none");

});

donacion3.addEventListener("click", e => {
    e.preventDefault();

    donacionContent3.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent4.classList.add('d-none');
    donacionContent5.classList.add('d-none');
    donacionContent6.classList.add('d-none');
    donacionContent7.classList.add('d-none');
    donacionContent8.classList.add('d-none');

});

donacion4.addEventListener("click", e => {
    e.preventDefault();

    donacionContent4.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent3.classList.add('d-none');
    donacionContent5.classList.add('d-none');
    donacionContent6.classList.add('d-none');
    donacionContent7.classList.add('d-none');
    donacionContent8.classList.add('d-none');

});

donacion5.addEventListener("click", e => {
    e.preventDefault();

    donacionContent5.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent3.classList.add('d-none');
    donacionContent4.classList.add('d-none');
    donacionContent6.classList.add('d-none');
    donacionContent7.classList.add('d-none');
    donacionContent8.classList.add('d-none');

});

donacion6.addEventListener("click", e => {
    e.preventDefault();

    donacionContent6.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent3.classList.add('d-none');
    donacionContent4.classList.add('d-none');
    donacionContent5.classList.add('d-none');
    donacionContent7.classList.add('d-none');
    donacionContent8.classList.add('d-none');

});

donacion7.addEventListener("click", e => {
    e.preventDefault();

    donacionContent7.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent3.classList.add('d-none');
    donacionContent4.classList.add('d-none');
    donacionContent5.classList.add('d-none');
    donacionContent6.classList.add('d-none');
    donacionContent8.classList.add('d-none');

});

donacion8.addEventListener("click", e => {
    e.preventDefault();

    donacionContent8.classList.remove("d-none");
    donacionContent1.classList.add('d-none');
    donacionContent2.classList.add('d-none');
    donacionContent3.classList.add('d-none');
    donacionContent4.classList.add('d-none');
    donacionContent5.classList.add('d-none');
    donacionContent6.classList.add('d-none');
    donacionContent7.classList.add('d-none');

});

