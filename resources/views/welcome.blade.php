@extends("layouts.main")

@section("content")
    <div class="theme-hero-area-bg-wrap">
        <div class="theme-hero-area-bg" style="background-image:url(./img/highway-919073_1920.jpg);" id="hero-banner"></div>
        <div class="theme-hero-area-mask theme-hero-area-mask-half"></div>
        <div class="theme-hero-area-inner-shadow"></div>
        <div class="blur-area" data-bg-area="#hero-banner" data-blur-area="#hero-search-form" data-blur="20"></div>
    </div>
    <div class="theme-hero-area-body _pos-desk-v-c _w-f _pv-mob-60">
        <div class="container">
            <div class="row">
                <div class="col-md-11 ">
                    <div class="theme-search-area theme-search-area-stacked theme-search-area-white">
                        <div class="theme-search-area-header _mb-20">
                            <h1 class="theme-search-area-title">Get the Best Travel Deals</h1>
                            <p class="theme-search-area-subtitle">Search hundreds of travel sites at once</p>
                        </div>
                        <div class="theme-search-area-form" id="hero-search-form">
                            <form method="POST" action="routes">
                                @csrf
                                <div class="row" data-gutter="none">
                                    <div class="col-md-7 ">
                                        <div class="row" data-gutter="none">
                                            <div class="col-md-6 ">
                                                <div class="theme-search-area-section first theme-search-area-section-curved">
                                                    <div class="theme-search-area-section-inner">
                                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                        <input class="theme-search-area-section-input typeahead" type="text" placeholder="From" data-provide="typeahead"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 ">
                                                <div class="theme-search-area-section theme-search-area-section-curved">
                                                    <div class="theme-search-area-section-inner">
                                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                                        <input class="theme-search-area-section-input typeahead" type="text" placeholder="To" data-provide="typeahead"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 ">
                                        <div class="row" data-gutter="none">
                                            <div class="col-md-12 ">
                                                <div class="theme-search-area-section theme-search-area-section-curved">
                                                    <div class="theme-search-area-section-inner">
                                                        <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                        <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Departure Date" type="text" placeholder="Departure Date"/>
                                                        <input class="theme-search-area-section-input _desk-h mobile-picker" value="2019-04-26" type="date"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 ">
                                        <button class="theme-search-area-submit _mt-0 theme-search-area-submit-glow theme-search-area-submit-curved">
                                            <i class="theme-search-area-submit-icon fa fa-angle-right"></i>
                                            <span class="_desk-h">Search</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="theme-search-area-options theme-search-area-options-dot-primary-inverse clearfix">
                            <div class="btn-group theme-search-area-options-list" data-toggle="buttons">
                                <label class="btn btn-primary active">
                                    <input type="radio" name="flight-options" id="flight-option-1" checked/>Round Trip
                                </label>
                                <label class="btn btn-primary">
                                    <input type="radio" name="flight-options" id="flight-option-2"/>One Way
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="_pt-60">
                        <div class="row row-col-mob-gap">
                            <div class="col-md-3 ">
                                <div class="feature">
                                    <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                                    <div class="feature-caption _c-w">
                                        <h5 class="feature-title">Explore the World</h5>
                                        <p class="feature-subtitle _op-04">Start to discrover. We will help you to visit any place you can imagine</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="feature">
                                    <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                                    <div class="feature-caption _c-w">
                                        <h5 class="feature-title">Gifts & Rewards</h5>
                                        <p class="feature-subtitle _op-04">Get even more from our service. Spend less and travel more</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="feature">
                                    <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                                    <div class="feature-caption _c-w">
                                        <h5 class="feature-title">Best prices</h5>
                                        <p class="feature-subtitle _op-04">We are comparing hundreds travel websites to find best price for you</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="feature">
                                    <i class="feature-icon feature-icon-white feature-icon-box feature-icon-round feature-icon-xs fa fa-check"></i>
                                    <div class="feature-caption _c-w">
                                        <h5 class="feature-title">27/7 Support</h5>
                                        <p class="feature-subtitle _op-04">Contact us anytime, anywhere. We will resolve any issues ASAP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection