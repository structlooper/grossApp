@extends('layouts.app')
@section('title')
    add address
@endsection

@section('style')
<style>
    #map {
        min-width: 200px;
        min-height: 200px;
    }



</style>
@endsection
@section('content')
    <section class="account-page section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="row no-gutters">
                        @include('user.profile_sidebar')
                        <div class="col-md-8">
                            <div class="card card-body account-right">
                                <div class="widget">
                                    <div class="section-header">
                                        <h5 class="heading-design-h5">
                                            Add Address
                                        </h5>
                                    </div>
                                    <form >
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Address type <span class="required">*</span></label>
                                                    <select name="address_type" class="form-control" id="address_type" >
                                                        <option value="">--Select address type--</option>
                                                        <option value="HOME">Home</option>
                                                        <option value="OFFICE">Office</option>
                                                        <option value="OTHER    ">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Address line 1 <span class="required">*</span></label>
                                                    <input class="form-control border-form-control" value="" id="address_line_1" placeholder="Address line 1" type="text">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label">Address line 2 <span class="required">*</span></label>
                                                    <input class="form-control border-form-control" value="" id="address_line_2" placeholder="Address line 2" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="" id="">
                                                    <label class="control-label">map location <span class="required">*</span></label>
                                                    <div class="pac-card" id="pac-card">
                                                        <div>
                                                            <div id="type-selector" class="pac-controls" style="display: none">
                                                                <input
                                                                    type="radio"
                                                                    name="type"
                                                                    id="changetype-all"
                                                                    checked="checked"
                                                                />
                                                                <label for="changetype-all">All</label>

                                                                <input type="radio" name="type" id="changetype-establishment" />
                                                                <label for="changetype-establishment">Establishments</label>

                                                                <input type="radio" name="type" id="changetype-address" />
                                                                <label for="changetype-address">Addresses</label>

                                                                <input type="radio" name="type" id="changetype-geocode" />
                                                                <label for="changetype-geocode">Geocodes</label>
                                                            </div>
                                                            <div id="strict-bounds-selector" class="pac-controls" style="display: none">
                                                                <input type="checkbox" id="use-strict-bounds" value="" />
                                                                <label for="use-strict-bounds">Strict Bounds</label>
                                                            </div>
                                                        </div>
                                                        <div id="pac-container">
                                                            <input id="pac-input" type="text" placeholder="Enter a location" />
                                                        </div>
                                                    </div>
                                                    <div id="map"></div>
                                                    <div id="infowindow-content">
                                                        <img src="" width="16" height="16" id="place-icon" />
                                                        <span id="place-name" class="title"></span><br />
                                                        <span id="place-address"></span>
{{--                                                    <input  class="form-control border-form-control" id="pac-input" type="text" placeholder="Enter map location" />--}}
                                                </div>
                                                <input type="hidden" id="map_address">
                                                <input type="hidden" id="lat">
                                                <input type="hidden" id="lng">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="control-label">Locality <small>(optional)</small> </label>
                                                    <textarea name="locality" id="locality" class="form-control" ></textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-12 text-right">
                                                <a href="{{ route('address') }}" class="btn btn-white btn-lg"> Cancel </a>
                                                <button type="button" class="btn  btn-lg btn-secondary" id="add_adderss_btn"> Add Address </button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
@endsection
