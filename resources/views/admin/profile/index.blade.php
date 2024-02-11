@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile </h1>
        </div>

        <div class="section-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update User Settings</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.profile.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control"
                                value="{{ auth()->user()->email }}">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
            {{--  --}}
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Update Password</h4>
                </div>

                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="password">Current Password</label>
                            <input type="password" name="current_password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password_con">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_con" class="form-control">
                        </div>
                        <button class="btn btn-primary" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
