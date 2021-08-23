<x-layout>

    <div class="l-login">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="l-login-form">
                        <h3>Login</h3>
                        <p></p>
                        <form action="{{route('user_login')}}" method="POST">
                            @csrf
                                    @error("email")
                                        <p class="text-danger d-inline text-center" style="font-size:10px">{{$message}}</p>
                                    @enderror
                                    @error("password")
                                        <p class="text-danger d-inline text-center" style="font-size:10px">{{$message}}</p>
                                    @enderror
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" name="email"/>
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="password"/>
                                <label class="form-label" for="form3Example4">Password</label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Not a member? <a href="{{route('register')}}">Register</a></p>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-layout>