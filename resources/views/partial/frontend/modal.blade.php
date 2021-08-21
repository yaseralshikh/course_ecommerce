<!--  Modal -->
<div class="modal fade" id="productView" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="p-0 modal-body">
                <div class="row align-items-stretch">
                    <div class="col-lg-6 p-lg-0"><a class="bg-center bg-cover product-view d-block h-100"
                            style="background: url({{ asset('frontend/img/product-5.jpg') }})"
                            href="{{ asset('frontend/img/product-5.jpg') }}" data-lightbox="productview"
                            title="Red digital smartwatch"></a><a class="d-none"
                            href="{{ asset('frontend/img/product-5-alt-1.jpg') }}" title="Red digital smartwatch"
                            data-lightbox="productview"></a><a class="d-none"
                            href="{{ asset('frontend/img/product-5-alt-2.jpg') }}" title="Red digital smartwatch"
                            data-lightbox="productview"></a>
                    </div>
                    <div class="col-lg-6">
                        <button class="p-4 close" type="button" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                        <div class="p-5 my-md-4">
                            <ul class="mb-2 list-inline">
                                <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                </li>
                                <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                </li>
                                <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                </li>
                                <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                </li>
                                <li class="m-0 list-inline-item"><i class="fas fa-star small text-warning"></i>
                                </li>
                            </ul>
                            <h2 class="h4">Red digital smartwatch</h2>
                            <p class="text-muted">$250</p>
                            <p class="mb-4 text-small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                In ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis
                                dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam
                                convallis.</p>
                            <div class="mb-4 row align-items-stretch">
                                <div class="col-sm-7 pr-sm-0">
                                    <div class="px-3 py-1 border d-flex align-items-center justify-content-between">
                                        <span class="mr-4 small text-uppercase text-gray no-select">Quantity</span>
                                        <div class="quantity">
                                            <button class="p-0 dec-btn"><i class="fas fa-caret-left"></i></button>
                                            <input class="p-0 border-0 form-control shadow-0" type="text" value="1">
                                            <button class="p-0 inc-btn"><i class="fas fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-5 pl-sm-0"><a
                                        class="px-0 btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center"
                                        href="cart.html">Add to cart</a>
                                </div>
                            </div><a class="p-0 btn btn-link text-dark" href="#"><i
                                    class="mr-2 far fa-heart"></i>Add to wish list</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
