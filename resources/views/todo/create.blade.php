@extends('layouts.app')

@section('content')

    <section style="padding: 60px 0">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <a href="/todo" class="btn btn-info pull-right">Back</a>
                </div>
                <div class="col-md-offset-4 col-md-4">
                    <h1 class="text-center">Create new item</h1>
                    <form class="form-horizontal" action="/todo" method="post">
                        {{ csrf_field() }}
                        <fieldset>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <textarea class="form-control" name="body" rows="5" id="textArea"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success" value="submit">Submit</button>
                        </fieldset>
                    </form>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger" style="margin-top: 15px">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </section>

@endsection