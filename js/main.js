        // Nav bar with togglemenu 
function menu(){
    const header = document.querySelector('header')
    const menu = document.querySelector('.menu')
    const close = document.querySelector('.close')
    const tog_menu = document.querySelector('.toggle__menu')
    const navmenu = document.querySelector('.nav__menu')
    const navmenuUL = document.querySelector('.nav__menu ul')
    const blur = document.querySelector('.bg__blur')

    tog_menu.addEventListener('click' , () => {
        navmenu.classList.toggle('active')
        menu.classList.toggle('active')
        close.classList.toggle('active')
        header.classList.toggle('active')
        blur.classList.toggle('active')
        navmenuUL.classList.toggle('active')
    })
}

menu()

        // To chaneg the active class and add to the clicked link

function selectActiveClass(){
    const activeClass = document.querySelector('.nav .nav__menu ul li a')
    
    $(document).on('click' , 'ul li' , function() {
		$(this).addClass('active').siblings().removeClass('active')
})
}

selectActiveClass()

        // End of toggle menu