<section class="position-relative">
    <div style="background: url('../main/testimonial_images/testimonialbg.jpg'); min-height: 100vh; background-size: cover; padding: 10% 0;">

    <!--BACKGROUND BLUE -->
        <div class="d-none d-lg-block container bg-secondary py-5 position-absolute rounded-4 w-75" style="opacity: .8; height:570px; left: 8%; top: 15%; z-index: 1;"></div>
    <!--------------------------->

        <div class="position-relative container d-flex flex-column flex-lg-row" style="z-index: 2; padding-left: 3%;">
            <div class="d-none position-absolute bg-white d-lg-flex align-items-center justify-content-center my-auto"style="width: 150px; height: 150px; top:-100px; border-radius: 50%;">
                <h1 class="fw-bolder display-1 text-warning my-auto" style="font-size: 150px;">"</h1>
            </div>
            <div class="me-4 position-relative mt-auto mb-5" style="flex: 0 0 30%;">
                <div class="text-white my-5 ms-2 mb-0">
                    <h1 class="fw-bold fs-1">Testimonials</h1>
                    <p class="fs-5 mb-0">"Our testimonials reflect the real experiences of our valued clients. Read their stories and discover how our services have made a positive impact on their journey. These voices of trust and satisfaction inspire us to keep delivering the best every day."</p>
                </div>
            </div>
            <div id="testimonial_content" class="flex-grow-1" style="min-width: 0;"></div>
        </div>

    </div>
</section>

<script>
    const testimonialContent = document.getElementById('testimonial_content');
    testimonialContent.innerHTML=`
        <div class="owl-carousel owl-theme container">
            ${testimonials.map(testimonial => `
                <div class="item d-flex flex-column rounded-4 my-2 justify-content-between w-auto" style="background: white; height: 465px;">
                <div> 
                    <div class="position-relative">
                        <img src="${testimonial.imgpath}" 
                        alt="${testimonial.name}" 
                        class="mx-auto mb-2 h-auto rounded-top-4" style="border-bottom: solid 15px #F0C004">
                        <div class="position-absolute bg-warning d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; bottom: -10px; right: 10px;  border-radius: 50%;">
                            <h2 class="fw-bolder display-5 text-white my-auto text-center">"</h2>
                        </div>
                    </div>
                    <div class="mx-3">
                        <p class="mb-0 fw-bolder fs-4 text-warning">${testimonial.name}</p>
                        <p class="mb-0 text-muted fs-6">${testimonial.role}</p>
                        <p class="">${testimonial.message.length > 100 ? testimonial.message.slice(0, 100) + "..." : testimonial.message}</p>
                    </div>
                </div>
                    <button class="btn btn-warning rounded-pill w-75 p-2 text-center mb-2 text-light mx-auto fs-5">Read More</button>
                </div>
            `).join('')}
        </div>
        <div class="owl-controls">
            <div class="testimonial-custom-nav owl-nav text-white align-items-center text-end me-4"></div>
        </div>
    `;
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        // autoWidth: true,
        nav: true,
        navText: ["<div class='nav-btn'><p class='my-auto py-auto fs-4 fw-bold'>‹</p></div>", "<div class='nav-btn'><p class='my-auto py-auto fs-4 fw-bold'>›</p></div>"],
        navContainer: '#testimonial_content .testimonial-custom-nav',
        autoplay: true,
        dots: false,
        autoplayTimeout: 4000,
        responsive: {
            0: { items: 1 },
            600: { items: 2 },
            1000: { items: 3 }
        },
    });
</script>