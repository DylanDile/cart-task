<div class="container-fluid">
    <div class="page-header">
        <h3 class="page-title">Category</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Products </li>
            </ol>
        </nav>
    </div>
    <hr>
    <div class="row">
        @foreach($category->products as $product)
            <div class="col-sm-4 stretch-card grid-margin">
                <div class="card row">
                    <div class="card-body col-sm">
                        <div class="portrait">
                            <img class="img-fluid w-50" src="{{ url( 'storage/'.$product->picture) }}"  alt="" />
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
                            <i class="fa fa-plus-circle"></i> Add To Cart</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
