@extends('layouts.layout')
@section('content')

    <section class="services container mb-5" style="max-width: 1500rem" id="service">
        <div class=" 1 row d-flex justify-content-center mb-2">
            <div class="col-md-5 text-center ">
                <p class="mb-0 service_text2"
                    style="color:#121743;
                font-family: Cairo;
                font-size: 35px;
                font-weight: 667;
                line-height: 50px;
                letter-spacing: 0em;
                text-align: center;">
                    نقدم لكم العديد من
                <p class="center service_text3 "
                    style="color: #DF8317;
                    font-size: 35px;
                    font-weight: 667;
                    line-height: 50px;
                    text-align: center;
                        ">
                    <img src="{{ asset('images/Vector (1).svg') }}">
                    خدماتنا
                </p>
                </p>
                <p id="textd" class=" service_text1"
                    style="font-family: Cairo;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 50px;
                    letter-spacing: 0em;
                    
                    color:#7B7B7B;
                    ">
                    شركة أكنانا متخصصة في حضانات الاعمال في المملكة </p>
            </div>
        </div>

        <div class="he row d-flex justify-content-between">
            @foreach ($services as $key => $service)
                <div class="col-md-2 mb-5">
                    <div class="d-flex justify-content-center align-items-center mb-5">
                        <img src="{{ asset('storage/' . $service->media()->first()->file_path) }}">
                    </div>
                    <p
                        style="font-family: Cairo; font-size: 24px; font-weight: 600; line-height: 36px; letter-spacing: -0.01em; text-align: center; color: #141414;">
                        {{ $service->title }}
                    </p>
                    <div class="description-container">
                        <p class="short-description"
                            style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">

                            <a class="ml-0 mr-0 text-muted read-more-button">
                                {{ \Illuminate\Support\Str::words($service->description, 8, '...') }}</a>

                        </p>
                        <p class="full-description"
                            style="display: none; font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 26px; letter-spacing: 0em; text-align: center; color:rgba(20, 20, 20, 0.75);">
                            {{ $service->description }}
                        </p>

                        <a class=" show-less-button" style="display: none;color:#121743"> ..عرض القليل</a>
                    </div>
                </div>

                @if ($key < count($services) - 1)
                    <div class="col-md-1  d-flex justify-content-center " style="margin-bottom: 150px">
                        <img src="{{ asset('images/Vector f.svg') }}">
                    </div>
                @endif
            @endforeach
        </div>

    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const descriptionContainers = document.querySelectorAll('.description-container');

            descriptionContainers.forEach(function(container) {
                const shortDescription = container.querySelector('.short-description');
                const fullDescription = container.querySelector('.full-description');
                const readMoreButton = container.querySelector('.read-more-button');
                const showLessButton = container.querySelector('.show-less-button');

                readMoreButton.addEventListener('click', function() {
                    shortDescription.style.display = 'none';
                    fullDescription.style.display = 'block';
                    readMoreButton.style.display = 'none';
                    showLessButton.style.display = 'block';
                });

                showLessButton.addEventListener('click', function() {
                    shortDescription.style.display = 'block';
                    fullDescription.style.display = 'none';
                    readMoreButton.style.display = 'block';
                    showLessButton.style.display = 'none';
                });
            });
        });
    </script>

    <section id="US" class="US container text-center "
        style="max-width: 1400px;margin-top: 10rem !important;margin-bottom: 10rem !important; ">

        <div class="row d-flex justify-content-between mb-5 custom-row-style">
            <div class="col-md-6 d-flex justify-content-start">
                <img src="{{ asset('images/about us.svg') }}" class="custom-image-style">
            </div>
            <div class="col-md-6 ">
                <p class="center mb-3 custom-text-style "
                    style="font-family: Cairo;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: right;">
                    <img src="{{ asset('images/Vector (1).svg') }}">
                    ما هي شركة <span class="custom-text-style"
                        style="color: #DF8317;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: center;
                    ">أكنانا!؟</span>
                </p>
                </p>
                <p class="custom-text_2"
                    style="font-family: Cairo;
                font-size: 22px;
                font-weight: 400;
                line-height: 48px;
                letter-spacing: 0em;
                text-align: right;
                ">
                    أكنانا لحاضنات ومسرعات األعمال شركة سعودية متخصصة في تقديم الخدمات التكاملية المتطورة لمنظومةقطاع
                    التجزئة االلكترونية والمشاريع الناشئة ومتناهية الصغر والصغيرة وأتمتة االعمال ، تستند على خبرةتراكمية
                    ألكثر من 15 عام في مجال تطوير المشاريع ، ومن خالل حزمة المشاريع والنظم التي قامت أكنانابتطويرها وتنفيذها
                    .وعلى ايدي شباب وشابات في مجاالت مختلفة</p>
                <div class="d-flex justify-content-end align-items-between mt-5 ">
                    <a id="contactButton4" href="" class="d-flex align-items-center pr-4">
                        <p class="pr-2"
                            style="font-family: Cairo;
                        font-size: 25px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#DF8317;
                        margin: 0;
                        ">
                            نبذة عنا</p>
                        <img src="{{ asset('images/icon (2).svg') }}" style="margin-right: 10px;">
                    </a>
                    <button id="contactButton3" class="btn btn-primary"
                        style="width:193px;height:50px;font-family: Cairo;
                                font-size: 22px;
                                font-weight: 600;
                                line-height: 30px;
                                letter-spacing: 0em;
                                color:#FFFFFF;
                            ">
                        تواصل معنا
                    </button>

                </div>

            </div>
        </div>
    </section>

    <section class="2030 container" style="max-width: 1400px;margin-bottom: 10rem !important; " id="2030">
        <div class="row d-flex justify-content-between mb-5">

            <div class="col-md-5  fade-in ">
                <p class="center " id="text1"
                    style="font-family: Cairo;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: right;">
                    <img src="{{ asset('images/Vector (1).svg') }}">
                    كيف نساعد في<span id="tex_2"
                        style="color: #DF8317;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: center;
                    ">
                        رؤية 2030 </span>
                </p>
                <p
                    style="font-family: Cairo;
                    font-size: 22px;
                    font-weight: 400;
                    line-height: 48px;
                    letter-spacing: 0em;
                    text-align: right;
                    ">
                    تعمل شركة أكنانا علي تحقيق أفضل رؤية للمملكة العربية السعودية في 2030 طبقا لمعايير مميزة....
                </p>
                <div class="row d-flex justify-content-between align-items-between mt-4 ">
                    <div class="col-md-5 ">

                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                المحتوى المحلّي</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                تعزيز الهوية الوطنية</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                الثقافة والترفيه</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                تمكين المرأة</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                زيادة فرص العمل</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>

                    </div>

                    <div class="col-md-5 ">

                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                التحوّل الرقمي</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                تنويع الموارد</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                الادخار والاستثمار</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                الاثر الاجتماعي</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <div class="pr-2"
                                style="font-family: Cairo;
                            font-size: 18px;
                            font-weight: 600;
                            line-height: 30px;
                            letter-spacing: 0em;
                            text-align: left;
                            color: #121743;
                        ">
                                التنافسية العالمية</div>
                            <img src="{{ asset('images/mark.svg') }}">
                        </div>
                        <div class="d-flex justify-content-end text-center mb-4">
                            <button id="ServButton" class="btn btn-primary"
                                style="width:220px;height:50px;font-family: Cairo;
                        font-size: 22px;
                        font-weight: 600;
                        line-height: 30px;
                        letter-spacing: 0em;
                        color:#FFFFFF;
                        ">
                                أنضم الان
                            </button>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <img src="{{ asset('images/2030.svg') }}" class="custom-image-style">
            </div>
        </div>
    </section>
    <section class="the_range container d-flex justify-content-center "
        style="background-color: #121743;max-width: 100%;height:155px" id="range">

        <div class="container d-flex justify-content-between">
            <div class="col-md-3">
                <div class="mt-5 counter1"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    عدد الزيارات</div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter2"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    عدد الموظفين</div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter3"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    عدد المشاريع</div>
            </div>
            <div class="col-md-3">
                <div class="mt-5 counter4"
                    style="font-family: Cairo; font-size: 25px; font-weight: 500; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                </div>
                <div
                    style="font-family: Cairo; font-size: 18px; font-weight: 400; line-height: 32px; letter-spacing: 0em; text-align: center; color: #F4F0F0;">
                    عدد الشركات</div>
            </div>
        </div>

        </div>
        </div>
    </section>
    <section class="features container text-center " id="features" style="  margin-bottom: 100px;margin-top: 100px">

        <div class="row justify-content-center mt-10 mb-7">

            <div class="col-md-6 d-flex justify-content-end animate-fade-up">

                <div class="row mt-4">
                    <div class="col-md-12 ">
                        <div class="d-flex justify-content-between  " style="margin-bottom: 1.8rem !important;">
                            <!-- Card 4 -->
                            <!-- Card 3 -->
                            <div class="card"
                                style="width:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-right">
                                    <div>
                                        <img src="{{ asset('images/ligth icon.svg') }}" alt="Icon Image">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                        التوجيه و الارشاد</p>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                        نعمل في أكنانا على فهم عميق لاحتياجات كل شركة وتحدياتها نقدم حلولًا مخصصة تساعدها
                                        على
                                        تحقيق أهدافها بنجاح.
                                    </p>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            معرفة المزيد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card "
                                style="margin-left: 30px; width:100%; border-radius: 20px; background: #121743;">

                                <div class="card-body text-right">
                                    <div>
                                        <img src="{{ asset('images/dark icon.svg') }}" alt="Icon Image">
                                    </div>

                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                        الادارة المساندة</p>
                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                        أكنانا تساعد في تعزيز الإرادة المساندة عبر تقديم الدعم والتوجيه للأفراد والشركات،حتي
                                        يحققوا أهدافهم وتجاوز التحديات بثقة
                                    </p>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            معرفة المزيد</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="card" style="width:100%; border-radius: 20px; background: #121743;">

                                <div class="card-body text-right">
                                    <div>
                                        <img src="{{ asset('images/dark icon.svg') }}" alt="Icon Image">
                                    </div>

                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                        الادارة المساندة</p>
                                    <p class="mt-3 text-white"
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                        أكنانا تساعد في تعزيز الإرادة المساندة عبر تقديم الدعم والتوجيه للأفراد والشركات،حتي
                                        يحققوا أهدافهم وتجاوز التحديات بثقة
                                    </p>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            معرفة المزيد</p>
                                    </div>

                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div class="card"
                                style="margin-left: 30px; width:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                                <div class="card-body text-right">
                                    <div>
                                        <img src="{{ asset('images/ligth icon.svg') }}" alt="Icon Image">
                                    </div>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                        التوجيه و الارشاد</p>
                                    <p class="mt-3 "
                                        style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                        نعمل في أكنانا على فهم عميق لاحتياجات كل شركة وتحدياتها نقدم حلولًا مخصصة تساعدها
                                        على
                                        تحقيق أهدافها بنجاح.
                                    </p>
                                    <div class="d-flex justify-content-end align-items-end">
                                        <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                        <p class="color-DF8317"
                                            style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                            معرفة المزيد</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-6 animate-fade-in">

                <div class="center pr-0 text-right" style="margin-top: 30px ">
                    <img src="{{ asset('images/Vector (1).svg') }}">
                    <span
                        style="font-family: Cairo;color: #091157; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: end;">
                        لماذا تختار أكنانا عن
                        <span class="responsive-text1" style="color: #DF8317;">غيرها</span>
                    </span>
                </div>

                <div class="mt-2 mb-5 text-right">
                    <div class="responsive-text">تعمل شركة أكنانا لريادة الاعمال على توسيع نطاق العمل</div>
                    <div class="responsive-text">الخاص بها على أكمل وجه كما تأكد من أن نطاق العمل</div>
                    <div class="responsive-text">
                        يتماشى مع الموارد والجدول الزمني والميزانية المتاحة
                        <div class="text-right responsive-text">...لعملائها حتي تضمن نجاح العمل</div>
                    </div>
                </div>

                <div class="d-flex justify-content-end " style="gap: 30px">
                    <!-- Card 4 -->
                    <div class="card" style=" margin-top:25px;width:100%; border-radius: 20px; background: #121743;">

                        <div class="card-body text-right">
                            <div>
                                <img src="{{ asset('images/dark icon.svg') }}" alt="Icon Image">
                            </div>

                            <p class="mt-3 text-white"
                                style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                الادارة المساندة</p>
                            <p class="mt-3 text-white"
                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    ">
                                أكنانا تساعد في تعزيز الإرادة المساندة عبر تقديم الدعم والتوجيه للأفراد والشركات،حتي
                                يحققوا أهدافهم وتجاوز التحديات بثقة
                            </p>
                            <div class="d-flex justify-content-end align-items-end">
                                <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                <p class="color-DF8317"
                                    style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                    معرفة المزيد</p>
                            </div>

                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card"
                        style="margin-top:25px;width:100%; border-radius: 20px; border: #E6E6E6 1px solid; background: #FFFFFF;">
                        <div class="card-body text-right">
                            <div>
                                <img src="{{ asset('images/ligth icon.svg') }}" alt="Icon Image">
                            </div>
                            <p class="mt-3 "
                                style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 500;
                                    line-height: 26px;
                                    letter-spacing: 0em;
                                    text-align: right;

                                    color:#121743;
                                    ">
                                التوجيه و الارشاد</p>
                            <p class="mt-3 "
                                style="font-family: Cairo;
                                    font-size: 14px;
                                    font-weight: 400;
                                    line-height: 25px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color:#121743;
                                    ">
                                نعمل في أكنانا على فهم عميق لاحتياجات كل شركة وتحدياتها نقدم حلولًا مخصصة تساعدها على
                                تحقيق أهدافها بنجاح.
                            </p>
                            <div class="d-flex justify-content-end align-items-end">
                                <img src="{{ asset('images/ArrowRight.svg') }}" class="mr-2">
                                <p class="color-DF8317"
                                    style="font-family: Cairo;
                                        font-size: 14px;
                                        font-weight: 400;
                                        line-height: 20px;
                                        letter-spacing: 0em;
                                        text-align: center;
                                        color:#DF8317;
                                        margin-bottom: 0;
                                    ">
                                    معرفة المزيد</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="container text-center mb-5" id="programs">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-md-6">

                    <!-- Left and Right Arrow Images -->
                    <div class="d-flex justify-content-start">
                        <span class="d-flex justify-content-center mb-4 pr-2" data-target="#carouselExampleIndicators"
                            data-slide="prev">
                            <img src="{{ asset('images/left.svg') }}" alt="Previous">
                        </span>
                        <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators"
                            data-slide="next">
                            <img src="{{ asset('images/right.svg') }}" alt="Next">
                        </span>
                    </div>
                    <div class="d-flex justify-content-start mb-4">


                        <a class="btn btn-outline-primary" href="{{ route('courses.index') }}"
                            style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                            <img src="{{ asset('images/course.png') }}" style="width: 27px;height;27px">
                            البرامج </a>
                    </div>
                    {{-- rounded image serveces --}}
                </div>
                <div class="col-md-6">
                    <div class="center mt-2"
                        style="font-family: Cairo;
                    font-size: 40px;
                    font-weight: 667;
                    line-height: 75px;
                    letter-spacing: -0.01em;
                    text-align: right;
                    color:#121743;
                    ">
                        <img src="{{ asset('images/Vector (1).svg') }}">
                        البرامج ذات<span
                            style="color: #DF8317;
                        font-family: Cairo;
                        font-size: 40px;
                        font-weight: 667;
                        line-height: 75px;
                        letter-spacing: -0.01em;
                        text-align: right;

                    ">
                            صلة</span>
                    </div>

                </div>
            </div>

            <div class="carousel-inner">
                @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <div class="row mb-5 justify-content-between">
                            @foreach ($courses->slice($i * 3, 3) as $course)
                                @php
                                    $maleCount = $course->reservations()->where('gender', 'male')->count();
                                    $femaleCount = $course->reservations()->where('gender', 'female')->count();
                                    $maxMaleCount = $course->male_count;
                                    $maxFemaleCount = $course->female_count;
                                    $isCourseAvailable = $maleCount < $maxMaleCount || $femaleCount < $maxFemaleCount;
                                @endphp
                                <div class="col-md-4 mt-0">
                                    <div class="justify-content-center">
                                        <span class="d-flex justify-content-center mb-2 ">
                                            <img src="{{ asset('storage/' . $course->media->first()->file_path) }}"
                                                style="width: 350px;height:258px" alt="First Image">
                                        </span>

                                        <div class="d-flex justify-content-end pr-1"
                                            style="font-family: Cairo;
                                    font-size: 18px;
                                    font-weight: 667;
                                    line-height: 34px;
                                    letter-spacing: 0em;
                                    text-align: right;
                                    color: rgba(18, 23, 67, 1);

                                    ">
                                            {{ $course->name }}</div>
                                        <div class="mt-2  pr-1"
                                            style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                            م/{{ $course->professor_name }}
                                            <img src="{{ asset('images/Vector (6).svg') }}">
                                        </div>
                                        <div class="mt-2  pr-1"
                                            style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align: right;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                            المدة : {{ $course->time_duration }}
                                            <img src="{{ asset('images/Vector (5).svg') }}">
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-between">
                                        @if ($isCourseAvailable)
                                            <a href="{{ route('reservation.create', ['course_id' => $course->id]) }}"
                                                id="ServButton2" class="btn btn-primary"
                                                style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                                أنضم الان
                                            </a>
                                        @else
                                            <a type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#courseFullModal" class="btn btn-primary"
                                                style="width:155px;height:35px;font-family: Cairo; font-family: Cairo; font-size: 15px; font-weight: 600; line-height: 28px; letter-spacing: 0em; text-align: center; background:#121743; border:#121743; color:#FFFFFF;">
                                                أنضم الان
                                            </a>
                                        @endif

                                        <div class="mt-2  pr-0"
                                            style="font-family: Cairo;
                                        font-size: 16px;
                                        font-weight: 400;
                                        line-height: 25px;
                                        letter-spacing: 0em;
                                        text-align:;

                                    color: rgba(102, 102, 102, 1);
                                    margin: 0;
                                    ">
                                            {{ $course->location }}
                                            <img src="{{ asset('images/location1.svg') }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <x-pop_up_course />
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators mt-5">
                @for ($i = 0; $i < ceil(count($courses) / 3); $i++)
                    <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                        class="{{ $i === 0 ? 'active' : '' }}"></li>
                @endfor
            </div>
        </div>
    </section>

    <section class="container text-center mt-5 mb-5" id='projects'>
        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left and Right Arrow Images -->
                    <div class="d-flex justify-content-start">
                        <span class="d-flex justify-content-center mb-4 pr-2" data-target="#carouselExampleIndicators1"
                            data-slide="prev">
                            <img src="{{ asset('images/left.svg') }}" alt="Previous">
                        </span>
                        <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators1"
                            data-slide="next">
                            <img src="{{ asset('images/right.svg') }}" alt="Next">
                        </span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="center mt-2"
                        style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">
                        <img src="{{ asset('images/Vector (1).svg') }}">
                        مشاريع قمنا<span
                            style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right;">
                            بتنفيذها </span>
                    </div>
                </div>
            </div>

            <div class="carousel-inner">
                @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <div class="row mb-5 d-flex justify-content-between">
                            @foreach ($projects->slice($i * 4, 4) as $project)
                                <div class="col-md-3">
                                    <img src="{{ asset('storage/' . $project->images->first()->file_path) }}">
                                    <div class="d-flex justify-content-center pr-1"
                                        style="font-family: Cairo;
                                            font-size: 18px;
                                            font-weight: 600;
                                            line-height: 34px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#000000;
                                            margin-top: 2.2rem !important;">
                                        {{ $project->title }}
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                @endfor

            </div>

            <div class="carousel-indicators mt-5">
                @for ($i = 0; $i < ceil(count($projects) / 4); $i++)
                    <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                        class="{{ $i === 0 ? 'active' : '' }}"></li>
                @endfor
            </div>
        </div>
    </section>
    <section class="container text-center mt-5 mb-5" id='events'>
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="row">
                <div class="col-md-6">
                    <!-- Left and Right Arrow Images -->
                    <div class="d-flex justify-content-start">
                        <span class="d-flex justify-content-center mb-4 pr-2" data-target="#carouselExampleIndicators2"
                            data-slide="prev">
                            <img src="{{ asset('images/left.svg') }}" alt="Previous">
                        </span>
                        <span class="d-flex justify-content-center pr-0" data-target="#carouselExampleIndicators2"
                            data-slide="next">
                            <img src="{{ asset('images/right.svg') }}" alt="Next">
                        </span>
                    </div>
                    <div class="d-flex justify-content-start">


                        <a class="btn btn-outline-primary" href="{{ route('events.index') }}"
                            style="
                               
                                border:#121743 1px  solid;
                                color:white;
                                background:#121743;
                                ">
                            <img src="{{ asset('images/event6.png') }}" style="width: 27px;height;27px">
                            الفعاليات </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="center mt-2 "
                        style="font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right; color:#121743;">

                        <img src="{{ asset('images/Vector (1).svg') }}">
                        الفعاليات<span
                            style="color: #DF8317; font-family: Cairo; font-size: 40px; font-weight: 667; line-height: 75px; letter-spacing: -0.01em; text-align: right;">
                            الاخيرة</span>
                    </div>
                </div>
            </div>

            <div class="carousel-inner">
                @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                    <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
                        <div class="row mb-5 justify-content-between">
                            @foreach ($events->slice($i * 3, 3) as $event)
                                <div class="col-md-4 pr-3 mt-4">
                                    <img src="{{ asset('storage/' . $event->media->first()->file_path) }}"
                                        style="width: 350px;height:258px" alt="Event Image">

                                    <div class="d-flex justify-content-center mt-2"
                                        style="font-family: Cairo; font-size: 18px; font-weight: 600; line-height: 34px; letter-spacing: 0em; text-align: center; color:#000000;">
                                        {{ $event->title }}
                                    </div>
                                    <div class="d-flex justify-content-center pr-1"
                                        style="font-family: Cairo; font-size: 16px; font-weight: 400; line-height: 25px; letter-spacing: 0em; text-align: center;">
                                        {{ $event->text }}
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators mt-5">
                @for ($i = 0; $i < ceil(count($events) / 3); $i++)
                    <li data-target="#carouselExampleIndicators2" data-slide-to="{{ $i }}"
                        class="{{ $i === 0 ? 'active' : '' }}"></li>
                @endfor
            </div>
        </div>
    </section>

    <section class="reviews container text-center mt-5 mb-5" id="reviews"
        style="background-image: url('{{ asset('images/client bg.svg') }}'); background-size: 100% 100%; background-repeat: no-repeat;">

        <div class="row d-flex justify-content-center mt-5 mb-5">
            <div class="center mt-5"
                style="font-family: Cairo;
                            font-size: 35px;
                            font-weight: 667;
                            line-height: 50px;
                            letter-spacing: 0em;
                            text-align: center;
                            color:#121743;">
                <img src="{{ asset('images/Vector (1).svg') }}">
                تعرف علي رأي<span
                    style="color: #DF8317;font-family: Cairo;
                                font-size: 35px;
                                font-weight: 667;
                                line-height: 50px;
                                letter-spacing: 0em;
                                text-align: center;
                                ">
                    عملاءنا</span>
            </div>
        </div>


        <div class="row d-flex justify-content-center">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel" style="height:auto">
                <div class="pl-5 d-flex justify-content-between" style="padding-left: 5rem !important;">
                    <span class="d-flex justify-content-center mb-4 pr-2" style="margin-bottom:2rem !important;"
                        data-target="#carouselExampleIndicators3" data-slide="prev">
                        <img src="{{ asset('images/left.svg') }}" alt="Previous">
                    </span>
                    <div class="carousel-inner">
                        <div class="carousel-item active ">
                            <div class="card"
                                style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center ">
                                        <p class=" card-text text-center"
                                            style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                            من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي شخص
                                            محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في تحقيق
                                            اي
                                            شئ وجعل المستحيل ممكن
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                            طلال بن سلمان
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                            مؤسس شركة
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex-justify-content-center">
                                <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="card"
                                style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center ">
                                        <p class=" card-text text-center"
                                            style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                            من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي شخص
                                            محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في تحقيق
                                            اي
                                            شئ وجعل المستحيل ممكن
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                            طلال بن سلمان
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                            مؤسس شركة
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex-justify-content-center">
                                <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                            </div>
                        </div>
                        <div class="carousel-item  ">
                            <div class="card"
                                style="width: 100%;
                                    height:100%;
                                    border:#F8F8F8;
                                    border-radius: 12px;background-color: #F8F8F8">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center ">
                                        <p class=" card-text text-center"
                                            style="font-family: Poppins;
                                            font-size: 20px;
                                            border:#F8F8F8;
                                            font-weight: 400;
                                            line-height: 32px;
                                            letter-spacing: 0em;
                                            text-align: center;
                                            color:#637381;
                                            ">
                                            من أفضل الشركات اللي اتعملت معاهم قمة في الانضباط والتمييز والمتابعة انصح اي شخص
                                            محتاج يبدأ في شركته الخاصة وما عنده خطة موضحة يتواصل معاهم وهما بيساعده في تحقيق
                                            اي
                                            شئ وجعل المستحيل ممكن
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 30px;
                                                font-weight: 600;
                                                line-height: 56px;
                                                letter-spacing: 0em;
                                                text-align: center;
                                                color:#222751;
                                                ">
                                            طلال بن سلمان
                                        </p>
                                    </div>
                                    <div class="d-flex justify-content-center mt-4">
                                        <p
                                            style="font-family: Cairo;
                                                font-size: 20px;
                                                font-weight: 500;
                                                line-height: 37px;
                                                letter-spacing: 0em;
                                                text-align: center;

                                                color:#F0A202;
                                                ">
                                            مؤسس شركة
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex-justify-content-center">
                                <img src="{{ asset('images/Group 1.svg') }}" alt="Previous" style="width: 200px">
                            </div>
                        </div>
                    </div>
                    <span class="pl-2" style="margin-top:7rem !important;" data-target="#carouselExampleIndicators3"
                        data-slide="next">
                        <img src="{{ asset('images/right.svg') }}" alt="Next" class="next">
                    </span>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <script>
        function updateCounter(targetNumber, counterSelector) {
            let currentNumber = 0;
            const counterElement = document.querySelector(counterSelector);

            const interval = setInterval(function() {
                currentNumber++;
                counterElement.textContent = '+ ' + currentNumber;

                if (currentNumber === targetNumber) {
                    clearInterval(interval);
                }
            }, 20);
        }

        function startCounters() {
            updateCounter(350, '.counter1');
            updateCounter(200, '.counter2');
            updateCounter(20, '.counter3');
            updateCounter(90, '.counter4');
        }

        // Call the function to start the counters when the document is ready
        document.addEventListener('DOMContentLoaded', startCounters);

        // Update counters every 5 seconds
        setInterval(startCounters, 10000);
    </script>
    <style>
        .he {
            flex-wrap: nowrap;
            overflow-x: scroll;
            scrollbar-width: thin;
            scrollbar-color: #f9f8f8 transparent;
            max-width: 150%;

        }
    </style>


@endsection
