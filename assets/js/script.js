/* Slick Slider section start */
$('.testimonial-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        },
        {
            breakpoint: 768,
            settings: { slidesToShow: 1, arrows: false }
        }
    ]
});
/* Slick Slider section end */
$(document).ready(function(){
    $('.quilting-slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
            {
                breakpoint: 992,
                settings: { slidesToShow: 2 }
            },
            {
                breakpoint: 768,
                settings: { slidesToShow: 1, arrows: false }
            }
        ]
    });
});

/* quilting Slider section start */
$('.quilting-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        },
        {
            breakpoint: 768,
            settings: { slidesToShow: 1, arrows: false }
        }
    ]
});
/* quilting Slider section end */




/* Hover Dropdown section start (Shop) */
document.querySelectorAll('.hover-dropdown').forEach(function (li) {
    var toggle = li.querySelector('[data-bs-toggle="dropdown"]');
    var bsDropdown = new bootstrap.Dropdown(toggle, { autoClose: true });

    li.addEventListener('mouseenter', function () {
        if (window.innerWidth >= 992) {
            bsDropdown.show();
        }
    });

    li.addEventListener('mouseleave', function () {
        if (window.innerWidth >= 992) {
            bsDropdown.hide();
        }
    });
});

/* Hover Dropdown section start (Shop) */

/* Sticky Header Shadow */
window.addEventListener('scroll', function () {
    const header = document.getElementById('site-header');
    if (window.scrollY > 40) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

/* Sticky Header section end  Shadow */


/* Scroll Reveal  */
(function () {
    const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('revealed');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealEls.forEach(function (el) {
        observer.observe(el);
    });
})();

/*  Section Heading Typing Animation  */
(function () {
    var headings = document.querySelectorAll('[data-type-heading]');

    function typeHeading(el) {
        var fullText = el.textContent.trim().replace(/\s+/g, ' ');
        el.textContent = '';

        var cursor = document.createElement('span');
        cursor.className = 'typing-cursor';
        el.appendChild(cursor);

        var i = 0;
        var speed = fullText.length > 20 ? 55 : 75;

        function tick() {
            if (i < fullText.length) {
                el.insertBefore(document.createTextNode(fullText[i]), cursor);
                i++;
                setTimeout(tick, speed);
            } else {
                setTimeout(function () {
                    if (cursor.parentNode) cursor.parentNode.removeChild(cursor);
                }, 800);
            }
        }
        tick();
    }

    var typingObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                typeHeading(entry.target);
                typingObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.4 });

    headings.forEach(function (h) {
        typingObserver.observe(h);
    });
})();

/*  Typing Effect on Hero Heading  */
(function () {
    const el = document.getElementById('hero-heading');
    if (!el) return;

    const lines = ['Precision Design', 'Quilting'];
    let lineIdx = 0, charIdx = 0;

    el.innerHTML = '';
    const span1 = document.createElement('span');
    const br = document.createElement('br');
    const span2 = document.createElement('span');
    const cursor = document.createElement('span');
    cursor.className = 'typing-cursor';

    el.appendChild(span1);
    el.appendChild(br);
    el.appendChild(span2);
    el.appendChild(cursor);

    function type() {
        if (lineIdx === 0) {
            charIdx++;
            span1.textContent = lines[0].substring(0, charIdx);
            if (charIdx < lines[0].length) {
                setTimeout(type, 85);
            } else {
                lineIdx = 1;
                charIdx = 0;
                setTimeout(type, 320);
            }
        } else {
            charIdx++;
            span2.textContent = lines[1].substring(0, charIdx);
            if (charIdx < lines[1].length) {
                setTimeout(type, 90);
            }
        }
    }

    setTimeout(type, 900);
})();

/* Hover tilt on quilt cards  */
document.querySelectorAll('.card-box').forEach(function (card) {
    card.addEventListener('mousemove', function (e) {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const midX = rect.width / 2;
        const midY = rect.height / 2;
        const rotateX = ((y - midY) / midY) * -4;
        const rotateY = ((x - midX) / midX) * 4;
        card.style.transform = 'perspective(600px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg) translateY(-6px)';
    });
    card.addEventListener('mouseleave', function () {
        card.style.transform = '';
    });
});
