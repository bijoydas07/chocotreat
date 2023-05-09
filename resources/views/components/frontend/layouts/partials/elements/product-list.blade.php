<div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest Product</h2>
                        <img src="{{asset('ui/frontend/assets/images')}}//section-title.png" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
                @foreach ($products as $product)
                <li class="col-xl-3 col-lg-4 col-sm-6 col-12">
                    <div class="product-wrap">
                        <div class="product-img">
                            <img src="{{asset('storage/products/'.$product->image)}}" alt="" height="200" width="150">
                            <div class="product-icon flex-style">
                                <ul>
                                    <li><a href="{{route('product.cart', $product->id)}}"><i class="fa fa-eye"></i></a></li>
                                    <li><a href="wishlist.html"><i class="fa fa-heart"></i></a></li>
                                    <li><a href=""><i class="fa fa-shopping-bag"></i></a></li>
                                    <div class="view" style="margin-top: 20px;">
                                        <a class="p_img" href="{{route('single.product',['product'=>$product->id])}}">View</a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="product-content" style="padding-top: 22px;">
                            <h3><a>{{ $product->name}}</a></h3>
                            <p class="pull-left">{{ $product->price}}</p>
                            <ul class="pull-right d-flex">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                        </div>
                    </div>
                </li>
                @endforeach
                
                <li class="col-12 text-center">
                    <a class="loadmore-btn" href="{{route('all.products')}}">Load More</a>
                </li>
            </ul>
        </div>
    </div>