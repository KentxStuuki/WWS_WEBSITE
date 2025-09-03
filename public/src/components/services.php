<section>
    <div class="text-center">
        <div style="background: url('../main/services_images/corebg.jpg'); min-height: 100vh; background-size: cover;" class="py-5">
            <h1 class="text-warning fw-bold">Core Services</h1>
            <div id="services_content" class="position-relative container"></div>
            <button class="btn btn-warning rounded-pill text-white shadow mt-2 px-5" style="width: 250px;">View All</button>
        </div>
    </div>
</section>
<script>
    const servicesContent = document.getElementById('services_content');
    servicesContent.innerHTML=`
        <div class="owl-carousel owl-theme container">
            ${services.map(service => `
                <div class="item p-3 d-flex flex-column rounded-4 shadow m-4 justify-content-between w-auto" style="background: white;">
                    <div>
                        <img src="${service.imgpath}" 
                            alt="${service.title}" 
                            class="mx-auto mb-4 h-auto rounded-xl object-cover">
                        <h4 class="fw-bolder mb-2 fs-3 mx-2">${service.title}</h4>
                        <p class="fs-5 mx-2">${service.desc}</p>
                    </div>
                    <div class="text-center px-4">
                        <button class="btn btn-warning rounded-pill w-75 p-2 text-center mb-2 text-light">See Details...</button>
                    </div>
                </div>
            `).join('')}
        </div>
        <div class="owl-controls">
            <div class="custom-nav owl-nav text-white align-items-center"></div>
        </div>
    `;
    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: true,
        navText: ["<div class='nav-btn'><p class='my-auto py-auto fs-4 fw-bold'>‹</p></div>", "<div class='nav-btn'><p class='my-auto py-auto fs-4 fw-bold'>›</p></div>"],
        navContainer: '#services_content .custom-nav',
        autoplay: true,
        dots: false,
        autoplayTimeout: 4000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        },
        onInitialized: highlightFirst,
        onTranslated: highlightFirst
    });
    function highlightFirst(event) {
        var $items = $(".owl-carousel").find('.owl-item');
        $items.removeClass('highlight');
        $items.filter('.active').first().addClass('highlight');
    }
</script>