<!-- Start Slider Hero -->
<div class="owl-carousel owl-theme">
    <div class="slide slide-1">
        <div class="slide-content ">
            <h1>Ege Tahin Helvaya Hoşgeldiniz</h1>
            <a href="{{route('contact')}}">
            <button>Yerimiz</button>
            </a>
        </div>
    </div>
    <div class="slide slide-2">
        <div class="slide-content ">
            <h1>Vazgeçilmez Lezzet</h1>
            <a href="{{ route('categoryproducts',['id'=>2,'slug'=>"Helva"]) }}">
            <button>Ürünlerimiz</button>
            </a>
        </div>
    </div>
    <div class="slide slide-3">
        <div class="slide-content ">
            <h1>Biz Kimiz ?</h1>
            <a href="{{route('aboutus')}}">
                <button>Hakkımızda</button>
                </a>
        </div>
    </div>
</div>
       
 
            



<!-- Jquery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom Javascript -->
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            items:1,
            loop:true,
            nav:true,
            dots:true,
            autoplay:true,
            autoplaySpeed:1000,
            smartSpeed:1500,
            autoplayHoverPause:true
        });
    });
</script>
<!-- End Slider  -->