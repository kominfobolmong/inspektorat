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
use App\Models\Publikasi;
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
        $publikasi = Publikasi::take(10)->latest()->get();
        $links = Link::latest()->get();
        $contact = Contact::first();

        return view('front.index', compact('artikel', 'publikasi', 'sliders', 'links', 'contact'));
    }

    public function arti_lambang()
    {
        $item = Profile::select('dasar_hukum')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();

        return view('front.details.arti_lambang', compact('item', 'contact', 'sosmeds', 'links', 'news_new', 'category', 'tags'));
    }

    public function visi_misi()
    {
        $item = Profile::select('visi', 'misi')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();

        return view('front.details.visi_misi', compact('item', 'contact', 'sosmeds', 'links', 'news_new', 'category', 'tags'));
    }

    public function tugas_fungsi()
    {
        $item = Profile::select('tupoksi')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();

        return view('front.details.tugas_fungsi', compact('item', 'contact', 'sosmeds', 'links', 'news_new', 'category', 'tags'));
    }

    public function struktur_organisasi()
    {
        $item = Profile::select('struktur_organisasi')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();

        return view('front.details.struktur_organisasi', compact('item', 'contact', 'sosmeds', 'links', 'news_new', 'category', 'tags'));
    }

    public function profil_pimpinan()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();

        return view('front.details.profil_pimpinan', compact('item', 'contact', 'sosmeds', 'links', 'news_new', 'category', 'tags'));
    }

    public function pegawai()
    {
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $pegawai = DB::table('pegawais')
            ->join('jabatans', 'jabatans.id', '=', 'pegawais.jabatan_id')
            ->select('pegawais.nama', 'pegawais.image', 'jabatans.nama as jabatan', 'jabatans.kode')
            ->orderBy('jabatans.kode')
            ->get();

        return view('front.details.pegawai', compact('pegawai', 'contact', 'sosmeds', 'links'));
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

    public function riset()
    {
        $items = Publikasi::where('type', 'riset')->withTotalVisitCount()->latest()->paginate(10);
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.riset', compact('items', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
    }

    public function regulasi()
    {
        $items = Publikasi::where('type', 'regulasi')->withTotalVisitCount()->latest()->paginate(10);
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.regulasi', compact('items', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
    }

    public function publikasi_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $publikasi = Publikasi::where('slug', $slug)->withTotalVisitCount()->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $publikasi->visit()->withIp()->withSession();

        return view('front.details.publikasi_detail', compact('publikasi', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
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
