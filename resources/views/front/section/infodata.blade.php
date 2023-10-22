<section class="contact-info-area" id="konsultasi-online">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-6">
                <h4>Konsultasi Online</h4><br>

                @foreach ($contact_cs as $item)
                <div class="row">
                    <div class="col">
                        <div class="about__award__item">
                            <div class="award__logo">
                                <img src="{{ Storage::url($item->foto) }}" alt="photo" class="img-fluid" />
                            </div>
                            <div class="award__content">
                                <h5 class="title">
                                    {{ $item->jabatan }}
                                </h5>
                                <p>{{ $item->nama }}</p>
                                <p>
                                    WA: <a href="https://wa.me/{{ $item->whatsapp }}"><strong>Hubungi Saya</strong></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="col-lg-6 col-md-6">

                <div class="row">
                    <div class="col">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <h2>{{ $count_komoditas }}</h2>
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Komoditas</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <h2>{{ $count_artikel }}</h2>
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Artikel</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <h2>{{ $visitor_today }}</h2>
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Pengunjung Hari Ini</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="contact__info">
                            <div class="contact__info__icon">
                                <h2>{{ $visitors }}</h2>
                            </div>
                            <div class="contact__info__content">
                                <h4 class="title">Total Pengunjung</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
