@section('home')

<div class="tm-welcome-container text-center text-white">
    <div class="tm-welcome-container-inner">
        <p class="tm-welcome-text mb-1 text-white">Video Catalog is brought to you by TemplateMo.</p>
        <p class="tm-welcome-text mb-5 text-white">This is a full-width video banner.</p>
        <a href="#content" id="kehed" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
            <span>Discover</span>
        </a>
    </div>
</div>

<div id="tm-video-container">
    <video autoplay muted loop id="tm-video">
        <!-- <source src="video/sunset-timelapse-video.mp4" type="video/mp4"> -->
        <source src="/web/video/wheat-field.mp4" type="video/mp4">
    </video>
</div>

<i id="tm-video-control-button" class="fas fa-pause"></i>
</div>

<div class="container-fluid">
    <div id="content" class="mx-auto tm-content-container">
        <main>
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-page-title mb-4">Our Video Catalog</h2>
                    <div class="tm-categories-container mb-5">
                        <h3 class="tm-text-primary tm-categories-text">Categories:</h3>
                        <ul class="nav tm-category-list">
                            <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link active">All</a></li>
                            <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Drone Shots</a></li>
                            <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Nature</a></li>
                            <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Actions</a></li>
                            <li class="nav-item tm-category-item"><a href="#" class="nav-link tm-category-link">Featured</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row tm-catalog-item-list">
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-01.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Aenean aliquet sapien</h3>
                        <p class="tm-catalog-item-text">Video thumbnail has a link to another HTML page.
                            Categories <span class="tm-text-secondary">do not need</span> any JS.
                            They are just separated HTML pages. Paging is at the bottom to extend the list as long as you want.
                            This can be a large catalog.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-02.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Mauris in odio vel odio</h3>
                        <p class="tm-catalog-item-text">You may need TemplateMo for a quick chat or send an email if you have any question about this CSS template.
                            <span class="tm-text-secondary">font-family: 'Source Sans Pro', sans-serif; for this template.</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Sagittis sodales enim</h3>
                        <p class="tm-catalog-item-text">You are allowed to use this video catalog for your business websites.
                            Please do not make a re-distribution of our template ZIP file on any template collection website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-04.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Nam tincidunt consectetur</h3>
                        <p class="tm-catalog-item-text">You can apply this template for your commercial CMS theme. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-05.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Praesent posuere rhoncus</h3>
                        <p class="tm-catalog-item-text">Duis vulputate nisl metus, eget dapibus nunc ultricies id. Ut augue mauris, varius quis nulla non, sollicitudin consectetur nisl. Donec eget arcu placerat, ullamcorper.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Turpis massa aliquam</h3>
                        <p class="tm-catalog-item-text">Nunc neque risus, ultrices sed luctus at, iaculis at arcu. Pellentesque rutrum velit nec sapien ullamcorper ultrices. Vestibulum lectus risus, laoreet pretium ipsum</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-07.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Class aptent taciti sociosqu</h3>
                        <p class="tm-catalog-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus bibendum orci sit amet dignissim rhoncus. Pellentesque pretium faucibus vestibulum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-08.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Donec ac nisl ul elit</h3>
                        <p class="tm-catalog-item-text">Suspendisse in odio congue, lobortis metus sed, venenatis nisl. In dapibus et massa feugiat facilisis. Maecenas venenatis aliquet nulla, a tincidunt erat suscipit eget.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                    <div class="position-relative tm-thumbnail-container">
                        <img src="/web/img/tn-09.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                        <a href="/video" class="position-absolute tm-img-overlay">
                            <i class="fas fa-play tm-overlay-icon"></i>
                        </a>
                    </div>
                    <div class="p-4 tm-bg-gray tm-catalog-item-description">
                        <h3 class="tm-text-primary mb-3 tm-catalog-item-title">Sed mattis nisi erat</h3>
                        <p class="tm-catalog-item-text">Integer ultricies mi eu aliquet cursus. Nam sem leo, imperdiet non lacinia eget, volutpat ac massa. Donec mattis in velit quis commodo. Cras nec rutrum arcu.</p>
                    </div>
                </div>
            </div>

            <!-- Catalog Paging Buttons -->
            <div>
                <ul class="nav tm-paging-links">
                    <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                    <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
                </ul>
            </div>
        </main>

    </div>

