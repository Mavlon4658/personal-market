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
    if (swpFraction) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${aboutSwp.activeIndex + 1}</span> / ${aboutSwp.slides.length}`;
    }
    
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
    if (swpFraction) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${partnerSwp.activeIndex + 1}</span> / ${partnerSwp.slides.length}`;
    }
    
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

if (document.querySelector('.review-swp')) {
    const swpFraction = document.querySelector('.review-swp__control .swp-fraction');
    swpFraction.innerHTML = '';
    swpFraction.innerHTML = `<span>${reviewSwp.activeIndex + 1}</span> / ${reviewSwp.slides.length}`;
    
    reviewSwp.on('slideChange', function (e) {
        swpFraction.innerHTML = '';
        swpFraction.innerHTML = `<span>${reviewSwp.activeIndex + 1}</span> / ${reviewSwp.slides.length}`;
    });
}

const artileSwp = new Swiper('.related-articles .swiper', {
    slides: 1,
    spaceBetween: 20,
    speed: 800,
    navigation: {
        nextEl: '.related-articles .swp-btn__next',
        prevEl: '.related-articles .swp-btn__prev',
    }
})

document.addEventListener("DOMContentLoaded", function () {
    if (document.querySelector('.form-date')) {
        flatpickr('.form-date', {
            enableTime: false,
            monthSelectorType: "static",
            dateFormat: "m/d/y",
        });
    }
})

// modals
const modalCls = ['.service-modal'];

modalCls.forEach(cls => {
    const modal = document.querySelector(cls);
    const modalOpenBtns = document.querySelectorAll(`${cls}__open`);
    const modalCloseBtn = document.querySelector(`${cls} .modal-close`);
    const modalBg = document.querySelector(`${cls} .modal-bg`);

    const modalClose = () => {
        bodyVisible();
        modal.classList.remove('active');
        modal.classList.add('end-active');
        setTimeout(() => {
            modal.classList.remove('end-active');
        }, 400);
    }

    if (modalOpenBtns.length) {
        modalOpenBtns.forEach(btn => {
            btn.onclick = e => {
                e.preventDefault();
                modal.classList.add('active');
                bodyHidden();
            }
        })
    }

    if (modalCloseBtn) {
        modalCloseBtn.onclick = () => modalClose();
    }

    if (modalBg) {
        modalBg.onclick = () => modalClose();
    }

})
// modals end

// Header location
const headerLocation = document.querySelectorAll('.header-location');
if (headerLocation.length) {
    headerLocation.forEach(el => {
        const btn = el.querySelector('.header-location__btn');
        const list = document.querySelectorAll('.header-location__list li');
        if (btn) {
            btn.onclick = () => {
                el.classList.toggle('active');
            }
        }
        if (list.length) {
            list.forEach(listBtn => {
                listBtn.onclick = () => {
                    btn.querySelector('span').textContent = listBtn.textContent;
                    btn.querySelector('input').value = listBtn.textContent;
                    list.forEach(a => {
                        if (a == listBtn) {
                            a.classList.add('select');
                        } else {
                            a.classList.remove('select')
                        }
                    });
                    el.classList.remove('active');
                }
            })
        }
    })
}

const vacancyList = document.querySelector('.vacancy-list__container');
const vacancyListShow = document.querySelector('.vacancy-list__container .text-more');

if (vacancyList) {
    vacancyListShow.onclick = e => {
        e.preventDefault();
        vacancyList.classList.add('active');
    }
}

window.addEventListener('click', event => {
    if (headerLocation.length) {
        headerLocation.forEach(el => {
            if (!el.contains(event.target)) {
                el.classList.remove('active')
            }
        })
    }
})
// Header location end
