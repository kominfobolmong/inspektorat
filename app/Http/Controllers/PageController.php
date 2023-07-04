<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

use App\Models\Event;
use App\Models\Tag;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Category;
use App\Models\Download;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Infografis;
use App\Models\Link;
use App\Models\News;
use App\Models\Photo;
use App\Models\Potensi;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Sosmed;
use App\Models\Video;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $profil = Profile::select('favicon', 'maklumat', 'motto')->first();
        $sliders = Slider::take(2)->latest()->get();
        $photos = Photo::take(6)->latest()->get();
        $news = News::without('tags')->take(6)->latest()->get();
        $faq = Faq::get();
        $links = Link::latest()->get();
        $services = Service::select('id')->get();

        return view('frontend.index', compact(
            'contact',
            'profil',
            'sliders',
            'links',
            'photos',
            'news',
            'faq',
            'services',
        ));
    }

    // controller for route profil

    public function pimpinan()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.pimpinan', compact('item', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function visimisi()
    {
        $item = Profile::select('visi', 'misi')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.visimisi', compact('item', 'sosmeds', 'links', 'profil', 'contact'));
    }

    public function struktur_organisasi()
    {
        $item = Profile::select('struktur_organisasi')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.struktur', compact('item', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function maklumat_pelayanan()
    {
        $item = Profile::select('maklumat')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.maklumat', compact('item', 'sosmeds', 'links', 'profil', 'contact'));
    }

    public function motto()
    {
        $item = Profile::select('motto')->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.motto', compact('item', 'sosmeds', 'links', 'profil', 'contact'));
    }

    // controller for route layanan

    public function layanan()
    {
        $layanans = Service::get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.layanan', compact('sosmeds', 'links', 'profil', 'contact', 'layanans'));
    }

    // controller for route media

    public function kegiatan()
    {
        $kegiatan = Photo::latest()->paginate(9);
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.galery_kegiatan', compact('kegiatan', 'sosmeds', 'links', 'profil', 'contact'));
    }

    public function dokumen()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        return view('frontend.detail.dokumen', compact('sosmeds', 'links', 'profil', 'contact'));
    }

    public function berita()
    {
        $news = News::without('tags')->latest()->paginate(9);
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.berita', compact('news', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function berita_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $news = News::where('slug', $slug)->firstOrFail();
        $news_new = News::take(5)->latest()->get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.berita_detail', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function kategori(Category $kategori)
    {
        $news = $kategori->news()->with('user')->latest()->paginate(5);
        $category = Category::latest()->get();
        $tags = Tag::latest()->get();
        $news_new = News::take(3)->latest()->get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.berita', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function tag(Tag $tag)
    {
        $news = $tag->news()->latest()->paginate(5);
        $category = Category::latest()->get();
        $tags = Tag::latest()->get();
        $news_new = News::take(3)->latest()->get();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.berita', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function kontak()
    {
        $kontak = Contact::latest()->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.kontak', compact('kontak', 'contact', 'profil', 'sosmeds', 'links'));
    }

    // public function download()
    // {
    //     $downloads = Download::latest()->paginate(5);
    //     return view('opd/detail/download', compact('downloads'));
    // }

    // public function getDownload(Request $request, $id)
    // {
    //     $entry = Download::where('id', '=', $id)->firstOrFail();
    //     $pathToFile = storage_path() . "/app/public/" . $entry->file;
    //     return response()->download($pathToFile);
    // }

    public function informasi_berkala()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.informasi_berkala', compact(
            'contact',
            'profil',
            'sosmeds',
            'links',
        ));
    }

    public function informasi_serta_merta()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.informasi_serta_merta', compact(
            'contact',
            'profil',
            'sosmeds',
            'links',
        ));
    }

    public function informasi_setiap_saat()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.informasi_setiap_saat', compact(
            'contact',
            'profil',
            'sosmeds',
            'links',
        ));
    }

    public function informasi_dikecualikan()
    {
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.informasi_dikecualikan', compact(
            'contact',
            'profil',
            'sosmeds',
            'links',
        ));
    }

}
