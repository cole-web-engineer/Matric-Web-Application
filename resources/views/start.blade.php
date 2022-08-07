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

                            <form action="{{route('submit')}}" method="post" enctype="multipart/form-data">

                                @csrf
                                <!--  You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"  -->

                                @include('wizard.partials.header')

                                @include('wizard.partials.navigation')

                                <div class="tab-content">

                                    @include('wizard.student')
                                    @include('wizard.subjects')
                                    @include('wizard.parent')
                                    @include('wizard.uploads')

                                </div>

                                @include('wizard.partials.footer')

                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->

        @endsection