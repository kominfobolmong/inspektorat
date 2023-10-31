<section class="services" id="komoditas">
    <div class="container">

        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">Komoditas</span>
                        <h2 class="title">Daftar Komoditas Unggulan</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow1"></div>
                </div>
            </div>
        </div>

        <div class="row gx-0 services__active1">

            @foreach ($komoditas_unggulan as $item)
            <div class="col-xl-3 mx-1">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('komoditas-detail', $item->slug) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid rounded" alt="{{ $item->slug }}"></a>
                    </div>
                    <div class="services__content">
                        <h3 class="title text-center"><a href="{{ route('komoditas-detail', $item->slug) }}">{{ Str::title($item->nama) }}</a></h3>
                        {{-- <p>{!! $item->deskripsi !!}</p> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>

        <div class="services__title__wrap">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section__title">
                        <span class="sub-title">Komoditas</span>
                        <h2 class="title">Daftar Komoditas Lainnya</h2>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-4">
                    <div class="services__arrow2"></div>
                </div>
            </div>
        </div>

        <div class="row gx-0 services__active2">

            @foreach ($komoditas as $item)
            <div class="col-xl-3 mx-1">
                <div class="services__item">
                    <div class="services__thumb">
                        <a href="{{ route('komoditas-detail', $item->slug) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid rounded" alt="{{ $item->slug }}"></a>
                    </div>
                    <div class="services__content">
                        <h3 class="title text-center"><a href="{{ route('komoditas-detail', $item->slug) }}">{{ Str::title($item->nama) }}</a></h3>
                        {{-- <p>{!! $item->deskripsi !!}</p> --}}
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- <section class="services" id="komoditas">
    <div class="container">

    </div>
</section> --}}
