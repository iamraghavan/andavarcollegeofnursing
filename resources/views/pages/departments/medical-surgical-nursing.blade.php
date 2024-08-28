@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Medical Surgical Nursing Department"
value1="Home"
value2="Departments"
value3="Medical Surgical Nursing Department"
/>

<div class="site-main">

    <div class="ttm-row sidebar ttm-sidebar-left clearfix">
        <div class="container">
            <!-- row -->
            <div class="row">
                @php
                $menuItems = [
                    ['title' => 'Obstetrics & Gynaecological Nursing', 'url' => '/departments/obstetrics-gynaecological-nursing'],
                    ['title' => 'Medical Surgical Nursing Department', 'url' => '/departments/medical-surgical-nursing'],
                    ['title' => 'Community Health Nursing', 'url' => '/departments/community-health-nursing'],
                    ['title' => 'Child Health Nursing Department', 'url' => '/departments/child-health-nursing'],
                    ['title' => 'Mental Health Nursing', 'url' => '/departments/mental-health-nursing'],
                ];
                @endphp

            <x-sidebar-menu :menuItems="$menuItems" />

                <div class="col-lg-12 content-area">
                    <div class="ttm-service-single-content-area">
                        <div class="ttm-service-description">
                            <h3>Medical Surgical Nursing Department</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <!-- Choose the appropriate image URL -->
                                    <img class="img-fluid" src="https://lh7-us.googleusercontent.com/docsz/AD_4nXfcU8Et9aG4Ndx3nJ2IwV0teS80SxaWP781KFafR3BpD8CybqPDDU_1YrQFRUR3OtX1lV6SOrTyecAOKK6DJjkgBOmDOgWnl0uiYcBlyH0axL_26DRclxk9RftcK0npejaUr9ieiUbebUjgaQqDciROyhiH8W5iiHXzKuZox-4m3AqJDgi7UQ?key=f30SxsrIdZrNjDfABeieNw" alt="medical-surgical-nursing" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Department of Medical Surgical Nursing (MSN) aims to thoroughly prepare students in both the art and science of Nursing. The program meets high educational and clinical standards, covering both basic and advanced concepts. It equips students to independently perform essential activities such as health promotion, illness prevention, and care for the ill, disabled, and dying. The department emphasizes workplace advocacy, evidence-based practice, professional development, national leadership, and research within the healthcare system.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The clinical services provided by the department include supervising students, patient care, in-service education, conducting awareness programs, health screening, clinical administration, and research activities. The department's goal is to offer comprehensive training to undergraduate students, ensuring they are well-versed not only in fundamental knowledge and skills but also in the latest scientific advancements in clinical practices. This approach prepares students to tackle new challenges and seize opportunities in various healthcare settings.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- row end -->
        </div>
    </div>

</div>

@endsection
