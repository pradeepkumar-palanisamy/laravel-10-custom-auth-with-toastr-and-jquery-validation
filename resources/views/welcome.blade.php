@section('title','Welcome')
@include('user-includes.headerscript')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-header text-center text-white bg-transparent border-bottom-0">Welcome To Custom <br>
                        
                        Login and Registration
                    </div>

                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{ url('login') }}" class="btn btn-primary">Login</a>
                            <a href="{{ url('registration') }}" class="btn btn-success">Register</a>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('user-includes.footer')
   

    