</div> <!-- .tm-page-wrap -->

<script>
    function setVideoSize() {
        const vidWidth = 1920;
        const vidHeight = 1080;
        let windowWidth = window.innerWidth;
        let newVidWidth = windowWidth;
        let newVidHeight = windowWidth * vidHeight / vidWidth;
        let marginLeft = 0;
        let marginTop = 0;

        if (newVidHeight < 500) {
            newVidHeight = 500;
            newVidWidth = newVidHeight * vidWidth / vidHeight;
        }

        if (newVidWidth > windowWidth) {
            marginLeft = -((newVidWidth - windowWidth) / 2);
        }

        if (newVidHeight > 720) {
            marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
        }

        const tmVideo = $('#tm-video');

        tmVideo.css('width', newVidWidth);
        tmVideo.css('height', newVidHeight);
        tmVideo.css('margin-left', marginLeft);
        tmVideo.css('margin-top', marginTop);
    }

    $(document).ready(function() {
        /************** Video background *********/

        setVideoSize();

        // Set video background size based on window size
        let timeout;
        window.onresize = function() {
            clearTimeout(timeout);
            timeout = setTimeout(setVideoSize, 100);
        };

        // Play/Pause button for video background
        const btn = $("#tm-video-control-button");

        btn.on("click", function(e) {
            const video = document.getElementById("tm-video");
            $(this).removeClass();

            if (video.paused) {
                video.play();
                $(this).addClass("fas fa-pause");
            } else {
                video.pause();
                $(this).addClass("fas fa-play");
            }
        });
    })
</script>
@endsection

@section('about')
<div class="tm-page-wrap mx-auto">
    <div class="position-relative">

        <div class="tm-welcome-container tm-fixed-header tm-fixed-header-2">
            <div class="text-center">
                <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 mt-lg-0 mt-5 text-white mx-auto">Another Image BG<br>it can be fixed.<br>Content will simply slide over.</p>
            </div>
        </div>

        <div id="tm-fixed-header-bg"></div> <!-- Header image -->
    </div>

    <!-- Page content -->
    <main>
        <div class="container-fluid px-0">
            <div class="mx-auto tm-content-container">
                <div class="row mt-3 mb-5 pb-3">
                    <div class="col-12">
                        <div class="mx-auto tm-about-text-container px-3">
                            <h2 class="tm-page-title mb-4 tm-text-primary">About the Video Catalog</h2>
                            <p class="mb-4">Video Catalog is free HTML CSS template for your website. This Bootstrap v4.4.1 website template is 100% free download for everyone. You can modify and expand this template for your CMS websites. You can use it for commercial or non-commercial work. If you wish to support <a href="https://templatemo.com" class="tm-text-primary">TemplateMo</a>, please contact us.</p>
                            <p class="mb-4">You are <u>not allowed</u> to re-distribute the template ZIP file on any template collection website.</p>
                            <p class="mb-4">Vivamus sit amet justo sed erat iaculis consequat. Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu. Etiam a bibendum lorem. Curabitur ac bibendum odio. Vivamus euismod dui mauris, ut tincidunt mi congue quis.</p>
                            <p class="mb-0">Phasellus luctus orci dolor, a luctus massa tincidunt vitae. Integer sit amet odio id libero tincidunt dignissim in eget arcu. Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras duismod leo a urna placerat, vel blandit turpis fermentum.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax-window" data-parallax="scroll" data-image-src="/web/img/about-2.jpg"></div>

            <div class="mx-auto tm-content-container mt-4 px-3">
                <div class="row tm-catalog-item-list mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="fas fa-headphones fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Cras convallis mollis justo</h3>
                            <p>Sed dapibus vulputate diam nec hendrerit. In libero purus, interdum vitae purus nec, convallis sollicitudin nunc. Curabitur maximus maximus ex a scelerisque.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="fas fa-broadcast-tower fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Nullam dictum pretium</h3>
                            <p>Quisque vestibulum lectus eros, tincidunt ultricies ante euismod non. Ut sed consequat est, quis lobortis lorem. Nullam dictum pretium mauris eu aliquam.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="fas fa-film fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Etiam in quam dolor</h3>
                            <p>Aliquam in congue diam, non tincidunt ligula. Suspendisse facilisis elit eget quam semper aliquet. Donec ut purus aliquet, imperdiet lacus id, faucibus lectus.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="far fa-map fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Duis ornare felis nec orci</h3>
                            <p>Nam dapibus lectus ultricies neque feugiat eleifend. Donec ornare dolor suscipit metus hendrerit, vel malesuada neque mattis. Fusce posuere cursus mattis.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="fas fa-rainbow fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Class aptent taciti sociosqu</h3>
                            <p>Maecenas et libero in eros laoreet finibus sed vitae diam. Etiam consetetur, nunc sed pretium elementum, diam erat fringilla tortor, placerat condimentum.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="tm-bg-gray p-4">
                            <i class="fas fa-cloud-sun-rain fa-5x p-3 mb-4 tm-about-icon"></i>
                            <h3 class="tm-text-primary mb-3">Suspendisse ut malesuada</h3>
                            <p>Vestibulum non lectus id lacus aliquet porttitor in non nulla. Aenean urna diam, finibys id lorem nec, feugiat convallis dolor. Integer aliquam, eros eget rutrum iaculis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="parallax-window" data-parallax="scroll" data-image-src="/web/img/about-3.jpg"></div>
        </div>
    </main>
    @endsection

    @section('contact')

    <div class="tm-welcome-container tm-fixed-header tm-fixed-header-3">
        <div class="text-center">
            <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 mt-lg-0 mt-5 text-white mx-auto">
                Talk to Us<br>about any question you have
            </p>
        </div>
    </div>

    <div id="tm-fixed-header-bg"></div> <!-- Header image -->
