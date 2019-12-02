@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{!! route('profile.update', auth()->user()->id) !!}" method="POST">
                @csrf
                <input name="_method" type="hidden" value="PUT">
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
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
                </div>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $user->firstname }}">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $user->lastname }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="background-color:#eb6b34; border-style:none;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
