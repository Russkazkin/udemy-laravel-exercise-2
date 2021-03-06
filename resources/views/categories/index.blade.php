@extends('layouts.app')

@section('title')
    Categories List
@endsection

@section('content')
<div class="container">
    <h1>Categories List</h1>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Categories
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                                {{ $category->name }}
                                <form style="display: inline-block" action="/categories/{{ $category->id }}/delete" method="POST" class="float-right">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                                <a href="/categories/{{ $category->id }}/edit"
                                   class="btn btn-success btn-sm float-right mr-1">Edit</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
