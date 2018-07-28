@extends('layouts.auth_layout')

@section('content')

<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

<!-- This makes the current user's id available in javascript -->
@if(!auth()->guest())
    <script>
        window.Laravel.userId = <?php echo auth()->user()->id; ?>
    </script>
@endif

@if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
@else
    <!-- // add this dropdown // -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="glyphicon glyphicon-user"></span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="notificationsMenu">
            <li class="dropdown-header">No notifications</li>
        </ul>
    </li>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Notifications Board</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="notifications" >
                        
                    </div>

                    <div >
                        <ul id="notificationsMenu"> 

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
