<!--
 * Created by PhpStorm.
 * User: Collins
 * Date: 8/12/2019
 * Time: 11:10 PM
-->
@extends('layouts.app')

    @section('content')

        <!--   Big container   -->
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <!--      Wizard container        -->
                    <div class="wizard-container">

                        <div class="card wizard-card" data-color="orange" id="wizardProfile">

                                <!--  You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"  -->

                                    @include('wizard.finish.header')

                                <div class="tab-content">

                                    <!-- Success Page -->

                                    <div class="row container-fluid">
                                        <p class="lead">
                                            <h3 class="text-center"> <span><i class="fa fa-check 2x"></i><i class="fa fa-check 2x"></i><i class="fa fa-check 2x"></i></span> One More Final Step <span><i class="fa fa-check 2x"></i><i class="fa fa-check 2x"></i><i class="fa fa-check 2x"></i></span>  </h3>
                                        </p>
                                        <br>
                                        <p class="lead">
                                            <h4 class="text-center text-info"> <span><i class="fa fa-quote-left"></i></span> Please Click The Button Below To Pay Application Fee <br>
                                            To Secure Your Enrolment <span><i class="fa fa-quote-right"></i></span></h4>
                                        </p>
                                        <br>
                                        <p class="lead text-center">
                                            <a href="{{url('https://www.taalct.co.za/make-payment/')}}" class="btn btn-primary btn-lg btn-outline-success"> Pay Now </a>
                                        </p>
                                    </div>

                                    <!-- end of content -->

                                </div>

                                @include('wizard.partials.footer')
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- end row -->
        </div> <!--  big container -->

        @endsection