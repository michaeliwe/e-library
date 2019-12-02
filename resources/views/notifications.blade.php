@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
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
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Message</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $notif)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $notif->notif }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" align="center">no data</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
