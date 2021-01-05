@if($errors->any())
    @foreach($errors->all() as $error)
        <span class="text-uppercase text-primary d-block mb-3" data-aos="fade-left" data-aos-delay="300">{{ $error }}</span>
    @endforeach
@endif

@if(session('success'))
    <span class="text-uppercase text-primary text-success aos-init aos-animate" data-aos="fade-left" data-aos-delay="300">
           <p>{{session('success')}} </p>
    </span>
@endif
