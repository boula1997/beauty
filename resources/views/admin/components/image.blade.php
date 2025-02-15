@if ($name && $label && $id)
    <div>
        <div class="mb-4 row align-items-center">
            <label class="form-label-title col-sm-3 mb-0">{{ $label }}
                @if ($required)
                    <span class="text-danger">*</span>
                @endif
            </label>
            <div class="col-sm-9">
                <div class=" image-input image-input-empty image-input-outline" id="{{ $id }}"
                    style="background-image: url({{ $value }})">
                    <div class="image-input-wrapper"></div>
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                        data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted"></i>
                        <input type="file" name="{{ $name }}" accept="image/*" />
                        <input type="hidden" name="profile_avatar_remove" />
                    </label>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                        data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                       <i class="fa fa-times text-muted"></i> 
                    </span>
                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
                        data-action="remove" data-toggle="tooltip" title="Remove avatar">
                       <i class="fa fa-times text-muted"></i> 
                    </span>
                </div>
            </div>
        </div>
        @isset($deleteImage)
            @include('admin.components.deleteImage')
        @endisset
    </div>
@endif
