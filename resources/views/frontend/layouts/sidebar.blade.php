<div class="col-lg-4">

    <div class="sidebar">

      <div class="sidebar-item search-form">
        <h3 class="sidebar-title">Search</h3>
        <form action="" class="mt-3">
          <input type="text">
          <button type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div><!-- End sidebar search formn-->

      <div class="sidebar-item categories">
        <h3 class="sidebar-title">Categories</h3>
        <ul class="mt-3">
            @foreach ($category as $item)
                <li><a href="#">{{ $item->name }} <span>({{ $item->news_count }})</span></a></li>
            @endforeach
        </ul>
      </div><!-- End sidebar categories-->

      <div class="sidebar-item recent-posts">
        <h3 class="sidebar-title">Recent Posts</h3>

        <div class="mt-3">
          @foreach ($news_new as $item)
          <div class="post-item mt-3">
            <img src="{{ $item->image }}" alt="{{ $item->slug }}" class="flex-shrink-0">
            <div>
              <h4><a href="{{ route('limi-detail', $item->slug) }}">{{ $item->title }}</a></h4>
              <time datetime="2020-01-01">{ $item->created_at->diffForHumans() }}</time>
            </div>
          </div><!-- End recent post item-->
          @endforeach
        </div>

      </div><!-- End sidebar recent posts-->

      <div class="sidebar-item tags">
        <h3 class="sidebar-title">Tags</h3>
        <ul class="mt-3">
            @foreach ($tags as $item)
            <li><a href="#">{{ $item->name }}</a></li>
            @endforeach
        </ul>
      </div><!-- End sidebar tags-->

    </div><!-- End Blog Sidebar -->

  </div>
