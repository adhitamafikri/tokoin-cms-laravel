@extends('layouts.app')

@section('content')
<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="z-index: -1;"></div>
<div class="container-fluid mt--6">
    <div class="table-responsive mb-4">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <th scope="col" class="text-light">#</th>
            <th scope="col" class="text-light">Name</th>
            <th scope="col" class="text-light">Email</th>
            <th scope="col" class="text-light">Phone</th>
            <th scope="col" class="text-light">Wallet Address</th>
            <th scope="col" class="text-light">Contribution</th>
            <th scope="col" class="text-light">Document</th>
        </thead>
        <tbody>
        @foreach($partners as $indexKey => $part)
            <tr class="bg-white">
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
@endsection
