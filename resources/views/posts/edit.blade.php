@extends('layouts.layout', ['title' => "Редактировать пост №$post->post_id"])

@section('content')
    <form action="{{ route('post.update', ['post' => $post->post_id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <h2>Редактировать пост</h2>
        @include('posts.parts.form')

          <input type="submit" class="btn btn-outline-success" value="Редактировать пост">
    </form>
@endsection