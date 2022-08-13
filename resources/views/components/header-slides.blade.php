@php
/**
 * @var $slides App\Models\HeaderSlide
 */
@endphp
<div class="container-fluid p-0 mb-5 pb-5">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($slides as $slide)
                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                    <img class="w-100" src="{{$slide->file->path}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4">{{$slide->name}}</h1>
                            <a href="{{$slide->link}}" class="btn btn-primary py-md-3 px-md-5 mt-2">{{$slide->button_text}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n1"></span>
            </div>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n1"></span>
            </div>
        </a>
    </div>
</div>

