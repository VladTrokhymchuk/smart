// borger
function animateHamburger() {
    $('#hamburger-button').toggleClass('open');
    /*animation from burger to X*/

    // $("body").css('overflow', 'hidden');
}

function slideMenu() {
    $('.navbar').toggleClass('open');
    /*animation for slide down menu*/

}

function slideLogo() {
    $('.header__logo').toggleClass('header__logo--open');
    /*animation for slide down menu*/
}

$('#hamburger-button').click(function () {
    // console.log('trying');
    animateHamburger();
    slideMenu(); /*attaching click handler to the burger button*/
    slideLogo();

    if (window && window.innerWidth < 1024) {
        if ($('#hamburger-button').hasClass('open')) {
            $("body").css('overflow', 'hidden');
        } else {
            $("body").css('overflow', 'unset');
        }
    }

});

//animate

gsap.from(".header", {
    duration: 1.2,
    ease: "power2.out",
    top: "-100%"
});


const showAnim = gsap.from('header', {
    yPercent: -100,
    paused: true,
    duration: 0.2
}).progress(1);

ScrollTrigger.create({
    start: "top top",
    end: 99999,
    onUpdate: (self) => {
        self.direction === -1 ? showAnim.play() : showAnim.reverse()
    }
});

// header changes color
const navigation = document.querySelector('.header');
const sections = document.querySelectorAll('.section_targer');

function onScroll() {
    const nRect = navigation.getBoundingClientRect();

    for (let i = 0; i < sections.length; i++) {
        const section = sections[i];
        // console.log(section)
        const sRect = section.getBoundingClientRect();
        if (sRect.top < nRect.bottom && sRect.bottom > nRect.bottom) {
            const isBeige = section.classList.contains('beige_menu');
            const isDark = section.classList.contains('dark_beige_menu');
            const isLight = section.classList.contains('light_menu');
            
            
            navigation.classList.toggle('header-beige', isBeige);
            navigation.classList.toggle('header-dark-beige', isDark);
            navigation.classList.toggle('header-withe', isLight);
            
            //headerLogo.classList.toggle('active', isLight);
            break;
        };
    };
};

window.addEventListener('scroll', onScroll);
onScroll();