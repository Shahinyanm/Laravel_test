@extends('layouts.admin')

@section('content')
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list">
                        <div class="basic-tb-hd">
                            <h2>Companies List</h2>
                            <a href="{{route('admin.companies.create')}}" class="btn btn-primary waves-effect"> New </a>
                        </div>

                        <div class="bsc-tbl">
                            <table class="table table-sc-ex">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th> Name</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Street</th>
                                    <th>Number</th>
                                    <th>PostCode</th>
                                    <th>Currency</th>
                                    <th> Type</th>
                                    <th>Owner</th>
                                    <th>Registered</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$company->id}}</td>
                                        <td>{{$company->name}}</td>
                                        <td>{{$company->country}}</td>
                                        <td>{{$company->city}}</td>
                                        <td>{{$company->street}}</td>
                                        <td>{{$company->number}}</td>
                                        <td>{{$company->post}}</td>
                                        <td>{{$company->currency->currency}}</td>
                                        <td>{{$company->type->type}}</td>
                                        <td>{{$company->user->name}}</td>
                                        <td>{{$company->created_at}}</td>
                                        <td>
                                            <form action="{{route('admin.companies.destroy',$company->id)}}">
                                                @csrf
                                                @method('delete')
                                                <a href="{{route('admin.companies.show',$company->id)}}"
                                                   class="btn btn-success success-icon-notika waves-effect btn-xs">
                                                    <i class="notika-icon notika-menus"></i>
                                                </a>
                                                <a href="{{route('admin.companies.edit',$company->id)}}"
                                                   class="btn btn-warning warning-icon-notika waves-effect btn-xs">
                                                    <i class="notika-icon notika-refresh"></i>
                                                </a>
                                                <button  type="submit" class="btn btn-danger btn-xs danger-icon-notika waves-effect"><i class="notika-icon notika-close"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$companies->links()}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('css')
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets')}}/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Bootstrap CSS
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
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/normalize.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/notika-custom-icon.css">
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
    <style>
        .table.table-sc-ex > tbody > tr > td {
            font-size: 12px !important
        }
    </style>
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
    <!-- jvectormap JS
		============================================ -->
    <script src="{{asset('assets')}}/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('assets')}}/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('assets')}}/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('assets')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('assets')}}/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{asset('assets')}}/js/flot/jquery.flot.js"></script>
    <script src="{{asset('assets')}}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{asset('assets')}}/js/flot/curvedLines.js"></script>
    <script src="{{asset('assets')}}/js/flot/flot-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{asset('assets')}}/js/knob/jquery.knob.js"></script>
    <script src="{{asset('assets')}}/js/knob/jquery.appear.js"></script>
    <script src="{{asset('assets')}}/js/knob/knob-active.js"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{asset('assets')}}/js/wave/waves.min.js"></script>
    <script src="{{asset('assets')}}/js/wave/wave-active.js"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{asset('assets')}}/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{asset('assets')}}/js/plugins.js"></script>
    <!--  Chat JS
        ============================================ -->
    <script src="{{asset('assets')}}/js/chat/moment.min.js"></script>
    <script src="{{asset('assets')}}/js/chat/jquery.chat.js"></script>
    <!-- main JS
		============================================ -->
    <script src="{{asset('assets')}}/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{asset('assets')}}/js/tawk-chat.js"></script>
@endpush
