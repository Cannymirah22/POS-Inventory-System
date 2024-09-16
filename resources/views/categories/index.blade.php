{{-- @extends('layouts.app')
@section('content')

<a href="{{ route('subcategories.index')}}">SUB-CATEGORY</a>
 @livewire('category-component')

@endsection --}}


@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('subcategories.index')}}" class="btn btn-primary">SUB-CATEGORY</a>

        <div class="category-component-container">
            @livewire('category-component')
        </div>
    </div>
@endsection
