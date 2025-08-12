document.querySelector('.header__burger').addEventListener('click',function(){
  document.querySelector('body').classList.toggle('lock');
  document.querySelector(".header__burger").classList.toggle('active')
  document.querySelector('.header__menu-list').classList.toggle('active')
  document.querySelector('.header__menu').classList.toggle('active')

})
document.querySelector('.header__top-lang').addEventListener('click',function(){
  document.querySelector('.header__top-lang').classList.toggle('active')
  document.querySelector('.header__top-lang-inner').classList.toggle('active')
})