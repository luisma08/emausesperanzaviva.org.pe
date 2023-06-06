'use strict';

const link = document.querySelector('.link');

const activity1 = document.querySelector('.activity1');
const activity2 = document.querySelector('.activity2');
const ShowMore = document.querySelector('.show-content');

link.addEventListener("click", (e) => {
    e.preventDefault();

    activity1.classList.remove("d-none");
    activity2.classList.remove("d-none");
    ShowMore.classList.add('d-none');

});


