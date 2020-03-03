function detectmob() {
  if (navigator.userAgent.match(/Android/i) ||
    navigator.userAgent.match(/webOS/i) ||
    navigator.userAgent.match(/iPhone/i) ||
    navigator.userAgent.match(/iPad/i) ||
    navigator.userAgent.match(/iPod/i) ||
    navigator.userAgent.match(/BlackBerry/i) ||
    navigator.userAgent.match(/Windows Phone/i)
  ) {
    return true;
  } else {
    return false;
  }
}

$(document).ready(function () {
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    // Do something
    if (scroll > 0) {
      $("body").addClass("is-scrolling");
    } else {
      $("body").removeClass("is-scrolling")
    }
  });

  var menuStatus = true;
  var menuElement = $(".js-burger-menu");
  if (menuElement.length > 0 && detectmob()) {
    burgerMenu = bodymovin.loadAnimation({
      container: document.querySelector('.js-burger-menu'), // the dom element that will contain the animation
      renderer: 'svg',
      loop: false,
      autoplay: false,
      path: altp_burger_data + 'burger-data.json'
      //'assets/data/burger-data.json' // the path to the animation json
    });
    menuElement.click(function () {
      menuStatus = !menuStatus;

      if (menuStatus) {
        // second click
        burgerMenu.setDirection(-1);
        burgerMenu.play();
      } else {
        // first click
        burgerMenu.setDirection(1);
        burgerMenu.play();
      }
    })

    $(".js-burger-menu").click(function () {
      $(".c-header__menu").toggleClass("c-header__menu--show");
    })

    $(".c-header__menu li a").click(function () {
      $(".c-header__menu").removeClass("c-header__menu--show");
      burgerMenu.setDirection(-1);
      burgerMenu.play();
      menuStatus = true;
    })
  }

})

// Smooth scrolling
jQuery(document).ready(function ($) {
  // Add smooth scrolling to all links
  $(".js-scrollto a").on('click', function (event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $("html, body").animate({
        scrollTop: ($(hash).offset().top - 60) + 'px'
      }, 1200, function () {

        // Add hash (#) to URL when done scrolling (default click behavior)
        // /window.location.hash = hash;
      });
    } // End if
  });
})