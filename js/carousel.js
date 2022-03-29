"use strict";

let carousel = document.querySelector(".carousel");

let carousel_pictures = [
  "./images/horizon_zero_dawn.jpg",
  "./images/red_dead_redemption.jpg",
  "./images/fallen_order.jpg",
  "./images/the_last_of_us.png",
  "./images/ufc4.png",
];

let counter = 1;

function myLoop() {
  setTimeout(function () {
    carousel.src = `${carousel_pictures[counter]}`;
    console.log(carousel_pictures[counter]);
    counter += 1;

    if (counter == carousel_pictures.length) {
      counter = 0;
    }

    myLoop();
  }, 3000);
}

myLoop();
