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

        // End of toggle menu


        // To chaneg the active class and add to the clicked link

function selectActiveClass(){

    $(document).on('click' , 'nav .nav__menu ul li a' , function() {
		$(this).addClass('color').siblings().removeClass('color')
})
}

selectActiveClass()


        // To change the active class on scrolling 

var sections  =  document.querySelectorAll('section')

onscroll = function() {
    var scrollPosition = document.documentElement.scrollTop;

    sections.forEach((section) => {
        if(
            scrollPosition >= section.offsetTop - section.offsetHeight * 0.90
            &&
            scrollPosition < section.offsetTop + section.offsetHeight - section.offsetHeight * 0.90
        ){
            var currentId = section.attributes.id.value
            removeActiveClasses();
            addActiveClass(currentId);
        }
    });
};

var removeActiveClasses = function () {
    document.querySelectorAll('nav .nav__menu ul li a').forEach((e) => {
        e.classList.remove('color');
    });
};

var addActiveClass = function (id) {
    console.log(id);

    var selector =`nav .nav__menu ul li a[href = "#${id}"]`;
    document.querySelector(selector).classList.add('color')
}