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

//scroll

$(document).ready(function() {

$("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });

  });
