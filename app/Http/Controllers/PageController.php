<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Komoditas;
use App\Models\Link;
use App\Models\News;
use App\Models\Profile;
use App\Models\Profpeg;
use App\Models\Sosmed;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{

    public function index()
    {
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $komoditas = Komoditas::take(5)->latest()->get();
        $artikel = News::with('category')->take(3)->latest()->get();
        $links = Link::latest()->get();
        $sosmeds = Sosmed::get();
        $contact_cs = Profpeg::select('foto', 'nama', 'jabatan', 'whatsapp')->where('is_customer_service', 'Y')->get();

        $count_komoditas = DB::table('komoditas')->count();
        $count_artikel = DB::table('news')->count();
        $visitors = DB::table('visitors')->count();
        $visitor_today = DB::table('visitors')->where('date', today())->count();

        return view('front.index', compact(
            'contact',
            'links',
            'komoditas',
            'artikel',
            'sosmeds',
            'count_komoditas',
            'count_artikel',
            'visitors',
            'visitor_today',
            'contact_cs',
        ));
    }

    public function profil_dinas()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat', 'tupoksi')->first();
        $kadis = Profpeg::select('nama', 'nip')->where('jabatan', 'Kepala Dinas')->first();
        $profpegs = Profpeg::get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.profil_dinas', compact('item', 'profpegs', 'contact', 'sosmeds', 'links', 'kadis'));
    }

    public function komoditas()
    {
        $items = Komoditas::get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas', compact('items', 'contact', 'sosmeds', 'links'));
    }

    public function komoditas_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $tags = Tag::latest()->get();
        $item = Komoditas::where('slug', $slug)->firstOrFail();
        $news_new = News::take(5)->latest()->get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas_detail', compact('item', 'komoditas', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
    }

    public function artikel()
    {
        $items = News::without('tags')->latest()->paginate(10);
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $news_new = News::take(5)->latest()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.artikel', compact('items', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links'));
    }

    public function artikel_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $artikel = News::where('slug', $slug)->firstOrFail();
        $news_new = News::take(5)->latest()->get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.artikel_detail', compact('artikel', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links'));
    }


    // public function berita()
    // {
    //     $news = News::without('tags')->latest()->paginate(9);
    //     $contact = Contact::first();
    //     $profil = Profile::select('logo', 'favicon')->first();
    //     $sosmeds = Sosmed::get();
    //     $links = Link::latest()->get();

    //     return view('frontend.detail.berita', compact('news', 'contact', 'profil', 'sosmeds', 'links'));
    // }


    public function kategori(Category $kategori)
    {
        $news = $kategori->news()->with('user')->latest()->paginate(5);
        $category = Category::latest()->get();
        $tags = Tag::latest()->get();
        $news_new = News::take(3)->latest()->get();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
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
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('frontend.detail.berita', compact('news', 'category', 'tags', 'news_new', 'contact', 'profil', 'sosmeds', 'links'));
    }

    public function konsultasi()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat')->first();
        $contact = Contact::select('email', 'alamat', 'no_telp')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.konsultasi', compact('item', 'contact', 'sosmeds', 'links'));
    }

    public function kontak()
    {
        $kontak = Contact::latest()->first();
        $contact = Contact::first();
        $profil = Profile::select('logo', 'favicon')->first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.kontak', compact('kontak', 'contact', 'profil', 'sosmeds', 'links'));
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

}
