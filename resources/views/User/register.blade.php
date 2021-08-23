<x-layout>

    <div class="l-register">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="l-register-form">
                        <h3>Register</h3>
                        <p></p>
                        <form action="{{route('post_register')}}" method="POST">
                        @csrf
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-outline">
                                        <input type="text" id="form3Example1" name="username" class="form-control" />
                                        <label class="form-label" for="form3Example1">Username </label>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" name="email"/>
                                <label class="form-label" for="form3Example3">Email address</label>
                                    
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="password" />
                                <label class="form-label" for="form3Example4">Password</label>
                                
                            </div>
                                    

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>
                                    @error("username")
                                        <p class="text-danger d-inline" style="font-size:10px">{{$message}}</p>
                                    @enderror
                                    @error("email")
                                        <p class="text-danger d-inline" style="font-size:10px">{{$message}}</p>
                                    @enderror
                                    @error("password")
                                        <p class="text-danger d-inline" style="font-size:10px">{{$message}}</p>
                                    @enderror
                            Register buttons
                            <div class="text-center">
                                <p>I am member <a href="{{route('login')}}">Login</a></p>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</x-userlayout>