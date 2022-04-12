</main>
<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">

    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href=" /"><img
                                    src="{{ asset('evara-frontend/assets/imgs/theme/logo.svg') }}"" alt=" logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                </div>
                <div class="col-lg-2  col-md-3">
                </div>
                <div class="col-lg-4">
                    <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                        <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                        <img class="wow fadeIn animated"
                            src="{{ asset('evara-frontend/assets/imgs/theme/payment-method.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">&copy; 2021, <strong
                        class="text-brand">Evara</strong> - HTML Ecommerce Template </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    Designed by <a href="http://alithemes.com/" target="_blank">Alithemes.com</a>. All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center">
                <h5 class="mb-10">Now Loading</h5>
                <div class="loader">
                    <div class="bar bar1"></div>
                    <div class="bar bar2"></div>
                    <div class="bar bar3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@auth
<input type="hidden" value="{{ auth()->user()->id }}" id="id">
<script>
    var app2 = new Vue({
        el: '#app',
        data: {
            shoping: [],
            id: '{{ auth()->user()->id }}',
            price: '',
            api1: {}

        },
        methods: {
            load: function() {

                axios.get('/api/v1/sepet/' + this.id)
                    .then(response => {
                        this.shoping = response.data

                        this.fiyatFunc(response.data);
                      this.id =  document.getElementById('id').value

                    })
                    .catch(error => {

                        console.log(error)
                    })
            },
            loadApi: function() {


                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(this.showPosition);
                } else {
                    x.innerHTML = "Geolocation is not supported by this browser.";
                }



            },
            showPosition : function(position) {

                axios.get(
                        `https://api.openweathermap.org/data/2.5/weather?lat=${position.coords.latitude}&lon=${position.coords.longitude}&lang=tr&appid=90af837b714f00054a0e0803aa3ca3f8`
                    )
                    .then(response => {
                        this.api1 = response.data
                        console.log(response.data)
                    })
                    .catch(error => {

                        console.log(error)
                    })
                console.log("Latitude: " + position.coords.latitude +
                    "<br>Longitude: " + position.coords.longitude
                )
            },
            fiyatFunc: function(data) {
                var fiyat = 0;
                data.forEach(element => {
                    fiyat += element.get_products[0].promotion_price * element.piece;
                    // console.log(element)
                });
                console.log(fiyat);
                this.price = fiyat;
            },



        },
        mounted() {
            this.load()
            this.loadApi()

        },

    })
</script>
@endauth

<!-- Vendor JS-->
<script src="{{ asset('evara-frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('evara-frontend/assets/js/main.js') }}"></script>
<script src="{{ asset('evara-frontend/assets/js/shop.js') }}"></script>


</body>


<!-- Mirrored from wp.alithemes.com/html/evara/evara-frontend/ / by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:25:49 GMT -->

</html>
