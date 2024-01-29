<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Link;
use App\Models\News;
use App\Models\Photo;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Slider;
use App\Models\Sosmed;
use App\Models\Video;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index()
    {
        $apps = Link::latest()->get();
        return view('front.home', compact('apps'));
    }

    public function beranda()
    {
        $sliders = Slider::take(2)->latest()->get();
        $artikel = News::take(9)->latest()->get();
        $links = Link::take(5)->latest()->get();

        return view('front.index', compact('artikel', 'sliders', 'links'));
    }

    public function profil_dinas()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat', 'tupoksi')->first();
        $kadis = Profpeg::select('nama', 'nip')->where('jabatan', 'Kepala Dinas')->first();
        $profpegs = Profpeg::get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.profil_dinas', compact('item', 'profpegs', 'contact', 'sosmeds', 'links', 'kadis'));
    }

    public function news()
    {
        $items = News::without('tags')->withTotalVisitCount()->latest()->paginate(5);
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.artikel', compact('items', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
    }

    public function news_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $artikel = News::where('slug', $slug)->withTotalVisitCount()->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $artikel->visit()->withIp()->withSession();

        return view('front.details.artikel_detail', compact('artikel', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
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

    public function galeri_foto()
    {
        $items = Photo::latest()->paginate(12);
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.galeri_foto', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function galeri_video()
    {
        $items = Video::latest()->paginate(12);
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.galeri_video', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function kontak()
    {
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.kontak', compact('contact', 'sosmeds', 'links'));
    }
}
