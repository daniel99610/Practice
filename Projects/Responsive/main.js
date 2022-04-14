const menuBtn = document.querySelector('#open-menu-btn');
const closeBtn = document.querySelector('#close-menu-btn');
const menu = document.querySelector('.nav__menu');


menuBtn.addEventListener('click', () => {
    menu.style.display = 'block';
    closeBtn.style.display = 'inline-block';
    menuBtn.style.display = 'none';
})



const closeNav = () => {
    menu.style.display = 'none';
    closeBtn.style.display = 'none';
    menuBtn.style.display = 'inline-block';
}


closeBtn.addEventListener('click', closeNav);


if (window.innerWidth < 1024) {
    document.querySelectorAll(".nav__menu li a").forEach(navItem => {
        navItem.addEventListener('click', closeNav)
    })
}


window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 0);
})


const fetchTestimonials = () => {
    let testimonialsContainer = document.querySelector('.testimonials__container');
    testimonialsContainer.innerHTML = '';

    testimonials.forEach(testimonial => {
        const newTestimonial = document.createElement('article');
        newTestimonial.className = 'testimonial';
        newTestimonial.innerHTML = `
        <p>
        "${testimonial.quote}"
        </p>
        <div class="testimonial__client">
            <span class="avatar">
                <img src="./images/${testimonial.avatar}.jpg">
            </span>
            <div class="testimonial__work">
                <p><b>${testimonial.name}</b></p>
                <small>${testimonial.title}</small>
            </div>
        </div>`;
        testimonialsContainer.append(newTestimonial);
    })

}


window.addEventListener('load', fetchTestimonials)