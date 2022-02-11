<!-- New Payment Modal Start  -->
<div class="modal payment-popup fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Add a new payment method</h6>
          <p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="payment-types">
          <p>Select Payment Type </p>

          <a href="javascript:void(0)" class="payment-type" data-toggle="modal" data-target="#credit-modal">
            <img src="assets/images/credit-card.png" class="img-fluid"> Credit Card</a>
            <a href="javascript:void(0)" class="payment-type"><img src="assets/images/paypal.png" class="img-fluid"> PayPal</a>
            <a href="javascript:void(0)" class="payment-type">Auto Fill From Browser</a>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Credit Card Modal Start  -->
  <div class="modal payment-popup fade" id="credit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="popup-head">
            <h6>Credit Card Details</h6>
            <p>Payment Type > <span>Payment Inforrnatir ' Billing Address</span> </p>
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="credit-card-info">
            <form>
              <input type="text" name="" maxlength="20" placeholder="Card Holder Name" class="card-input">
              <input type="tel" name="" placeholder="Card Number" class="card-input">
              <input type="text" name="" pattern="[0-9]*" inputmode="numeric" placeholder="Expiration (mm/yy)" class="card-input">
              <input type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Security Code" class="card-input">
              <button type="submit" class="card-btn">Submit</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <!-- End -->

  <!-- Change User Detail Modal Start -->
  <div class="modal payment-popup fade" id="consignee-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="popup-head">
            <h6>Add Details</h6>
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="credit-card-info">
            <form>
              <input type="text" name="" maxlength="20" placeholder="Name" class="card-input">
              <input type="email" name="" maxlength="20" placeholder="Email Address" class="card-input">
              <input type="tel" name="" maxlength="15" placeholder="Phone Number" class="card-input">
              <select class="card-select">
                <option disabled="" selected="">Select Country</option>
                <option>USA</option>
                <option>China</option>
                <option>Russia</option>
              </select> 
              <select class="card-select">
                <option disabled="" selected="">Select State</option>
                <option>lorem</option>
                <option>lorem</option>
                <option>lorem</option>
              </select>
              <select class="card-select">
                <option disabled="" selected="">Select City</option>
                <option>lipsum</option>
                <option>lipsum</option>
                <option>lipsum</option>
              </select>
              <input type="text" name="" maxlength="20" placeholder="Zip Code" class="card-input">
              <input type="text" name="" maxlength="20" placeholder="Address" class="card-input">

              <button type="submit" class="card-btn">UPDATE</button>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </div>

  <!-- End -->


<!-- Change Password Modal Start -->
<div class="modal payment-popup fade" id="newPassword-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Password</h6>
          <p><span>Enter a new password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="password" name="" maxlength="30" placeholder="New Password" class="card-input">
            <input type="password" name="" maxlength="15" placeholder="Confirm Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Change Email Address Modal Start -->
<div class="modal payment-popup fade" id="newEmail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Chanege Your Email Address</h6>
          <p><span>Enter a new email addressand your existing password.</span> </p>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="email" name="" maxlength="30" placeholder="New Email Address" class="card-input">
            <input type="email" name="" maxlength="30" placeholder="Confirm Email Address" class="card-input">
            <input type="password" name="" maxlength="30" placeholder="Current Password" class="card-input">
            <button type="submit" class="card-btn">Submit</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

<!-- Congsignee Modal Start -->
<div class="modal payment-popup fade" id="user-detail-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="popup-head">
          <h6>Add/Edit Details</h6>
          <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="credit-card-info">
          <form>
            <input type="text" name="" maxlength="20" placeholder="Name" class="card-input">
            <input type="text" name="" maxlength="20" placeholder="Address" class="card-input">
            <input type="tel" name="" maxlength="15" placeholder="Phone Number" class="card-input">
            <button type="submit" class="card-btn">UPDATE</button>
          </form>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->

  <!-- Tracking Info Modal Modal Start -->
<div class="modal payment-popup fade" id="tracking-info-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="tracking-box">
            <h1 class="main-heading">Tracking Information</h1>
            <p class="top-tagline">Returned To Shipper</p>
            <button type="button" class="close close-btn" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <a href="#!" class="print-icon"><i class="fas fa-print"></i><span>Print</span></a>
            <div class="row pb-3">
              <div class="col-lg-4">
                <div class="origin">
                  <p class="tagline">From</p>
                  <h1 class="heading">New York</h1>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="logo">
                  <img src="assets/images/track.png" alt="logo" class="img-fluid">
                </div>
              </div>
              <div class="col-lg-4">
               <div class="destination">
                <p class="tagline">To</p>
                <h1 class="heading">California</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="track-detail">
          <table>
            <tbody>
              <tr>
                <td>Tracking #: <span>KI152645</span></td>
                <td>Reference # / Order ID: <span>1211</span></td>
              </tr>
              <tr>
                <td>No. of Pieces: <span>1</span></td>
                <td>Packet Weight: <span>0.300 (kgs)</span></td>
              </tr>
              <tr>
                <td>Shipper Name: <span>LoremLipsum.co</span></td>
                <td>Consignee Name: <span>John Doe</span></td>
              </tr>
              <tr>
                <td>Shipper Address: <span>New York</span></td>
                <td>Consignee Address: <span>California</span></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="track-detail status-table">
          <table>
            <thead>
              <tr>
                <th scope="col">Activity Date</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td data-label="Account"><span>Sep 25, 2019 11:30:01 AM</span></td>
                <td data-label="Due Date"><span>Posted for Consignment Booking at New York</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
    </div>
  </div>
</div>

<!-- End -->  



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  AOS.init();
</script>

</body>

</html>