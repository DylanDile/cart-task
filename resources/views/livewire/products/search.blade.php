<div class="container p-5">
    <div class="page-header">
        <h3 class="page-title">Search Product</h3>
        <div class="form-group">
            <label for="">Enter Product Name</label>
           <div class="input-group">
               <input type="text" class="form-control" wire:model="search" />
           </div>
        </div>
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
                            <p class="text-muted font-13 mb-0">ENTIRE APARTMENT</p>
                            <i class="mdi mdi-heart-outline"></i>
                        </div>
                        <h5 class="font-weight-semibold"> {{ $product->name }} </h5>
                        <div class="d-flex justify-content-between font-weight-semibold">
                            <p class="mb-0">
                                <i class="mdi mdi-star star-color pr-1"></i>120 </p>
                            <p class="mb-0">R{{ $product->price }}</p>
                        </div>
                        <hr>
                        <a class="float-right btn btn-sm btn-info" wire:click="addToCart({{ $product->id }})">
                            <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                        <a class="float-right btn btn-sm btn-info float-right" href="/product/show/{{$product->id}}">
                            <i class="fa fa-eye"></i> Details
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
