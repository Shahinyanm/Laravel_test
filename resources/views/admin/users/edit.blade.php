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
                                        <p>Welcome to Company Edit Page</p>
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
            <form method="POST" action="{{ route('admin.users.update',$user->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$user->name) }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email',$user->email) }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
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
