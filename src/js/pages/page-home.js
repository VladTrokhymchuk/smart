var swiper = new Swiper(".popular-product", {
    slidesPerView: 3.5,
    spaceBetween: 15,
    grabCursor: true,
    breakpoints: {
        320: {
            slidesPerView: 1.31,
            slidesPerGroup: 1,
        },
        1024: {
            slidesPerView: 2.31,
            slidesPerGroup: 1,
        },
        1260: {
            slidesPerView: 2.43,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 2.54,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1900: {
            slidesPerView: 2.845,
            slidesPerGroup: 1,
            spaceBetween: 32,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
//

var swiper = new Swiper(".blog-news", {
    slidesPerView: 3,
    spaceBetween: 15,
    grabCursor: true,
    breakpoints: {
        320: {
            slidesPerView: 1,
            slidesPerGroup: 1,
        },
        1024: {
            slidesPerView: 3,
            slidesPerGroup: 1,
        },
        1260: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1400: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 24,
        },
        1900: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            spaceBetween: 32,
        },
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

//header animate left

let durationTime = 1.1;
let delayAnim = 0.95;
gsap.from('.head_box--content p:first-of-type', {
    duration: durationTime,
    ease: "power2.out",
    y: "20%",
    delay: delayAnim,

});

gsap.from('.head_box--content .h2', {
    duration: durationTime,
    ease: "power2.out",
    y: "25%",
    delay: delayAnim,

});

gsap.from('.head_box--content p:nth-of-type(2)', {
    duration: durationTime,
    ease: "power2.out",
    y: "480%",
    opacity: 0,
    delay: delayAnim,

});

if (window && window.innerWidth >= 1024) {
    gsap.from('.head_box--content .head_box--btn', {
        duration: durationTime,
        ease: "power2.out",
        y: "400%",
        delay: delayAnim,

    });
}



//header animate right

gsap.from('.bg__circle__two', {
    duration: durationTime,
    ease: "power2.out",
    y: "25%",
    rotation: 25,
    delay: delayAnim,

});

gsap.from('.bg__circle__three', {
    duration: durationTime,
    ease: "power2.out",
    y: "-5%",
    rotation: -6,
    delay: delayAnim,

});

//header animate right parallax
$(".head_box--img").mousemove(function (e) {
    parallaxIt(e, '.item--img:nth-of-type(1)', -60);
    parallaxIt(e, '.item--img:nth-of-type(2)', -40);
    parallaxIt(e, '.item--img:nth-of-type(3)', -25);
});

function parallaxIt(e, target, movement) {
    var $this = $(".head_box--img");
    var relX = e.pageX - $this.offset().left;
    var relY = e.pageY - $this.offset().top;

    TweenMax.to(target, 1, {
        x: (relX - $this.width() / 2) / $this.width() * movement,
        y: (relY - $this.height() / 2) / $this.height() * movement
    });
}


//parallax img
let leftBlockH1 = '.two_section .box_content h1';

//right
let rightBlockImg2 = '.box_img .box_img--items .picture_circle';
let rightBlockImg3 = '.box_img .box_img--items:nth-of-type(3) .picture';


if (window && window.innerWidth <= 1023) {
    var rightBlockImg1 = '.box_img .box_img--items:nth-of-type(1)';
    var rightBlockP = '.two_section .box_content p';
    var startTriger = "10% 80%";
    var endTriger = "60% top";

    //TweenLite
    var twoTimeYH1 = 30;
    var twoTimeYImg = 20;
    var twoTimeYImg1 = 40;
    var twoTimeYImg2 = 90;
    var twoTimeYP = 30;

    //scrollTrigger
    var twoScrollYH1 = 0;
    var twoScrollYImg = 0;
    var twoScrollYImg1 = 0;
    var twoScrollYImg2 = 0;
    var twoScrollYP = 0;

    ///
    TweenLite.set(leftBlockH1, {
        yPercent: twoTimeYH1,
    });

    TweenLite.set(rightBlockImg1, {
        yPercent: twoTimeYImg1,
    });

    TweenLite.set(rightBlockImg2, {
        yPercent: twoTimeYImg2,
    });
    TweenLite.set(rightBlockP, {
        yPercent: twoTimeYP,
    });


    var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".two_section",
                start: startTriger, // the default values
                end: endTriger,
                scrub: true,
                // markers: true,
                id: "two_section 111",
            },
            defaults: {
                duration: 1
            } // This gets passed to each tween
        })
        .to(leftBlockH1, {
            yPercent: twoScrollYH1,
            ease: "none",
        })
        .to(rightBlockImg1, {
            yPercent: twoScrollYImg1,
            ease: "none",
        }, 0)
        .to(rightBlockImg2, {
            yPercent: twoScrollYImg2,
            ease: "none",
        }, 0)
        .to(rightBlockP, {
            yPercent: twoScrollYP,
            ease: "none",
        }, 0)

}


if (window && window.innerWidth >= 1024) {
    var leftBlockImg = '.two_section .box_content .picture';
    var rightBlockImg1 = '.box_img .box_img--items:nth-of-type(2)';
    var rightBlockP = '.box_img .box_img--items p';
    var rightBlockBtn = '.box_img .box_img--items .box_btn';

    var startTriger = "top 70%";
    var endTriger = "20% top";

    //TweenLite
    var twoTimeYH1 = 30;
    var twoTimeYImg = 20;
    var twoTimeYImg1 = 40;
    var twoTimeYImg2 = 90;
    var twoTimeYP = 60;
    var twoTimeYBtn = 70;
    var twoTimeYImg3 = "120%";

    //scrollTrigger
    var twoScrollYH1 = 0;
    var twoScrollYImg = 0;
    var twoScrollYImg1 = -10;
    var twoScrollYImg2 = -10;
    var twoScrollYP = 0;
    var twoScrollYBtn = 0;
    var twoScrollYImg3 = "27%";

    //
    TweenLite.set(leftBlockH1, {
        yPercent: twoTimeYH1,
    });

    TweenLite.set(leftBlockImg, {
        yPercent: twoTimeYImg,
    });

    TweenLite.set(rightBlockImg1, {
        yPercent: twoTimeYImg1,
    });

    TweenLite.set(rightBlockImg2, {
        yPercent: twoTimeYImg2,
    });
    TweenLite.set(rightBlockP, {
        yPercent: twoTimeYP,
    });

    TweenLite.set(rightBlockBtn, {
        yPercent: twoTimeYBtn,
    });

    TweenLite.set(rightBlockImg3, {
        top: twoTimeYImg3,
    });

    var tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".two_section",
                start: startTriger, // the default values
                end: endTriger,
                scrub: true,
                // markers: true,
                id: "two_section 111",
            },
            defaults: {
                duration: 1
            } // This gets passed to each tween
        })
        .to(leftBlockH1, {
            yPercent: twoScrollYH1,
            ease: "none",
        })
        .to(leftBlockImg, {
            yPercent: twoScrollYImg,
            ease: "none",
        }, 0)
        .to(rightBlockImg1, {
            yPercent: twoScrollYImg1,
            ease: "none",
        }, 0)
        .to(rightBlockImg2, {
            yPercent: twoScrollYImg2,
            ease: "none",
        }, 0)
        .to(rightBlockP, {
            yPercent: twoScrollYP,
            ease: "none",
        }, 0)
        .to(rightBlockBtn, {
            yPercent: twoScrollYBtn,
            ease: "none",
        }, 0)
        .to(rightBlockImg3, {
            // top: "37%",
            top: twoScrollYImg3,
            ease: "none",
        }, 0)

} else if (window && window.innerWidth >= 1660) {
    var endTriger = "30% top";
}



