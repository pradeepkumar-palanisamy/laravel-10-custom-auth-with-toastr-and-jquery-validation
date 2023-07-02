@section('title', 'Dashboard')
@include('user-includes.headerscript')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card mt-5">
               
                <div class="card-header text-center text-white bg-transparent border-bottom-0">Details of the User</div>
                <br>
                <div class="text-center text-white">
                    <h4> <b>Username:</b><br>{{ $user->username }}</h4><br>
                    <h4> <b>email:</b><br>{{ $user->email }}</h4><br>
                    <a href="{{ url('logout') }}">
                        <button class="btn btn-success">Logout</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@include('user-includes.footer')
