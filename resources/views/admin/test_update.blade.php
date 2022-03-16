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
                <h3 class="card-title">@lang('Test Güncelleme Formu')</h3>
            </div>
            <div class="card-body">
                <form class="needs-validation" enctype="multipart/form-data" action="{{route('admin.testUpdatePost',$test->id)}}" method="post" novalidate>
                    @csrf
                    <div class="form-row">

                        <div class="col-xl-12 mb-3">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">@lang('Test Güncelle')</h3>
                                        </div>
                                        <br>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('First Name')</label>
                                            <input type="text" class="form-control" value="{{$test->first_name}}" name="first_name" required>
                                        </div>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('Last Name')</label>
                                            <input type="text" class="form-control" value="{{$test->last_name}}" name="last_name" required>
                                        </div>
                                        <div class="col-xl-10 mb-3" style="margin-left: 10px;">
                                            <label for="validationDefault01">@lang('Position')</label>
                                            <input type="text" class="form-control" value="{{$test->position}}" name="position" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit" style="margin-left: 22px;">@lang('Güncelle')</button>
                </form>
            </div>
        </div>
    </div>
</div>
@include('admin.footer')
