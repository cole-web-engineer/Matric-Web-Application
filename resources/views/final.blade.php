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
                                            <h3 class="text-success"> <span><i class="fa fa-registered 2x"></i></span> Application Fee -  Payment Was Successful </h3>
                                        </p>
                                        
                                        <br>
                                        <p class="lead">
                                            <h4 class="text-info"><span><i class="fa fa-quote-left"></i></span> Please Do Check Your Email, And expect a Call from Any of Our Administrators in 48 hours. Regarding further instructions & arrangements. <span><i class="fa fa-quote-right"></i></span> </h4>
                                        </p>
                                        <br>
                                        <p class="lead">
                                            <h5>Any Delay You Can ? |<a href="mailto:customerservices@taalct.co.za"> Email Customer Service Support </a> | Call <a href="tel:+27115689074">+27 11 568 9074</a></h5>
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