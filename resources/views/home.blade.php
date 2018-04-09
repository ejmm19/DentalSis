@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row-int pt-3">
        <div class="col-lg-12">
            <div class="panel panel-default">
              {{ Breadcrumbs::render('home') }}
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