</div>

<!-- Page content -->
<main>
    <div class="container-fluid px-0">
        <div class="mx-auto tm-content-container">
            <div class="row mt-3 mb-5 pb-3">
                <div class="col-12">
                    <div class="mx-auto tm-about-text-container px-3">
                        <h2 class="tm-page-title mb-4 tm-text-primary">Contact our team</h2>
                        <p class="mb-4">
                            Integer sit amet odio id libero tincidunt dignissim in eget arcu. Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. You are <u>not allowed</u> to re-distribute the template ZIP file on any template collection website.
                        </p>
                        <p class="mb-4">Video Catalog is a free website template for your business. This is 100% free Bootstrap v4.4.1 layout. You can modify and adapt this template for your CMS websites. You can use it for commercial or non-commercial work. If you wish to suport <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-text-primary">TemplateMo</a>, please contact us.</p>
                    </div>
                </div>
            </div>
            <div class="mx-auto pb-3 tm-about-text-container px-3">
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <form id="contact-form" action="/upload" method="POST" class="tm-contact-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required="" />
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="contact-select" name="inquiry">
                                    <option value="-">Subject</option>
                                    <option value="sales">Sales &amp; Marketing</option>
                                    <option value="creative">Creative Design</option>
                                    <option value="uiux">UI / UX</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="mapouter mb-60">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="520" id="gmap_canvas" src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-window parallax-window-2" data-parallax="scroll" data-image-src="/web/img/contact-2.jpg"></div>

        <div class="mx-auto tm-content-container mt-4 px-3 mb-3">
            <div class="row">
                <div class="col-12">
                    <h2 class="tm-page-title mb-5 tm-text-primary">Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5 pt-3">
                    <div class="media tm-testimonial">
                        <img class="mr-4 rounded-circle img-fluid" src="/web/img/testimonial-1.jpg" alt="Generic placeholder image">
                        <p class="media-body pt-3 tm-testimonial-text">
                            Vestibulum non lectus id lacus aliquet porttitor in non nulla. Aenean urna diam, finibys id lorem nec, feugiat convallis dolor. Integer aliquam, eros eget rutrum iaculis.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pt-3">
                    <div class="media tm-testimonial">
                        <img class="mr-4 rounded-circle img-fluid" src="/web/img/testimonial-2.jpg" alt="Generic placeholder image">
                        <p class="media-body pt-3 tm-testimonial-text">
                            Maecenas et libero in eros laoreet finibus sed vitae diam. Etiam consetetur, nunc sed pretium elementum, diam erat fringilla tortor, placerat condimentum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pt-3">
                    <div class="media tm-testimonial">
                        <img class="mr-4 rounded-circle img-fluid" src="/web/img/testimonial-3.png" alt="Generic placeholder image">
                        <p class="media-body pt-3 tm-testimonial-text">
                            Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras duismod leo a urna placerat, vel blandit turpis fermentum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 pt-3">
                    <div class="media tm-testimonial">
                        <img class="mr-4 rounded-circle img-fluid" src="/web/img/testimonial-4.png" alt="Generic placeholder image">
                        <p class="media-body pt-3 tm-testimonial-text">
                            Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu. Etiam a bibendum lorem. Cura
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('video')
<div class="tm-welcome-container tm-fixed-header tm-fixed-header-1">
    <div class="text-center">
        <p class="pt-5 px-3 tm-welcome-text tm-welcome-text-2 mb-1 text-white mx-auto">Background image can be fixed. Content will simply slide over.</p>
    </div>
