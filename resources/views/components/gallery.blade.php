@php
    /**
     * @var $images App\Models\GalleryImage
     */
@endphp
<!-- Portfolio Start -->
<div class="container-fluid my-5 py-5 px-0">
    <div class="row justify-content-center m-0">
        <div class="col-lg-5">
            <h1 class="section-title position-relative text-center mb-5">Delicious Ice Cream Made From Our Very Own
                Organic Milk</h1>
        </div>
    </div>
    <div class="row m-0 portfolio-container">
        @foreach($images as $image)
            <div class="col-lg-4 col-md-6 p-0 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{$image->file->path}}" alt="">
                    <a class="portfolio-btn" href="{{$image->file->path}}" data-lightbox="portfolio">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Portfolio End -->
