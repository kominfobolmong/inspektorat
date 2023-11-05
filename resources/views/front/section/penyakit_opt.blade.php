<section class="blog">
    <div class="container">
        <h4>Info Penyakit Tanaman</h4><br>
        <div class="row gx-0 justify-content-center">
            @foreach ($penyakit as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="{{ route('penyakit-detail', $item->slug) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid rounded" alt="image-penyakit"></a>
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('penyakit-detail', $item->slug) }}">{{ Str::limit(Str::title($item->nama), 100, '...') }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <h4>Info Opt/Hama</h4><br>
        <div class="row gx-0 justify-content-center">
            @foreach ($opt as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="{{ route('opt-detail', $item->slug) }}"><img src="{{ Storage::url($item->image) }}" class="img-fluid rounded" alt="image-penyakit"></a>
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('opt-detail', $item->slug) }}">{{ Str::limit(Str::title($item->nama), 100, '...') }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
