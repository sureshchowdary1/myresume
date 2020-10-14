        // Nav bar with togglemenu 
function menu(){
    const header = document.querySelector('header')
    const menu = document.querySelector('.menu')
    const close = document.querySelector('.close')
    const tog_menu = document.querySelector('.toggle__menu')
    const navmenu = document.querySelector('.nav__menu')

    tog_menu.addEventListener('click' , () => {
        navmenu.classList.toggle('active')
        menu.classList.toggle('active')
        close.classList.toggle('active')
        header.classList.toggle('active')
        
    })
}

menu()

        // End of toggle menu