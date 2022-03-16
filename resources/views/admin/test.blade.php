@include('admin.header')
<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">@lang('Test')</h1>

</div>
<!-- PAGE-HEADER END -->

<!-- ROW OPEN -->
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('Test Formu')</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" enctype="multipart/form-data" action="{{route('admin.testPost')}}" method="post" novalidate>
                    @csrf
                    <div class="form-row">

                        <div class="col-xl-12 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">@lang('Test Ekle')</h3>
                                        </div>
                                        <br>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('First Name')</label>
                                            <input type="text" class="form-control" name="first_name" required>
                                        </div>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('Last Name')</label>
                                            <input type="text" class="form-control" name="last_name" required>
                                        </div>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('Position')</label>
                                            <input type="text" class="form-control" name="position" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" style="margin-left: 22px;">@lang('Ekle')</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row row-sm">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@lang('Test Listesi')</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                        <thead>
                        <tr>
                            <th>@lang('First Name')</th>
                            <th>@lang('Last Name')</th>
                            <th>@lang('Position')</th>
                            <th>@lang('Status')</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                            <tr>
                                <td>{{$test->first_name}}</td>
                                <td>{{$test->last_name}}</td>
                                <td>{{$test->position}}</td>
                                <td>@if($test->status == 1)
                                        <a href="{{route('admin.testStatusUpdate',[$test->id,$test->status])}}"><span class="badge badge-success-light">@lang('Aktif')</span></a>
                                    @elseif($test->status == 0)
                                        <a href="{{route('admin.testStatusUpdate',[$test->id,$test->status])}}"><span class="badge badge-danger-light">@lang('Pasif')</span></a>
                                    @endif </td>
                                <td>
                                    <a href="{{route('admin.testUpdate',$test->id)}}" class="btn btn-primary">@lang('Güncelle')</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
