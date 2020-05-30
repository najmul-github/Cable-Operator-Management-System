@extends('layouts.admin')

@section('content')
<div class="container" style="margin-top: ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-left">Users List to Approve</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/adminDashboard" class=" btn btn-info">Back</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                        <thead>
                            <tr>
                                <th>
                                    {{ trans('Name') }}
                                </th>
                                <th>
                                    {{ trans('Email') }}
                                </th>
                                <th>
                                    {{ trans('User Id') }}
                                </th>
                                <th>{{trans('Payment')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr data-entry-id="{{ $user->id }}">
                                    <td>
                                        {{ $user->name ?? '' }}
                                    </td>
                                    <td>
                                        {{ $user->email ?? '' }}
                                    </td>
                                    <td>
                                        {{ $user->id ?? '' }}
                                    </td>
                                    {{-- <td><a href="{{ route('admin.users.approve', $user->id) }}"
                                        class="btn btn-primary btn-sm">Approve</a></td> --}}
                                    <td>
                                        <form action="/confirm/{{$user->id}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <select name="payment">
                                                <option>{{$user->payment}}</option>
                                                <option>Paid</option>
                                            </select>
                                            <button type="submit" class="btn btn-primary btn-sm">OK</button>
                                        </form>
                                    </td>

                                </tr>
                            @empty
                                <p>No User Found</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection