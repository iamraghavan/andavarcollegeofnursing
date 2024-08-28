@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Community Health Nursing"
value1="Home"
value2="Departments"
value3="Community Health Nursing"
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
                            <h3>Community Health Nursing</h3>

                            <div class="padding_top20 padding_bottom20">
                                <div class="ttm_fatured_image-wrapper">
                                    <!-- Image URL for Community Health Nursing -->
                                    <img class="img-fluid" src="https://lh7-us.googleusercontent.com/docsz/AD_4nXdJ5iHYR4SI8_jRfu4tkn438oSkBmmkUH6hVdlSPXswqWt2A2N5jCu0t7IYMw4lijaIpDdEYMsw8A_NxFEzYtXuaZM-X3xJfHxKfLtYQWXwkpnDb0zX8kg1RSf4FtAcjupCLikjKEfYOEYJZWMHRAiC8URhsHg2XK6VauGiU9pMZMWh-_XzDoc?key=xqXG_zke3fQ1UWfRmJSUkA" alt="community-health-nursing" height="100%" width="100%">
                                </div>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The Department of Community Health Nursing is one of the five departments at the College of Nursing in Andavar Institution. This department plays a crucial role in training, service, and research within the field of Community Health Nursing. Field training is provided in both urban and rural areas, with a focus on community health at government primary health centers.
                                </p>
                            </div>

                            <div class="padding_top15 padding_bottom5">
                                <p class="text-justify">
                                    The department actively conducts various National Health Programs, Mass Health Education Programs, Health Awareness Programs, Health Camps, and more. Additionally, the departmental laboratory is equipped with excellent infrastructure to support teaching and learning activities.
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
