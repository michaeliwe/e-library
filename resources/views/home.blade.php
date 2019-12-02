@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center p-3">
        @foreach ($books as $book)
        <div class="col-md-4 mt-3">
            <div class="card">
                <div class="card-header">{{ $book->name }}</div>
                <img src="https://uncrate.com/p/2019/11/autobahn-alliance1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <b>Description :</b>
                    <br>
                    {{ $book->desc }}
                    <br><br>
                    <b>Type :</b>
                    <br>
                    {{ $book->type }}
                    <br><br>
                    <b>Author :</b>
                    <br>
                    {{ $book->author }}
                    <br><br>
                    <b>Publisher :</b>
                    <br>
                    {{ $book->publisher }}
                    <br><br>
                    <b>Price :</b>
                    <br>
                    @php
                        $rupiah = "Rp " . number_format($book->price,2,',','.');
                    @endphp
                    {{ $rupiah }}
                </div>
                @if (auth()->user()->role == "student")
                    <a href="{!! route('borrow.show', $book->id) !!}" type="button" class="btn btn-block btn-primary" style="background-color:#eb6b34; border-style:none;">
                        Book
                    </a>
                @endif

            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