//five_section
let fiveLeftBlockCont1 = '.five_section .left_box .h1';
let fiveLeftBlockCont2 = '.five_section .left_box .content';
// let fiveLeftBlockCont3 = '.five_section .left_box .five_section--btn';
let fiveLeftBlockCont = '.five_section .left_box';
let fiveRightBlockImg1 = '.five_section .right_box .picture:first-of-type';
let fiveRightBlockImg2 = '.five_section .right_box .picture:nth-of-type(2)';
let fiveRightBlockImg3 = '.five_section .right_box .picture:nth-of-type(3)';
let fiveRightBlockImg4 = '.five_section .right_box .picture:nth-of-type(4)';

if (window && window.innerWidth <= 1023) {
    TweenLite.set(fiveLeftBlockCont1, {
        yPercent: 30,
    });
    TweenLite.set(fiveLeftBlockCont2, {
        yPercent: 40,
    });

    TweenLite.set(fiveLeftBlockCont, {
        yPercent: 20,
    });


    TweenLite.set(fiveRightBlockImg1, {
        yPercent: 20,
    });
    TweenLite.set(fiveRightBlockImg2, {
        yPercent: 60,
    });
    TweenLite.set(fiveRightBlockImg3, {
        yPercent: 70,
    });
    TweenLite.set(fiveRightBlockImg4, {
        yPercent: 100,
    });

    var tl5 = gsap.timeline({
            scrollTrigger: {
                trigger: ".five_section",
                start: "top 70%", // the default values
                end: "70% top",
                scrub: true,
                // markers: true,
                id: "five_section 111",
            },
            defaults: {
                duration: 1
            } // This gets passed to each tween
        })
        .to(fiveRightBlockImg1, {
            yPercent: 0,
            ease: "none",
        })
        .to(fiveRightBlockImg2, {
            yPercent: 0,
            ease: "none",
        }, 0.4)
        .to(fiveRightBlockImg3, {
            yPercent: 0,
            ease: "none",
        }, 0.1)
        .to(fiveRightBlockImg4, {
            yPercent: 0,
            ease: "none",
        }, 0.3)
        .to(fiveLeftBlockCont1, {
            yPercent: 0,
            ease: "none",
        }, 0)
        .to(fiveLeftBlockCont2, {
            yPercent: 0,
            ease: "none",
        }, 0)
        .to(fiveLeftBlockCont, {
            yPercent: 0,
            ease: "none",
        }, 0)
}

