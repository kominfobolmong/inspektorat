<section class="blog">
    <div class="container">
        <h4>Publikasi</h4><br>
        <div class="row gx-0 justify-content-center">
            @foreach ($publikasi as $item)
            <div class="col-lg-6 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__content">
                        <span class="date">{{ $item->type }}</span>
                        <h3 class="title"><a href="{{ route('publikasi-detail', $item->slug) }}">{{ Str::limit(Str::title($item->title), 100, '...') }}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
