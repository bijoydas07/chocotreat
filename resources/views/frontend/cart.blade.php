<x-frontend.layouts.master>

    {{-- <x-frontend.layouts.partials.elements.cart :cart/> --}}
    <div class="breadcumb-area bg-img-4 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap text-center">
                        <h2>Shopping Cart</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Shopping Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="cart-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <table class="table-responsive cart-wrap">
                            <thead>
                                <tr>
                                    <th class="images">Image</th>
                                    <th class="product">Product</th>
                                    <th class="ptice">Price</th>
                                    <th class="quantity">Quantity</th>
                                    <th class="total">Total</th>
                                    <th class="remove">Remove</th>
                                    <th class="update">Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $totalprice=0; ?>
                                @foreach ($cart as $cart)
                                <tr>
                                    <td class="images"><img src="{{asset('storage/products/'.$cart->image)}}" alt="" height="120" width="150"></td>

                                    <td class="product"><a href="">{{$cart->product_name}}</a></td>

                                    <td class="price">{{$cart->price}} <span style="font-weight: 900;">&#2547;</span></td>
        
                                    <td class="quantity"><input type="number" value="{{$cart->quantity}}" min="1" class="form-control" name="quantity" style="width: 100px; border:1px solid rgb(255, 41, 141);"></td>
                                    

                                    <td class="total">{{$cart->total_price}} <span style="font-weight: 900;">&#2547;</span></td>

                                    <td>
                                        <form class="delete-btn d-inline" action="{{ route('remove.cart',['cart'=>$cart->id])}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button onclick="alert('Are you sure!')" class="btn btn-danger btn-sm" type="submit"><i class="fa fa-times"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                    </td>

                                </tr>

                                <?php $totalprice = $totalprice + $cart->total_price ?>
                                
                                @endforeach

                            </tbody>
                        </table>
                        <div class="row mt-60">
                            <div class="col-xl-4 col-lg-5 col-md-6 ">
                                <div class="cartcupon-wrap">
                                    <ul class="d-flex">
                                        <li>
                                            <button>Update Cart</button>
                                        </li>
                                        <li><a href="shop.html">Continue Shopping</a></li>
                                    </ul>
                                    <h3>Cupon</h3>
                                    <p>Enter Your Cupon Code if You Have One</p>
                                    <div class="cupon-wrap">
                                        <input type="text" placeholder="Cupon Code">
                                        <button>Apply Cupon</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 offset-xl-5 col-lg-4 offset-lg-3 col-md-6">
                                <div class="cart-total text-right">
                                    <h3>Cart Totals</h3>
                                    <ul>
                                        <li><span class="pull-left">Subtotal </span>{{$totalprice}} <span style="font-weight: 900;">&#2547;</span></li>
                                        <li><span class="pull-left"> Total </span> {{$totalprice}} <span style="font-weight: 900;">&#2547;</span></li>
                                    </ul>
                                    <a href="{{route('checkout.cart')}}">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-frontend.layouts.master>    
