@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Obstetrics & Gynaecological Nursing"
value1="Home"
value2="Departments"
value3="Obstetrics & Gynaecological Nursing"
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
                            <h3>Obstetrics & Gynaecological Nursing Department</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <img class="img-fluid" src="https://lh7-us.googleusercontent.com/docsz/AD_4nXdFTwaasrLWHEaQ1WpEctpETkFyWyfbCtyQbbZX4fdyYqsgZPHokAtc5nTBR8eWJ4ZGfGHcGSCs_x0dWzYI-UkLKvRAQoogveRiEEKNzCq1i7O55xoaC8IQf-kg9Q-HK8gAfYNYYSyE9wFAukOcIJY1i0wiqy-jeAo_tsnEg0fQVRXIMMmtG-k?key=fDc2r6d3n_BbxuYCf7Lxlg" alt="obstetrics-gynaecological-nursing" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The specialty of Obstetrics & Gynaecological Nursing focuses on providing care to women throughout pregnancy, childbirth, and the postpartum period. To ensure the well-being of both the mother and child, it is crucial to promote health from before childbirth through ongoing support. Prenatal care is vital for both maternal and fetal health, as well as for preparing families emotionally for the responsibilities of child-rearing. Effective and timely care significantly contributes to reducing maternal mortality and morbidity rates.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Department of Obstetrics and Gynaecological Nursing is committed to delivering high-quality professional services. Our approach is holistic, addressing the needs of women, newborns, and their families comprehensively.
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
