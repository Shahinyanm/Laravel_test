@extends('layouts.admin')

@section('content')
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-form"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Companies</h2>
                                        <p>Welcome to Company Page</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-element-area">
        <div class="container">
            <form action="{{route('companies.update',$compay->id)}}" method="POST" class="form-control">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="name" placeholder="Company Name" value="{{$compay->name}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control"  name="country" placeholder="Country" value="{{$company->country}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-phone"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="City" name="city" value="{{$country->city}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-map"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="street" placeholder="street" value="{{$country->street}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-map"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="number" placeholder="Street address" value="{{$country->number}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-next"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Postal Code" name="post" value="{{$company->post}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-element-list mg-t-30">
                                        <div class="cmp-tb-hd">
                                            <h2>Bootstrap Seelct - Custom Select</h2>
                                            <p>Bootstrap-select is a jQuery plugin that utilizes Bootstrap's dropdown.js to style and bring additional functionality to standard select elements.</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn">
                                                    <h2>Basic Example</h2>
                                                </div>
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker">
                                                        <option>Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Cheriska</option>
                                                        <option>Malias</option>
                                                        <option>Kamines</option>
                                                        <option>Austranas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <h2>Serach Option</h2>
                                                </div>
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker" data-live-search="true">
                                                        <option>Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Cheriska</option>
                                                        <option>Malias</option>
                                                        <option>Kamines</option>
                                                        <option>Austranas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <h2>Option Groups</h2>
                                                </div>
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker">
                                                        <optgroup label="Picnic">
                                                            <option>Drama</option>
                                                            <option>Cariska</option>
                                                            <option>Cheriska</option>
                                                        </optgroup>
                                                        <optgroup label="Camping">
                                                            <option>Malias</option>
                                                            <option>Kamines</option>
                                                            <option>Austranas</option>
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                                    <h2>Disabled Options</h2>
                                                </div>
                                                <div class="bootstrap-select fm-cmp-mg">
                                                    <select class="selectpicker">
                                                        <option disabled="disabled">Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Kamines</option>
                                                        <option disabled="disabled">Malias</option>
                                                        <option>Cheriska</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                    <h2>Multi Select</h2>
                                                </div>
                                                <div class="bootstrap-select">
                                                    <select class="selectpicker" multiple>
                                                        <option>Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Cheriska</option>
                                                        <option>Malias</option>
                                                        <option>Kamines</option>
                                                        <option>Austranas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                    <h2>Limit Selection - Set to 2</h2>
                                                </div>
                                                <div class="bootstrap-select">
                                                    <select class="selectpicker" multiple data-max-options="2" title='Choose some of...'>
                                                        <option>Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Cheriska</option>
                                                        <option>Malias</option>
                                                        <option>Kamines</option>
                                                        <option>Austranas</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <div class="nk-int-mk sl-dp-mn mg-t-30">
                                                    <h2>Display Count</h2>
                                                </div>
                                                <div class="bootstrap-select">
                                                    <select class="selectpicker" multiple data-selected-text-format="count">
                                                        <option>Drama</option>
                                                        <option>Cariska</option>
                                                        <option>Cheriska</option>
                                                        <option>Malias</option>
                                                        <option>Kamines</option>
                                                        <option>Austranas</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Input Mask</h2>
                                <p>An input mask helps the user with the input. This can be useful for dates, numerics, phone numbers etc...</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>ISBN 1</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-support"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="999-99-999-9999-9" placeholder="ISBN">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>IPV4</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-mail"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IPV4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Tax ID</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-tax"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="99-9999999" placeholder="Tax ID">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Phone</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-phone"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="(999) 999-9999" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Currency</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-dollar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="$ 999,999,999.99" placeholder="Currency">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Date</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-calendar"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="99/99/9999" placeholder="dd/mm/yyyy">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Postal Code</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-star"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="9999" placeholder="Postal Code">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>IP Address</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-ip-locator"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="999.999.999.9999" placeholder="IP">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk">
                                        <h2>Credit Card</h2>
                                    </div>
                                    <div class="form-group ic-cmp-int form-elet-mg">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-credit-card"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" data-mask="999 999 999 9999" placeholder="Credit Card">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Chosen</h2>
                                <p>Make long, unwieldy select boxes more user friendly.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Basic Example</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" data-placeholder="Choose a Country...">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                        <h2>Disabled Items</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" data-placeholder="Choose a Country...">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option disabled value="Afghanistan">Afghanistan</option>
                                            <option disabled value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option disabled value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                        <h2>Multiple Example</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen" multiple data-placeholder="Choose a Country...">
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Aland Islands">Aland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                        <h2>Option Group</h2>
                                    </div>
                                    <div class="chosen-select-act">
                                        <select class="chosen" data-placeholder="Your Favorite Football Team">
                                            <optgroup label="NFC EAST">
                                                <option>Dallas Cowboys</option>
                                                <option>New York Giants</option>
                                                <option>Philadelphia Eagles</option>
                                                <option>Washington Redskins</option>
                                            </optgroup>
                                            <optgroup label="NFC NORTH">
                                                <option>Chicago Bears</option>
                                                <option>Detroit Lions</option>
                                                <option>Green Bay Packers</option>
                                                <option>Minnesota Vikings</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-element-list mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Toggle Switch</h2>
                                <p>Material Design look alike Toggle Switches based on Radio Box.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn tg-dp-mn">
                                        <h2>Option Group</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act fm-cmp-mg">
                                                <div class="nk-toggle-switch">
                                                    <label for="ts1" class="ts-label">Toggle Swith Default</label>
                                                    <input id="ts1" type="checkbox" hidden="hidden">
                                                    <label for="ts1" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act sm-res-mg-t-10">
                                                <div class="nk-toggle-switch disabled">
                                                    <label for="tsd" class="ts-label">Toggle Swith Disable</label>
                                                    <input id="tsd" type="checkbox" hidden="hidden" checked="checked" disabled="disabled">
                                                    <label for="tsd" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn tg-dp-mn mg-t-30">
                                        <h2>Optional Color schemes</h2>
                                        <p>Use the given data attribute to change the color scheme of the Toggle Switch</p>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act fm-cmp-mg">
                                                <div class="nk-toggle-switch" data-ts-color="red">
                                                    <label for="ts2" class="ts-label">Toggle Swith Red</label>
                                                    <input id="ts2" type="checkbox" hidden="hidden">
                                                    <label for="ts2" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act sm-res-mg-t-10">
                                                <div class="nk-toggle-switch" data-ts-color="blue">
                                                    <label for="ts3" class="ts-label">Toggle Swith Blue</label>
                                                    <input id="ts3" type="checkbox" hidden="hidden">
                                                    <label for="ts3" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="green">
                                                    <label for="ts4" class="ts-label">Toggle Swith Green</label>
                                                    <input id="ts4" type="checkbox" hidden="hidden">
                                                    <label for="ts4" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="cyan">
                                                    <label for="ts5" class="ts-label">Toggle Swith Cyan</label>
                                                    <input id="ts5" type="checkbox" hidden="hidden">
                                                    <label for="ts5" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="lime">
                                                    <label for="ts6" class="ts-label">Toggle Swith Lime</label>
                                                    <input id="ts6" type="checkbox" hidden="hidden">
                                                    <label for="ts6" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="amber">
                                                    <label for="ts7" class="ts-label">Toggle Swith Amber</label>
                                                    <input id="ts7" type="checkbox" hidden="hidden">
                                                    <label for="ts7" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="purple">
                                                    <label for="ts8" class="ts-label">Toggle Swith Purple</label>
                                                    <input id="ts8" type="checkbox" hidden="hidden">
                                                    <label for="ts8" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="toggle-select-act mg-t-30">
                                                <div class="nk-toggle-switch" data-ts-color="pink">
                                                    <label for="ts9" class="ts-label">Toggle Swith Pink</label>
                                                    <input id="ts9" type="checkbox" hidden="hidden">
                                                    <label for="ts9" class="ts-helper"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="range-slider-wrap mg-t-30">
                            <div class="cmp-tb-hd">
                                <h2>Input Slider</h2>
                                <p>Range slider offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms fm-cmp-mg">
                                        <div class="slider-wrapper purple-slider">
                                            <div id="slider"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms sm-res-mg-t-10">
                                        <div class="slider-wrapper purple-slider">
                                            <div id="slider1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms mg-t-30">
                                        <div class="spacer-b16a">
                                            <label for="amountp">Maximum price:</label>
                                            <input type="text" id="amountp" class="slider-input">
                                        </div>
                                        <div class="slider-wrapper yellow-slider">
                                            <div id="slider2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms mg-t-30">
                                        <div class="spacer-b16a">
                                            <label for="bedrooms">Number of bedrooms:</label>
                                            <input type="text" id="bedrooms" class="slider-input">
                                        </div>
                                        <div class="slider-wrapper blue-slider">
                                            <div id="slider3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms mg-t-30">
                                        <div class="spacer-b16a">
                                            <label for="budget">Project Budget:</label>
                                            <input type="text" id="budget" class="slider-input">
                                        </div>
                                        <div class="slider-wrapper purple-slider">
                                            <div id="slider8"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms mg-t-30">
                                        <div class="spacer-b16a">
                                            <label for="amounts">Price range:</label>
                                            <input type="text" id="amounts" class="slider-input">
                                        </div>
                                        <div class="slider-wrapper">
                                            <div id="slider10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="cmp-tb-hd mg-t-20 bcs-hd">
                                        <h2>Vertical Range Slider</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms">
                                        <div id="eq" class="slider-group blue-slider">
                                            <div class="sliderv-wrapper"><span>77</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>55</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>40</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>55</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>77</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="themesaller-forms">
                                        <div id="eq2" class="slider-group purple-slider">
                                            <div class="sliderv-wrapper"><span>77</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>55</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>40</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>55</span>
                                            </div>
                                            <div class="sliderv-wrapper"><span>77</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

@stop

@push('css')
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{assets('assets')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{assets('assets')}}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/animate.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/summernote/summernote.css">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/color-picker/farbtastic.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/chosen/chosen.css">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/notification/notification.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/dropzone/dropzone.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{assets('assets')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{assets('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    @endpush

@push('js')
    <script src="{{assets('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{assets('assets')}}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{assets('assets')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{assets('assets')}}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{assets('assets')}}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{assets('assets')}}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{assets('assets')}}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{assets('assets')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{assets('assets')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{assets('assets')}}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{assets('assets')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{assets('assets')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{assets('assets')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{assets('assets')}}/js/flot/jquery.flot.js"></script>
    <script src="{{assets('assets')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{assets('assets')}}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{assets('assets')}}/js/knob/jquery.knob.js"></script>
    <script src="{{assets('assets')}}/js/knob/jquery.appear.js"></script>
    <script src="{{assets('assets')}}/js/knob/knob-active.js"></script>
    <!-- Input Mask JS
		============================================ -->
    <script src="{{assets('assets')}}/js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{assets('assets')}}/js/icheck/icheck.min.js"></script>
    <script src="{{assets('assets')}}/js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{assets('assets')}}/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{assets('assets')}}/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="{{assets('assets')}}/js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{assets('assets')}}/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="{{assets('assets')}}/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{assets('assets')}}/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
		============================================ -->
    <script src="{{assets('assets')}}/js/color-picker/farbtastic.min.js"></script>
    <script src="{{assets('assets')}}/js/color-picker/color-picker.js"></script>
    <!--  notification JS
		============================================ -->
    <script src="{{assets('assets')}}/js/notification/bootstrap-growl.min.js"></script>
    <script src="{{assets('assets')}}/js/notification/notification-active.js"></script>
    <!--  summernote JS
		============================================ -->
    <script src="{{assets('assets')}}/js/summernote/summernote-updated.min.js"></script>
    <script src="{{assets('assets')}}/js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{assets('assets')}}/js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{assets('assets')}}/js/wave/waves.min.js"></script>
    <script src="{{assets('assets')}}/js/wave/wave-active.js"></script>
    <!--  chosen JS
		============================================ -->
    <script src="{{assets('assets')}}/js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{assets('assets')}}/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{assets('assets')}}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{assets('assets')}}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{assets('assets')}}/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{assets('assets')}}/js/tawk-chat.js"></script>
    @endpush
