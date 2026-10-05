@extends('layout')
@section('content')
    <div class="card">
        <div class="card-header">
            Payments Page
        </div>
        <div class="card-body">
            <h5 class="card-title">Enrollment No: {{ $item->enrollment->enroll_no }}</h5>
            <p class="card-text">Paid Date: {{ $item->paid_date }}</p>
            <p class="card-text">Amount: {{ number_format($item->amount, 2) }}</p>
        </div>
        </hr>
    </div>
    </div>


@endsection