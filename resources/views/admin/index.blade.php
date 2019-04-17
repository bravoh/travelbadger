@extends("layouts.main")

@section("content")
    <div class="theme-page-section theme-page-section-gray theme-page-section-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-2-5 ">
                    <div class="theme-account-sidebar">
                        <div class="theme-account-avatar">
                            <img class="theme-account-avatar-img" src="./img/70x70.png" alt="Image Alternative text" title="Image Title"/>
                            <p class="theme-account-avatar-name">Welcome,
                                <br/>{{auth()->user()->name}}
                            </p>
                        </div>
                        <nav class="theme-account-nav">
                            <ul class="theme-account-nav-list">
                                <li class="active">
                                    <a href="account.html">
                                        <i class="fa fa-cog"></i>Site Setup
                                    </a>
                                </li>
                                <li>
                                    <a href="account-notifications.html">
                                        <i class="fa fa-bell"></i>Notifications
                                    </a>
                                </li>
                                <li>
                                    <a href="account-cards.html">
                                        <i class="fa fa-credit-card"></i>Payment Methods
                                    </a>
                                </li>
                                <li>
                                    <a href="account-travelers.html">
                                        <i class="fa fa-user-circle-o"></i>Travelers
                                    </a>
                                </li>
                                <li>
                                    <a href="account-history.html">
                                        <i class="fa fa-history"></i>History
                                    </a>
                                </li>
                                <li>
                                    <a href="account-bookmarks.html">
                                        <i class="fa fa-bookmark"></i>Bookmarks
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-9-5 ">
                    <h1 class="theme-account-page-title">Site Setup</h1>
                    <div class="row">
                        <div class="col-md-9 ">
                            <div class="theme-account-preferences">
                                <div class="theme-account-preferences-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5 class="theme-account-preferences-item-title">Cities/Towns</h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <p class="theme-account-preferences-item-value">Add and Remove Cities and Towns</p>
                                            <div class="collapse" id="ChangeHomeAirportChange" >
                                                <div class="theme-account-preferences-item-change">
                                                    <div class="form-group theme-account-preferences-item-change-form">
                                                        <input class="form-control" type="text" placeholder="City Name"/>
                                                    </div>
                                                    <div class="theme-account-preferences-item-change-actions">
                                                        <a class="btn btn-sm btn-primary" href="#">Save City/Town</a>
                                                        <a class="btn btn-sm btn-default" href="#ChangeHomeAirportChange" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeAirportChange">Cancel</a>
                                                    </div>
                                                    <br/>
                                                    <div style="max-height: 300px; overflow: auto">
                                                        <table class="table table-striped table-condensed">
                                                            <tr>
                                                                <td>#</td>
                                                                <td>City/Town Name</td>
                                                            </tr>
                                                            @foreach($cities as $item)
                                                                <tr>
                                                                    <td>{{$loop->iteration}}</td>
                                                                    <td>{{$item->name}}</td>
                                                                </tr>
                                                            @endforeach
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <a class="theme-account-preferences-item-change-link" href="#ChangeHomeAirportChange" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeAirportChange">
                                                <i class="fa fa-pencil"></i>Expand
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-account-preferences-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5 class="theme-account-preferences-item-title">Travel Firms</h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <p class="theme-account-preferences-item-value">Manage travel firms</p>
                                            <div class="collapse" id="ChangeHomeSite">
                                                <div class="theme-account-preferences-item-change">
                                                    <p class="theme-account-preferences-item-change-description"></p>
                                                    <div class="form-group theme-account-preferences-item-change-form">
                                                        <input class="form-control" type="text" value="Name"/>
                                                    </div>
                                                    <div class="theme-account-preferences-item-change-actions">
                                                        <a class="btn btn-sm btn-primary" href="#">Save</a>
                                                        <a class="btn btn-sm btn-default" href="#ChangeHomeSite" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeSite">Cancel</a>
                                                    </div>
                                                </div>

                                                <br/>
                                                <div style="max-height: 300px; overflow: auto">
                                                    <table class="table table-striped table-condensed">
                                                        <tr>
                                                            <td>#</td>
                                                            <td>City/Town Name</td>
                                                        </tr>
                                                        @foreach($travelFirms as $item)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{$item->name}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <a class="theme-account-preferences-item-change-link" href="#ChangeHomeSite" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeHomeSite">
                                                <i class="fa fa-pencil"></i>Expand
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-account-preferences-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5 class="theme-account-preferences-item-title">Travel Routes</h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <p class="theme-account-preferences-item-value">Manage travel packages</p>
                                            <div class="collapse" id="ChangePassword">
                                                <div class="theme-account-preferences-item-change">
                                                    <form method="POST" action="">
                                                        @csrf
                                                        <input type="hidden" name="record_type" value="route">
                                                        <p class="theme-account-preferences-item-change-description">
                                                            It's a good idea to use a strong password
                                                            <br/>that you're not using elsewhere
                                                        </p>

                                                        <div class="form-group theme-account-preferences-item-change-form">
                                                            <label>Flight</label>
                                                            <select class="form-control" name="type">
                                                                <option>Bus</option>
                                                                <option>Flight</option>
                                                            </select>

                                                            <label>Travel Firm</label>
                                                            <select class="form-control" name="firm">
                                                                <option></option>

                                                                @foreach($travelFirms as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>

                                                            <label>From</label>
                                                            <select class="form-control" name="from">
                                                                <option></option>
                                                                @foreach($cities as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>

                                                            <label>To</label>
                                                            <select class="form-control" name="to">
                                                                <option></option>
                                                                @foreach($cities as $item)
                                                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                                                @endforeach
                                                            </select>

                                                            <label>Price</label>
                                                            <input class="form-control" name="price" type="text"/>
                                                        </div>

                                                        <div class="theme-account-preferences-item-change-actions">
                                                            <button class="btn btn-sm btn-primary">Save Route</button>
                                                            <a class="btn btn-sm btn-default" href="#ChangePassword" data-toggle="collapse" aria-expanded="false" aria-controls="ChangePassword">Cancel</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <a class="theme-account-preferences-item-change-link" href="#ChangePassword" data-toggle="collapse" aria-expanded="false" aria-controls="ChangePassword">
                                                <i class="fa fa-pencil"></i>Expand
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-account-preferences-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5 class="theme-account-preferences-item-title">Default Language</h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <p class="theme-account-preferences-item-value">English (EN)</p>
                                            <div class="collapse" id="ChangeLanguage">
                                                <div class="theme-account-preferences-item-change">
                                                    <div class="form-group theme-account-preferences-item-change-form">
                                                        <select class="form-control">
                                                            <option>English (EN)</option>
                                                        </select>
                                                    </div>
                                                    <div class="theme-account-preferences-item-change-actions">
                                                        <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                                                        <a class="btn btn-sm btn-default" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <a class="theme-account-preferences-item-change-link" href="#ChangeLanguage" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeLanguage">
                                                <i class="fa fa-pencil"></i>edit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-account-preferences-item">
                                    <div class="row">
                                        <div class="col-md-3 ">
                                            <h5 class="theme-account-preferences-item-title">Default Currency</h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <p class="theme-account-preferences-item-value">United States Dollars (USD)</p>
                                            <div class="collapse" id="ChangeCurrency">
                                                <div class="theme-account-preferences-item-change">
                                                    <div class="form-group theme-account-preferences-item-change-form">
                                                        <select class="form-control">
                                                            <option>United States Dollars (USD)</option>
                                                        </select>
                                                    </div>
                                                    <div class="theme-account-preferences-item-change-actions">
                                                        <a class="btn btn-sm btn-primary" href="#">Save changes</a>
                                                        <a class="btn btn-sm btn-default" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                            <a class="theme-account-preferences-item-change-link" href="#ChangeCurrency" data-toggle="collapse" aria-expanded="false" aria-controls="ChangeCurrency">
                                                <i class="fa fa-pencil"></i>edit
                                            </a>
                                        </div>
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