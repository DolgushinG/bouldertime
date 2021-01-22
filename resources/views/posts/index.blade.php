@extends('layout')

@section('content')

@include('posts.outpost')
    <section class="section section-lg pb-5 bg-soft">
        <div class="container">
            <div class="row justify-content-center">
                <form action="#">
                    <label class for="email">Подпишись на новые посты</label>
                    <div class="form-group bg-dark shadow-soft rounded-pill mb-4 px-3 py-2">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="input-group input-group-merge shadow-none">
                                    <input type="email" id="email"
                                           class="form-control border-0 form-control-flush shadow-none pb-2"
                                           placeholder="example@email.com..." required=""></div>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-block btn-primary rounded-pill">Subscribe
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
