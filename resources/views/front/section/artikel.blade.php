<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">

            @foreach ($artikel as $item)
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <a href="{{ route('artikel-detail', $item->slug) }}"><img src="{{ $item->image }}" class="img-fluid rounded" alt="{{ $item->slug }}"></a>
                        {{-- <div class="blog__post__tags">
                            <a href="#">{{ $item->category->name }}</a>
                        </div> --}}
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title"><a href="{{ route('artikel-detail', $item->slug) }}">{{ Str::limit($item->title, 100, '...') }}</a></h3>
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
