@if ($name && $label && $id)
    <div class="col-md-6 col-sm-12">
        <div class="form-group">
            <label class="d-block">
                {{ $label }}
                @if ($required)
                    <span class="text-danger">*</span>
                @endif
            </label>
            <div class="image-input image-input-outline drop-zone" id="{{ $id }}"
                style="background-image: url({{ $value }}); position: relative; cursor: pointer;">
                
                <div class="image-input-wrapper" id="image-preview-{{ $id }}" 
                     style="background-size: cover; background-position: center; width: 100%; height: 250px; display: flex; align-items: center; justify-content: center;">
                    <div class="drag-text @if($value) d-none @endif">Drag & Drop Image Here</div> <!-- إخفاء النص عند وجود صورة -->
                </div>
                
                <input type="file" name="{{ $name }}" accept="image/*" id="file-input-{{ $id }}"
                    style="display: none;" onchange="previewImage(event, '{{ $id }}')">

                <!-- زر لإزالة الصورة (❌) -->
                <button type="button" class="remove-image-btn @if(!$value) d-none @endif" onclick="removeImage('{{ $id }}')">
                    ❌
                </button>
            </div>
        </div>
        @isset($deleteImage)
            @include('admin.components.deleteImage')
        @endisset
    </div>
@endif




@push('scripts')
<script>
// فتح نافذة رفع الصور مرة واحدة فقط
document.querySelectorAll('.image-input').forEach(function (imageInput) {
    imageInput.addEventListener('click', function (event) {
        const fileInput = imageInput.querySelector('input[type="file"]');
        if (fileInput && !fileInput.files.length) {
            event.stopImmediatePropagation(); // منع تكرار فتح النافذة
            fileInput.click();
        }
    });
});

// عرض الصورة بعد الاختيار
function previewImage(event, id) {
    const input = event.target;
    const preview = document.getElementById(`image-preview-${id}`);
    const file = input.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = () => {
            preview.style.backgroundImage = `url(${reader.result})`;
            preview.style.height = "250px"; // تعيين الارتفاع إلى 250px بعد رفع الصورة
            document.getElementById(id).classList.add('image-selected');
            document.querySelector(`#${id} .remove-image-btn`).classList.remove('d-none'); // إظهار زر الإزالة
            document.querySelector(`#${id} .drag-text`).classList.add('d-none'); // إخفاء النص
        };
        reader.readAsDataURL(file);
    } else {
        removeImage(id);
    }
}

// مسح الصورة المختارة
function removeImage(id) {
    const input = document.getElementById(`file-input-${id}`);
    const preview = document.getElementById(`image-preview-${id}`);
    input.value = '';
    preview.style.backgroundImage = 'none';
    preview.style.height = "250px"; // إعادة الارتفاع الافتراضي
    document.getElementById(id).classList.remove('image-selected');
    document.querySelector(`#${id} .remove-image-btn`).classList.add('d-none'); // إخفاء زر الإزالة
    document.querySelector(`#${id} .drag-text`).classList.remove('d-none'); // إظهار النص
}

// التعامل مع Drag and Drop
document.querySelectorAll('.drop-zone').forEach((zone) => {
    zone.addEventListener('dragover', (e) => {
        e.preventDefault();
        zone.classList.add('drag-over');
    });

    zone.addEventListener('dragleave', () => {
        zone.classList.remove('drag-over');
    });

    zone.addEventListener('drop', (e) => {
        e.preventDefault();
        zone.classList.remove('drag-over');

        const input = zone.querySelector('input[type="file"]');
        const file = e.dataTransfer.files[0];

        if (file && file.type.startsWith('image/')) {
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            input.files = dataTransfer.files;
            previewImage({ target: input }, zone.id);
        }
    });
});

</script>
@endpush
