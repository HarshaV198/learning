@extends('layouts.app')

@section('content')

    <section style="padding: 60px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <a href="/todo/create" class="btn btn-info pull-right">Add item</a>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <h1 class="text-center">Todo list</h1>
                    <div class="list-group">
                        @foreach($todos as $todo)
                            <a href="javascript:void(0)" class="list-group-item">
                                {{ $todo->body }}
                                <span class="pull-right">{{$todo->created_at->diffforhumans()}}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection