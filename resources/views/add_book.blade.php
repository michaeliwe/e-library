@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{!! route('book.store') !!}" method="POST">
                @csrf
                @if ($errors->any())
                <div class="" style="color: red">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="form-group">
                    <label for="name">Book Name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Book Name">
                </div>
                <div class="form-group">
                    <label for="type">Book Type</label>
                    <input type="text" class="form-control" id="type" name="type" aria-describedby="emailHelp" placeholder="Book Type">
                </div>
                <div class="form-group">
                    <label for="desc">Book Desc</label>
                    <input type="text" class="form-control" id="desc" name="desc" aria-describedby="emailHelp" placeholder="Book Desc">
                </div>
                <div class="form-group">
                    <label for="author">Book Author</label>
                    <input type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp" placeholder="Book Author">
                </div>
                <div class="form-group">
                    <label for="publisher">Book Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" aria-describedby="emailHelp" placeholder="Book Publisher">
                </div>
                <div class="form-group">
                    <label for="price">Book Price</label>
                    <input type="number" class="form-control" id="price" name="price" aria-describedby="emailHelp" placeholder="Book Price">
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="background-color:#eb6b34; border-style:none;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
