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
                                        <p>Welcome to Company Create Page</p>
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
            <form action="{{route('admin.companies.store')}}" method="POST" >
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
                                            <input type="text" class="form-control" name="name" placeholder="Company Name" value="{{$company->name??''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-map"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control"  name="country" placeholder="Country" value="{{$company->country??''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-map"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="City" name="city" value="{{$country->city??''}}">
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
                                            <input type="text" class="form-control" name="street" placeholder="street" value="{{$country->street??''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-map"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" name="number" placeholder="Street address" value="{{$country->number??''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ic-cmp-int">
                                        <div class="form-ic-cmp">
                                            <i class="notika-icon notika-next"></i>
                                        </div>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control" placeholder="Postal Code" name="post" value="{{$company->post??''}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Chose User</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen"  name="user" data-placeholder="Choose a User...">
                                            @foreach($users as $user)
                                                <option  value="{{$user->id}}"> {{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Chose Company Type</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen"  name="type" data-placeholder="Choose a User...">
                                            @foreach($companyTypes as $type)
                                                <option  value="{{$type->id}}"> {{$type->type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="nk-int-mk sl-dp-mn">
                                        <h2>Chose Currency</h2>
                                    </div>
                                    <div class="chosen-select-act fm-cmp-mg">
                                        <select class="chosen"  name="type" data-placeholder="Choose a User...">
                                            @foreach($currencies as $currency)
                                                <option  value="{{$currency->id}}"> {{$currency->currency}}</option>
                                            @endforeach
                                        </select>
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
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    <!-- summernote CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/summernote/summernote.css">
    <!-- Range Slider CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/themesaller-forms.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/color-picker/farbtastic.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/chosen/chosen.css">
    <!-- notification CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/notification/notification.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/dropzone/dropzone.css">
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/wave/waves.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
@endpush

@push('js')
    <script src="{{asset('assets')}}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{asset('assets')}}/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{asset('assets')}}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{asset('assets')}}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{asset('assets')}}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{asset('assets')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('assets')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{asset('assets')}}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{asset('assets')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('assets')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('assets')}}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{asset('assets')}}/js/flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('assets')}}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('assets')}}/js/knob/jquery.knob.js"></script>
    <script src="{{asset('assets')}}/js/knob/jquery.appear.js"></script>
    <script src="{{asset('assets')}}/js/knob/knob-active.js"></script>
    <!-- Input Mask JS
		============================================ -->
    <script src="{{asset('assets')}}/js/jasny-bootstrap.min.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="{{asset('assets')}}/js/icheck/icheck.min.js"></script>
    <script src="{{asset('assets')}}/js/icheck/icheck-active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="{{asset('assets')}}/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="{{asset('assets')}}/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="{{asset('assets')}}/js/rangle-slider/rangle-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="{{asset('assets')}}/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="{{asset('assets')}}/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
		============================================ -->
    <script src="{{asset('assets')}}/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
		============================================ -->
    <script src="{{asset('assets')}}/js/color-picker/farbtastic.min.js"></script>
    <script src="{{asset('assets')}}/js/color-picker/color-picker.js"></script>
    <!--  notification JS
		============================================ -->
    <script src="{{asset('assets')}}/js/notification/bootstrap-growl.min.js"></script>
    <script src="{{asset('assets')}}/js/notification/notification-active.js"></script>
    <!--  summernote JS
		============================================ -->
    <script src="{{asset('assets')}}/js/summernote/summernote-updated.min.js"></script>
    <script src="{{asset('assets')}}/js/summernote/summernote-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="{{asset('assets')}}/js/dropzone/dropzone.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('assets')}}/js/wave/waves.min.js"></script>
    <script src="{{asset('assets')}}/js/wave/wave-active.js"></script>
    <!--  chosen JS
		============================================ -->
    <script src="{{asset('assets')}}/js/chosen/chosen.jquery.js"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{asset('assets')}}/js/chat/jquery.chat.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('assets')}}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('assets')}}/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('assets')}}/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{asset('assets')}}/js/tawk-chat.js"></script>
@endpush
