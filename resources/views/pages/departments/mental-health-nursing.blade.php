@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Mental Health Nursing"
value1="Home"
value2="Departments"
value3="Mental Health Nursing"
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
                            <h3>Mental Health Nursing</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <!-- Image URL for Mental Health Nursing Department -->
                                    <img class="img-fluid" src="https://lh7-us.googleusercontent.com/docsz/AD_4nXcsJ6jSm5wmWWiAz7Of_f1vbKre59Bv5Nwh7shNjPpzM-GsjpxktgwKwW9eOKKM6goGncz3Ct9YzDz-PLfHK7YQAivHOlnLlnbxDyib56_L12JkbvXhD4s2cjQCO8BxnDp6bc51GvAOqrW7mvHOXz2mSD89O5qqiYT-cNm4krBJv2JdtSlQEgc?key=7-gbZftaRIQ82qnp6Z2zwQ" alt="mental-health-nursing" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    Mental health is a crucial aspect of overall health and well-being. It encompasses emotional, psychological, and social well-being, affecting how we think, feel, and act. It also influences how we handle stress, relate to others, and make healthy decisions throughout life, from childhood to adulthood.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    Mental health nursing is a specialized field dedicated to caring for individuals with mental health disorders to improve their quality of life. Mental health nurses are skilled professionals who provide essential care and support to those experiencing mental health issues. The program offers both theoretical and practical lessons in nursing, ensuring students are up-to-date with the latest clinical practices and curriculum.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The education provided in mental health nursing includes knowledge in mental health and psychiatric nursing, active listening, counseling skills, patience, and sensitivity. Students learn to utilize technology for learning and teaching, supervise and support learning activities, create assignment briefs, mark assessments, and provide constructive feedback. The program also involves participating in quality assurance procedures and liaising with external examiners.
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
