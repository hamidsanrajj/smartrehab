<style>
    #news .btn{
        background: rgb(254, 14, 12) !important; border: 0px solid rgb(254, 14, 12);
    }

    #news .btn:hover{
        background: rgba(255, 255, 255, 1) !important; color: rgb(254, 14, 12) !important; border: 1px solid rgb(254, 14, 12) !important;
    }

    #news .news-anchor-text{
        color: rgb(32, 33, 53);
    }

    #news .news-anchor-text:hover{
        color: rgb(0, 100, 255) !important;
    }
</style>

        <!-- Blog Start -->
        <div id="news" class="container-fluid blog py-5">
            <div class="container py-5">
                <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="sub-style">
                        <h4 class="sub-title px-3 mb-0">News & Events</h4>
                    </div>
                    <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
                    <!-- <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p> -->
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary" style="color: rgb(254, 14, 12) !important;"></i> 5 Feb 2025</p>
                                    <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary" style="color: rgb(254, 14, 12) !important;"></span> 3 Comments</a> -->
                                </div>

                                <a  href="{{ route('remove-back-pain') }}" class="h4 news-anchor-text">Remove back Pain While Working on physio</a>
                                <!-- <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p> -->                                
                                <a href="{{ route('remove-back-pain') }}" class="btn rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary" style="color: rgb(254, 14, 12) !important;"></i> 5 Feb 2025</p>
                                    <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary" style="color: rgb(254, 14, 12) !important;"></span> 3 Comments</a> -->
                                </div>
                                <a href="{{ route('benefits-of-weekly-physiotherapy') }}" class="h4 news-anchor-text">Benefits of a weekly physiotherapy session</a>
                                <!-- <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p> -->
                                <a href="{{ route('benefits-of-weekly-physiotherapy') }}" class="btn rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="blog-item rounded">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="Image">
                            </div>
                            <div class="blog-centent p-4">
                                <div class="d-flex justify-content-between mb-4">
                                    <p class="mb-0 text-muted"><i class="fa fa-calendar-alt text-primary" style="color: rgb(254, 14, 12) !important;"></i> 5 Feb 2025</p>
                                    <!-- <a href="#" class="text-muted"><span class="fa fa-comments text-primary" style="color: rgb(254, 14, 12) !important;"></span> 3 Comments</a> -->
                                </div>
                                <a href="{{ route('regular-exercise') }}" class="h4 news-anchor-text">Regular excercise can slow ageing process</a>
                                <!-- <p class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium hic consequatur beatae architecto,</p> --><br>
                                <a href="{{ route('regular-exercise') }}" class="btn rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0 mt-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


