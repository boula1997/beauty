@if ($module && $action)
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>@lang('general.'.$action) @lang('general.'.$module)</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route($module.'.index') }}">@lang('general.'.$module)</a></li>
                    <li class="breadcrumb-item active">@lang('general.'.$action)</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endif
