//footer
if (window && window.innerWidth >= 1024){
    let footer = 'footer';
    TweenLite.set(footer, {
        yPercent: 20,
    });
    var tlFoot = gsap.timeline({
        scrollTrigger: {
            trigger: "footer",
            start: "top 100%", // the default values
            end: "top 50%",
            scrub: true,
            // markers: true,
            id: "footer",
        },
        defaults: {
            duration: 1
        } // This gets passed to each tween
    })
    .to(footer, {
        yPercent: 0,
        ease: "none",
    }, 0)
}
