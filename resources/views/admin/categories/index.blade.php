@extends('layouts.app')

@section('content')
<div class="container">
    @include('includes.message')
    <a href="{{route('admin.categories.create')}}" class="btn btn-primary my-3">Aggiungi una nuova categoria</a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Lable</th>
            <th scope="col">Color</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->lable}}</td>
                <td>{{$category->color}}</td>
                <td>
                    <a href="{{ route('admin.categories.show', $category->id)}}" class="btn btn-info ">Show Details</a>
                    <a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-warning my-3">Edit category</a>
                    @include('includes.deleteCategories')
                </td>
                </tr>
            @empty
                <h2>Nessuna categoria presente</h2>
            @endforelse
        </tbody>
    </table>
</div>
@endsection