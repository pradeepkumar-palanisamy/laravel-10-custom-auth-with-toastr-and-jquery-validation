@section('title','Registration')
@include('user-includes.headerscript')
<div class="text-center">
    <h1 class="text-white" style="font-size: 12px;">SPACEOFDEVOPS.COM</h1>
</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card mt-5">
                    
                    <div class="card-header text-center text-white bg-transparent border-bottom-0">Register</div>
                    <div class="card-body">
                        <form id="registrationForm" action="{{ Route('post_reg') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text"  class="form-control" id="username" name="username" >
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email"  class="form-control" id="email" name="email" >
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"  class="form-control" id="password" name="password" >
                            </div>
                            <div class="mb-3">
                                <label for="confirm_password" class="form-label">Confirm Password</label>
                                <input type="password"  class="form-control" id="confirm_password" name="confirm_password" >
                            </div>
                            <div class=" gap-2 text-center">
                                <button type="submit" class="btn btn-success">Register</button>
                            </div>
                            <div class="text-end mt-3">
                                <a href="{{ URL::TO('login') }}" class="text-light">Already a user? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@include('user-includes.footer')


