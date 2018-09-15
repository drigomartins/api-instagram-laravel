@extends('template.template')
@section('content')

    <div class="row">
    @foreach($results as $result)
    @if ($loop->index < 9)
        <div class="col-xs-6 col-md-4" style="margin-bottom: 15px">
            <a href="{!! $result->link !!}" class="thumbnail">
                <img src="{{ $result->images->standard_resolution->url }}" alt="..." class="img-thumbnail">
            </a>
        </div>
    @endif
    @endforeach
    </div>

@endsection