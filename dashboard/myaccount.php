<?php include 'inc/header.php'; ?>
<section class="dashboard-sec">
    <div class="row">
        <aside>
            <div class="side-logo">
                <a href="javascript:void(0)"><img src="assets/images/dashboard-logo.png" class="img-fluid"></a>
            </div>
            <div class="user-profile">
                <div class="profile-image">
                    <img src="assets/images/user-image.png" class="img-fluid">
                </div>
                <div class="user-name">
                    <p>Hi,<br>
                        <strong>John Doe</strong>
                    </p>
                </div>
            </div>
            <div class="dashboard-links">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#myccount" role="tab" aria-controls="v-pills-home" aria-selected="true"><i class="far fa-user"></i> My Account</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-shopping-cart"></i> My Orders</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-file-invoice-dollar"></i> Payment</a>
                    <a class="nav-link" id="v-pills-address-tab" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false"><i class="far fa-address-book"></i>Address</a>
                    <a class="nav-link" id="v-pills-cart-tab" data-toggle="pill" href="#cart" role="tab" aria-controls="cart" aria-selected="false"><i class="fas fa-shopping-cart"></i>Cart</a>
                    <a class="nav-link" id="v-pills-cart-tab" data-toggle="pill" href="#consignee" role="tab" aria-controls="cart" aria-selected="false"><i class="fas fa-list-alt"></i>Consignee Listing</a>
                    <a class="nav-link" id="v-pills-claim-tab" data-toggle="pill" href="#booking" role="tab" aria-controls="claim" aria-selected="false"><i class="far fa-sticky-note"></i>Booking</a>
                    <a class="nav-link" id="v-pills-claim-tab" data-toggle="pill" href="#add-booking" role="tab" aria-controls="claim" aria-selected="false"><i class="far fa-edit"></i>Add Booking</a>
                    <a class="nav-link" href="javascript:;"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    <a class="nav-link" href="javascript:;"><i class="fas fa-home"></i> Back To Home</a>
                </div>
            </div>
        </aside>
        <div class="right-box-wrap">
            <div class="tab-content" id="v-pills-tabContent">
                <!-- My Account Tab -->
                <div class="tab-pane fade show active" id="myccount" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h5 class="black-head">Welcome to Your Account</h5>
                    <div class="user-info-box">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"><i class="fas fa-plus"></i></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(assets/images/user-image.png);">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="profile-edit">
                            <img src="assets/images/user-image.png" class="img-fluid">
                            <span><a href="javascript:void(0)"><i class="fas fa-plus"></i></a></span>
                        </div> -->
                        <div class="info-box">
                            <div class="infox-box-tilte">
                                <h1 class="heading">User Detials</h1>
                                <div class="edit-btn">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#user-detail-modal">Edit</a>
                                </div>
                            </div>
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>User Name</label>
                                    <p>John Doe</p>
                                </div>
                            </div>
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>Address</label>
                                    <p>Lorem ipsum dolor sit</p>
                                </div>
                            </div>
                            <div class="user-detail-box">
                                <div class="details">
                                    <label>Phone Number</label>
                                    <p>You haven’t added a phone number yet</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="change-pass-wrap">
                        <h5 class="black-head m-0">Password & Authentication</h5>
                        <div class="pass-btn-box">
                            <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newPassword-modal">Change Password</a>
                            <a href="javascript:void(0)" class="black-btn" data-toggle="modal" data-target="#newEmail-modal">Change Your Email</a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
                <!-- My Order Tab -->
                <div class="tab-pane fade" id="myorder" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h5 class="black-head">My Orders</h5>
                    <div class="gen-table-wrap order-detail-box">
                        <table class="display nowrap" id="order-table" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Oder#</th>
                                    <th scope="col">Company Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Last update</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Today</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="yellow-color">Shipped</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Fullfilled</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                                <tr>
                                    <th scope="row">123456</th>
                                    <td>Lorem Ipsum</td>
                                    <td class="green-color">Confirmed</td>
                                    <td>$230.00</td>
                                    <td>June 12, 2020</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Billingt Tab -->
                <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <h5 class="black-head">Payment Method</h5>
                    <div class="payment-wrap">
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="address-box payment-box-card">
                                    <p class="name">VISA</p>
                                    <p><strong>Name: </strong>Jon Snow</p>
                                    <p><strong>Card No: </strong>0**** **** **** ***0</p>
                                    <p><strong>Exp Date: </strong>12/22</p>
                                    <p><strong>CVV: </strong>***</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-box">
                        <div class="payment-text">
                            <p>No payment method saved</p>
                            <label>Checkout faster by saving a payment method</label>
                        </div>
                        <div class="payment-btn">
                            <button type="button" class="black-btn" data-toggle="modal" data-target="#payment-modal">add payment method</button>
                        </div>
                    </div>
                    <div class="transaction-history-box">
                        <h5 class="black-head m-0">Transaction History</h5>
                        <div class="alert alert-box" role="alert">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                        </div>
                    </div>
                </div>
                <!-- ADDRESS TAB -->
                <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                    <h5 class="black-head">Address</h5>
                    <div class="addresses-wrap">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="address-box">
                                    <p class="name">Billing Address</p>
                                    <p>H.no 2 </p>
                                    <p>Street 5</p>
                                    <p>Sydney</p>
                                    <p>Australia</p>
                                    <p><strong>Zipcode </strong>00000</p>
                                    <p><strong>Phone: </strong>000 000 000 000</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="address-box">
                                    <p class="name">Shipping Address</p>
                                    <p>H.no 2 </p>
                                    <p>Street 5</p>
                                    <p>Sydney</p>
                                    <p>Australia</p>
                                    <p><strong>Zipcode </strong>00000</p>
                                    <p><strong>Phone: </strong>000 000 000 000</p>
                                    <div class="btn-wrap">
                                        <a href="#!" class="edit">Edit</a>
                                        <a href="#!">Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="add-address">
                                    <a href="#!" data-toggle="modal" data-target="#addAddressModal">
                                        <i class="fas fa-plus"></i>
                                        <span>New Address</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CART TAB -->
                <div class="tab-pane fade" id="cart" role="tabpanel" aria-labelledby="v-pills-cart-tab">
                    <h5 class="black-head">CART</h5>
                    <div class="cart-list">
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/product-img-1.png" class="img-fluid" alt="product">
                            </div>
                            <div class="product-name">
                                <p class="name">Product name</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$50.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/product-img-1.png" class="img-fluid" alt="product">
                            </div>
                            <div class="product-name">
                                <p class="name">Product name</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$50.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                        <div class="cart-list-item">
                            <div class="product-img">
                                <img src="../assets/images/product-img-1.png" class="img-fluid" alt="product">
                            </div>
                            <div class="product-name">
                                <p class="name">Product name</p>
                                <p class="price">$5.00</p>
                            </div>
                            <div class="product-quantity-wrap y-center">
                                <div class="quaitity-box">
                                    <form>
                                        <div class="plus-minus">
                                            <span class="minus">-</span>
                                            <label for="quantity-select">QUANTITY</label>
                                            <input type="number" class="count" name="qty" value="1" disabled="">
                                            <span class="plus">+</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="product-action-price y-center">
                                <p>$99.00</p>
                                <a href="#!" class="remove-cart-item"><i class="far fa-trash-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BOOKING TAB -->
                <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="v-pills-claim-tab">
                    <div class="booking-table-top">
                        <h5 class="black-head">Booked Packed Listing</h5>
                    </div>
                    <div class="booking-filter">
                        <div class="infox-box">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>Search In</label>
                                    <select class="card-select">
                                      <option disabled="" selected="">Booked Packet CN</option>
                                      <option>Type 1</option>
                                      <option>Type 2</option>
                                      <option>Type 3</option>
                                  </select> 
                                </div>
                                <div class="col-lg-4">
                                    <label>Status</label>
                                    <select class="card-select">
                                      <option disabled="" selected="">- Please Select</option>
                                      <option>Type 1</option>
                                      <option>Type 2</option>
                                      <option>Type 3</option>
                                  </select> 
                                 </div>
                                  <div class="col-lg-4">
                                    <label>Origin City</label>
                                    <select class="card-select">
                                      <option disabled="" selected="">- Select Origin City</option>
                                      <option>A</option>
                                      <option>B</option>
                                      <option>C</option>
                                  </select> 
                                 </div>
                                  <div class="col-lg-4">
                                    <label>Destination City</label>
                                    <select class="card-select">
                                      <option disabled="" selected="">- Select Destination City</option>
                                      <option>A</option>
                                      <option>B</option>
                                      <option>C</option>
                                  </select> 
                                 </div>
                                  <div class="col-lg-4">
                                    <label>Shipper</label>
                                    <select class="card-select">
                                      <option disabled="" selected="">- Select Shipper</option>
                                      <option>Type 1</option>
                                      <option>Type 2</option>
                                      <option>Type 3</option>
                                  </select> 
                                 </div>
                                <div class="col-lg-4">
                                    <label>Search Booked Packet</label>
                                    <input type="search" name="" maxlength="20" placeholder="" class="card-input">
                                </div>
                                <div class="col-lg-4">
                                    <label>Date From</label>
                                    <input type="date" name="" maxlength="20" placeholder="" class="card-input" required>
                                </div>
                                <div class="col-lg-4">
                                    <label>Date To</label>
                                    <input type="date" name="" maxlength="20" placeholder="" class="card-input" required>
                                </div>
                                <div class="col-lg-4 d-flex justify-content-start align-items-center">
                                    <a href="#!" class="filter-btn">Apply Filters</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gen-table-wrap order-detail-box">
                        <!-- <div class="genrate-btn">
                            <a href="#!" class="req-btn">Send Pickup Request</a>
                            <a href="#!" class="req-btn">Generate LoadSheet</a>
                        </div> -->
                        <table class="display nowrap" id="booking-table" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Sr#</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">OrderID</th>
                                    <th scope="col">Shipment Type</th>
                                    <th scope="col">CN #</th>
                                    <th scope="col">From</th>
                                    <th scope="col">To</th>
                                    <th scope="col">Shipper</th>
                                    <th scope="col">Consignee</th>
                                    <th scope="col">Phone 1</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Booking Date</th>
                                    <th scope="col">Amount(USD)</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Delivered</td>
                                    <td>UG00010</td>
                                    <td>Overnight</td>
                                    <td>KI878611</td>
                                    <td>NY</td>
                                    <td>CA</td>
                                    <td>loremlipsum pvt ltd</td>
                                    <td>john doe</td>
                                    <td>111-111-0000</td>
                                    <td>johndoe@gmail.com</td>
                                    <td>26 Oct,2019</td>
                                    <td>$20 USD</td>
                                    <td>
                                        <a href="#!"><i class="far fa-file-pdf"></i></a>
                                        <a href="javascript:void(0)" data-toggle="modal" data-target="#tracking-info-modal"><i class="fas fa-crosshairs"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- CONSIGNEE TAB -->
                <div class="tab-pane fade" id="consignee" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="consignee-table-top">
                        <h5 class="black-head">Consignee Listning</h5>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#consignee-modal">Add</a>
                    </div>

                    <div class="order-detail-box">
                        <table class="display nowrap" id="consignee-table" style="width:100%">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Country</th>
                                    <th scope="col">State</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Zip Code</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">John Doe</th>
                                    <td>Lorem Ipsum@gmial.com</td>
                                    <td >000-000-0000</td>
                                    <td>Lorem</td>
                                    <td>CA</td>
                                    <td>LA</td>
                                    <td>0000</td>
                                    <td>Lorem Lipsum Street# 000 Block 010</td>
                                </tr>
                                <tr>
                                    <th scope="row">John Doe</th>
                                    <td>Lorem Ipsum@gmial.com</td>
                                    <td >000-000-0000</td>
                                    <td>Lorem</td>
                                    <td>CA</td>
                                    <td>LA</td>
                                    <td>0000</td>
                                    <td>Lorem Lipsum Street# 000 Block 010</td>
                                </tr>
                                <tr>
                                    <th scope="row">John Doe</th>
                                    <td>Lorem Ipsum@gmial.com</td>
                                    <td >000-000-0000</td>
                                    <td>Lorem</td>
                                    <td>NY</td>
                                    <td>LA</td>
                                    <td>0000</td>
                                    <td>Lorem Lipsum Street# 000 Block 010</td>
                                </tr>
                                <tr>
                                    <th scope="row">John Doe</th>
                                    <td>Lorem Ipsum@gmial.com</td>
                                    <td >000-000-0000</td>
                                    <td>Lorem</td>
                                    <td>CA</td>
                                    <td>LA</td>
                                    <td>0000</td>
                                    <td>Lorem Lipsum Street# 000 Block 010</td>
                                </tr>
                                <tr>
                                    <th scope="row">John Doe</th>
                                    <td>Lorem Ipsum@gmial.com</td>
                                    <td >000-000-0000</td>
                                    <td>Lorem</td>
                                    <td>CA</td>
                                    <td>LA</td>
                                    <td>0000</td>
                                    <td>Lorem Lipsum Street# 000 Block 010</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- ADD BOOKING-->
                <div class="tab-pane fade" id="add-booking" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="consignee-table-top">
                        <h5 class="black-head">Add Booking</h5>
                    </div>
                    <div class="booking-tab">
                        <form class="order-detail-box">
                            <h1 class="heading">Basic Information</h1>
                            <div class="infox-box">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Shipment Type<span>*</span></label>
                                        <select class="card-select" required>
                                          <option disabled="" selected="">Select Type</option>
                                          <option>Type 1</option>
                                          <option>Type 2</option>
                                          <option>Type 3</option>
                                      </select> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Order ID</label>
                                        <input type="text" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Booking Date<span>*</span></label>
                                        <input type="date" name="" maxlength="20" placeholder="" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>No.of Pieces<span>*</span></label>
                                        <input type="number" name="" maxlength="20" placeholder="" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Net Weight (grms)<span>*</span></label>
                                        <input type="text" name="" maxlength="20" placeholder="(Apprx.)" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>COD Amount<span>*</span></label>
                                        <input type="text" name="" maxlength="20" placeholder="(USD) To be Collectd" class="card-input" required>
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Width</label>
                                        <input type="number" name="" maxlength="20" placeholder="" class="card-input m-0">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Height</label>
                                        <input type="number" name="" maxlength="20" placeholder="" class="card-input m-0">
                                    </div>
                                    <div class="col-lg-3">
                                        <label>Lenght</label>
                                        <input type="number" name="" maxlength="20" placeholder="" class="card-input m-0">
                                    </div>
                                </div>
                            </div>

                             <h1 class="heading">Shipper Detail</h1>
                            <div class="infox-box">
                                <div class="row">
                                      <div class="col-lg-4">
                                        <label>Shippers<span>*</span></label>
                                        <select class="card-select" required>
                                          <option disabled="" selected="">SELF</option>
                                          <option>SELF 1</option>
                                          <option>SELF 2</option>
                                          <option>SELF 3</option>
                                        </select> 
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Shipper Name<span>*</span></label>
                                        <input type="text" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Shipper Email<span>*</span></label>
                                        <input type="email" name="" maxlength="20" placeholder="" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Shipper Phone<span>*</span></label>
                                        <input type="text" name="" maxlength="20" placeholder="" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Origin City<span>*</span></label>
                                        <select class="card-select" required>
                                          <option disabled="" selected="">New York</option>
                                          <option>LA</option>
                                          <option>GA</option>
                                          <option>VA</option>
                                      </select> 
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Shipper Address<span>*</span></label>
                                        <textarea>Lorem Lipsum Street# 000 Block 010 CA UNITED STATES</textarea>
                                    </div>
                                </div>
                            </div>

                            <h1 class="heading">Consignee Detail</h1>
                            <div class="infox-box">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label>Consignee Name<span>*</span></label>
                                        <input type="text" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Consignee Email</label>
                                        <input type="email" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Consignee Phone<span>*</span></label>
                                        <input type="tel" name="" maxlength="20" placeholder="" class="card-input" required>
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Consignee Phone 2</label>
                                        <input type="tel" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Consignee Phone 3</label>
                                        <input type="tel" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Search Consignee</label>
                                        <input type="search" name="" maxlength="20" placeholder="" class="card-input">
                                    </div>
                                    <div class="col-lg-4">
                                        <label>Destination City<span>*</span></label>
                                        <select class="card-select" required>
                                          <option disabled="" selected="">New York</option>
                                          <option>LA</option>
                                          <option>GA</option>
                                          <option>VA</option>
                                      </select> 
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Shipper Address<span>*</span></label>
                                        <textarea>Lorem Lipsum Street# 000 Block 010 CA UNITED STATES</textarea>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <label>Special Instructions<span>*</span></label>
                                        <textarea required>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Odio, odit!</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#!" class="action-btn">Submit</a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#!" class="action-btn">Submit & Print</a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#!" class="action-btn">Cancel</a>
                                    </div>
                                    <div class="col-lg-12 d-flex justify-content-end"> 
                                        <div class="editor-info d-flex mt-3">
                                            <p>
                                                <span>Added By:</span>
                                                <span> LoremLipsum.co COD</span>
                                            </p>
                                            <p>
                                                <span>Date:</span>
                                                <span> 26 Oct, 2021</span>
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
    <!-- ADD ADDRESS MODAL -->
    <div class="modal payment-popup fade c-popups" id="addAddressModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup-head">
                        <h6>Add Address</h6>
                        <p><span>Add address details</span> </p>
                        <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Country</label>
                                    <select name="" id="">
                                        <option value="" selected disabled>Select Country</option>
                                        <option value="">USA</option>
                                        <option value="">Australia</option>
                                        <option value="">Austria</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">First Name</label>
                                    <input type="text" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Address 1</label>
                                    <input type="text" placeholder="Address 1">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Address 2</label>
                                    <input type="text" placeholder="Address 2">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Company Name</label>
                                    <input type="text" placeholder="Company Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Suburb/City</label>
                                    <input type="text" placeholder="Suburb/City">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">State/Province</label>
                                    <select name="" id="">
                                        <option value="" selected disabled>Select State/Province</option>
                                        <option value="">State 1</option>
                                        <option value="">State 2</option>
                                        <option value="">State 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Zip/Postcode</label>
                                    <input type="text" placeholder="Zip/Postcode">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                <button class="card-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>

