<x-frontend.layouts.master>

    <!-- slider-->
    <x-frontend.layouts.partials.elements.slider :$sliders/>
    <!-- featured-area start -->
    <x-frontend.layouts.partials.elements.featured-product/>
    
    <!-- start count-down-section -->
    <div class="count-down-area count-down-area-sub">
        <section class="count-down-section section-padding parallax" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <h2 class="big">Deal Of the Day <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</span></h2>
                    </div>
                    <div class="col-12 col-lg-12 text-center">
                        <div class="count-down-clock text-center">
                            <div id="clock">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    </div>
    
    <!-- product-area start -->
    <x-frontend.layouts.partials.elements.product-list :$products/>
    <!-- product-area end -->
    <!--Best seller product-area start -->
    <x-frontend.layouts.partials.elements.best-seller-product/>

    <!-- testmonial-area start -->
    <x-frontend.layouts.partials.elements.testmonial/>

    <!-- start social-newsletter-section -->
    <x-frontend.layouts.partials.elements.newsletter/>

</x-frontend.layouts.master>
