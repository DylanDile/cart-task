<div class="container p-5">
    <div class="page-header">
        <h3 class="page-title">Products</h3>
        <a href="/product/add" class="btn btn-info btn-sm float-right text-right">
            <i class="fa fa-plus-circle"> Add New</i>
        </a>
    </div>
    <hr>
    <!-- image card row starts here -->
    <div class="row">
        @foreach($products as $product)
        <div class="col-sm-4 stretch-card grid-margin">
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
                        <p class="mb-0 text-success font-weight-bold">
                            <i class="mdi mdi-star star-color pr-1"></i></p>
                        <p class="mb-0 font-weight-bold text-danger">R{{ $product->price }}</p>
                    </div>
                    <hr>
                    <a class="float-left btn btn-sm btn-success" wire:click="addToCart({{ $product->id }})">
                        <i class="fa fa-shopping-cart"></i> Add To Cart
                    </a>
                    <a class="float-right btn btn-sm btn-info float-right" href="/product/show/{{$product->id}}">
                        <i class="fa fa-eye"></i> Details
                    </a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
