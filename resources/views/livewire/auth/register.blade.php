<div class="container">
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
        <div class="col-sm-10 mx-auto">
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
                            <h3 class=""><i class='fa fa-user-circle'></i> Sign Up</h3>
                            <p>Already have an account? <a href="/login">Sign in here</a>
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

                        <div class="login-separater mb-4"> <span><b>Fill in your Details</b></span>
                            <hr/>
                        </div>

                        <div class="form-body">
                            <form class="row g-3" wire:submit.prevent="Register">
                                <div class="col-sm-12">
                                    <label for="inputFirstName" class="form-label">First Name</label>
                                    <input wire:model.lazy="name" type="text" class="form-control @error('name') is-invalid @enderror" id="inputFirstName" placeholder="" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <label for="inputLastName" class="form-label">Last Name</label>
                                    <input wire:model.lazy="surname" type="text" class="form-control @error('surname') is-invalid @enderror" id="inputLastName" placeholder="" required />
                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input wire:model.lazy="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                           required autocomplete="email" autofocus />

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input wire:model.lazy="password" type="password" class="form-control border-end-0 @error('password') is-invalid @enderror"
                                               required   placeholder="Enter Password" />

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                                    <div class="input-group" id="show_hide_password">
                                        <input wire:model.lazy="password_confirmation"  type="password" class="form-control border-end-0 @error('password_confirmation') is-invalid @enderror"
                                               required    placeholder="Enter Password" />

                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-grid py-3">
                                        <button type="submit" class="btn btn-info">Register</button>
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
