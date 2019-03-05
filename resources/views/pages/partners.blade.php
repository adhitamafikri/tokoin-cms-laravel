@extends('layouts.app')

@section('content')
<section class="customer-list">
    <div class="container">
        <div class="table-responsive mb-4">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Wallet Address</th>
                <th scope="col">Contribution</th>
                <th scope="col">Document</th>
            </thead>
            <tbody>
            @foreach($partners as $indexKey => $part)
                <tr>
                    <td scope="row">{{ $indexKey + 1 }}</td>
                    <td>{{ $part->first_name }} {{ $part->last_name }}</td>
                    <td>{{ $part->email }}</td>
                    <td>{{ $part->phone }}</td>
                    <td>{{ $part->wallet_address }}</td>
                    <td>{{ $part->amount }} {{ $part->currency }}</td>
                    <td>{{ $part->document }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        {{ $partners->links() }}
    </div>
</section>
@endsection
