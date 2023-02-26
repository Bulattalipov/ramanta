export default function () {
  let btnMenu = document.querySelector('.header__burger');
  let menu = document.querySelector('.menu');
  btnMenu.addEventListener('click', function () {
    btnMenu.classList.toggle('active');
    menu.classList.toggle('active');
  })
}
