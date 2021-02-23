@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="bg-white w-8/12 p-6 rounded-lg">
        <x-post :post="$post" />
    </div>
</div>
@endsection
