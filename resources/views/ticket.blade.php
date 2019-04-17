
@extends("layouts.main")

@section("content")
    <div class="theme-page-section theme-page-section-lg">
        <div class="container">
            <div class="row row-col-static row-col-mob-gap" id="sticky-parent" data-gutter="60">
                <div class="col-md-12 ">
                    <div class="theme-payment-page-sections">

                        <div class="theme-payment-page-sections-item">
                            <div class="theme-search-results-item theme-payment-page-item-thumb">
                                <div class="row" data-gutter="20">
                                    <div class="col-md-9 ">
                                        <p class="theme-search-results-item-flight-payment-airline">
                                            You have successfully booked a seat on
                                            {{$booking->route->travel_firm->name}}
                                        </p>
                                        <h5 class="theme-search-results-item-title">
                                            {{$booking->route->from_town->name}} &nbsp;→&nbsp; {{$booking->route->to_town->name}}
                                        </h5>
{{--                                        <p class="theme-search-results-item-flight-payment-info">Round-trip, Economy, 1 Adult</p>--}}
                                        <ul class="theme-search-results-item-flight-payment-dates">
                                            <li>Depart: May 17, 2018</li>
{{--                                            <li>Return: May 23, 2018</li>--}}
                                        </ul>
                                        <a class="theme-search-results-item-flight-payment-details-link" href="#FlightPaymentDetails" data-toggle="collapse" aria-expanded="true" aria-controls="FlightPaymentDetails">Booking Details &nbsp;
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="_pt-20 collapse in" id="FlightPaymentDetails" aria-expanded="true" style="">
                                            <div class="theme-search-results-item-flight-detail-items">
                                                <div class="theme-search-results-item-flight-details">
                                                    <div class="row">
                                                        <div class="col-md-3 ">
                                                            <div class="theme-search-results-item-flight-details-info">
                                                                <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                                                <p class="theme-search-results-item-flight-details-info-date">Fri, April 19</p>
                                                                <p class="theme-search-results-item-flight-details-info-cities">{{$booking->route->from_town->name}} → {{$booking->route->to_town->name}}</p>
                                                                <p class="theme-search-results-item-flight-details-info-fly-time">7h 30m</p>
                                                                <p class="theme-search-results-item-flight-details-info-stops">1 stop</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-9 ">
                                                            <div class="theme-search-results-item-flight-details-schedule">
                                                                <ul class="theme-search-results-item-flight-details-schedule-list">
                                                                    <li>
                                                                        <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                        <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-date">Fri, April 19</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-time">
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">08:40
                                                                                <span>pm</span>
                                                                            </span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-separator">—</span>
                                                                            <span class="theme-search-results-item-flight-details-schedule-time-item">05:30
                                                                                <span>am</span>
                                                                            </span>
                                                                        </div>
                                                                        <p class="theme-search-results-item-flight-details-schedule-fly-time">7h 20m</p>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
{{--                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">--}}
{{--                                                                                    <b>LHR</b>Heathrow--}}
{{--                                                                                </p>--}}
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">{{$booking->route->from_town->name}}</p>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                                <span>→</span>
                                                                            </div>
                                                                            <div class="theme-search-results-item-flight-details-schedule-destination-item">
{{--                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-title">--}}
{{--                                                                                    <b>WAW</b>Warsaw Chopin--}}
{{--                                                                                </p>--}}
                                                                                <p class="theme-search-results-item-flight-details-schedule-destination-city">{{$booking->route->to_town->name}}</p>
                                                                            </div>
                                                                        </div>
                                                                        <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                            <li>Scania</li>
                                                                            <li>KCM 121 L</li>
{{--                                                                            <li>Boeing 777-200</li>--}}
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
                            <div class="theme-payment-page-booking">
                                <div class="theme-payment-page-booking-header">
{{--                                    <h3 class="theme-payment-page-booking-title">Total</h3>--}}
                                    <p class="theme-payment-page-booking-subtitle">
                                        Be at the pickup point at least 30 Minutes to departure time
                                    </p>
                                    <p class="theme-payment-page-booking-price">KES {{$booking->route->price}} PAID</p>
                                </div>
                                <a class="btn _tt-uc btn-primary-inverse btn-lg btn-block" href="#">Booking Successful</a>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-4 ">--}}
{{--                    <div class="sticky-col" style="">--}}
{{--                        <div class="theme-sidebar-section _mb-10">--}}
{{--                            <h5 class="theme-sidebar-section-title">Safari Njema</h5>--}}
{{--                            <ul class="theme-sidebar-section-summary-list">--}}
{{--                                <li>round-trip, economy, 1 adult</li>--}}
{{--                                <li>Depart: Apr 07, 2018</li>--}}
{{--                                <li>Return: Apr 13, 2018</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