</div>

<!-- Header image -->
<div id="tm-fixed-header-bg"></div>
</div>

<!-- Page content -->
<div class="container-fluid">
    <div class="mx-auto tm-content-container">
        <main>
            <div class="row mb-5 pb-4">
                <div class="col-12">
                    <!-- Video player 1422x800 -->
                    <video width="1422" height="800" controls autoplay>
                        <source src="/web/video/wheat-field.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="row mb-5 pb-5">
                <div class="col-xl-8 col-lg-7">
                    <!-- Video description -->
                    <div class="tm-video-description-box">
                        <h2 class="mb-5 tm-video-title">Mauris dapibus urna nec ipsum posuere</h2>
                        <p class="mb-4">Cras dictum pretium est, et imperdiet ex. Fusce vitae vestibulum ipsum. Maecenas ultricies ipsum a urna ullamcorper, id interdum est blandit. Vivamus sit amet justo sed erat iaculis consequat. Nulla suscipit posuere lectus ut venenatis. Proin sed orci eget tellus euismod vulputate eu eu arcu.</p>
                        <p class="mb-4">Etiam a bibendum lorem. Curabitur ac bibendum odio. Vivamus euismod dui mauris, ut tincidunt mi congue quis. Phasellus luctus orci dolor, a luctus massa tincidunt vitae. Integer sit amet odio id libero tincidunt dignissim in eget arcu.</p>
                        <p class="mb-4">Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. Cras euismod leo a urna placerat, vel blandit turpis fermentum.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <!-- Share box -->
                    <div class="tm-bg-gray tm-share-box">
                        <h6 class="tm-share-box-title mb-4">Share this video</h6>
                        <div class="mb-5 d-flex">
                            <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-facebook"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-twitter"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="fab fa-pinterest"></i></a>
                            <a href="" class="tm-bg-white tm-share-button"><i class="far fa-envelope"></i></a>
                        </div>
                        <p class="mb-4">Author: <a href="https://templatemo.com" class="tm-text-link">TemplateMo</a></p>
                        <a href="#" class="tm-bg-white px-5 mb-4 d-inline-block tm-text-primary tm-likes-box tm-liked">
                            <i class="fas fa-heart mr-3 tm-liked-icon"></i>
                            <i class="far fa-heart mr-3 tm-not-liked-icon"></i>
                            <span id="tm-likes-count">486 likes</span>
                        </a>
                        <div>
                            <button class="btn btn-primary p-0 tm-btn-animate tm-btn-download tm-icon-download"><span>Download Video</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pt-4 pb-5">
                <div class="col-12">
                    <h2 class="mb-5 tm-text-primary">Related Videos for You</h2>
                    <div class="row tm-catalog-item-list">
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-01.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Nam tincidunt consectetur</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-02.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Praesent posuere rhoncus</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Turpis massa aliquam</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-04.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Nam tincidunt consectetur</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-05.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Praesent posuere rhoncus</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="/web/img/tn-06.jpg" alt="Image" class="img-fluid tm-catalog-item-img">
                                <a href="/video" class="position-absolute tm-img-overlay">
                                    <i class="fas fa-play tm-overlay-icon"></i>
                                </a>
                            </div>
                            <div class="p-3 tm-catalog-item-description">
                                <h3 class="tm-text-gray text-center tm-catalog-item-title">Turpis massa aliquam</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('.tm-likes-box').click(function(e) {
            e.preventDefault();
            $(this).toggleClass('tm-liked');

            if ($(this).hasClass('tm-liked')) {
                $('#tm-likes-count').html('486 likes');
            } else {
                $('#tm-likes-count').html('485 likes');
            }
        });
    });
</script>
@endsection
