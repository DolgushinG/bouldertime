@extends('layout')

@section('content')
    <div class="site-section site-hero inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-10">
                    <span class="d-block mb-3 caption" data-aos="fade-up">Свяжитесь с нами</span>
                    <h1 class="d-block mb-4" data-aos="fade-up" data-aos-delay="100">заполните форму</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-up">
                    @include('message.message')
                    <form method="POST" action="{{route('contactSend')}}">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="" for="fname">Имя</label>
                                <input id="text" type="text"
                                       class="form-control @error('firstname') is-invalid @enderror" name="firstname"
                                       value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label class="" for="lname">Фамилия</label>
                                <input id="text" type="text"
                                       class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                       value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                @error('lastname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="" for="email">Email</label>
                                <input id="email" type="text"
                                       class="form-control @error('email') is-invalid @enderror" name="email"
                                       value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">

                            <div class="col-md-12">
                                <label class="" for="subject">Тема</label>
                                <input id="text" type="text"
                                       class="form-control @error('subject') is-invalid @enderror" name="subject"
                                       value="{{ old('subject') }}" required autocomplete="email" autofocus>
                                @error('subject')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="" for="message">Сообщение</label>
                                <textarea name="message" id="message" cols="30" rows="7" placeholder="Текст сообщения..." class="form-control">{{old('message')}}</textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" disabled value="Отправить" class="btn sendbtn btn-primary py-2 px-4 text-white">
                            </div>
                        </div>


                    </form>
                </div>
                <div class="col-md-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 mb-3">
                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Адрес</p>
                        <p class="mb-4">Saint-Petersburg</p>

                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Телефон</p>
                        <p class="mb-4"><a href="#">+7 (999) 240 23 42</a></p>

                        <p class="mb-0 font-weight-bold text-secondary text-uppercase mb-3">Email адрес</p>
                        <p class="mb-0"><a href="#">blog@bouldertime.ru</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
  const checkLengthcomment = function(evt) {
    if (fieldcomment.value.length > 1) {
        buttoncomment.removeAttribute('disabled')
    } else {
        buttoncomment.setAttribute('disabled','disabled');
    }
  }
  const fieldcomment = document.querySelector('#message')
  const buttoncomment = document.querySelector('.sendbtn')
  fieldcomment.addEventListener('keyup', checkLengthcomment)
</script>
<script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
    @endsection
