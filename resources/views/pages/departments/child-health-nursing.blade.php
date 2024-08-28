@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Child Health Nursing Department"
value1="Home"
value2="Departments"
value3="Child Health Nursing Department"
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
                            <h3>Child Health Nursing Department</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <!-- Image URL for Child Health Nursing Department -->
                                    <img class="img-fluid" src="https://lh7-us.googleusercontent.com/docsz/AD_4nXcUxuBoOtLH2CDkjzFhDAGkiaDSvqF_PsaNdQW5KcKD_W0kNRWBqWd0YgFGzJTrnhV0HiakIi5neC_PjN0-PFYuaTK9X7JDxscwgOkHCbpVMZBcd7S1k5E1d9RmPQ-c6GYlsyM0RY0MEgQx-ZiHa5yc46GGdi6-iU5Qyy1H5ucBzD1_a5ST9z0?key=VBEUF0K0p55_FFSAiqV6Pg" alt="child-health-nursing" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Child Health Nursing Department focuses on providing specialized nursing care for children from infancy through adolescence. The department aims to equip students with essential skills to monitor and deliver necessary care to young patients throughout their treatment. It emphasizes understanding modern approaches to pediatric care. The team includes pediatric nurses, nurse practitioners, and nurse educators who are trained to meet the unique healthcare needs of children.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The department offers comprehensive training in the care of neonates, children, and adolescents, adhering to the Indian Nursing Council curriculum. It is actively involved in training scholars to provide care for sick neonates and children, and it engages in research within the field of child health nursing. The well-established laboratory is equipped with models, mannequins, instruments, and audio-visual aids to facilitate the teaching-learning process. The department benefits from experienced nursing faculty members who bring high qualifications and expertise, enhancing the educational experience. Additionally, the department offers a value-based course focusing on neonatal nursing.
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
