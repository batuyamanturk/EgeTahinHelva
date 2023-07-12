<!-- Start Banner Hero -->

<div class="container-fluid">
    <div class="row">
        <div class="home-slider owl-carousel owl-theme">
            @foreach ($slider as $rs )
                <div class="col-md-12">
                    <div class="item">
                        <img style="height: 300px;" src="{{ Storage::url($rs->image) }}" alt="slider resim">
                    </div>
                </div>
            @endforeach
        </div>
     

      
    </div>
</div>


<!-- End Banner Hero -->