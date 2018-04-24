var menu_btn = document.getElementById('menu-toggle'),
    menu_nav = document.getElementById('menu-nav');

menu_btn.addEventListener('click', moveMenu);

function moveMenu(){
  if (menu_nav.classList.contains('nav-show')) {
    menu_nav.classList.remove('nav-show');
  } else {
    menu_nav.classList.add('nav-show');
  }
};
