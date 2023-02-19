@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Driver's expenses</div>

                    <div class="card-body">

                            <a href="{{route('expenses.create')}}" class="btn btn-dark mb-3">➕ New</a>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Expense</th>
                                <th>Amount ($)</th>
                                <th>John Sigono</th>
                                <th>Tom Davidson</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($expenses as $expense)
                                <tr>
                                    <td>{{ $expense->name }}</td>
                                    <td>{{ $expense->amount }}</td>
                                    <td>{{ $expense->amount_john }}</td>
                                    <td>{{ $expense->amount_tom }}</td>
                                    <td>

                                            <a href="{{route('expenses.edit', $expense->id)}}" class="btn btn-info">Edit</a>

                                    </td>
                                    <td>

                                            <form action="{{ route('expenses.destroy', $expense->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <thead>
                            <tr>
                                <th>TOTAL:</th>
                                <th>{{ $expense->sum('amount') }}</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
