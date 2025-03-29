    @if (isset($module) && isset($action))
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>
                                @lang('general.' . $module) 
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="{{ route($module . '.index') }}">
                                    @lang('general.' . $module)
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                @lang('general.' . $action)
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    @endif


