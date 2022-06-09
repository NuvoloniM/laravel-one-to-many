@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Add a title</label>
          <input type="text" class="form-control" id="title" placeholder="title..." name="title">
        </div>
        <div class="form-group">
          <label for="content">Write the content of your post</label>
          <textarea class="form-control" id="content" rows="5" placeholder="A cosa stai pensando?" name="content"></textarea>
        </div>
        <div class="form-group">
            <label for="image">Add your img URL</label>
            <input type="text" class="form-control" id="image" placeholder="image..." name="image">
          </div>
          <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</div>

@endsection