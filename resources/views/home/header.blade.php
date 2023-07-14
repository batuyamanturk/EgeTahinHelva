 <!-- Start Top Nav -->
 <nav class="navbar navbar-expand-lg bg-black d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-logorengi">
        <div class="w-100 d-flex justify-content-between">
            <div>
                <i class="fa fa-envelope mx-2"></i>
                <a class="navbar-sm-brand text-logorengi text-decoration-none" href="mailto:egetahinhelva@gmail.com">egetahinhelva@gmail.com</a>
                <i class="fa fa-phone mx-2"></i>
                <a class="navbar-sm-brand text-logorengi text-decoration-none" >0505 939 99 59</a>
            </div>
            <div>
                <a class="text-logorengi" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                <a class="text-logorengi" href="https://www.instagram.com/egetahinhelva/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=+905071175557&text=Merhabalar, bilgi almak istiyorum. (Website)" class="text-logorengi text-decoration-none" target="_blank" >
                        <i class="fab fa-whatsapp fa-lg fa-fw" aria-hidden="true"></i>
                    </a>
                
            </div>
        </div>
    </div>
</nav>
<!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg bg-dark shadow">
    <div class="container d-flex justify-content-between align-items-center">
        

        <a class="navbar-brand  logo h3 align-self-center" href="{{ route('home') }}">
            <img src="{{ asset('assets') }}/img/headerlogo.webp" alt="headerlogo" >
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="align-self-center  collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill ">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item ">
                        <a class="nav-link text-logorengi" href="{{ route('home') }}">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-logorengi" href="{{ route('aboutus') }}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-logorengi" href="{{ route('categoryproducts',['id'=>2,'slug'=>"Helva"]) }}">Ürünlerimiz</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-logorengi" href="{{ route('contact') }}">İletişim</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-logorengi" href="{{ route('gallery') }}">Galeri</a>
                    </li>
                </ul>
            </div>
            <div class="navbar align-self-center d-flex">
                <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                    <form action="{{ route('searchbarshow') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="string" id="string" placeholder="Ürün ara">
                        <button type="submit" class="input-group-text bg-success text-light">
                            <i class="fa fa-fw fa-search text-white"></i>
                        </button>
                    </div>
                    </form>
                </div>
                <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                    <i class="fa fa-fw fa-search text-dark mr-2"></i>
                </a>
                
                
                
            </div>
        </div>

    </div>
</nav>
<!-- Close Header -->