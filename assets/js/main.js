/**
* Template Name: SoftLand - v4.7.0
* Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })






  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

 on('click', '#MoinContact', function(e) {
    select('.stickyContact').classList.add('stickyContactMoins')

    select('.imgContactForm').classList.add('imgContactFormMoins')

    select('#MoinContact').classList.add('displayNone')
    select('#PlusContact').classList.add('displayBlock')

  }, true)



 on('click', '#MoinContact', function(e) {
    select('.stickyContact').classList.add('stickyContactMoins')

    select('.imgContactForm').classList.add('imgContactFormMoins')

    select('#MoinContact').classList.add('displayNone')
    select('#PlusContact').classList.add('displayBlock')

  }, true)


 on('click', '#PlusContact', function(e) {
    select('.stickyContact').classList.remove('stickyContactMoins')
    select('.stickyContact').classList.add('stickyContact')

    select('.imgContactForm').classList.remove('imgContactFormMoins')

    select('#MoinContact').classList.remove('displayNone')
    select('#PlusContact').classList.remove('displayBlock')

  }, true)



 on('click', '#Gotelephone', function(e) {
    select('.phoneBodyForm').classList.add('displayBlock')
    select('.EmailBodyForm').classList.remove('displayBlock')
    select('.RappelBodyForm').classList.remove('displayBlock')
   
    select('#Gotelephone').classList.add('actif')
    select('#GoEmail').classList.remove('actif')
    select('#Goetre').classList.remove('actif')

    document.getElementById("GotelphoneImg").src = "assets/img/Téléassistance/icone-telephone-noir--cabinet-teleassitance-formulaire-bleu.png";
document.getElementById("GoemailImg").src = "assets/img/Téléassistance/icone-mail-noir--cabinet-teleassitance-formulaire.png";
document.getElementById("GoetreImg").src = "assets/img/Téléassistance/icone-casque-cabinet-teleassitance--formulaire-noir.png";


  }, true)

 on('click', '#GoEmail', function(e) {
    select('.phoneBodyForm').classList.remove('displayBlock')
    select('.EmailBodyForm').classList.add('displayBlock')
    select('.RappelBodyForm').classList.remove('displayBlock')

     select('#Gotelephone').classList.remove('actif')
    select('#GoEmail').classList.add('actif')
    select('#Goetre').classList.remove('actif')

document.getElementById("GoemailImg").src = "assets/img/Téléassistance/icone-mail-noir--cabinet-teleassitance-formulaire-bleu.png";
document.getElementById("GotelphoneImg").src = "assets/img/Téléassistance/icone-telephone-noir--cabinet-teleassitance-formulaire.png";
document.getElementById("GoetreImg").src = "assets/img/Téléassistance/icone-casque-cabinet-teleassitance--formulaire-noir.png";



  }, true)


 on('click', '#Goetre', function(e) {
    select('.phoneBodyForm').classList.remove('displayBlock')
    select('.EmailBodyForm').classList.remove('displayBlock')
    select('.RappelBodyForm').classList.add('displayBlock')

     select('#Gotelephone').classList.remove('actif')
    select('#GoEmail').classList.remove('actif')
    select('#Goetre').classList.add('actif')

document.getElementById("GoetreImg").src = "assets/img/Téléassistance/icone-casque-cabinet-teleassitance--formulaire.png";
document.getElementById("GoemailImg").src = "assets/img/Téléassistance/icone-mail-noir--cabinet-teleassitance-formulaire.png";
document.getElementById("GotelphoneImg").src = "assets/img/Téléassistance/icone-telephone-noir--cabinet-teleassitance-formulaire.png";

  }, true)





  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()



                  function gotoSection(section) {
                    
                      $('html, body').animate({
                          scrollTop: $("#" + section).offset({top:"-95%"}).top
                      }, 500);

                      $("#" +section).css("padding-top","9%");
                  }
