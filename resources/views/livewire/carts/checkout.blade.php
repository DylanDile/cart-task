<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3>
                <b class="display-5">
                    Your Order Details
                </b>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-user"></i>
                            <strong class="card-title pl-2">User Details</strong>
                        </div>
                        <div class="card-body">
                            <div class="mx-auto d-inline-block">
                                <img src="{{ asset('images/cards.png') }}" alt="alt" width="90%" height="90%">
                                <h5 class="text-sm-center mt-2 mb-1">{{ auth()->user()->name }}</h5>
                                <div class="location text-sm-center">
                                    <i class="fa fa-map-marker"></i> {{ auth()->user()->email }}</div>
                            </div>
                            <hr>
                            <div class="card-text text-sm-center">
                                <a href="#">
                                    <i class="fa fa-facebook pr-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter pr-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin pr-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest pr-1"></i>
                                </a>
                            </div>

                            <div class="table-responsive">
                                <div class="card-header">
                                    <h3>
                                        <b>
                                            Items Purchased
                                        </b>
                                    </h3>
                                </div>
                                <table class="table custom-table text-dark" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Product No..</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                        $counter = 0;
                                    @endphp
                                    @foreach($products as $product)
                                        <tr>
                                            <td>
                                                <i class="fa fa-first-order"></i> {{ $counter += 1 }} </td>
                                            <td>
                                                <b>{{ $product->name }}</b>
                                            </td>
                                            <td>
                                                {{ number_format(($product->price) ,2) }}</td>
                                            <td>
                                                <b class="display-5"> {{ $product->quantity }}</b>
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
                                            <b class="text-dark display-5">R{{ number_format($totals['price'], 2) }}</b>
                                        </td>
                                        <td>
                                            <b class="text-dark display-5">
                                                {{ $totals['qty'] }} ( Items )
                                            </b>
                                        </td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 grid-margin">
                    <div class="card card-stat stretch-card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="text-white">
                                    <h3 class="font-weight-bold mb-0">Best Shopping Experience</h3>
                                    <h6>Everyday 24/7</h6>
                                    <div class="badge badge-danger">By more with Less</div>
                                </div>
                                <div class="flot-bar-wrapper">
                                    <div id="column-chart" class="flot-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            Choose Your Payment Method
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="mx-auto">
                                    <div class="bg-white rounded-lg shadow-sm">
                                        <!-- Credit card form tabs -->
                                        <ul role="tablist" class="nav bg-light nav-pills rounded-pill nav-fill mb-3">
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-card" class="nav-link active rounded-pill">
                                                    <i class="fa fa-credit-card"></i>
                                                    Credit Card
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-paypal" class="nav-link rounded-pill">
                                                    <i class="fa fa-paypal"></i>
                                                    Paypal
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a data-toggle="pill" href="#nav-tab-bank" class="nav-link rounded-pill">
                                                    <i class="fa fa-university"></i>
                                                    Bank Transfer
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- End -->


                                        <!-- Credit card form content -->
                                        <div class="tab-content">

                                            <!-- credit card info-->
                                            <div id="nav-tab-card" class="tab-pane fade show active mx-2">
                                                {{--<p class="alert alert-success">Some text success or error</p>--}}
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="username">Full name (on the card)</label>
                                                        <input type="text" name="username" placeholder="Jason Doe" required class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="cardNumber">Card number</label>
                                                        <div class="input-group">
                                                            <input type="text" name="cardNumber" placeholder="Your card number" class="form-control" required>
                                                            <div class="input-group-append">
                                                            <span class="input-group-text text-muted">
                                                                <i class="fa fa-cc-visa mx-1"></i>
                                                                <i class="fa fa-cc-amex mx-1"></i>
                                                                <i class="fa fa-cc-mastercard mx-1"></i>
                                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="form-group">
                                                                <label><span class="hidden-xs">Expiration</span></label>
                                                                <div class="input-group">
                                                                    <input type="number" placeholder="MM" name="" class="form-control" required>
                                                                    <input type="number" placeholder="YY" name="" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group mb-4">
                                                                <label data-toggle="tooltip" title="Three-digits code on the back of your card">CVV
                                                                    <i class="fa fa-question-circle"></i>
                                                                </label>
                                                                <input type="text" required class="form-control">
                                                            </div>
                                                        </div>



                                                    </div>
                                                    <button type="button" class="subscribe btn btn-primary btn-block rounded-pill shadow-sm"> Confirm  </button>
                                                </form>
                                            </div>
                                            <!-- End -->

                                            <!-- Paypal info -->
                                            <div id="nav-tab-paypal" class="tab-pane fade mx-2">
                                                <p>Paypal is easiest way to pay online</p>
                                                <p>
                                                    <button type="button" class="btn btn-primary rounded-pill"><i class="fa fa-paypal mr-2"></i> Log into my Paypal</button>
                                                </p>
                                                <p class="text-muted mx-0">
                                                    Please email proof of payment to <strong> sales@emart.com </strong> as soon as you made the payment.
                                                </p>
                                            </div>
                                            <!-- End -->

                                            <!-- bank transfer info -->
                                            <div id="nav-tab-bank" class="tab-pane fade mx-2">
                                                <h6>Bank account details</h6>
                                                <dl>
                                                    <dt>Bank</dt>
                                                    <dd> THE WORLD BANK</dd>
                                                </dl>
                                                <dl>
                                                    <dt>Account number</dt>
                                                    <dd>45206220100210</dd>
                                                </dl>
                                                <dl>
                                                    <dt>IBAN</dt>
                                                    <dd>CZ7775877975656</dd>
                                                </dl>
                                                <p class="text-muted">
                                                   Please email proof of payment to <strong> sales@emart.com </strong> as soon as you made the payment.
                                                </p>
                                            </div>
                                            <!-- End -->
                                        </div>
                                        <!-- End -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

           <div class="card-footer">
               <div class="card stretch-card mb-3">
                   <div class="card-body d-flex flex-wrap justify-content-between">
                       <div>
                           <h4 class="font-weight-semibold mb-1 text-black">Total Amount to be Paid </h4>
                           <h6 class="text-muted">Currency ZAR</h6>
                       </div>
                       <h3 class="text-success font-weight-bold">R{{ number_format($totals['price'], 2) }}</h3>
                   </div>
               </div>
               <div class="card stretch-card mb-3">
                   <div class="card-body d-flex flex-wrap justify-content-between">
                       <div>
                           <h4 class="font-weight-semibold mb-1 text-black"> Total Items Purchased </h4>
                           <h6 class="text-muted">Quantity of Orders</h6>
                       </div>
                       <h3 class="text-danger font-weight-bold"> {{ $totals['qty'] }} ( Items )</h3>
                   </div>
               </div>
           </div>
        </div>
    </div>
</div>
