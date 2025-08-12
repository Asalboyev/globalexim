var menu = 0;
var swiper = new Swiper(".mySwiper", {
  direction: getDirection(),
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
 
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + "0"+ ( menu+index+1) + '</span>';
    },
 
  },
  on: {
    resize: function () {
      swiper.changeDirection(getDirection());
    },
  },
  navigation: {
    nextEl: '.next',
    prevEl: '.prev',
  },
});

function getDirection() {
 
  var direction = window.innerWidth >= 760 ? 'vertical' : 'horizontal';

  return direction;
}
var element = document.getElementById('phone');
var maskOptions = {
  mask: '+(9980)000-00-00'
};
var mask = IMask(element, maskOptions);