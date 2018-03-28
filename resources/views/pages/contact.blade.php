@extends('layouts.master')

@section('title')
    Contact Us
    @endsection

@section('meta')
    <meta name="Description" content="Business Doctors is a business consultancy firm in India. Visit this page to connect with our business development consultants. "/>
    <meta name="Keywords" content="Business Management Consultants, business consultants, business development consultants, business conslutancy firms"/>
    @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-game text-bold">Contact Me</h3>
                    <hr>
                    <form action="{{ url('contact') }}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="" name="email">Email:</label>
                            <input type="email" class="form-control" name="email" id="email">
                        </div>

                        <div class="form-group">
                            <label for="" name="subject">Subject:</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>

                        <div class="form-group">
                            <label for="" name="message">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control">Type Your Message Here.........</textarea>
                        </div>

                        <p class="text-center"><input type="submit" value="Send Message" class="btn btn-default"></p>
                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="text-game text-bold">Our Location:</h3>
                    <h4 class="text-game">Address:</h4>
                    <p class="ab-text">Business Doctors
                        Beegram Business Doctors LLP
                        505, ACME Plaza
                        Opposite Sangam Big Cinemas
                        Near Courtyard Marriott
                        Andheri Kurla Road, Chakala, Andheri East
                        Mumbai 400059, India</p>
                    <h4 class="ab-text">Email: <a href=""> info@businessdoctors.in</a></h4>
                    <h4 class="ab-text">Phone: <a href="">(+9122) 4004 7470</a></h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" style="width: 100%; height: 400px;">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4483.173560099623!2d72.86265558591134!3d19.11271892145948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c83a25825fd3%3A0xc3351817c06d3150!2sBeeGram+Business+Doctors!5e0!3m2!1sen!2sin!4v1520850452622"width="100%" height="265" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection

@section('scripts')

    @endsection