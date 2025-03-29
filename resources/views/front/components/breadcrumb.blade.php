<div class="breadcrumb-section">
    <div class="container">
        <h2>{{$name}}</h2>
        <nav class="theme-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('front.home')}}">{{ __('general.Home') }}</a></li>
                @if (isset($mid))
                <li class="breadcrumb-item">{{$mid  }}</li>
               @endif
                <li class="breadcrumb-item">{{ $name}}</li>
            </ol>
        </nav>
    </div>
</div>