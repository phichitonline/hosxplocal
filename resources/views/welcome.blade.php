@extends('layouts.theme')

@section('content')


@foreach ($patient_data as $data)
    @php
        $pt_name = $data->pname.$data->fname."  ".$data->lname;
        $pt_cid = $data->cid;
    @endphp
@endforeach

            <!-- PAGE CONTENT-->
            <div class="page-content--bgf7">

                <!-- WELCOME-->
                <section class="welcome p-t-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <h1 class="title-4">ชื่อผู้รับบริการ :
                                    <span>{{ $pt_name  }}</span>
                                </h1>
                                <h3 class="title-4">HN :
                                    <span>{{ $patient_hn }}</span>
                                </h3>
                                <hr class="line-seprate">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END WELCOME-->

                <!-- STATISTIC-->
                <section class="statistic statistic2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                            <a class="col-md-12 col-lg-12" href="checkup/?hn={{ $patient_hn }}">
                                <div class="statistic__item statistic__item--green">
                                    <h2 class="number">ตรวจสุขภาพ</h2>
                                    <span class="desc">บันทึกสรุปผลการตรวจสุขภาพ</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-account-o"></i>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <a class="col-md-12 col-lg-12" href="http://hdcex.bmnhos.com/index.php/dmht/onepagencd?cid={{ $patient_cid }}">
                                <div class="statistic__item statistic__item--orange">
                                    <h2 class="number">HDC Data Exchange</h2>
                                    <span class="desc"> </span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-shopping-cart"></i>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <a class="col-md-12 col-lg-12" href="#">
                                <div class="statistic__item statistic__item--blue">
                                    <h2 class="number">NCD Data</h2>
                                    <span class="desc"> </span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-calendar-note"></i>
                                    </div>
                                </div>
                            </a>
                            </div>
                            <div class="col-md-6 col-lg-3">
                            <a class="col-md-12 col-lg-12" href="#">
                                <div class="statistic__item statistic__item--red">
                                    <h2 class="number">อื่นๆ</h2>
                                    <span class="desc">...</span>
                                    <div class="icon">
                                        <i class="zmdi zmdi-money"></i>
                                    </div>
                                </div>
                            </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- END STATISTIC-->

@endsection
