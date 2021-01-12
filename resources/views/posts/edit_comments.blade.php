@extends('layout')
@section('content')
    @auth
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up">
                    @include('message.message')
                    <form method="POST" action="{{route('send_edit_comment', [$post->id,$comment->id])}}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="" for="message">Редактировать комментарий</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{$comment->message}}</textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" value="Сохранить изменения" class="btn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endauth
@endsection
