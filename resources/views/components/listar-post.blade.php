@extends('layouts.app')

@section('titulo')
    Página principal
@endsection


@section('contenido')
    @if ($posts->count())
            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}"><img
                                src="{{ asset('uploads') . '/' . $post->imagen }}"
                                alt="Imagen de la publicación {{ $post->titulo }}"></a>
                    </div>
                @endforeach
            </div>
    @else
        <p class="text-center">No hay posts, empieza a seguir a alguien para ver sus posts</p>
    @endif
@endsection
