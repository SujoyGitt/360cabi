let menu = document.querySelector(".menu");

let closemenu = document.querySelector(".close");

menu.addEventListener('click',()=>{

  document.querySelector('.nav-menu').classList.toggle('menuadd')

})

closemenu.addEventListener("click",()=>{

  document.querySelector('.nav-menu').classList.remove('menuadd')

})

window.addEventListener("scroll",()=>{

  if (window.scrollY > 150) {

    document.querySelector("header").classList.add("fixednav");

  } else {

    document.querySelector("header").classList.remove("fixednav");

  }

})



$('.fleet-carousel').owlCarousel({

  margin:30,

  nav:false,

  dots:true,

  autoplay:true,

  responsive:{

      0:{

          items:1

      },

      800:{

          items:2

      },

      1000:{

          items:3

      }

  }

})

$('.testimonial-carousel').owlCarousel({

  margin:30,

  nav:false,

  dots:true,

  items:1,

  animateIn: 'fadeIn',

  animateOut: 'fadeOut',



})



var swiper = new Swiper(".carousel1 .mySwiper", {

  spaceBetween: 10,

  slidesPerView: 4,

  freeMode: true,

  watchSlidesProgress: true,

});

var swiper2 = new Swiper(".carousel1  .mySwiper2", {

 spaceBetween: 10,

 navigation: {

   nextEl: ".swiper-button-next",

   prevEl: ".swiper-button-prev",

 },

 thumbs: {

   swiper: swiper,

 },

});



function swiperfun(fast,last) {

  var swipe;

  swipe += fast;

  swipe = new Swiper(`.carousel${fast} .mySwiper`, {

    spaceBetween: 10,

    slidesPerView: 4,

    freeMode: true,

    watchSlidesProgress: true,

  });

  var swiper;

  swiper+=last;

  swiper =  new Swiper(`.carousel${fast} .mySwiper2`, {

   spaceBetween: 10,

   navigation: {

     nextEl: ".swiper-button-next",

     prevEl: ".swiper-button-prev",

   },

   thumbs: {

     swiper: swipe,

   },

  });

}

swiperfun(2,3);

swiperfun(3,4);

swiperfun(4,5);

swiperfun(5,6);

swiperfun(6,7);

swiperfun(7,8);

swiperfun(8,9);

swiperfun(9,10);

swiperfun(10,11);

swiperfun(11,12);


// fleet main page tabs with carousel
const tabContainer = document.querySelector("#parent");
const navList = tabContainer.querySelectorAll(".menu button");
const tabList = tabContainer.querySelectorAll(".tab");
console.log(navList)
for (let i = 0; i < navList.length; i++) {
  navList[i].addEventListener("click", (evt) => {
    let currentLink = tabContainer.querySelector("button.active");
    let currentTab = tabContainer.querySelector(".tab.active");

    currentLink.classList.remove("active");
    navList[i].classList.add("active");

    currentTab.classList.remove("active");
    tabList[i].classList.add("active");
  });
}