@extends('layouts.app')

@section('content')
    <section class="section-padding messages-pg">
        <h1 class="banner-heading">Messages</h1>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="dashboard-messages">
                        <h1 class="heading">Messages</h1>
                        <div class="messages-box">
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>
                            <div class="messages">
                                <img src="{{ asset('front/assets/images/circle-1.png') }}" alt="img">
                                <div class="content-details">
                                    <div>
                                        <h1>Martin Smith</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur</p>
                                    </div>
                                    <span class="not-badge">1</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="chat-section">
                        <h1 class="chat-title">Martin Smith</h1>
                        <div class="chat-box">
                            <div class="single-chat left">
                                <h6 class="chat-name">Martin Smith</h6>
                                <p class="chat-para">Lorem ipsum dolor sit amet consectetur adipiscing elit consequat,
                                    suspendisse molestie vestibulum</p>
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="" class="chat-img">
                                <span>{{ now()->format('H:i:s') }}</span>
                            </div>
                            <div class="single-chat right">
                                <h6 class="chat-name">Martin Smith</h6>
                                <p class="chat-para">Lorem ipsum dolor sit amet consectetur adipiscing elit consequat,
                                    suspendisse molestie vestibulum</p>
                                <img src="{{ asset('front/assets/images/circle-2.png') }}" alt="" class="chat-img">
                                <span>{{ now()->format('H:i:s') }}</span>
                            </div>
                            <div class="sent-box">
                                <div class="sent-items">
                                    <input class="form-control" type="text" name="sent-message" id="sent-message"
                                        placeholder="Write a message">
                                    <input type="file" name="files" id="files">
                                    <button class="sent-button">
                                        <span class="icon-Icon-awesome-paper-plane"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
