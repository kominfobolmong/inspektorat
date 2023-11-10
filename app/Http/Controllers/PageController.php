<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Komoditas;
use App\Models\Link;
use App\Models\Mitra;
use App\Models\News;
use App\Models\Opt;
use App\Models\Penyakit;
use App\Models\Photo;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Sosmed;
use App\Models\Video;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index()
    {
        $contact = Contact::first();
        $komoditas_unggulan = Komoditas::where('is_unggulan', 'Y')->get();
        $komoditas = Komoditas::where('is_unggulan', 'N')->get();
        $artikel = News::with('category')->take(3)->latest()->get();
        $penyakit = Penyakit::take(3)->latest()->get();
        // $opt = Opt::take(3)->latest()->get();
        $links = Link::latest()->get();
        $sosmeds = Sosmed::get();
        $contact_cs = Profpeg::select('foto', 'nama', 'jabatan', 'whatsapp')->where('is_customer_service', 'Y')->get();

        $count_komoditas = DB::table('komoditas')->count();
        $count_artikel = DB::table('penyakits')->count();
        $visitors = DB::table('visitors')->count();
        $visitor_today = DB::table('visitors')->where('date', today())->count();

        return view('front.index', compact(
            'contact',
            'links',
            'komoditas_unggulan',
            'komoditas',
            'artikel',
            'sosmeds',
            'count_komoditas',
            'count_artikel',
            'visitors',
            'visitor_today',
            'contact_cs',
            'penyakit',
            // 'opt',
        ));
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

    public function komoditas_unggulan()
    {
        $items = Komoditas::where('is_unggulan', 'Y')->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas_unggulan', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function komoditas_lainnya()
    {
        $items = Komoditas::where('is_unggulan', 'N')->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas_lainnya', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function komoditas_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $tags = Tag::latest()->get();
        $item = Komoditas::where('slug', $slug)->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $count_komoditas = DB::table('komoditas')->count();
        $count_hama = DB::table('penyakits')->count();
        $count_aktivitas_klinik = DB::table('news')->count();
        $count_mitra = DB::table('mitras')->count();

        return view('front.details.komoditas_detail', compact('item', 'komoditas', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links', 'count_komoditas', 'count_hama', 'count_aktivitas_klinik', 'count_mitra'));
    }

    public function penyakit()
    {
        $items = Penyakit::with('komoditas')->latest()->paginate(5);
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $count_komoditas = DB::table('komoditas')->count();
        $count_hama = DB::table('penyakits')->count();
        $count_aktivitas_klinik = DB::table('news')->count();
        $count_mitra = DB::table('mitras')->count();

        return view('front.details.penyakit', compact('items', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links', 'count_komoditas', 'count_hama', 'count_aktivitas_klinik', 'count_mitra'));
    }

    public function penyakit_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $penyakit = Penyakit::where('slug', $slug)->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        // $artikel->visit()->withIp()->withSession();

        $count_komoditas = DB::table('komoditas')->count();
        $count_hama = DB::table('penyakits')->count();
        $count_aktivitas_klinik = DB::table('news')->count();
        $count_mitra = DB::table('mitras')->count();

        return view('front.details.penyakit_detail', compact('penyakit', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links', 'count_komoditas', 'count_hama', 'count_aktivitas_klinik', 'count_mitra'));
    }

    public function opt()
    {
        $items = Opt::latest()->paginate(5);
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.opt', compact('items', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links'));
    }

    public function opt_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $opt = Opt::where('slug', $slug)->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        // $artikel->visit()->withIp()->withSession();

        return view('front.details.opt_detail', compact('opt', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links'));
    }

    public function artikel()
    {
        $items = News::without('tags')->latest()->paginate(5);
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $count_komoditas = DB::table('komoditas')->count();
        $count_hama = DB::table('penyakits')->count();
        $count_aktivitas_klinik = DB::table('news')->count();
        $count_mitra = DB::table('mitras')->count();

        return view('front.details.artikel', compact('items', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links', 'count_komoditas', 'count_hama', 'count_aktivitas_klinik', 'count_mitra'));
    }

    public function artikel_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $artikel = News::where('slug', $slug)->firstOrFail();
        $news_new = News::take(3)->latest()->popularAllTime()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        $artikel->visit()->withIp()->withSession();

        $count_komoditas = DB::table('komoditas')->count();
        $count_hama = DB::table('penyakits')->count();
        $count_aktivitas_klinik = DB::table('news')->count();
        $count_mitra = DB::table('mitras')->count();

        return view('front.details.artikel_detail', compact('artikel', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links', 'count_komoditas', 'count_hama', 'count_aktivitas_klinik', 'count_mitra'));
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

    public function konsultasi()
    {
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.konsultasi', compact('contact', 'sosmeds', 'links'));
    }

    public function mitra()
    {
        $items = Mitra::latest()->paginate(10);
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.mitra', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function galeri_foto()
    {
        $items = Photo::latest()->paginate(10);
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.galeri_foto', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function galeri_video()
    {
        $items = Video::latest()->paginate(10);
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
