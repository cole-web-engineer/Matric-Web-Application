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

                                    @include('wizard.payment_partials.header')

                                <div class="tab-content">

                                    <!-- Success Page -->

                                    <div class="row container-fluid">
                                        <p class="lead">
                                            <h3 class="text-danger"> <span><i class="fa fa-close 2x"></i></span> Payment Failed, You Can Try Again ! </h3>
                                        </p>
                                        <hr style="width: 70%;">
                                        <p class="lead">
                                            <h4 class="text-info"><span><i class="fa fa-check"></i></span> To Deposit: Check Your Email For Our Bank Details  <br>
                                            </h4> <h2 class="h2">OR</h2> <h4 class="text-info"><span><i class="fa fa-check"></i></span> Please Click The Button Below To Pay Application Fee </h4>
                                        </p>
                                        <br>
                                        <p class="lead text-center">
                                            <a href="{{url('https://www.taalnetschools.co.za/registration-fee-payment/')}}" class="btn btn-primary btn-lg btn-outline-success"> Pay Now </a>
                                        </p>
                                        <hr style="width: 75%;">
                                         <p class="lead">
                                            <h5>Useful Links | <button class="btn btn-info btn-md"><a href="https://www.taalct.co.za">Home</a></button> | <button class="btn btn-success btn-md"><a href="https://shop.taalct.co.za">BookShop</a></button> | <button class="btn btn-info btn-md"><a href="https://elearning.taalct.co.za">Distance Learning</a></button> | <button class="btn btn-success btn-md"><a href="https://varsity.taalct.co.za">TVET</a></button> </h5>
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