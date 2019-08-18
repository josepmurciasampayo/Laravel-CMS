@extends('laravel-cms::' . config('laravel-cms.template_frontend_dir') .  '.includes.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md pb-5 page-content">

<div class="text-center main-title">
    <h1>{{$page->title}}</h1>
</div>


<div class="main-content">
    {!! $page->main_content !!}
</div>

<div class="text-center main-image">
    @if ( isset($file_data->main_image) )
        <img src="{{$helper->imageUrl($file_data->main_image, '1000') }}" class="img-fluid" />
    @endif
</div>


<div class="text-center main-text">
    {!! $page->main_text !!}
</div>

@include('laravel-cms::' . config('laravel-cms.template_frontend_dir') .  '.includes.sub-page-cards', ['sub_pages' => $page->children, 'card_class'=>'col-md-6 mb-4' ])


        </div>
    </div>
</div>

@endsection
