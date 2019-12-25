@extends('layouts.index')

@section('content')

<section class="signup" style="margin-top: 150px;">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h3 class="form-title">Add Service Provider</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            <i data-notify="icon" class="ion-checkmark"></i>&ensp;
                            <span data-notify="message" class="text-center">{{ Session::get('success') }}</span>
                        </div>
                    @endif
                <form method="POST" class="register-form" id="register-form" action="{{route('addservice.store')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="Full Name / Business Name"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="form-group">
                                <label for="contact"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="contact" id="contact" placeholder="Contact"/>
                        </div>
                        <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-location"></i></label>
                                <input type="text" name="address" id="address" placeholder="Address"/>
                        </div>
                        <div class="form-group">
                                <label for="city"><i class="zmdi zmdi-location"></i></label>
                                <input type="text" name="city" id="city" placeholder="City"/>
                        </div>
                        <div class="form-group">
                                <label for="category"><i class="zmdi zmdi-location"></i></label>
                                <input type="text" name="category" id="category" placeholder="Category i.e Mechanic, Hospital"/>

                        </div>
                        <div class="form-group">
                                <label for="category"><i class="zmdi zmdi-location"></i></label>
                                <input type="text" name="description" id="description" placeholder="Description"/>

                        </div>
                        <div class="form-group">
                                <label for="image"><i class="zmdi zmdi-image"></i></label>
                                <input type="file" name="image" id="image" placeholder="Image"/>
                        </div>
                        {{-- <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                        </div> --}}

                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="./assets/images/signup-image.jpg" alt="sing up image"></figure>

                </div>
            </div>
        </div>
    </section>
@endsection
