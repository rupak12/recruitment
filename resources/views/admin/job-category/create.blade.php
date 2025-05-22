@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">@lang('app.createNew')</h4>

                    <form class="ajax-form" method="POST" id="createForm" enctype="multipart/form-data" onsubmit="return false;">
                        @csrf

                    <div id="education_fields">
                        <div class="row">
                            <div class="col-sm-6 nopadding">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" name="name[]" class="form-control" placeholder="@lang('menu.jobCategories') @lang('app.name')">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 nopadding">
                                <div class="form-group">
                                    <input type="file" name="image[]" class="form-control" accept="image/*">
                                </div>
                            </div>
                            <div class="col-sm-2 nopadding">
                                <button class="btn btn-success" type="button" id="add-more"><i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>

                    <button type="button" id="save-form" class="btn btn-success"><i class="fa fa-check"></i> @lang('app.save')</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('footer-script')
<script>
    var room = 1;

    $('#add-more').click(function(){
        room++;

        var divtest = `
            <div class="row removeclass${room}">
                <div class="col-sm-6 nopadding">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" name="name[]" class="form-control" placeholder="@lang('menu.jobCategories') @lang('app.name')">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 nopadding">
                    <div class="form-group">
                        <input type="file" name="image[]" class="form-control" accept="image/*">
                    </div>
                </div>
                <div class="col-sm-2 nopadding">
                    <button class="btn btn-danger" type="button" onclick="remove_education_fields(${room});">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
                <div class="clear"></div>
            </div>`;

        $('#education_fields').append(divtest);
        $(`.removeclass${room} input[type="text"]`).focus();
    })

    function remove_education_fields(rid) {
        $('.removeclass' + rid).remove();
    }

    $('#save-form').click(function () {
        var form = $('#createForm')[0];
        var formData = new FormData(form);

        $.ajax({
            url: '{{route('admin.job-categories.store')}}',
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                window.location.href = response.redirect_url || '{{route('admin.job-categories.index')}}';
            },
            error: function(xhr) {
                // handle errors
            }
        });
    });
</script>
@endpush