@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Add new expense</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('expenses.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount ($)</label>
                                <input type="text" class="form-control" name="amount">
                            </div>

                            <button class="btn btn-dark me-3">Add</button>
                            <a href="{{route('expenses.index')}}" class="btn btn-info">Back</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
