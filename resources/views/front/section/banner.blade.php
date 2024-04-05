<section class="banner">
    <div class="container custom-container">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach ($sliders as $item)
            <div class="carousel-item @if ($loop->first) active @endif">
                <img class="d-block w-100" src="{{ $item->image }}" loading="lazy" alt="slideshow">
            </div>
            @endforeach
        </div>
      </div>
    </div>
</section>
