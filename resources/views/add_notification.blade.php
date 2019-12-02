@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{!! route('notif.store') !!}" method="POST">
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
                    <label for="user_id">Student</label>
                    <select class="form-control" id="user_id" name="user_id">
                      @foreach ($data as $user)
                          <option value="{{ $user->id }}">{{ $user->firstname }}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="notif">Message</label>
                    <textarea class="form-control" id="notif" name="notif" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-primary" style="background-color:#eb6b34; border-style:none;">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
