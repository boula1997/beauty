<div class="container-fluid text-center">
    {{-- <h1>Some cool facts</h1> --}}
    <div class="row pt-5">
        @foreach ($contacts as $contact)
        <div class="col-sm-3 pt-3 pb-4" style="background-color: #00FF00">
            <h2 class="contact-h2" data-max="{{$contact->count}}"></h2>
            <h2 class="contact-h2">{{$contact->title}}</h2>
        </div>
        @endforeach
    </div>
</div>
