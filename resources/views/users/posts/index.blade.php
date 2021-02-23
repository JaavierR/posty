@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12">
        <div class="px-6 py-4 bg-white rounded mb-2">
            <h1 class="text-2xl font-medium">
                {{ $user->name }}
            </h1>
            <p class="text-purple-500">
                Posted {{ $posts->count() }} {{ Str::plural('post', $posts->count()) }} and received
                {{ $user->receivedLikes->count() }} {{ Str::plural('like', $user->receivedLikes->count()) }}
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg space-y-4">
            @if ($posts->count())
            @foreach ($posts as $post)
            <x-post :post="$post" />
            @endforeach

            {{ $posts->links() }}

            @else
            <p>{{ $user->name }} does not have any posts!</p>
            @endif
        </div>
    </div>
</div>
@endsection
