@extends('layouts.app')

@section('title','動画編集')

@section('content')
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="mb-2">
                    <a class="text-decoration-none" href="{{route('posts.index')}}">&lt;戻る</a>
                </div>
                <form action="{{route('posts.update',$post)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-3">
                        <label for="title">タイトル</label>
                        <input class="form-control" type="text" id="title" name="title" value="{{old('title',$post->title)}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="content">本文</label>
                        <textarea class="form-control" name="content" id="content">{{old('content',$post->content)}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">更新</button>
                </form>
            @endsection