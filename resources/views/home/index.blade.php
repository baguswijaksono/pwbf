@extends('layouts.app')

@section('title', $viewData["title"])
@section('content')
<div class="row">
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/laughing.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">
<img src="{{ asset('/img/confused.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-6 col-lg-4 mb-2">

<img src="{{ asset('/img/crying.jpg') }}" class="img-fluid rounded"> </div>
</div>
@endsection
