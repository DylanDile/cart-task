<div class="container p-4">
    <div class="col-xl-12 stretch-card grid-margin">
        <div class="card">
            <div class="card-body pb-0">
                <h4 class="card-title mb-0">
                    <b class="display-4">My Cart</b>
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
                @if(count($cart['products']) > 0)
                <button class="float-right btn btn-danger mx-3 my-4" wire:click="ClearCart">Clear Cart</button>
                @endif
                <hr>
            </div>
            @if(count($cart['products']) > 0)
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table custom-table text-dark" width="100%">
                        <thead>
                            <tr>
                                <th>Product No..</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $counter = 0;
                        @endphp
                        @foreach($cart['products'] as $product)
                        <tr>
                            <td>
                                <i class="fa fa-first-order"></i> {{ $counter += 1 }} </td>
                            <td>
                                <b>{{ $product->name }}</b>
                            </td>
                            <td>{{ number_format(($product->price * $product->quantity) ,2) }}</td>
                            <td>
                                <div class="d-inline">
                                    <button class="btn btn-sm btn-danger" wire:click="ReduceQuantity({{ $product->id }})">
                                        <b class="">
                                            <i class="fa fa-minus-circle"></i>
                                        </b>
                                    </button>
                                    <b class="display-6"> {{ $product->quantity }}</b>
                                    <button class="btn btn-sm btn-success" wire:click="AddQuantity({{ $product->id }})">
                                        <b class="">
                                            <i class="fa fa-plus-circle"></i>
                                        </b>
                                    </button>
                                </div>

                            </td>
                            <td>
                                <button class="btn btn-sm btn-danger" wire:click="removeFromCart({{ $product->id }})">Remove Product</button>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td></td>
                                <td class="text-lg">
                                    <b class="display-4">Total Price</b>
                                </td>
                                <td>
                                    <b class="text-dark display-5">R{{ number_format($cartTotal, 2) }}</b>
                                </td>
                                <td>
                                    <b class="text-dark display-5">
                                        {{ $totalQuantity }} ( Items )
                                    </b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-sm my-4 mx-4">
                        <button class="btn btn-lg btn-primary float-right btn-rounded btn-fw">Checkout</button>
                    </div>
                </div>
            </div>
            @else
                <div class="text-center  alert-dismissible">
                    <h4>
                        <b class="display-5 text-success">You have no Items in your Cart Now.!</b>
                    </h4>
                </div>
            @endif
        </div>
    </div>
</div>
