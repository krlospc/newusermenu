@extends('layouts.user_type.guest')

@section('content')

    <section class="vh-100" style="background-color: #fff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <img src="{{ asset('logoofep.png') }}" alt="ofep" >
                    <form action="{{ route('login.post') }}" method="post">
                        @csrf            
                        <h3 class="mb-5">Sistema SER 2024</h3>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="username" name="username" class="form-control form-control-lg" />
                            <label class="form-label" for="typeEmailX-2">Usuario</label>
                            @error('username')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror                        
                        </div>

                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label" for="typePasswordX-2">Password</label>
                            @error('password')
                                <p class="text-danger text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>               

                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                        <hr class="my-4">
                    </form>


                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

@endsection
    