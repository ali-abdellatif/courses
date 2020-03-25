@extends('front.master')
@section('title')
    Checkout
@endsection
@section('content')
    <!-- Start Themeix Banner Wells -->
    <section class="themeix-banner-wells inner-spacing section-overlay">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="themeix-wells-container">
                        <h2>Checkout</h2>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Themeix Slider -->
    <!-- Start Themeix Feature-->
    <div class="themeix-checkout-page section-spacing bg-color">
        <div class="container">
            <div class="section-bottom-spacing">
                <table class="forum-table table">
                    <thead>
                    <tr class="wow fadeIn" data-wow-duration="2s">
                        <th scope="col">
                            <p>Product</p>
                        </th>
                        <th scope="col">
                            <p>Product Details</p>
                        </th>
                        <th scope="col">
                            <p>Quantity</p>
                        </th>
                        <th scope="col">
                            <p>Total</p>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="wow fadeIn" data-wow-duration="2s">
                        <td>
                            <p><img class="forum-img" src="images/shop-thumb.jpg" alt="shop thumb" /><a href="#">WordPress Dev</a></p>
                        </td>
                        <td>
                            <p>WordPress full development series</p>
                        </td>
                        <td>
                            <input class="forum-input" type="number" value="2" min="1" max="20">
                        </td>
                        <td><span class="forum-rate">$90.56</span></td>
                    </tr>
                    <tr class="wow fadeIn" data-wow-duration="2s">
                        <td>
                            <p><img class="forum-img" src="images/shop-thumb2.jpg" alt="shop thumb" /><a href="#">Mastering Laravel</a></p>
                        </td>
                        <td>
                            <p>Laravel full development series</p>
                        </td>
                        <td>
                            <input class="forum-input" type="number" value="5" min="1" max="20">
                        </td>
                        <td><span class="forum-rate">$80.44</span></td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <form class="contact-form wow fadeIn" data-wow-duration="2s">
                <div class="row">
                    <div class="col-md-6">

                        <div class="billing-address">
                            <h5>Billing Address</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>New York</option>
                                            <option>Chicago</option>
                                            <option>Phoenix</option>
                                            <option>San Jose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>Australia</option>
                                            <option>Belgium</option>
                                            <option>Benin</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-address inner-bottom-spacing">
                            <h5>Shipping Address</h5>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>City</option>
                                            <option>New York</option>
                                            <option>Chicago</option>
                                            <option>Phoenix</option>
                                            <option>San Jose</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Country</option>
                                            <option>Australia</option>
                                            <option>Belgium</option>
                                            <option>Benin</option>
                                            <option>China</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Zip Code">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group m-0">
                                        <input type="text" class="form-control" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="payment-cart-wrapper">
                            <h5>Cart Total</h5>
                            <ul class="cart-list list-inline">
                                <li class="cart-list-name list-inline-item">
                                    <ul class="list-inline">
                                        <li>Cart Subtotals</li>
                                        <li>Shipping and Handling</li>
                                        <li>Order Total</li>
                                    </ul>
                                </li>
                                <li class="cart-list-value list-inline-item">
                                    <ul class="list-inline">
                                        <li>$54.68</li>
                                        <li>Free Shipping</li>
                                        <li>$54.68</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="payment-option-container">
                                <!-- INPUT TYPE RADIO ACCORDION -->
                                <div class="themeix-payment-option">
                                    <h5>Checkout Options</h5>
                                    <div class="themeix-payment-accordion">
                                        <!-- SECTION 1 -->
                                        <div class="accordion-section">
                                            <input type="radio" name="radio" id="option1" class="themeix-accordion-trigger">
                                            <label for="option1" class="themeix-payment-accordion-hd">
                                                <span>Bank Transfer</span><i class="fa fa-caret-right"></i>
                                            </label>
                                            <ul class="themeix-accordion-li">
                                                <li class="themeix-accordion-link">Here is the Bank details</li>
                                            </ul>
                                        </div>

                                        <!-- SECTION 2 -->
                                        <div class="accordion-section">
                                            <input type="radio" name="radio" id="option2" class="themeix-accordion-trigger" checked="">
                                            <label for="option2" class="themeix-payment-accordion-hd">
                                                <span>Paypal </span><i class="fa fa-caret-right"></i>
                                            </label>
                                            <ul class="themeix-accordion-li">
                                                <li class="themeix-accordion-link">Here is the paypal details</li>
                                            </ul>
                                        </div>

                                        <!-- SECTION 3 -->
                                        <div class="accordion-section">
                                            <input type="radio" name="radio" id="option3" class="themeix-accordion-trigger">
                                            <label for="option3" class="themeix-payment-accordion-hd">
                                                <span>Credit Card </span><i class="fa fa-caret-right"></i>
                                            </label>
                                            <ul class="themeix-accordion-li">
                                                <li class="themeix-accordion-link">Here is the credit card details</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="payment-btn btn btn-primary">Place Order</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Themeix Feature-->
@endsection
