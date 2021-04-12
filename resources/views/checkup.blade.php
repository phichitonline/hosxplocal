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
                        <div class="au-card-title" style="background-image:url('{{ URL('images/bg-title-02.jpg') }}');">
                            <div class="bg-overlay bg-overlay--green"></div>
                            <h3>
                                <i class="zmdi zmdi-account-calendar"></i>
                                โปรแกรมตรวจสุขภาพรักษ์ชีวา
                            </h3>
                        </div>
                    </div>
                </section>
                <!-- END WELCOME-->

                <!-- MAIN CONTENT-->
                <section class="p-t-20">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                            <div class="au-card-title" style="background-image:url('{{ URL('images/bg-title-02.jpg') }}');">
                                                <div class="bg-overlay bg-overlay--blue"></div>
                                                <h3>
                                                    <i class="zmdi zmdi-account-calendar"></i>
                                                    {{ $pt_name  }} <span> HN : {{ $patient_hn }}</span>
                                                </h3>
                                                <button class="au-btn-plus">
                                                    <i class="zmdi zmdi-plus"></i>
                                                </button>
                                            </div>
                                            <div class="au-inbox-wrap js-inbox-wrap">
                                                <div class="au-message js-list-load">
                                                    <div class="au-message__noti">
                                                        <p>ได้รับการตรวจจำนวน
                                                            <span>5</span>

                                                            รายการ
                                                        </p>
                                                    </div>
                                                    <div class="au-message-list">
                                                        {{-- <div class="au-message__item unread">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">John Smith</h5>
                                                                        <p>Have sent a photo</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>12 Min ago</span>
                                                                </div>
                                                            </div>
                                                        </div> --}}

                                                        <div class="au-message__item unread">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-03.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">ตรวจร่างกายโดยแพทย์</h5>
                                                                        <p>รายละเอียด</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>การแปลผล</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-03.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">ตรวจวัดความดันโลหิตและชีพจร</h5>
                                                                        <p>รายละเอียด</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>การแปลผล</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-03.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">ตรวจหมู่เลือด (A,B,AB,O)</h5>
                                                                        <p>รายละเอียด</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>การแปลผล</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="au-message__item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap online">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-03.jpg') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">ตรวจความสมบูรณ์ของเม็ดเลือดและเกล็ดเลือด</h5>
                                                                        <p>รายละเอียด</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>การแปลผล</span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        {{-- <div class="au-message__item disable js-load-item">
                                                            <div class="au-message__item-inner">
                                                                <div class="au-message__item-text">
                                                                    <div class="avatar-wrap">
                                                                        <div class="avatar">
                                                                            <img src="{{ URL('images/icon/avatar-05.jpg') }}" alt="Michelle Sims">
                                                                        </div>
                                                                    </div>
                                                                    <div class="text">
                                                                        <h5 class="name">Michelle Sims</h5>
                                                                        <p>Purus feugiat finibus</p>
                                                                    </div>
                                                                </div>
                                                                <div class="au-message__item-time">
                                                                    <span>Sunday</span>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="au-message__footer">
                                                        <button class="au-btn au-btn-load js-load-btn">แสดงทั้งหมด</button>
                                                    </div>
                                                </div>
                                                <div class="au-chat">
                                                    <div class="au-chat__title">
                                                        <div class="au-chat-info">
                                                            <div class="avatar-wrap online">
                                                                <div class="avatar avatar--small">
                                                                    <img src="{{ URL('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                                </div>
                                                            </div>
                                                            <span class="nick">
                                                                <a href="#">John Smith</a>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat__content">
                                                        <div class="recei-mess-wrap">
                                                            <span class="mess-time">12 Min ago</span>
                                                            <div class="recei-mess__inner">
                                                                <div class="avatar avatar--tiny">
                                                                    <img src="{{ URL('images/icon/avatar-02.jpg') }}" alt="John Smith">
                                                                </div>
                                                                <div class="recei-mess-list">
                                                                    <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                                    <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="send-mess-wrap">
                                                            <span class="mess-time">30 Sec ago</span>
                                                            <div class="send-mess__inner">
                                                                <div class="send-mess-list">
                                                                    <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="au-chat-textfield">
                                                        <form class="au-form-icon">
                                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                                                            <button class="au-input-icon">
                                                                <i class="zmdi zmdi-camera"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
                <!-- END PAGE CONTAINER-->


@endsection
