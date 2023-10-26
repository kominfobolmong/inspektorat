<section class="blog">
    <div class="container">
        {{-- <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">Artikel</span>
                        <h2 class="title">Artikel Terkini</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow"></div>
                </div>
            </div>
        </div> --}}
        <h4>Artikel Terkini</h4><br>
        <div class="row gx-0 justify-content-center">
            @foreach ($artikel as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="{{ route('artikel-detail', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid rounded" alt="image-artikel"></a>
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('artikel-detail', $item->slug) }}">{{ Str::limit(Str::title($item->title), 100, '...') }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="blog__button text-center">
            <a href="{{ route('artikel') }}" class="btn">Artikel Lainnya</a>
        </div>
    </div>
</section>
