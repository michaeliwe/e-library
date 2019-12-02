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
                        <th scope="col">Book Name</th>
                        <th scope="col">Loan Date</th>
                        <th scope="col">Return Date</th>
                        <th scope="col">Bill</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($borrow as $item)
                        <tr>
                            @php
                                $rupiah = "Rp " . number_format($item->fine_price,2,',','.');
                                $dateNow = date('Y-m-d');
                                $status = 'normal';
                                // $date_return = $item->return_date;
                                // $diff = abs($dateNow - $date_return);
                                // $days = floor(($diff - $years * 365*60*60*24 -
                                //              $months*30*60*60*24)/ (60*60*24));
                                // if ($days > 0 && $days%3 == 0){
                                //     $status = 'late';
                                //     $fine_price = $days/3*2000+$item->fine_price;
                                // }

                            @endphp
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->book->name }}</td>
                            <td>{{ $item->loan_date }}</td>
                            <td>{{ $dateNow }}</td>
                            <td>{{ $fine_price }}</td>
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
