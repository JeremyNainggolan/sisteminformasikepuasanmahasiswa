@extends('layouts/user-app')
@section('title', $data['page_title'])
@section('content')
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card">
                                <img src="{{ asset('svg/logo-no-background.svg') }}" class="card-img-top pt-5">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your Student ID and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    @if (session()->has('error'))
                                        <div class="text-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    @if (session()->has('success'))
                                        <div class="text-success">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                    <form role="form" method="post" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Student ID" name="nim" id="nim"
                                                   aria-label="NIM">
                                        </div>
                                        <div class="mb-2">
                                            <input type="password" class="form-control form-control-lg" id="password"
                                                   name="password"
                                                   placeholder="Password"
                                                   aria-label="Password">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                                Sign in
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">

                                        <a href="{{ route('google-auth') }}" class="text-decoration-none"><i
                                                class="bi bi-google mx-2"></i>Login with Google Account</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div
                                class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
         background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new
                                    currency"</h4>
                                <p class="text-white position-relative">The more effortless the writing looks, the more
                                    effort the writer actually put into the process.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
