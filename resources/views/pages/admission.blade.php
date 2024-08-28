@extends('layouts.app')
@section('content')

<x-breadcrumb
page-title="Admissions"
value1="Home"
value2=""
value3="Admissions"
/>

<div class="site-main">


    <section class="ttm-row padding_top70 padding_bottom70 ttm-team-member-single-content clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-lg-1 order-2">
                    <div class="ttm-team-member-content res-991-padding_top40">
                        <h2>Overview</h2>
                        <p class="ttm-textcolor-darkgrey fs-18"><i>"The B.Sc Nursing program is designed to equip aspiring nurses with the necessary skills and knowledge to excel in the healthcare industry."</i></p>
                        <p>The program focuses on providing comprehensive training in nursing, blending theoretical knowledge with practical experience to prepare students for a rewarding career in healthcare. Below are the eligibility criteria for admission to the B.Sc Nursing program:</p>

                        <div class="padding_top30">
                            <h2>Eligibility Criteria for Admission</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding_top15">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey without-border">
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The minimum age for admission shall be 17 years on 31st December of the year in which admission is sought. The maximum age limit for admission shall be 35 years.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Candidates with a Science background who have passed the qualifying 12th Standard examination (10+2) must have obtained a minimum of 45% marks in Physics, Chemistry, and Biology taken together and passed in English individually.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Candidates from State Open Schools recognized by the State Government and the National Institute of Open School (NIOS) recognized by the Central Government, having Science subjects and English, are also eligible.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">English is a compulsory subject in 10+2 for eligibility for admission to the B.Sc. (Nursing) program.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Colour blind candidates are eligible provided that colour corrective contact lenses and spectacles are worn by such candidates.</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding_top15">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey without-border">
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Candidates belonging to all categories must have passed the qualifying examinations (Academic Stream) after a period of 12 years of study with Physics, Chemistry, and Biology or Botany and Zoology.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Every candidate before admission to the course must submit a certificate of medical fitness from an authorized medical officer indicating that the candidate is physically fit to undergo the academic course.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Married candidates are also eligible for admission.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">The minimum educational requirements include passing the Higher Secondary School Certificate Examination (12 years course) or an equivalent examination with Physics, Chemistry, Biology, and English, with a minimum of 40% aggregate marks in PCBE; for SC/ST candidates, the minimum percentage of marks is 35%.</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Candidates who have completed the Senior School Certificate Examination (10+2), pre-degree examinations (10+2), or an equivalent with 12 years of schooling from a recognized Board or University with Science (Physics, Chemistry, Biology) and English are also eligible.</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="padding_top30">
                            <h2>Professional Skills</h2>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="padding_top15">
                                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey without-border">
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Comprehensive understanding of nursing principles and practices</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Proficiency in patient care and clinical skills</span></li>
                                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Effective communication and interpersonal skills</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="padding_top15">
                                        <div class="ttm_fatured_image-wrapper">
                                            <img class="img-fluid" src="{{asset('images/academics/auxiliary-nurse-midwifery.webp')}}" alt="Diploma-in-General-Nursing-and-Midwifery-1" height="100%" width="100%">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </section>


</div>

@endsection
