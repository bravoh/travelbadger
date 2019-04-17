@extends("layouts.main")

@section("content")
    <div class="theme-page-section theme-page-section-lg">
        <div class="container">
            <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
                <div class="col-md-8 ">
                    <div class="theme-payment-page-sections">
                        @auth

                        @else
                            <div class="theme-payment-page-sections-item">
                                <div class="theme-payment-page-signin">
                                    <i class="theme-payment-page-signin-icon fa fa-user-circle-o"></i>
                                    <div class="theme-payment-page-signin-body">
                                        <h4 class="theme-payment-page-signin-title">Sign in if you have an account</h4>
                                        <p class="theme-payment-page-signin-subtitle">We will retrieve saved travelers and credit cards for faster checkout</p>
                                    </div>
                                    <a class="btn theme-payment-page-signin-btn btn-primary" href="#">Sign in</a>
                                </div>
                            </div>
                        @endauth

                        <div class="theme-payment-page-sections-item">
                            <div class="theme-search-results-item theme-payment-page-item-thumb">
                                <div class="row" data-gutter="20">
                                    <div class="col-md-9 ">
                                        <p class="theme-search-results-item-flight-payment-airline">You will be travelling with {{$package->travel_firm->name}}</p>
                                        <h5 class="theme-search-results-item-title">{{$package->from_town->name}} &nbsp;→&nbsp; {{$package->to_town->name}}</h5>
                                        <p class="theme-search-results-item-flight-payment-info">One way trip</p>
                                        <ul class="theme-search-results-item-flight-payment-dates">
                                            <li>Depart: May 17, 2018</li>
                                            <li>Return: May 23, 2018</li>
                                        </ul>
                                        <a class="theme-search-results-item-flight-payment-details-link" href="#FlightPaymentDetails" data-toggle="collapse" aria-expanded="false" aria-controls="FlightPaymentDetails">Flight Details &nbsp;
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="collapse _pt-20" id="FlightPaymentDetails">
                                            <div class="theme-search-results-item-flight-detail-items">
                                                <div class="theme-search-results-item-flight-details">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <div class="theme-search-results-item-flight-details-info">
                                                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                                                <p class="theme-search-results-item-flight-details-info-cities">London → New York</p>
                                                                <p class="theme-search-results-item-flight-details-info-fly-time">20h 30m</p>
                                                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 ">
                                                            <div class="theme-search-results-item-flight-details-schedule">
                                                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">02:40
                                          <span>pm</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                          <span>am</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">12h 20m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>LHR</b>Heathrow
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>WAW</b>Warsaw Chopin
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>1660 American</li>
                                                                            <li>Wide-body jet</li>
                                                                            <li>Boeing 777-200</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">02:60
                                          <span>am</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>am</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 30m</p>
                                                                        <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Warszawa(WAW)</p>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>am</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">11:10
                                          <span>am</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">5h 40m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>WAW</b>Warsaw Chopin
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>JFK</b>John F. Kennedy
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>6830 American</li>
                                                                            <li>Wide-body jet</li>
                                                                            <li>Boeing 777-300ER</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="theme-search-results-item-flight-details">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <div class="theme-search-results-item-flight-details-info">
                                                                <h5 class="theme-search-results-item-flight-details-info-title">Return</h5>
                                                                <p class="theme-search-results-item-flight-details-info-date">Tue, May 23</p>
                                                                <p class="theme-search-results-item-flight-details-info-cities">New York → London</p>
                                                                <p class="theme-search-results-item-flight-details-info-fly-time">26h 30m</p>
                                                                <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 ">
                                                            <div class="theme-search-results-item-flight-details-schedule">
                                                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">08:50
                                          <span>am</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>pm</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">8h 40m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>LHR</b>Heathrow
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>CDG</b>Charles de Gaulle
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>7293 Virgin</li>
                                                                            <li>Wide-body jet</li>
                                                                            <li>Embraer 175</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                          <span>pm</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">06:50
                                          <span>pm</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">1h 20m</p>
                                                                        <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">06:50
                                          <span>pm</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">11:40
                                          <span>pm</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 50m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>CDG</b>Charles de Gaulle
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>BOS</b>Logan
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>8929 Virgin</li>
                                                                            <li>Narrow-body jet</li>
                                                                            <li>Boeing 777-300ER</li>
                                                                        </ul>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">11:40
                                          <span>pm</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                          <span>am</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 20m</p>
                                                                        <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Boston(BOS)</p>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 23</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                        <span class="theme-search-results-item-flight-details-schedule-time-item">01:60
                                          <span>am</span>
                                        </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">11:20
                                          <span>am</span>
                                        </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">9h 20m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>BOS</b>Logan
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">Boston</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                    <b>JFK</b>John F. Kennedy
                                                                                </p>
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>7127 Virgin</li>
                                                                            <li>Wide-body jet</li>
                                                                            <li>Embraer 175</li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 ">
                                        <div class="theme-search-results-item-img-wrap">
                                            <img class="theme-search-results-item-img _mob-h" src="./img/351x253.png" alt="Image Alternative text" title="Image Title">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-payment-page-sections-item">
                            <h3 class="theme-payment-page-sections-item-title">Enter Passenger Details</h3>
                            <form id="bookingForm">
                                @csrf
                                <div class="theme-payment-page-form">
                                    <h3 class="theme-payment-page-form-title">Passenger 1</h3>
                                    <div class="row row-col-gap" data-gutter="20">
                                        <div class="col-md-6 ">
                                            <div class="theme-payment-page-form-item form-group">
                                                <i class="fa fa-angle-down"></i>
                                                <select class="form-control" name="gender">
                                                    <option>Gender</option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="theme-payment-page-form-item form-group">
                                                <input class="form-control" type="text" placeholder="First Name" name="first_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="theme-payment-page-form-item form-group">
                                                <input class="form-control" type="text" placeholder="Last Name" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="theme-payment-page-form-item form-group">
                                                <input class="form-control" type="text" placeholder="Phone Number" name="phone">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ">
                                            <div class="theme-payment-page-form-item form-group">
                                                <input class="form-control" type="text" placeholder="ID or Passport Number" name="passport">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="sticky-col" style="">
                        <div class="theme-sidebar-section _mb-10">
                            <h5 class="theme-sidebar-section-title">Booking Summary</h5>
                            <ul class="theme-sidebar-section-summary-list">
                                <li>One way trip</li>
                                <li>Depart: Apr 07, 2018</li>
                            </ul>
                        </div>
                        <div class="theme-sidebar-section _mb-10">
                            <h5 class="theme-sidebar-section-title">Charges</h5>
                            <div class="theme-sidebar-section-charges">
                                <ul class="theme-sidebar-section-charges-list">
                                    <li class="theme-sidebar-section-charges-item">
                                        <h5 class="theme-sidebar-section-charges-item-title">
                                            <span class="quantity">1</span>
                                            Passenger
                                        </h5>
                                        <p class="theme-sidebar-section-charges-item-price">KES {{$package->price}}</p>
                                    </li>
                                    <li class="theme-sidebar-section-charges-item">
                                        <h5 class="theme-sidebar-section-charges-item-title">Taxes, Fees &amp; Surcharges</h5>
                                        <p class="theme-sidebar-section-charges-item-subtitle"></p>
                                        <p class="theme-sidebar-section-charges-item-price">KES 0.00</p>
                                    </li>
                                </ul>
                                <p class="theme-sidebar-section-charges-total">Total
                                    <span>KES {{$package->price}}</span>
                                    <input type="hidden" class="amount" value="{{$package->price}}">
                                </p>
                                <br/>
                                <!-- Set up a container element for the button -->
                                <div id="paypal-button-container"></div>
                                {{--<button type="submit" class="btn _tt-uc btn-primary-inverse btn-block" href="#">Book Now</button>--}}
                            </div>
                        </div>
                        <div class="theme-sidebar-section _mb-10">
                            <ul class="theme-sidebar-section-features-list">
                                <li>
                                    <h5 class="theme-sidebar-section-features-list-title">Manage your bookings!</h5>
                                    <p class="theme-sidebar-section-features-list-body">You're in control of your booking - no registration required.</p>
                                </li>
                                <li>
                                    <h5 class="theme-sidebar-section-features-list-title">Customer support available 24/7 worldwide!</h5>
                                    <p class="theme-sidebar-section-features-list-body">Website and customer support in English and 41 other languages.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=AeUetr4mIaW3BgcaJeJcVZUx8Jy-OZlwPVC1mq2uLG8huJJPniREe5X8qESvdo4CBJmiwI6UNy8CiuJz&currency=USD"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: $(".amount").val()/100
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    //alert('Transaction completed by ' + details.payer.name.given_name + '!');
                    console.log(details);

                    $.ajax({
                        method: "POST",
                        url: "{{url('api/booking')}}",
                        data: {
                            payment_details: details,
                            booking_details: $('#bookingForm').serialize(),
                            route_id: "{{$package->id}}",
                            amount: $(".amount").val()/100
                        }
                    }).done(function( msg ) {
                        window.location.replace({{url('ticket/')}});
                    });
                });
            }


        }).render('#paypal-button-container');
    </script>
@endsection
