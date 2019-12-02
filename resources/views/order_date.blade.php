@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{!! route('borrow.store') !!}" method="POST">
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
                <input name="book_id" type="hidden" value={{ $id }}>
                <div class="form-group">
                    <label for="loan_date">Loan Date</label>
                    <input type="date" class="form-control" id="loan_date" name="loan_date" placeholder="Loan Date">
                </div>
                <div class="form-group">
                    <label for="return_date">Return Date</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Return Date">
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="background-color:#eb6b34; border-style:none;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
