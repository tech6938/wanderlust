@extends('layouts.master')
@section('content')
<!-- container -->
<section class="showcase">
    <div class="container">
        <div class="pb-2 mt-4 mb-2 border-bottom">
        </div>

        <!-- JAZZCASH payment form -->
        <div class=" container-fluid my-5 ">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="card shadow-lg ">
                        <div class="row justify-content-around">
                            <div class="col-md-7">
                                <div class="card border-0">
                                    <div class="card-header pb-0">
                                        <h2 class="card-title space ">Checkout</h2>
                                        <p class="card-text text-muted mt-4 space">PAYMENT DETAILS</p>
                                        <hr class="my-0">
                                    </div>
                                    <div class="card-body">

                                        <!-- ----------------------------------------------------------------------------------------- -->
                                        <!-- payment form -->
                                        <!-- ----------------------------------------------------------------------------------------- -->

                                        <form action="{{url('/')}}/checkout" method="POST" id="myCCForm">
                                            @csrf
                                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                            <input type="hidden" name="product_price" value="{{ $product->price }}">
                                            <input type="hidden" name="id" value="{{ $product->id }}">

                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullname" class="small text-muted mb-1">
                                                            <i class="fa fa-user"></i> Full Name</label>
                                                        <input type="text" name="fullname" id="fullname" value="Ahmad"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="email" class="small text-muted mb-1">
                                                            <i class="fa fa-envelope"></i> Email</label>
                                                        <input type="text" name="email" id="email" value="abc@gmail.com"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="address" class="small text-muted mb-1">
                                                            <i class="fa fa-address-card-o"></i> Address</label>
                                                        <input type="text" name="address" id="address"
                                                            value="house no 245 street no 8 Lahore"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="country" class="small text-muted mb-1">
                                                            <i class="fa fa-address-card-o"></i> Country</label>
                                                        <input type="text" name="country" id="country" value="Pakistan"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="city" class="small text-muted mb-1">
                                                            <i class="fa fa-institution"></i> City</label>
                                                        <input type="text" name="city" id="city" value="Lahore"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="state" class="small text-muted mb-1">State</label>
                                                        <input type="text" name="state" id="state" value="punjab"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <label for="state" class="small text-muted mb-1">Zip
                                                            Code</label>
                                                        <input type="text" name="zipCode" id="zipCode" value="54000"
                                                            class="form-control form-control-sm">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row mb-md-5">
                                                <div class="col">
                                                    <button type="submit" name="" id=""
                                                        class="btn btn-lg btn-block btn-primary">{{ $product->price }}
                                                        PKR</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- ----------------------------------------------------------------------------------------- -->
                                        <!-- ./payment form -->
                                        <!-- ----------------------------------------------------------------------------------------- -->

                                    </div>
                                </div>
                            </div>


                            {{-- Cart --nnnnnnnnnnnnnnnnnnnnnnnnnnn----ORDER> --}}
                            <div class="col-md-5">
                                <div class="card border-0 ">
                                    <div class="card-header pb-0">
                                        <h2 class="card-title space">Cart</h2>
                                        <p class="card-text text-muted mt-4 space">YOUR ORDER</p>
                                        <hr class="my-0">
                                    </div>

                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-auto col-md-7">
                                                <div class="media flex-column flex-sm-row">
                                                    <img class="img-fluid"
                                                        src="{{ URL::asset('uploads/'.$product->image) }}" width="62"
                                                        height="62">

                                                </div>
                                            </div>
                                            {{-- <div class="pl-0 flex-sm-col col-auto my-auto">
                                                <p class="boxed-1">1</p>
                                            </div> --}}
                                            <div class="pl-0 flex-sm-col col-auto my-auto">
                                                <p>{{ $product->price }} PKR</p>
                                            </div>
                                        </div>
                                        <hr class="my-2">
                                        <div class="row">
                                            <div class="col">
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p class="mb-1"><p>Subtotal</p></p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1"><b>{{ $product->price }} PKR</b></p>
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                    <div class="col">
                                                        <p class="mb-1">Shipping</p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1">0 PKR</p>
                                                    </div>
                                                </div>
                                                <hr class="my-2">
                                                <div class="row justify-content-between">
                                                    <div class="col-4">
                                                        <p><b>Total</b></p>
                                                    </div>
                                                    <div class="flex-sm-col col-auto">
                                                        <p class="mb-1"><b>{{ $product->price }} PKR</b></p>
                                                    </div>
                                                </div>
                                                <hr class="my-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                {{-- end cart --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@stop
