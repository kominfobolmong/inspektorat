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
use App\Models\Komoditas;
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
        $komoditas = Komoditas::take(5)->latest()->get();
        $artikel = News::without('tags')->take(3)->latest()->get();
        $links = Link::latest()->get();
        $sosmeds = Sosmed::get();

        return view('front.index', compact(
            'contact',
            'links',
            'komoditas',
            'artikel',
            'sosmeds',
        ));
    }

    public function profil_dinas()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat', 'tupoksi')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.profil_dinas', compact('item', 'contact', 'sosmeds', 'links'));
    }

    public function komoditas()
    {
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat')->first();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas', compact('item', 'contact', 'sosmeds', 'links'));
    }

    public function komoditas_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $tags = Tag::latest()->get();
        $item = Komoditas::where('slug', $slug)->firstOrFail();
        $news_new = News::take(5)->latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.komoditas_detail', compact('item', 'komoditas', 'category', 'tags', 'news_new', 'contact', 'sosmeds', 'links'));
    }

    public function artikel()
    {
        $artikel = News::without('tags')->latest()->paginate(10);
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $news_new = News::take(5)->latest()->get();
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $contact = Contact::first();
        $sosmeds = Sosmed::get();
        $links = Link::latest()->get();

        return view('front.details.artikel', compact('artikel', 'category', 'tags', 'news_new', 'contact', 'komoditas', 'sosmeds', 'links'));
    }

    public function artikel_detail($slug)
    {
        $category = Category::withCount('news')->get();
        $tags = Tag::latest()->get();
        $komoditas = Komoditas::select('nama', 'slug')->get();
        $artikel = News::where('slug', $slug)->firstOrFail();
        $news_new = News::take(5)->latest()->get();
        $contact = Contact::first();
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
        $item = Profile::select('foto_pimpinan', 'kata_sambutan', 'visi', 'misi', 'struktur_organisasi', 'maklumat')->first();
        $contact = Contact::first();
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
