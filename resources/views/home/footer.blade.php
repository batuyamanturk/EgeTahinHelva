<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-logorengi border-bottom pb-3 border-light logo">Ege Tahin Helva</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                        Koşukavak, 4246. Sk. No:26/A, 35080 
                        Bornova/İzmir
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        0505 939 99 59
                    </li>
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none" href="mailto:egetahinhelva@gmail.com">egetahinhelva@gmail.com</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Ürünlerimiz</h2>
                @foreach ($categorylist as $rs)
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="{{route('categoryproducts',['id'=>$rs->id,'slug'=>$rs->title])}}">{{ $rs->title }}</a></li>
                </ul>
                @endforeach
            </div>
          
            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Menü</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="{{ route('home') }}">Ana Sayfa</a></li>
                    <li><a class="text-decoration-none" href="{{ route('aboutus') }}">Hakkımızda</a></li>
                    <li><a class="text-decoration-none" href="{{ route('categoryproducts',['id'=>4,'slug'=>"Helva"]) }}">Ürünlerimiz</a></li>
                    <li><a class="text-decoration-none" href="{{ route('contact') }}">İletişim</a></li>
                    <li><a class="text-decoration-none" href="{{ route('gallery') }}">Galeri</a></li>
                </ul>
            </div>

        </div>

        <div class="row text-light mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left footer-icons">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/egetahinhelva/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a href="https://api.whatsapp.com/send?phone=+905071175557&text=Merhabalar, bilgi almak istiyorum. (Website)" class="text-light text-decoration-none" target="_blank" >
                            <i class="fab fa-whatsapp fa-lg fa-fw" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-center text-light">
                        2023 Ege Tahin Helva 
                        | Designed by <a rel="sponsored"  target="_blank">Batuhan Yamantürk</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "905071175557", // WhatsApp numarası
                call_to_action: "Merhaba,Size nasıl yardımcı olabiliriz ?", // Görüntülenecek yazı
                position: "left", // Sağ taraf için 'right' sol taraf için 'left'
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
    
</footer>
<!-- End Footer -->


<!-- Start Script -->
<script src="{{asset('assets')}}/js/jquery-1.11.0.min.js"></script>
<script src="{{asset('assets')}}/js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/js/templatemo.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.js"></script>
<script src="{{asset('assets')}}/fancybox/dist/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- End Script -->