@extends('layouts.layouts-admin')
@section('content')

            <!-- Breadcome End-->
            <!-- Order Form Start-->
            <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form action="{{url('about/update')}}" method="POST"id="adminpro-order-form" class="adminpro-form">
                            @csrf
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="login-title">
                                                <h1>About</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    $about = \App\About::all();
                                    ?>
                                    @foreach($about as $data)
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Pengantar 1</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="pengantar1">{{$data->pengantar1}}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Pengantar 2</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="pengantar2">{{$data->pengantar2}}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                        </div>
                                    </div> <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Pengantar 3</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="pengantar3">{{$data->pengantar3}}</textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg"><i class="fa fa-plus"></i></button>
                                            </div>  
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
            @endsection