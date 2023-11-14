@extends('front.app')

@section('title', 'Konsultasi')
@section('breadcrumb', 'Konsultasi')
@section('content')

<!-- breadcrumb-area -->
@include('front.details.breadcrumb')
<!-- breadcrumb-area-end -->

<section class="blog">
    <div class="container">
        <div class="row gx-0 justify-content-center">
            @foreach ($items as $item)
            <div class="col-lg-4 col-md-6">
                <div class="blog__post__item">
                    <div class="blog__post__thumb">
                        <img src="{{ Storage::url($item->image) }}" alt="image-screenshoot" class="img-fluid" style="object-fit: cover;object-position: center;width: 100%;height: 600px" />
                    </div>
                    <div class="blog__post__content">
                        <span class="date">{{ $item->created_at->diffForHumans() }}</span>
                        <h3 class="title">{{ $item->title }}</h3>
                        <span class="badge bg-secondary">{{ $item->komoditas->nama }}</span>

                        @if ($item->status === '1')
                        <span class="badge bg-success">Berhasil Ditangani</span>
                        @endif

                        @if ($item->status === '0')
                        <span class="badge bg-warning text-dark">Belum Ditangani</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="mt-30 mb-30">
            {!! $items->links() !!}
        </div>

        <div class="row gx-0 justify-content-center">
            <div class="col-8">
                <h4 class="text-center mb-5">Pertanyaan Yang Sering Ditanyakan</h4>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($faqs as $item)

                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{ $item->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                          {!! $item->question !!}
                        </button>
                      </h2>
                      <div id="flush-collapseOne{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{!! $item->answer !!}</div>
                      </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
