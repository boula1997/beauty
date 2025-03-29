<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'new_password_required' => 'كلمة المرور الجديدة مطلوبة.',
    'new_password_min' => 'يجب أن تحتوي كلمة المرور الجديدة على 8 أحرف على الأقل.',
    'new_password_max' => 'يجب ألا تتجاوز كلمة المرور الجديدة 50 حرفًا.',
    'new_password_confirmed' => 'تأكيد كلمة المرور الجديدة غير متطابق.',
    'new_password_regex' => 'يجب أن تحتوي كلمة المرور الجديدة على حرف كبير وحرف صغير ورقم ورمز خاص على الأقل.',
    
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'password_not_match' => 'كلمات المرور غير متطابقة',

    'old_password_not_correct' => 'كلمة المرور القديمة غير صحيحة',

    'accepted' => 'يجب قبول حقل :attribute',

    'active_url' => 'حقل :attribute لا يُمثّل رابطًا صحيحًا',

    'after' => 'يجب على حقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',

    'alpha' => 'يجب أن لا يحتوي حقل :attribute سوى على حروف',

    'alpha_dash' => 'يجب أن لا يحتوي حقل :attribute على حروف، أرقام ومطّات.',

    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',

    'array' => 'يجب أن يكون حقل :attribute ًمصفوفة',

    'before' => 'يجب على حقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',

    'between' => [

        'numeric' => 'يجب أن تكون قيمة :attribute محصورة ما بين :min و :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute محصورًا ما بين :min و :max كيلوبايت.',

        'string' => 'يجب أن يكون عدد حروف النّص :attribute محصورًا ما بين :min و :max',

        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر محصورًا ما بين :min و :max',

    ],

    'boolean' => 'يجب أن تكون قيمة حقل :attribute إما true أو false ',

    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',

    'date' => 'حقل :attribute ليس تاريخًا صحيحًا',

    'date_format' => 'لا يتوافق حقل :attribute مع الشكل :format.',

    'different' => 'يجب أن يكون حقلان :attribute و :other مُختلفان',

    'digits' => 'يجب أن يحتوي حقل :attribute على :digits رقمًا/أرقام',

    'digits_between' => 'يجب أن يحتوي حقل :attribute ما بين :min و :max رقمًا/أرقام ',

    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',

    'exists' => 'حقل :attribute لاغٍ',

    'filled' => 'حقل :attribute إجباري',

    'image' => 'يجب أن يكون حقل :attribute صورةً',

    'in' => 'حقل :attribute لاغٍ',

    'integer' => 'يجب أن يكون حقل :attribute عددًا صحيحًا',

    'ip' => 'يجب أن يكون حقل :attribute عنوان IP ذي بُنية صحيحة',

    'json' => 'يجب أن يكون حقل :attribute نصآ من نوع JSON.',

    'max' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أصغر من :max.',

        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :max كيلوبايت',

        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',

        'array' => 'يجب أن لا يحتوي حقل :attribute على أكثر من :max عناصر/عنصر.',

    ],  

    'mimes' => 'يجب أن يكون حقل ملفًا من نوع : :values.',

    'min' => [

        'numeric' => 'يجب أن تكون قيمة حقل :attribute أكبر من :min.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :min كيلوبايت',

        'string' => 'يجب أن يكون طول النص :attribute أكبر :min حروفٍ/حرفًا',

        'array' => 'يجب أن يحتوي حقل :attribute على الأقل على :min عُنصرًا/عناصر',

    ],

    'not_in' => 'حقل :attribute لاغٍ',

    'numeric' => 'يجب على حقل :attribute أن يكون رقمًا',

    'regex' => 'صيغة حقل :attribute .غير صحيحة',

    'required' => 'حقل :attribute مطلوب.',

    'required_if' => 'حقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',

    'required_unless' => 'حقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',

    'required_with' => 'حقل :attribute إذا توفّر :values.',

    'required_with_all' => 'حقل :attribute إذا توفّر :values.',

    'required_without' => 'حقل :attribute إذا لم يتوفّر :values.',

    'required_without_all' => 'حقل :attribute إذا لم يتوفّر :values.',

    'same' => 'يجب أن يتطابق حقل :attribute مع :other',

    'size' => [

        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :size.',

        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :size كيلو بايت.',

        'string' => 'يجب أن يحتوي النص :attribute عن ما لا يقل عن  :size حرفٍ/أحرف.',

        'array' => 'يجب أن يحتوي حقل :attribute عن ما لا يقل عن:min عنصرٍ/عناصر',

    ],

    'string' => 'يجب أن يكون حقل :attribute نصآ.',

    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',

    'unique' => 'قيمة حقل :attribute مُستخدمة من قبل',

    'url' => 'صيغة الرابط :attribute غير صحيحة',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [

        'store_id' => 'المتجر',
        'brand_id' => 'العلامة التجارية',
        'category_id' => 'الفئة',
        'subcategory_id' => 'الفئة الفرعية',
        'weight' => 'الوزن',
        'SKU' => 'كود المنتج',

        "permission_id" => "الإذن",
        "setting_id" => "الجلسة",
        "id" => "بطاقة التعريف",
        "model_id" => "النموذج",
        "team_id" => "الفريق",
        "orderproduct_id" => "الفيديو",
        "partner_id" => "الشريك",
        "service_id" => "الخدمة",
        "process_id" => "راي العميل",
        "partner_id" => "الشريك",

        "team_id" => "العضو",
        "contact_id" => "العداد",
        "partner_id" => "الشريك",
        "role_id" => "الدور",
        "page_id" => "الصفحة",
        "tokenable_id" => "الرمز",
        "gallery_id" => "صالة العرض",
        "faq_id" => "الاستفسار",
        "product_id" => "المنتج",
        "batch" => "حزمة",
        "fileable_id" => "قابلة للمرشح",
        "exception" => "الاستثناء",
        "payload" => "الحمولة",
        "count" => "العدد",
        "map" => "الخريطة",
        "twitter" => "تويتر",
        "queue" => "الطابور",
        "tiktok" => "تيك توك",
        "phone1" => "الهاتف 1",
        "email1" => "البريد الالكتروني1",
        "abilities" => "القدرات",
        "phone3" => "الهاتف3",
        "description" => "الوصف",
        "detail" => "التفاصيل",
        "appointment1" => "الموعد 1",
        "meta_data" => "البيانات الوصفية",
        "facebook" => "فيسبوك",
        "youtube_link" => "رابط يوتيوب",
        "connection" => "الاتصال",
        "youtube" => "اليوتيوب",
        "instgram" => "الانستجرام",
        "phone2" => "الهاتف2",
        "email2" => "البريد الإلكتروني 2",
        "address" => "عنوان",
        "copyright" => "حقوق الملكية",
        "created_at" => "أنشئت في",
        "email_verified_at" => "eMail_verified_at",
        "failed_at" => "فشل",
        "updated_at" => "تم التحديث في",
        "last_used_at" => "last_used_at",
        "phone" => "الهاتف",
        "logo" => "الشعار",
        "white_logo" => "الشعارالابيض",
        "uuid" => "uuid",
        "email" => "البريد إلكتروني",
        "identifier" => "المعرف",
        "password" => "كلمة المرور",
        "token" => "الرمز",
        "tokenable_type" => "tokenable_type",
        "url" => "الرابط",
        "title" => "العنوان",
        "fileable_type" => "fileable_type",
        "image" => "الصورة",
        "locale" => "اللغة",
        "message" => "الرسالة",
        "tab" => "فاتورة غير مدفوعة",
        "model_type" => "نوع النموذج",
        "name" => "الاسم",
        "remember_token" => "تذكر _token",
        "guard_name" => "guard_name",
        "subtitle" => "العنوان الفرعي",
        "migration" => "الهجرة",

        "ar"=>[
            "permission_id" => "الإذن باللغة العربية",
            "setting_id" => "الجلسة باللغة العربية",
            "id" => "بطاقة التعريف باللغة العربية",
            "model_id" => "النموذج باللغة العربية",
            "partner_id" => "الفريق باللغة العربية",
            "orderproduct_id" => "الفيديو باللغة العربية",
            "process_id" => "راي العميل باللغة العربية",
            "partner_id" => "شريحة العرض باللغة العربية",
            "contact_id" => "العداد باللغة العربية",
            "role_id" => "الدور باللغة العربية",
            "page_id" => "الصفحة باللغة العربية",
            "tokenable_id" => "الرمز باللغة العربية",
            "gallery_id" => "صالة العرض باللغة العربية",
            "faq_id" => "المدونة باللغة العربية",
            "product_id" => "المنتج باللغة العربية",
            "batch" => "حزمة باللغة العربية",
            "fileable_id" => "قابلة للمرشح باللغة العربية",
            "exception" => "الاستثناء باللغة العربية",
            "payload" => "الحمولة باللغة العربية",
            "count" => "العدد باللغة العربية",
            "map" => "الخريطة باللغة العربية",
            "twitter" => "تويتر باللغة العربية",
            "queue" => "الطابور باللغة العربية",
            "tiktok" => "تيك توك باللغة العربية",
            "phone1" => "الهاتف 1 باللغة العربية",
            "email1" => "البريد الالكتروني1 باللغة العربية",
            "abilities" => "القدرات باللغة العربية",
            "phone3" => "الهاتف3 باللغة العربية",
            "description" => "الوصف باللغة العربية",
            "detail" => "التفاصيل باللغة العربية",
            "appointment1" => "الموعد 1 باللغة العربية",
            "meta_data" => "البيانات الوصفية باللغة العربية",
            "facebook" => "فيسبوك باللغة العربية",
            "youtube_link" => "رابط يوتيوب باللغة العربية",
            "connection" => "الاتصال باللغة العربية",
            "youtube" => "اليوتيوب باللغة العربية",
            "instgram" => "الانستجرام باللغة العربية",
            "phone2" => "الهاتف2 باللغة العربية",
            "email2" => "البريد الإلكتروني 2 باللغة العربية",
            "address" => "عنوان باللغة العربية",
            "copyright" => "حقوق الملكية باللغة العربية",
            "created_at" => "أنشئت في باللغة العربية",
            "email_verified_at" => "eMail_verified_at باللغة العربية",
            "failed_at" => "فشل باللغة العربية",
            "updated_at" => "تم التحديث في باللغة العربية",
            "last_used_at" => "last_used_at باللغة العربية",
            "phone" => "الهاتف باللغة العربية",
            "logo" => "الشعار باللغة العربية",
            "uuid" => "uuid باللغة العربية",
            "email" => "البريد إلكتروني باللغة العربية",
            "identifier" => "المعرف باللغة العربية",
            "password" => "كلمة المرور باللغة العربية",
            "token" => "الرمز باللغة العربية",
            "tokenable_type" => "tokenable_type باللغة العربية",
            "url" => "الرابط باللغة العربية",
            "title" => "العنوان باللغة العربية",
            "fileable_type" => "fileable_type باللغة العربية",
            "image" => "الصورة باللغة العربية",
            "locale" => "اللغة باللغة العربية",
            "message" => "الرسالة باللغة العربية",
            "tab" => "فاتورة غير مدفوعة باللغة العربية",
            "model_type" => "نوع النموذج باللغة العربية",
            "name" => "الاسم باللغة العربية",
            "remember_token" => "تذكر _token باللغة العربية",
            "guard_name" => "guard_name باللغة العربية",
            "subtitle" => "العنوان الفرعي باللغة العربية",
            "migration" => "الهجرة باللغة العربية",
        ],
        "en"=>[
            "permission_id" => "الإذن باللغة الانجليزية",
            "setting_id" => "الجلسة باللغة الانجليزية",
            "id" => "بطاقة التعريف باللغة الانجليزية",
            "model_id" => "النموذج باللغة الانجليزية",
            "partner_id" => "الفريق باللغة الانجليزية",
            "orderproduct_id" => "الفيديو باللغة الانجليزية",
            "process_id" => "الخدمة باللغة الانجليزية",
            "partner_id" => "شريحة العرض باللغة الانجليزية",
            "contact_id" => "العداد باللغة الانجليزية",
            "role_id" => "الدور باللغة الانجليزية",
            "page_id" => "الصفحة باللغة الانجليزية",
            "tokenable_id" => "الرمز باللغة الانجليزية",
            "gallery_id" => "صالة العرض باللغة الانجليزية",
            "faq_id" => "الاستفسار باللغة الانجليزية",
            "product_id" => "المنتج باللغة الانجليزية",
            "batch" => "حزمة باللغة الانجليزية",
            "fileable_id" => "قابلة للمرشح باللغة الانجليزية",
            "exception" => "الاستثناء باللغة الانجليزية",
            "payload" => "الحمولة باللغة الانجليزية",
            "count" => "العدد باللغة الانجليزية",
            "map" => "الخريطة باللغة الانجليزية",
            "twitter" => "تويتر باللغة الانجليزية",
            "queue" => "الطابور باللغة الانجليزية",
            "tiktok" => "تيك توك باللغة الانجليزية",
            "phone1" => "الهاتف 1 باللغة الانجليزية",
            "email1" => "البريد الالكتروني1 باللغة الانجليزية",
            "abilities" => "القدرات باللغة الانجليزية",
            "phone3" => "الهاتف3 باللغة الانجليزية",
            "description" => "الوصف باللغة الانجليزية",
            "detail" => "التفاصيل باللغة الانجليزية",
            "appointment1" => "الموعد 1 باللغة الانجليزية",
            "meta_data" => "البيانات الوصفية باللغة الانجليزية",
            "facebook" => "فيسبوك باللغة الانجليزية",
            "youtube_link" => "رابط يوتيوب باللغة الانجليزية",
            "connection" => "الاتصال باللغة الانجليزية",
            "youtube" => "اليوتيوب باللغة الانجليزية",
            "instgram" => "الانستجرام باللغة الانجليزية",
            "phone2" => "الهاتف2 باللغة الانجليزية",
            "email2" => "البريد الإلكتروني 2 باللغة الانجليزية",
            "address" => "عنوان باللغة الانجليزية",
            "copyright" => "حقوق الملكية باللغة الانجليزية",
            "created_at" => "أنشئت في باللغة الانجليزية",
            "email_verified_at" => "eMail_verified_at باللغة الانجليزية",
            "failed_at" => "فشل باللغة الانجليزية",
            "updated_at" => "تم التحديث في باللغة الانجليزية",
            "last_used_at" => "last_used_at باللغة الانجليزية",
            "phone" => "الهاتف باللغة الانجليزية",
            "logo" => "الشعار باللغة الانجليزية",
            "uuid" => "uuid باللغة الانجليزية",
            "email" => "البريد إلكتروني باللغة الانجليزية",
            "identifier" => "المعرف باللغة الانجليزية",
            "password" => "كلمة المرور باللغة الانجليزية",
            "token" => "الرمز باللغة الانجليزية",
            "tokenable_type" => "tokenable_type باللغة الانجليزية",
            "url" => "الرابط باللغة الانجليزية",
            "title" => "العنوان باللغة الانجليزية",
            "fileable_type" => "fileable_type باللغة الانجليزية",
            "image" => "الصورة باللغة الانجليزية",
            "locale" => "اللغة باللغة الانجليزية",
            "message" => "الرسالة باللغة الانجليزية",
            "tab" => "فاتورة غير مدفوعة باللغة الانجليزية",
            "model_type" => "نوع النموذج باللغة الانجليزية",
            "name" => "الاسم باللغة الانجليزية",
            "remember_token" => "تذكر _token باللغة الانجليزية",
            "guard_name" => "guard_name باللغة الانجليزية",
            "subtitle" => "العنوان الفرعي باللغة الانجليزية",
            "migration" => "الهجرة باللغة الانجليزية",
        ],
        
    ],

];