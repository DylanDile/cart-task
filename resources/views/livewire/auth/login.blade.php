<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
        <div class="col mx-auto">
            <div class="my-4 text-center">
                {{-- <img src="assets/images/logo-img.png" width="180" alt="" />--}}
                <h3 class="text-center">
                    <b>Shopping Cart Exercise</b>
                </h3>
            </div>
        <div class="card">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="text-center">
                        <h3 class=""> <i class="fa fa-user-circle"></i> Sign in</h3>
                        <p>Don't have an account yet? <a href="/register">Sign up here</a>
                        </p>
                    </div>

                    <div>
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                    <div class="login-separater mb-4"> <span><b>Fill in Login Details</b></span>
                        <hr/>
                    </div>
                    <div class="form-body">
                        <form class="row g-3" wire:submit.prevent="login">
                            <div class="col-12">
                                <label for="inputEmailAddress" class="form-label">Email Address</label>
                                <input id="email" wire:model.lazy="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                <div class="input-group" id="show_hide_password">
                                    <input wire:model.lazy="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="email" value="{{ old('password') }}" required autocomplete="password" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-12 my-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary"> Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
