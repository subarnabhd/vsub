
// --------------------------------------------------------------------

// Wait for the page to load
// window.addEventListener("load", function () {
//     const preloader = document.querySelector(".preloader");
//     const content = document.querySelector(".content");
  
//     preloader.style.display = "none";
//     content.style.display = "block";
//   });


// --------------------------------------------------------------------

// ----header switch
document.addEventListener('DOMContentLoaded', function () {
    'use strict';
    var navigation = document.querySelector(".theader");
    var darkSections = document.querySelectorAll('.d-nav');
    function headerDarkMode() {
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var isOverAnyDarkSection = false;
      darkSections.forEach(function (darkSection) {
        var top = darkSection.offsetTop;
        var height = darkSection.offsetHeight;
        var bottom = top + height;
        if (scrollTop >= top - 20 && scrollTop < bottom - 20) {
          isOverAnyDarkSection = true;
        }
      });
      if(window.pageYOffset<=45){
      	navigation.classList.add('minimal');
      }else{
      if (isOverAnyDarkSection) {
        navigation.classList.add('minimal');
      } else {
        navigation.classList.remove('minimal');
      }
    }
    }
    window.addEventListener('scroll', function () {
      headerDarkMode();
    });
  });





//------------------------------------------------------------
// ----dark mode
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }    
}

toggleSwitch.addEventListener('change', switchTheme, false);




// ------------------------------
$(document).ready(function(){

  if($('.brands_slider').length)
       {
           var brandsSlider = $('.brands_slider');

           brandsSlider.owlCarousel(
           {
               loop:true,
               autoplay:true,
               autoplayTimeout:5000,
               nav:false,
               dots:false,
               autoWidth:true,
               items:8,
               margin:42
           });

           if($('.brands_prev').length)
           {
               var prev = $('.brands_prev');
               prev.on('click', function()
               {
                   brandsSlider.trigger('prev.owl.carousel');
               });
           }

           if($('.brands_next').length)
           {
               var next = $('.brands_next');
               next.on('click', function()
               {
                   brandsSlider.trigger('next.owl.carousel');
               });
           }
       }


   });


   ////////------------
   