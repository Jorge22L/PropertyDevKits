<<<<<<< HEAD
document.addEventListener("DOMContentLoaded", function () {
    eventListener();
});

function eventListener() {
  const mobileMenu = document.querySelector(".mobile-menu");
  mobileMenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion");
  if (navegacion.classList.contains("mostrar")) {
    navegacion.classList.remove('mostrar');
  }
  else{
    navegacion.classList.add('mostrar');
  }
}
=======
document.addEventListener('DOMContentLoaded', function(){

    eventListeners();
})

function eventListeners()
{
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive()
{
    const navegacion = document.querySelector('.navegacion');
    if(navegacion.classList.contains('mostrar'))
    {
        navegacion.classList.remove('mostrar');
    }
    else{
        navegacion.classList.add('mostrar');
    }
}
>>>>>>> dominical_dev
