// let ripples = document.createElement("div");
// ripples.className = "ripples";
// let cleartimeout;
// let spanColor = $('.btn__white span');

// $.fn.btnAnimate = function () {
//     this.on('mouseover', function (e) {
//         console.log(this.getBoundingClientRect())
//         var topPageCoord = $(window).scrollTop();

//         let x = e.clientX - e.target.offsetLeft;
//         let y = e.clientY - e.target.offsetTop;

//         console.log('clientX', e.clientX )
//         console.log('clientY', e.clientY)

//         console.log('x', x)
//         console.log('y', y)


//         ripples.style.left = x + "px";
//         ripples.style.top = y + "px";
//         this.appendChild(ripples);
//         spanColor.addClass('span_color');

//         cleartimeout = setTimeout(() => {
//             ripples.remove();
//             spanColor.removeClass('span_color');
//         }, 1000);

//     });

//     this.on('mouseout', function () {
//         ripples.remove(cleartimeout);
//     });
// }
// $(".btn").btnAnimate();



[].map.call(document.querySelectorAll('[anim="ripple"]'), el => {
    el.addEventListener('mouseover', e => {
        e = e.touches ? e.touches[0] : e;
        const r = el.getBoundingClientRect(),
            d = Math.sqrt(Math.pow(r.width, 2) + Math.pow(r.height, 2)) * 2;
        el.style.cssText = `--s: 0; --o: 1;`;
        el.offsetTop;
        el.style.cssText = `--t: 1; --o: 0; --d: ${d}; --x:${e.clientX - r.left}; --y:${e.clientY - r.top};`
    })
})