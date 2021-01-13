@extends('layouts.main')
@section('content')

    <div class="container">
        @if ($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-primary" role="alert">
                    {{ $error  }}
                </div>

                @endforeach
            @endif
    <h1>Create Page</h1>


    <!-- Default form register -->
    <form class="text-center border border-light p-5" action="{{ route('store') }}" method="POST">
        {{csrf_field()}}

        <p class="h4 mb-4">Add Student</p>

        <div class="form-row mb-4">
            <div class="col">
                <!-- First name -->
                <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="First name">
            </div>
            <div class="col">
                <!-- Last name -->
                <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="Last name">
            </div>
        </div>

        <!-- E-mail -->
        <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" name="email" placeholder="E-mail">

        <!-- Password -->
{{--        <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">--}}
{{--        <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">--}}
{{--            At least 8 characters and 1 digit--}}
{{--        </small>--}}

        <!-- Phone number -->
        <input type="text" id="defaultRegisterPhonePassword" class="form-control" name="phone" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
{{--        <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">--}}
{{--            Optional - for two step authentication--}}
{{--        </small>--}}

        <!-- Newsletter -->
{{--        <div class="custom-control custom-checkbox">--}}
{{--            <input type="checkbox" class="custom-control-input" id="defaultRegisterFormNewsletter">--}}
{{--            <label class="custom-control-label" for="defaultRegisterFormNewsletter">Subscribe to our newsletter</label>--}}
{{--        </div>--}}

        <!-- Sign up button -->
        <button class="btn btn-info my-4 btn-block" type="submit">Add Data</button>

        <!-- Social register -->
{{--        <p>or sign up with:</p>--}}

{{--        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>--}}
{{--        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>--}}
{{--        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>--}}
{{--        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>--}}

{{--        <hr>--}}

        <!-- Terms of service -->
{{--        <p>By clicking--}}
{{--            <em>Sign up</em> you agree to our--}}
{{--            <a href="" target="_blank">terms of service</a>--}}

    </form>
    </div>
    <!-- Default form register -->
    <br><br>
@endsection
