@extends('frontend.detail.app', ['menu' => 'Profil', 'breadcrumb' => 'Visi Misi'])

@section('content')

<div class="section-header">
    <h2>Visi</h2>
    <p>{!! strip_tags($item->visi ?? null) !!}</p>
</div>

<div class="section-header">
    <h2>Misi</h2>
    <p>{!! strip_tags($item->misi ?? null) !!}</p>
</div>

@endsection
