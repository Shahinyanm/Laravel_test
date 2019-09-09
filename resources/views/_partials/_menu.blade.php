<div class="main-menu-area mg-tb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">

                    <li><a data-toggle="tab" href="#companies"><i class="notika-icon notika-windows"></i> Companies</a>
                    </li>
                    <li><a data-toggle="tab" href="#users"><i class="notika-icon notika-edit"></i> Users</a>
                    </li>
                </ul>
                <div class="tab-content custom-menu-content">

                    <div id="companies" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{route('admin.companies.index')}}">Companies</a>
                            </li>

                        </ul>
                    </div>


                    <div id="users" class="tab-pane notika-tab-menu-bg animated flipInX">
                        <ul class="notika-main-menu-dropdown">
                            <li><a href="{{route('admin.users.index')}}">Users</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
