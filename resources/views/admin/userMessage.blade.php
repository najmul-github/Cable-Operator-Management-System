@extends('layouts.admin')

@section('content')
<div class="container"style="padding: 80px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-left">User Message</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/adminDashboard" class="btn btn-info">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success" role="alert">
                            {{session('message')}}
                        </div>
                    @endif

                    <table class=" table table-bordered table-striped table-hover datatable datatable-Order">
                        <thead>
                            <tr>
                                <th>
                                    {{ trans('From') }}
                                </th>
                                <th>
                                    {{ trans('Message') }}
                                </th>
                                <th>{{trans('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $message)
                                <tr data-entry-id="{{ $message->id }}">
                                    <td>
                                        {{ $message->email ?? '' }}
                                    </td>
                                    <td>
                                        <p>{{ $message->message ?? '' }}</p>
                                    </td>
                                    {{-- <td><a href="{{ route('admin.users.approve', $message->id) }}"
                                        class="btn btn-primary btn-sm">Approve</a></td> --}}
                                    <td>
                                        <a href="userMessageDelete/{{$message->id}}" class="text-danger" onclick="return confirm('Are you sure to delete this user?')">
                                            <i style="font-size: 18px" class="fa fa-trash-o"></i>
                                        </a>
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
