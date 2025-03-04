@extends('admin.components.form')
@section('form_action', route('roles.store'))
@section('form_type', 'POST')
@section('fields_content')

<div class="page-body">
    <div class="row theme-form">
        <div class="col-12">
            @include('admin.components.alert-error')

            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="title-header option-title">
                                <h5>{{ __('general.create') }} {{ __('general.roles') }}</h5>
                            </div>

                            <div class="row">
                                {{-- ✅ 1. فتح <form> رئيسي يحتوي على كل البيانات --}}
                                <form class="theme-form theme-form-2 mega-form" method="POST" action="{{ route('roles.store') }}">
                                    @csrf  {{-- ضروري لحماية الفورم --}}

                                    {{-- ✅ 2. اسم الدور --}}
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">
                                            Name <span class="theme-color">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" placeholder="Role Name" required />
                                        </div>
                                    </div>

                                    {{-- ✅ 3. العنوان الخاص بالصلاحيات --}}
                                    <div class="mb-3">
                                        <h4 class="form-label-title">Permissions</h4>
                                    </div>

                                    {{-- ✅ 4. مجموعة الـ Checkbox الخاصة بالصلاحيات --}}
                                    <div class="row g-sm-4 g-2">
                                        <div class="col-xl-12">
                                            <div class="row roles-form">
                                                <div class="col-12">
                                                    
                                                    {{-- ✅ 5. سطر "All" بشكل منفصل --}}
                                                    <ul>
                                                        <li>Roles :</li>
                                                        <li>
                                                            <input class="form-check-input checkall" type="checkbox" id="checkAll" />
                                                            <label class="form-check-label m-0" for="checkAll">All</label>
                                                        </li>
                                                    </ul>
                                                    
                                                    {{-- ✅ 6. عرض الصلاحيات كل 4 في سطر --}}
                                                    <ul class="list-unstyled" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 15px;">
                                                        @foreach($permissions as $permission)
                                                            <li>
                                                                <input class="form-check-input check-it" type="checkbox" 
                                                                       id="perm_{{ $permission->id }}" name="permissions[]" value="{{ $permission->name }}" />
                                                                <label class="form-check-label m-0" for="perm_{{ $permission->id }}">
                                                                    {{ ucfirst($permission->name) }}
                                                                </label>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- ✅ 7. زر الإرسال --}}
                                    <div class="card-submit-button mt-4">
                                        <button class="btn btn-animation ms-auto" type="submit">
                                            {{ __('general.submit') }}
                                        </button>
                                    </div>
                                </form> {{-- ✅ إغلاق الفورم الرئيسي --}}
                            </div> {{-- ✅ إغلاق الـ row --}}
                        </div> {{-- ✅ إغلاق الـ card-body --}}
                    </div> {{-- ✅ إغلاق الـ card --}}
                </div> {{-- ✅ إغلاق الـ col-sm-8 --}}
            </div> {{-- ✅ إغلاق الـ row --}}
        </div> {{-- ✅ إغلاق الـ col-12 --}}
    </div> {{-- ✅ إغلاق الـ row theme-form --}}
</div> {{-- ✅ إغلاق الـ page-body --}}

{{-- ✅ 8. JavaScript للتفاعل مع الـ "All" --}}
<script>
    // عندما يتغير حالة الـ "All"
    document.getElementById('checkAll').addEventListener('change', function() {
        // إذا كانت الحالة "محدد"
        var checkboxes = document.querySelectorAll('.check-it');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = document.getElementById('checkAll').checked;
        });
    });

    // عندما يتم تغيير حالة أي checkbox فردي، تحقق من حالة "All"
    var checkboxes = document.querySelectorAll('.check-it');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            var allChecked = true;
            checkboxes.forEach(function(cbox) {
                if (!cbox.checked) {
                    allChecked = false;
                }
            });
            document.getElementById('checkAll').checked = allChecked;
        });
    });
</script>

@endsection
