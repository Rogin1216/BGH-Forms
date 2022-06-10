<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://www.position-absolute.com/creation/print/jquery.printPage.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    top:50px;
    width: 340px;
    /* height: 500px; */
    margin: 60px auto;
  	font-size: 15px;
}
.login-form form {
    margin: 150px 0 0 0;
    background: #f7f7f7;
    box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
  
}
.form-control, .btn {
    min-height: 50px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.input-form{
    margin: 0 0 0 30px;
}
#input{
    margin: 50px 0 0 0;
}
.logo{
    width: 130px;
    height: 130px;
    position: absolute;
    top:-60px;
    left:100px;
}
</style>
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <!-- Validation Errors -->
        <div class="login-form">
        <div class="col">
                            <img src="{{ asset('images/bghmc-logo.png') }}" class="logo" alt="..." >
                        </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- username -->
                <!-- <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> -->

                <!-- Email Address -->
                
                <div class="col" >
                    <div class="row">
                        
                    </div>
                    <div class="row">
                        <div class="col" id="input">
                            <!-- <x-label for="email" :value="__('Email: ')" /> -->
                            <x-input id="email" class="block mt-1 w-full" 
                            class="input-form"
                            type="text" 
                            placeholder="Email" 
                            name="email"  required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mt-4">
                            <!-- <x-label for="password" :value="__('Password: ')" /> -->

                            <x-input id="password" class="block mt-1 w-full"
                                            class="input-form"
                                            type="password"
                                            name="password"
                                            placeholder="Password"
                                            required autocomplete="current-password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="flex items-center justify-end mt-4">
                    <!-- @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif -->
                    <div class="d-flex justify-content-center">
                        <!-- <x-button class="btn btn-secondary">
                            {{ __('Log in') }}
                        </x-button> -->
                        <button class="btn btn-secondary">{{ __('Log in') }}</button>
                    </div>
                    
                </div>
                        </div>
                    </div>
                </div>
                

                <!-- Password -->
                

                <!-- Remember Me -->
                <!-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="input-form rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> -->

                
            </form>
        </div>
        <center><x-auth-validation-errors class="mb-4" :errors="$errors" /></center>
    </x-auth-card>
</x-guest-layout>
<script>
    $("form").submit(function e(){
        e.preventDefault();
        var values = $(this).serializeArray();
        values.forEach(function (item,index){
            $("#sumbitted").append(item.name + " " + item.value + "<br>");
        })
        localStorage.setItem("form", JSON.stringify(values));
    });
</script>
