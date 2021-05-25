<div class="container-fluid">
    <div class="col-xl-12 stretch-card grid-margin">
        <div class="card">
            <div class="card-header pb-0">
                <h4 class="card-title p-4">
                    <b class="display-5">My Orders</b>
                </h4>
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
            </div>
            @if(count($orders) > 0)
                <div class="card-body p-4">
                    <div class="row stretch-card grid-margin">
                        <div class="col-sm-12 mx-4">
                            <div class="d-flex border-bottom mb-4 pb-2">
                                <div class="hexagon">
                                    <div class="hex-mid hexagon-warning">
                                        <i class="mdi mdi-clock-outline"></i>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h4 class="font-weight-bold text-warning mb-0"> 12.45 </h4>
                                    <h6 class="text-muted">Schedule Meeting</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mx-4">
                            <div class="d-flex border-bottom mb-4 pb-2">
                                <div class="hexagon">
                                    <div class="hex-mid hexagon-danger">
                                        <i class="mdi mdi-account-outline"></i>
                                    </div>
                                </div>
                                <div class="pl-4">
                                    <h4 class="font-weight-bold text-danger mb-0">34568</h4>
                                    <h6 class="text-muted">Profile visits</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @else
                <div class="text-center  alert-dismissible">
                    <h4>
                        <b class="display-5 text-success">You have no Orders so far.!</b>
                    </h4>
                </div>
            @endif
        </div>
    </div>
</div>
