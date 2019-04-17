@extends("layouts.main")

@section("content")
    <div class="theme-page-section theme-page-section-gray">
        <div class="container">
            <div class="row _mob-h">
                <div class="col-md-9 ">
                    <div class="theme-hero-text _mb-30">
                        <div class="theme-hero-text-header">
                            <h2 class="theme-hero-text-title theme-hero-text-title-sm">205 Flights to Lodon</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-search-area-inline _mb-20 _desk-h">
                <h4 class="theme-search-area-inline-title">Lodon Flights</h4>
                <p class="theme-search-area-inline-details">June 27 &rarr; July 02, 1 Passnger</p>
                <a class="theme-search-area-inline-link magnific-inline" href="#searchEditModal">
                    <i class="fa fa-pencil"></i>Edit
                </a>
                <div class="magnific-popup magnific-popup-sm mfp-hide" id="searchEditModal">
                    <div class="theme-search-area theme-search-area-vert">
                        <div class="theme-search-area-header">
                            <h1 class="theme-search-area-title theme-search-area-title-sm">Edit your Search</h1>
                            <p class="theme-search-area-subtitle">Prices might be different from current results</p>
                        </div>
                        <div class="theme-search-area-form">
                            <div class="theme-search-area-section first theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">From</label>
                                <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" value="New York" type="text" placeholder="Departure" data-provide="typeahead"/>
                                </div>
                            </div>
                            <div class="theme-search-area-section theme-search-area-section-curved">
                                <label class="theme-search-area-section-label">To</label>
                                <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                    <input class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" data-provide="typeahead"/>
                                </div>
                            </div>
                            <div class="row" data-gutter="10">
                                <div class="col-md-6 ">
                                    <div class="theme-search-area-section theme-search-area-section-curved">
                                        <label class="theme-search-area-section-label">Depart</label>
                                        <div class="theme-search-area-section-inner">
                                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                            <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="theme-search-area-section theme-search-area-section-curved">
                                        <label class="theme-search-area-section-label">Arrival</label>
                                        <div class="theme-search-area-section-inner">
                                            <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                            <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                                            <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="theme-search-area-section theme-search-area-section-curved quantity-selector" data-increment="Passengers">
                                <label class="theme-search-area-section-label">Passengers</label>
                                <div class="theme-search-area-section-inner">
                                    <i class="theme-search-area-section-icon lin lin-people"></i>
                                    <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                                    <div class="quantity-selector-box" id="mobile-FlySearchPassengers">
                                        <div class="quantity-selector-inner">
                                            <p class="quantity-selector-title">Passengers</p>
                                            <ul class="quantity-selector-controls">
                                                <li class="quantity-selector-decrement">
                                                    <a href="#">&#45;</a>
                                                </li>
                                                <li class="quantity-selector-current">1</li>
                                                <li class="quantity-selector-increment">
                                                    <a href="#">&#43;</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved">Change</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-col-static" id="sticky-parent" data-gutter="20">
                <div class="col-md-3 ">
                    <div class="sticky-col _mob-h">
                        <div class="theme-search-area _p-20 _bg-p _br-4 _mb-20 _bsh theme-search-area-vert theme-search-area-white">
                            <div class="theme-search-area-form" id="hero-search-form">
                                <div class="theme-search-area-section first theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                    <label class="theme-search-area-section-label">From</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                        <input class="theme-search-area-section-input typeahead" type="text" placeholder="Departure" data-provide="typeahead"/>
                                    </div>
                                </div>
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                    <label class="theme-search-area-section-label">To</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-location-pin"></i>
                                        <input class="theme-search-area-section-input typeahead" type="text" placeholder="Arrival" data-provide="typeahead"/>
                                    </div>
                                </div>
                                <div class="row" data-gutter="10">
                                    <div class="col-md-6 ">
                                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                            <label class="theme-search-area-section-label">Depart</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                <input class="theme-search-area-section-input datePickerStart _mob-h" value="Wed 06/27" type="text" placeholder="Check-in"/>
                                                <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-06-27" type="date"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border">
                                            <label class="theme-search-area-section-label">Arrival</label>
                                            <div class="theme-search-area-section-inner">
                                                <i class="theme-search-area-section-icon lin lin-calendar"></i>
                                                <input class="theme-search-area-section-input datePickerEnd _mob-h" value="Mon 07/02" type="text" placeholder="Check-out"/>
                                                <input class="theme-search-area-section-input _desk-h mobile-picker" value="2018-07-02" type="date"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-area-section theme-search-area-section-curved theme-search-area-section-sm theme-search-area-section-fade-white theme-search-area-section-no-border quantity-selector" data-increment="Passengers">
                                    <label class="theme-search-area-section-label">Passengers</label>
                                    <div class="theme-search-area-section-inner">
                                        <i class="theme-search-area-section-icon lin lin-people"></i>
                                        <input class="theme-search-area-section-input" value="1 Passenger" type="text"/>
                                        <div class="quantity-selector-box" id="FlySearchPassengers">
                                            <div class="quantity-selector-inner">
                                                <p class="quantity-selector-title">Passengers</p>
                                                <ul class="quantity-selector-controls">
                                                    <li class="quantity-selector-decrement">
                                                        <a href="#">&#45;</a>
                                                    </li>
                                                    <li class="quantity-selector-current">1</li>
                                                    <li class="quantity-selector-increment">
                                                        <a href="#">&#43;</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="theme-search-area-submit _mt-0 _tt-uc theme-search-area-submit-curved theme-search-area-submit-sm theme-search-area-submit-white theme-search-area-submit-primary">Change</button>
                            </div>
                        </div>
                        <div class="theme-search-results-sidebar">
                            <div class="theme-search-results-sidebar-sections _mb-20 _br-2 theme-search-results-sidebar-sections-white-wrap">
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Stops</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">nonstop</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$431</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">1 stop</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$284</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">2 stops</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$351</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Flight Class</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Economy</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$382</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Business</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$421</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">First</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$149</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Price</h5>
                                    <div class="theme-search-results-sidebar-section-price">
                                        <input id="price-slider" name="price-slider" data-min="100" data-max="500"/>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Take-off London</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$338</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$217</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$421</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Landing New York</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$372</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$486</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$349</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Take-off New York</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$275</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$308</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$265</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Landing London</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Morning
                              <span class="icheck-sub-title">05:00am - 11:59am</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$471</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Afternoon
                              <span class="icheck-sub-title">12:00pm - 5:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$167</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Evening
                              <span class="icheck-sub-title">06:00pm - 11:59pm</span>
                            </span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$231</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">London Airport</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">CLY: City</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$441</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">LHR: Heathrow</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$492</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">LCW: Gatwich</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$342</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">STN: Stansed</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$407</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">SEN: Southend</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$233</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">New York Airport</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">JFK: John F. Kennedy</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$443</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">LGA: LaGuardia</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$160</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">EWR: Newark Liberty</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$336</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-search-results-sidebar-section">
                                    <h5 class="theme-search-results-sidebar-section-title">Airlines</h5>
                                    <div class="theme-search-results-sidebar-section-checkbox-list">
                                        <div class="theme-search-results-sidebar-section-checkbox-list-items">
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">KLM Royal Dutch...</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$244</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">LOT Polish Airlines</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$313</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Wow Airlines</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$241</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Virgin Atlantic...</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$113</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Delta Airlines</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$173</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">SWISS Airlines</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$489</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Lufthansa</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$372</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">American Airlines</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$434</span>
                                            </div>
                                            <div class="checkbox theme-search-results-sidebar-section-checkbox-list-item">
                                                <label class="icheck-label">
                                                    <input class="icheck" type="checkbox"/>
                                                    <span class="icheck-title">Fly Emirates</span>
                                                </label>
                                                <span class="theme-search-results-sidebar-section-checkbox-list-amount">$490</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-ad">
                            <a class="theme-ad-link" href="#"></a>
                            <p class="theme-ad-sign">Advertisement</p>
                            <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text" title="Image Title"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-6-5 ">
                    <div class="theme-search-results-sort _mob-h clearfix">
                        <h5 class="theme-search-results-sort-title">Sort by:</h5>
                        <ul class="theme-search-results-sort-list">
                            <li>
                                <a href="#">Price
                                    <span>Low &rarr; High</span>
                                </a>
                            </li>
                            <li class="active">
                                <a href="#">Duration
                                    <span>Long &rarr; Short</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Recommended
                                    <span>High &rarr; Low</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">Airline Name
                                    <span>Name &nbsp; A &rarr; Z</span>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown theme-search-results-sort-alt">
                            <a id="dropdownMenu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">More
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu">
                                <li>
                                    <a href="#">Departure take-off</a>
                                </li>
                                <li>
                                    <a href="#">Departure landing</a>
                                </li>
                                <li>
                                    <a href="#">Return take-off</a>
                                </li>
                                <li>
                                    <a href="#">Return landing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="theme-search-results-sort-select _desk-h">
                        <select>
                            <option>Price</option>
                            <option>Duration</option>
                            <option>Recommended</option>
                            <option>Airline Name</option>
                            <option>Departure take-off</option>
                            <option>Departure landing</option>
                            <option>Return take-off</option>
                            <option>Return landing</option>
                        </select>
                    </div>
                    <div class="theme-search-results">
                        @foreach($routes as $item)
                        <div class="theme-search-results-item theme-search-results-item-">
                            <div class="theme-search-results-item-preview">
                                <a class="theme-search-results-item-mask-link" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1"></a>
                                <div class="row" data-gutter="20">
                                    <div class="col-md-10 ">
                                        <div class="theme-search-results-item-flight-sections">
                                            <div class="theme-search-results-item-flight-section">
                                                <div class="row row-no-gutter row-eq-height">
                                                    <div class="col-md-2 ">
                                                        <div class="theme-search-results-item-flight-section-airline-logo-wrap">
                                                            <img class="theme-search-results-item-flight-section-airline-logo" src="./img/351x253.png" alt="Image Alternative text" title="Image Title"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 ">
                                                        <div class="theme-search-results-item-flight-section-item">
                                                            <div class="row">
                                                                <div class="col-md-3 ">
                                                                    <div class="theme-search-results-item-flight-section-meta">
                                                                        <p class="theme-search-results-item-flight-section-meta-time">09:20
                                                                            <span>am</span>
                                                                        </p>
                                                                        <p class="theme-search-results-item-flight-section-meta-city">{{$item->from_town->name}}</p>
                                                                        <p class="theme-search-results-item-flight-section-meta-date">May 17, 2018</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 ">
                                                                    <div class="theme-search-results-item-flight-section-path">
                                                                        <div class="theme-search-results-item-flight-section-path-fly-time">
                                                                            <p>20h 40m</p>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-section-path-line"></div>
                                                                        <div class="theme-search-results-item-flight-section-path-line-start">
                                                                            <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                            <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                            <div class="theme-search-results-item-flight-section-path-line-title">CLY</div>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-section-path-line-middle-1">
                                                                            <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                            <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                            <div class="theme-search-results-item-flight-section-path-line-title">CDG</div>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-section-path-line-middle-2">
                                                                            <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                            <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                            <div class="theme-search-results-item-flight-section-path-line-title">WAW</div>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-section-path-line-end">
                                                                            <i class="fa fa-plane theme-search-results-item-flight-section-path-icon"></i>
                                                                            <div class="theme-search-results-item-flight-section-path-line-dot"></div>
                                                                            <div class="theme-search-results-item-flight-section-path-line-title">EWR</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3 ">
                                                                    <div class="theme-search-results-item-flight-section-meta">
                                                                        <p class="theme-search-results-item-flight-section-meta-time">06:00
                                                                            <span>am</span>
                                                                        </p>
                                                                        <p class="theme-search-results-item-flight-section-meta-city">{{$item->to_town->name}}</p>
                                                                        <p class="theme-search-results-item-flight-section-meta-date">May 18, 2018</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h5 class="theme-search-results-item-flight-section-airline-title">Operated by {{$item->travel_firm->name}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 ">
                                        <div class="theme-search-results-item-book">
                                            <div class="theme-search-results-item-price">
                                                <p class="theme-search-results-item-price-tag">{{$item->price}}</p>
                                                <p class="theme-search-results-item-price-sign">KES</p>
                                            </div>
                                            <a class="btn btn-primary-inverse btn-block theme-search-results-item-price-btn" href="{{url("booking",$item->id)}}">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse theme-search-results-item-collapse" id="searchResultsItem-1">
                                <div class="theme-search-results-item-extend">
                                    <a class="theme-search-results-item-extend-close" href="#searchResultsItem-1" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="searchResultsItem-1">&#10005;</a>
                                    <div class="theme-search-results-item-extend-inner">
                                        <div class="theme-search-results-item-flight-detail-items">
                                            <div class="theme-search-results-item-flight-details">
                                                <div class="row">

                                                    <div class="col-md-3 ">
                                                        <div class="theme-search-results-item-flight-details-info">
                                                            <h5 class="theme-search-results-item-flight-details-info-title">Depart</h5>
                                                            <p class="theme-search-results-item-flight-details-info-date">Tue, May 17</p>
                                                            <p class="theme-search-results-item-flight-details-info-cities">London &rarr; New York</p>
                                                            <p class="theme-search-results-item-flight-details-info-fly-time">20h 40m</p>
                                                            <p class="theme-search-results-item-flight-details-info-stops">2 stops</p>
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
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">09:20
                                                                            <span>am</span>
                                                                        </span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">02:50
                                                                            <span>pm</span>
                                                                        </span>
                                                                    </div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">5h 30m</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>CLY</b>City
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">London</p>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                            <span>&rarr;</span>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>CDG</b>Charles de Gaulle
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                        <li>4863 Virgin</li>
                                                                        <li>Narrow-body jet</li>
                                                                        <li>Embraer 175</li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">02:50
                                                                            <span>pm</span>
                                                                        </span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">07:10
                                                                            <span>pm</span>
                                                                        </span>
                                                                    </div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">4h 20m</p>
                                                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Paris(CDG)</p>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">07:10
                                                                            <span>pm</span>
                                                                        </span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">09:40
                                                                            <span>pm</span>
                                                                        </span>
                                                                    </div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 30m</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>CDG</b>Charles de Gaulle
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">Paris</p>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                            <span>&rarr;</span>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>WAW</b>Warsaw Chopin
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                        <li>8607 Virgin</li>
                                                                        <li>Narrow-body jet</li>
                                                                        <li>Boeing 777-300ER</li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-exchange theme-search-results-item-flight-details-schedule-icon"></i>
                                                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">09:40
                                        <span>pm</span>
                                      </span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">12:30
                                        <span>pm</span>
                                      </span>
                                                                    </div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">2h 50m</p>
                                                                    <p class="theme-search-results-item-flight-details-schedule-transfer">Change planes in Warszawa(WAW)</p>
                                                                </li>
                                                                <li>
                                                                    <i class="fa fa-plane theme-search-results-item-flight-details-schedule-icon"></i>
                                                                    <div class="theme-search-results-item-flight-details-schedule-dots"></div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-date">Tue, May 17</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-time">
                                      <span class="theme-search-results-item-flight-details-schedule-time-item">12:30
                                        <span>pm</span>
                                      </span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-separator">&mdash;</span>
                                                                        <span class="theme-search-results-item-flight-details-schedule-time-item">06:00
                                        <span>am</span>
                                      </span>
                                                                    </div>
                                                                    <p class="theme-search-results-item-flight-details-schedule-fly-time">5h 30m</p>
                                                                    <div class="theme-search-results-item-flight-details-schedule-destination">
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>WAW</b>Warsaw Chopin
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">Warszawa</p>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-separator">
                                                                            <span>&rarr;</span>
                                                                        </div>
                                                                        <div class="theme-search-results-item-flight-details-schedule-destination-item">
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-title">
                                                                                <b>EWR</b>Newark Liberty
                                                                            </p>
                                                                            <p class="theme-search-results-item-flight-details-schedule-destination-city">New York</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="theme-search-results-item-flight-details-schedule-features">
                                                                        <li>8534 Virgin</li>
                                                                        <li>Narrow-body jet</li>
                                                                        <li>Boeing 777-200</li>
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
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="btn _tt-uc _fs-sm _mt-10 btn-white btn-block btn-lg" href="#">Load More Results</a>
                </div>
                <div class="col-md-2-5 ">
                    <div class="sticky-col _mob-h">
                        <div class="theme-ad _mb-20">
                            <a class="theme-ad-link" href="#"></a>
                            <p class="theme-ad-sign">Advertisement</p>
                            <img class="theme-ad-img" src="./img/300x800.png" alt="Image Alternative text" title="Image Title"/>
                        </div>
                        <div class="theme-ad">
                            <a class="theme-ad-link" href="#"></a>
                            <p class="theme-ad-sign">Advertisement</p>
                            <img class="theme-ad-img" src="./img/300x500.png" alt="Image Alternative text" title="Image Title"/>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection