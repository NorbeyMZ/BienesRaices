document.addEventListener("DOMContentLoaded", function(){

    eventListener();
    darkMode();


});


function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
/** validad el dark mode del sistema */
    if(prefiereDarkMode){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode){
            document.body.classList.add('dark-mode');
        }else{
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.dark-mode-boton');

    botonDarkMode.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode');

    });

}

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    if(navegacion.classList.contains('mostrar')){  
        navegacion.classList.remove('mostrar');
        
    }else{
        navegacion.classList.add('mostrar');
    }
    /**tambien se puede reazlizar de navegacion.classList.toggle('mostrar'), realiza lo mismo que el if */
}

