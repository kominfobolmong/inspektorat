<div class="col-lg-4">
    <aside class="blog__sidebar">
        <div class="widget">
            <form action="#" class="search-form">
                <input type="text" placeholder="Search">
                <button type="submit"><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="widget">
            <h4 class="widget-title">Kategori</h4>
            <ul class="sidebar__cat">
                @foreach ($category as $item)
                <li class="sidebar__cat__item"><a href="#">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="widget">
            <h4 class="widget-title">Berita Populer</h4>
            <ul class="rc__post">
                @foreach ($news_new as $item)
                <li class="rc__post__item">
                    <div class="rc__post__thumb">
                        <a href="{{ route('news-detail', $item->slug) }}"><img src="{{ $item->image }}" alt="artikel-image"></a>
                    </div>
                    <div class="rc__post__content">
                        <h5 class="title"><a href="{{ route('news-detail', $item->slug) }}">{{ Str::limit(Str::title($item->title), 100, '...') }}</a></h5>
                        <span class="post-date"><i class="fal fa-calendar-alt"></i> {{ $item->created_at->diffForHumans() }}</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="widget">
            <h4 class="widget-title">Tags</h4>
            <ul class="sidebar__tags">
                @foreach ($tags as $item)
                <li><a href="#">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>
</div>
