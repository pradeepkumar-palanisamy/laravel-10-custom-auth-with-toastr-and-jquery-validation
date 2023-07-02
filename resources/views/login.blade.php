@section('title','Login')
@include('user-includes.headerscript')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    <div class="card-header text-center text-white bg-transparent border-bottom-0">Login</div>
                    <div class="card-body">
                        <form id="loginform" action="{{ Route('post_login') }}" method="post">
                           @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="    gap-2 text-center">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>
                            <div class="text-end mt-3">
                                <a href="{{ url('registration') }}" class="text-light">Not a user? Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('user-includes.footer')

