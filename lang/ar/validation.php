<?php

declare(strict_types=1);

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

    'accepted' => 'يجب قبول :attribute.',
    'active_url' => ':attribute لا يُمثّل رابطا صحيحا.',
    'after' => 'يجب على :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => ':attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي :attribute سوى على حروف.',
    'alpha_dash' => 'يجب أن لا يحتوي :attribute سوى على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط.',
    'array' => 'يجب أن يكون :attribute ًمصفوفة.',
    'before' => 'يجب على :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => ':attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date.',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max.',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون قيمة :attribute إما true أو false .',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute.',
    'date' => ':attribute ليس تاريخًا صحيحًا.',
    'date_equals' => 'يجب أن يكون :attribute مطابقاً للتاريخ :date.',
    'date_format' => 'لا يتوافق :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفين.',
    'digits' => 'يجب أن يحتوي :attribute على :digits رقمًا/أرقام.',
    'digits_between' => 'يجب أن يحتوي :attribute بين :min و :max رقمًا/أرقام .',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية.',
    'exists' => 'القيمة المحددة :attribute غير موجودة.',
    'file' => 'الـ :attribute يجب أن يكون ملفا.',
    'filled' => ':attribute إجباري.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أكثر من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :value عُنصرًا/عناصر.',
    ],
    'image' => 'يجب أن يكون :attribute صورةً.',
    'in' => ':attribute غير موجود.',
    'in_array' => ':attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صحيحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صحيحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صحيحًا.',
    'json' => 'يجب أن يكون :attribute نصآ من نوع JSON.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أصغر من :value.',
        'file' => 'يجب أن يكون حجم الملف :attribute أصغر من :value كيلوبايت.',
        'string' => 'يجب أن يكون طول النّص :attribute أقل من :value حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عناصر/عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :value.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :value كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :value حروفٍ/حرفًا.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عناصر/عنصر.',
    ],
    'max' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أصغر من :max.',
        'file' => 'يجب أن لا يتجاوز حجم :attribute :max كيلوبايت.',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حرفاً.',
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية أو أكبر من :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت.',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا.',
        'array' => 'يجب أن يحتوي :attribute على الأقل على :min عُنصرًا/عناصر.',
    ],
    'missing_with' => 'يجب أن يكون حقل :attribute مفقوداً عندما يكون حقل :values موجوداً',
    'not_in' => ':attribute موجود.',
    'not_regex' => 'صيغة :attribute غير صحيحة.',
    'numeric' => 'يجب على :attribute أن يكون رقمًا.',
    'present' => 'يجب تقديم :attribute.',
    'regex' => 'صيغة :attribute غير صحيحة.',
    'required' => ':attribute مطلوب.',
    'required_if' => ':attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => ':attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => ':attribute مطلوب إذا توفّر :values.',
    'required_with_all' => ':attribute مطلوب إذا توفّر :values.',
    'required_without' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'required_without_all' => ':attribute مطلوب إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة :attribute مساوية لـ :size.',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت.',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالضبط.',
        'array' => 'يجب أن يحتوي :attribute على :size عنصرٍ/عناصر بالضبط.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا.',
    'unique' => 'قيمة :attribute مُستخدمة من قبل.',
    'uploaded' => 'فشل في تحميل الـ :attribute.',
    'url' => 'صيغة الرابط :attribute غير صحيحة.',
    'uuid' => ':attribute يجب أن يكون بصيغة UUID سليمة.',
    'enum_value' => ':attribute ليست في القائمة',

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
        'name' => 'الاسم',
        'name_ar' => 'اسم الفعالية بالعربي',
        'name_en' => 'اسم الفعاليةبالانجليزي',
        'full_name' => 'الاسم',
        'job_name' => 'اسم الوظيفة',
        'username' => 'اسم المُستخدم',
        'email' => 'البريد الإلكتروني',
        'password' => 'كلمة السر',
        'password_confirmation' => 'تأكيد كلمة السر',
        'city' => 'المدينة',
        'phone' => 'الهاتف',
        'mobile' => 'الجوال',
        'gender' => 'الجنس',
        'day' => 'اليوم',
        'month' => 'الشهر',
        'year' => 'السنة',
        'hour' => 'ساعة',
        'minute' => 'دقيقة',
        'second' => 'ثانية',
        'content' => 'المُحتوى',
        'description' => 'الوصف',
        'excerpt' => 'المُلخص',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'available' => 'مُتاح',
        'avatar' => 'الصورة الشخصية',
        'city_id' => 'المدينة',
        'current_password' => 'كلمة السر الحالية',
        'new_password' => 'كلمة السر الجديدة',
        'sort' => 'الترتيب',
        'check_in_type' => 'نوع الدخول',
        'start_at' => 'تاريخ البدء',
        'end_at' => 'تاريخ الانتهاء',
        'category_id' => 'تصنيف الفعالية',
        'country_code' => 'رمز الدولة',
        'picture' => 'الصورة',
        'description_ar' => 'الوصف بالعربي',
        'description_en' => 'الوصف بالانجليزي',
        'latitude' => 'خط العرض',
        'longitude' => 'خط الطول',
        'location' => 'الموقع',
        'logo' => 'الشعار',
        'banner' => 'اللافتة',
        'primary_color' => 'اللون الاساسي',
        'secondary_color' => 'اللون الثانوي',
    ],

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
        'name' => [
            'regex' => 'يجب أن يحتوي :attribute على حروف فقط.',
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.',
            'max' => 'حقل :attribute يجب ألا يتجاوز :max حرفاً',
        ],
        'name_ar' => [
            'regex' => 'يجب أن يحتوي :attribute على حروف فقط.',
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.',
            'max' => 'حقل :attribute يجب ألا يتجاوز :max حرفاً',
        ],
        'name_en' => [
            'regex' => 'يجب أن يحتوي :attribute على حروف فقط.',
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.',
            'max' => 'حقل :attribute يجب ألا يتجاوز :max حرفاً',
        ],
        'representative_mobile' => [
            'regex' => ':attribute يجب ان يبدا ب 5 ثم يتبع ب 8 ارقام فقط',
            'max' => 'يجب أن لا يتجاوز طول :attribute :max رقمًا',
        ],
        'password' => [
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.'
        ],
        'current_password' => [
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.'
        ],
        'new_password' => [
            'min' => 'يجب أن يكون طول :attribute على الأقل :min أحرف.'
        ],
        'username' => [
            'min' => 'يجب أن يكون طول :attribute على الأقل 3 أحرف.',
            'max' => 'يجب أن لا يتجاوز طول :attribute 20 حرفاً.'
        ],
        'avatar' => [
            'max' => 'يجب أن لا يتجاوز حجم :attribute :max كيلوبايت.'
        ],
        'code' => [
            'unique' => 'الرمز موجود مسبقًا',
        ],
        'real_name' => [
            'min' => 'يجب أن يكون طول :attribute على الأقل 8 أحرف.',
            'max' => 'يجب أن لا يتجاوز طول :attribute 27 حرفاً.'
        ],
        'city_id' => [
            'prohibited' => 'لا يمكنك اختيار مدينة وأنت غير مقيم',
            'exists' => 'القيمة المختارة للمدينة غير موجودة',
            'integer' => 'القيمة المختارة للمدينة غير موجودة',
        ],
        'image' => [
            'required' => 'الصورة مطلوبة',
            'file' => 'الصورة يجب أن تكون صورة',
            'max' => 'يجب أن لا يتجاوز حجم الصورة 3 ميجا بايت'
        ],
        'mobile' => [
            'regex' => ':attribute يجب ان يبدا ب 5 ثم يتبع ب 8 ارقام فقط',
            'min_digits' => 'يجب أن يكون طول :attribute على الأقل :min أرقام',
            'max_digits' => 'يجب أن لا يتجاوز طول :attribute :max رقمًا',
        ],
        'email' => [
            'email' => 'البريد الإلكتروني غير صحيح',
            'unique' => 'هذا :attribute موجود بالفعل',
        ]
    ]
];
