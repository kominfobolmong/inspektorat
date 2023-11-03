@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit FAQ</h1>
            </div>

            <div class="section-body">

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-link"></i> Edit FAQ</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('faq.update', $faq->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label>Question</label>
                                <textarea class="form-control content @error('question') is-invalid @enderror" name="question"
                                    placeholder="Question" rows="10">{!! old('question') ?? $faq->question !!}</textarea>
                                @error('question')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Answer</label>
                                <textarea class="form-control content @error('answer') is-invalid @enderror" name="answer"
                                    placeholder="Answer" rows="10">{!! old('answer') ?? $faq->answer !!}</textarea>
                                @error('answer')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> UPDATE</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @stop
