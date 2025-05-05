const bodyHidden = () => {
    document.querySelector('body').style.overflow = 'hidden';
}

const bodyVisible = () => {
    document.querySelector('body').style.overflow = 'visible';
}

const phoneInp = document.querySelectorAll('input[type="tel"]');

if (phoneInp.length) {
    phoneInp.forEach(el => {
        IMask(el, {
            mask: '+{7} (000) 000-00-00',
        })
    });
}

const bars = document.querySelector('.header-bars');
const menu = document.querySelector('.menu');

bars.onclick = () => {
    menu.classList.toggle('active');
    bars.classList.toggle('active');
}

const accordions = document.querySelectorAll('.accordion');

if (accordions.length) {
    accordions.forEach((item) => {
        const accBtn = item.querySelector('.accordion-btn');
        const accBody = item.querySelector('.accordion-body__wrap');
    
        if (item.classList.contains('active')) {
            accBody.style.maxHeight = accBody.scrollHeight + 'px';
        }

        accBtn.addEventListener('click', () => {
            item.classList.toggle('active')
            accBody.style.maxHeight = accBody.style.maxHeight ? null : accBody.scrollHeight + 'px';
        });
    });
}

const serviceBtn = document.querySelector('.services-content__left .title');
const serviceBody = document.querySelector('.services-content__left-body');

if (serviceBtn) {
    serviceBtn.onclick = () => {
        serviceBody.classList.toggle('active');
        serviceBtn.classList.toggle('active');
    }
}

const aboutSwp = new Swiper('.about-swp .swiper', {
    slidesPerView: 1,
    spaceBetween: 20,
    navigation: {
        nextEl: '.about-swp__control .swp-btn__next',
        prevEl: '.about-swp__control .swp-btn__prev',
    }
})

if (aboutSwp) {
    const swpFraction = document.querySelector('.about-swp__control .swp-fraction');
    swpFraction.innerHTML = '';
    swpFraction.innerHTML = `<span>${aboutSwp.activeIndex + 1}</span> / ${aboutSwp.slides.length}`;
    
    aboutSwp.on('slideChange', function (e) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${aboutSwp.activeIndex + 1}</span> / ${aboutSwp.slides.length}`;
    });
}

const partnerSwp = new Swiper('.partner-swp .swiper', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    loo: true,
    breakpoints: {
        992: {
            spaceBetween: 20
        }
    },
    navigation: {
        nextEl: '.partner-swp__control .swp-btn__next',
        prevEl: '.partner-swp__control .swp-btn__prev',
    }
})

if (partnerSwp) {
    const swpFraction = document.querySelector('.partner-swp__control .swp-fraction');
    swpFraction.innerHTML = '';
    swpFraction.innerHTML = `<span>${partnerSwp.activeIndex + 1}</span> / ${partnerSwp.slides.length}`;
    
    partnerSwp.on('slideChange', function (e) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${partnerSwp.activeIndex + 1}</span> / ${partnerSwp.slides.length}`;
    });
}

const reviewSwp = new Swiper('.review-swp', {
    slidesPerView: 1,
    spaceBetween: 20,
    loo: true,
    breakpoints: {
        992: {
            slidesPerView: 'auto'
        }
    },
    navigation: {
        nextEl: '.review-swp__control .swp-btn__next',
        prevEl: '.review-swp__control .swp-btn__prev',
    },
    pagination: {
        el: '.review-foot .swp-pagination',
        clickable: true,
    },
})

if (reviewSwp) {
    const swpFraction = document.querySelector('.review-swp__control .swp-fraction');
    swpFraction.innerHTML = '';
    swpFraction.innerHTML = `<span>${reviewSwp.activeIndex + 1}</span> / ${reviewSwp.slides.length}`;
    
    reviewSwp.on('slideChange', function (e) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${reviewSwp.activeIndex + 1}</span> / ${reviewSwp.slides.length}`;
    });
}

