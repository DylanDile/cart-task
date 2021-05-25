<div class="container">
    <div class="card">
        <div class="card-header">
            <h4>Product Details</h4>
        </div>
        <div class="card-body">
            <div class="col-sm-6 stretch-card grid-margin">
                <div class="card row">
                    <div class="card-body col-sm">
                        <div class="portrait">
                            <img class="img-fluid w-50" src="{{ url('storage/'.$product->picture) }}"  alt="" />
                        </div>
                    </div>
                    <div class="card-body px-3 text-dark col-sm">
                        <div class="d-flex justify-content-between">
                            <p class="text-muted font-13 mb-0 text-decoration-underline">Name</p>
                            <i class="mdi mdi-heart-outline"></i>
                        </div>
                        <h5 class="font-weight-semibold"> {{ $product->name }} </h5>
                        <div class="d-flex justify-content-between font-weight-semibold">
                            <p class="mb-0 text-success font-weight-bold card-footer">
                                <i class="mdi mdi-star star-color pr-1"></i>
                                Description : <b> {{ $product->description }}</b>
                            </p>
                            <p class="mb-0 font-weight-bold text-danger">Price : <b>R{{ $product->price }}</b></p>
                        </div>
                        <hr>
                        <a class="float-left btn btn-sm btn-success" wire:click="addToCart({{ $product->id }})">
                            <i class="fa fa-shopping-cart"></i> Add To Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