if (window && window.innerWidth >= 1024) {
    var fiveLeftBlockCont3 = '.five_section .left_box .five_section--btn';

    TweenLite.set(fiveLeftBlockCont1, {
        yPercent: 30,
    });
    TweenLite.set(fiveLeftBlockCont2, {
        yPercent: 40,
    });
    TweenLite.set(fiveLeftBlockCont3, {
        yPercent: 50,
    });
    TweenLite.set(fiveLeftBlockCont, {
        yPercent: 20,
    });


    TweenLite.set(fiveRightBlockImg1, {
        yPercent: 20,
    });
    TweenLite.set(fiveRightBlockImg2, {
        yPercent: 40,
    });
    TweenLite.set(fiveRightBlockImg3, {
        yPercent: 50,
    });
    TweenLite.set(fiveRightBlockImg4, {
        yPercent: 80,
    });

    var tl5 = gsap.timeline({
            scrollTrigger: {
                trigger: ".five_section",
                start: "top 70%", // the default values
                end: "70% top",
                scrub: true,
                // markers: true,
                id: "five_section 111",
            },
            defaults: {
                duration: 1
            } // This gets passed to each tween
        })
        .to(fiveRightBlockImg1, {
            yPercent: -10,
            ease: "none",
        })
        .to(fiveRightBlockImg2, {
            yPercent: -50,
            ease: "none",
        }, 0.4)
        .to(fiveRightBlockImg3, {
            yPercent: -30,
            ease: "none",
        }, 0.1)
        .to(fiveRightBlockImg4, {
            yPercent: -150,
            ease: "none",
        }, 0.3)
        .to(fiveLeftBlockCont1, {
            yPercent: 0,
            ease: "none",
        }, 0)
        .to(fiveLeftBlockCont2, {
            yPercent: 0,
            ease: "none",
        }, 0.1)
        .to(fiveLeftBlockCont3, {
            yPercent: 0,
            ease: "none",
        }, 0.2)
        .to(fiveLeftBlockCont, {
            yPercent: 0,
            ease: "none",
        }, 0)
}


//six_section
let sixRightBlockImg1 = '.six_section .right_box .picture:first-of-type';
let sixRightBlockImg2 = '.six_section .right_box .picture:nth-of-type(2)';
let sixRightBlockImg3 = '.six_section .right_box .picture:nth-of-type(3)';

// let sixLeftBlockCont1 = '.six_section .left_box .h1';
// let sixLeftBlockCont2 = '.six_section .left_box .content';


// TweenLite.set(sixLeftBlockCont1, {
//     yPercent: 30,
// });
// TweenLite.set(sixLeftBlockCont2, {
//     yPercent: 35,
// });
TweenLite.set(sixRightBlockImg1, {
    yPercent: 10,
});
TweenLite.set(sixRightBlockImg2, {
    yPercent: 40,
});
TweenLite.set(sixRightBlockImg3, {
    yPercent: 40,
});

var tl6 = gsap.timeline({
        scrollTrigger: {
            trigger: ".six_section",
            start: "top 100%", // the default values
            end: "70% top",
            scrub: true,
            // markers: true,
            id: "six_section",
        },
        defaults: {
            duration: 1
        } // This gets passed to each tween
    })
    .to(sixRightBlockImg1, {
        yPercent: 0,
        ease: "none",
    }, 0)
    .to(sixRightBlockImg2, {
        yPercent: -10,
        ease: "none",
    }, 0)
    .to(sixRightBlockImg3, {
        yPercent: -10,
        ease: "none",
    }, 0)
// .to(sixLeftBlockCont1, {
//     yPercent: 0,
//     ease: "none",
// }, "-=2")
// .to(sixLeftBlockCont2, {
//     yPercent: 0,
//     ease: "none",
// }, "-=2")