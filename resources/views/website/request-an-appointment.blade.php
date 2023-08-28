@extends('website.layout.welcome')

@section('content')
    <section class="inner-banner p-0">

        <div class="">
            <img src="{{ asset('/public/website/assets/images/banners/inner-banner-4.jpg') }}" alt="Geri Care Hospital"
                class="w-100" />
        </div>

        <div class="banner-liners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Request an appointment
                            <span>We will send you a confirmation <br>
                                within 24 hours.</span>
                        </h1>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li> > </li>
                            <li>Request an Appointment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="request-an-appointment">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="form-sector-appointment">

                        <div class="form-forappointment">
                            <h4>Request an Appointment</h4>

                            <form class="appointment-form" name="AppointmentForm" method="post" action="#"
                                id="AppointmentForm">
                                @csrf
                                <input type="hidden" name="from" id="from" value="service_appointment">
                                <input type="hidden" name="form_name" value="request_an_appointment">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="">Location <span class="text-danger">*</span></label>
                                        <select class="form-control jsrequired" id="type">
                                            <option value="item0">Select Location</option>
                                            <option value="Geri Care Hospital - T Nagar">Geri Care Hospital - T Nagar
                                            </option>
                                            <option value="Geri Care Hospital - Adambakkam">Geri Care Hospital - Adambakkam
                                            </option>
                                            <option value="Geri Care Clinics  - Adyar">Geri Care Clinics - Adyar</option>
                                            <option value="Geri Care Clinics  - Anna Nagar">Geri Care Clinics - Anna Nagar
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="">Department </label>
                                        <select class="form-control jsrequired" id="size">
                                            <option value="">Select Department</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="">Name </label>
                                        <input type="text" name="name" id="aname" class="form-control" />
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="">Phone <span class="text-danger">*</span></label>
                                        <input type="tel" id="aphone" name="mobile_no" value=""
                                            class="form-control"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                                            maxlength="10" required>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <div class=" date">
                                            <label class="">Appointment Date <span
                                                    class="text-danger">*</span></label>
                                            <input type="date" placeholder="Select Date" name="appointment_date"
                                                class="form-control" id="fecha1" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-md-6 col-lg-6">
                                        <label class="">Appointment Time <span class="text-danger">*</span></label>
                                        <select class="form-control tmepcr" id="appointment_time" name="appointment_time"
                                            required>
                                            <option value="">Select Time</option>
                                            <option value="8:00am">8:00 AM</option>
                                            <option value="8:15am">8:15 AM</option>
                                            <option value="8:30am">8:30 AM</option>
                                            <option value="8:45am">8:45 AM</option>
                                            <option value="9:00am">9:00 AM</option>
                                            <option value="9:15am">9:15 AM</option>
                                            <option value="9:30am">9:30 AM</option>
                                            <option value="9:45am">9:45 AM</option>
                                            <option value="10:00am">10:00 AM</option>
                                            <option value="10:15am">10:15 AM</option>
                                            <option value="10:30am">10:30 AM</option>
                                            <option value="10:45am">10:45 AM</option>
                                            <option value="11:00am">11:00 AM</option>
                                            <option value="11:15am">11:15 AM</option>
                                            <option value="11:30am">11:30 AM</option>
                                            <option value="11:45am">11:45 AM</option>
                                            <option value="12:00pm">12:00 PM</option>
                                            <option value="12:15pm">12:15 PM</option>
                                            <option value="12:30pm">12:30 PM</option>
                                            <option value="12:45pm">12:45 PM</option>
                                            <option value="1:00pm">1:00 PM</option>
                                            <option value="1:15pm">1:15 PM</option>
                                            <option value="1:30pm">1:30 PM</option>
                                            <option value="1:45pm">1:45 PM</option>
                                            <option value="2:00pm">2:00 PM</option>
                                            <option value="2:15pm">2:15 PM</option>
                                            <option value="2:30pm">2:30 PM</option>
                                            <option value="2:45pm">2:45 PM</option>
                                            <option value="3:00pm">3:00 PM</option>
                                            <option value="3:15pm">3:15 PM</option>
                                            <option value="3:30pm">3:30 PM</option>
                                            <option value="3:45pm">3:45 PM</option>
                                            <option value="4:00pm">4:00 PM</option>
                                            <option value="4:15pm">4:15 PM</option>
                                            <option value="4:30pm">4:30 PM</option>
                                            <option value="4:45pm">4:45 PM</option>
                                            <option value="5:00pm">5:00 PM</option>
                                            <option value="5:15pm">5:15 PM</option>
                                            <option value="5:30pm">5:30 PM</option>
                                            <option value="5:45pm">5:45 PM</option>
                                            <option value="6:00pm">6:00 PM</option>
                                            <option value="6:15pm">6:15 PM</option>
                                            <option value="6:30pm">6:30 PM</option>
                                            <option value="6:45pm">6:45 PM</option>
                                            <option value="7:00pm">7:00 PM</option>
                                            <option value="7:15pm">7:15 PM</option>
                                            <option value="7:30pm">7:30 PM</option>
                                            <option value="7:45pm">7:45 PM</option>
                                            <option value="8:00pm">8:00 PM</option>
                                            <option value="8:15pm">8:15 PM</option>
                                            <option value="8:30pm">8:30 PM</option>
                                            <option value="8:45pm">8:45 PM</option>
                                            <option value="9:00pm">9:00 PM</option>
                                            <option value="9:15pm">9:15 PM</option>
                                            <option value="9:30pm">9:30 PM</option>
                                            <option value="9:45pm">9:45 PM</option>
                                            <option value="10:00pm">10:00 PM</option>
                                            <option value="10:15pm">10:15 PM</option>
                                            <option value="10:30pm">10:30 PM</option>
                                            <option value="10:45pm">10:45 PM</option>
                                            <option value="11:00pm">11:00 PM</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label class="">Details</label>
                                        <textarea class="form-control" name="details"></textarea>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt clearfix"><input type="submit" id="submit_btn"
                                                name="submit" value="Submit"> </div>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="our-impact pt-0">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">

                    <div class="text-center">
                        <h3>Our Locations</h3>
                    </div>

                    <div class="row align-items-center">

                        <div class="col-lg-5">

                            <h4>Our Hospitals</h4>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="address-loc">
                                    <h5>T.Nagar</h5>
                                    <p>No.8, Dr. Nair Road, Behind Vani Mahal,<br> T.Nagar, Chennai - 600 017</p>
                                </div>
                                <div class="locate-me text-end">
                                    <a href="https://goo.gl/maps/u6K6owxWtpxry8EV8" target="_blank">View on Maps <img
                                            src="{{ asset('/public/website/assets/images/red.png') }}"
                                            alt="Geri Care Hospital" /></a>
                                </div>
                            </div>
                            <div class="tpz"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="address-loc">
                                    <h5>Adambakkam</h5>
                                    <p>100 Feet Velachery, 100 Feet Rd, Ward F,<br> Block 17, Adambakkam, Chennai - 600 088
                                    </p>
                                </div>
                                <div class="locate-me text-end">
                                    <a href="https://goo.gl/maps/KFAt8ytkXKEeuxZ59" target="_blank">View on Maps <img
                                            src="{{ asset('/public/website/assets/images/red.png') }}"
                                            alt="Geri Care Hospital" /></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-2">

                        </div>

                        <div class="col-lg-5">

                            <h4>Our Clinics</h4>

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="address-loc">
                                    <h5>Adyar</h5>
                                    <p>No:21, 1st avenue, Indira Nagar,<br> Adyar, Chennai 600020</p>
                                </div>
                                <div class="locate-me text-end">
                                    <a href="https://goo.gl/maps/iZ6WNkecYyEqYKBZ6" target="_blank">View on Maps <img
                                            src="{{ asset('/public/website/assets/images/red.png') }}"
                                            alt="Geri Care Hospital" /></a>
                                </div>
                            </div>
                            <div class="tpz"></div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="address-loc">
                                    <h5>Anna Nagar</h5>
                                    <p>Plot No.3698, Q Block-100, 3rd Avenue, <br>Anna Nagar, Chennai - 600 040</p>
                                </div>
                                <div class="locate-me text-end">
                                    <a href="https://goo.gl/maps/FLwu1wnwvRHQEqdb7" target="_blank">View on Maps <img
                                            src="{{ asset('/public/website/assets/images/red.png') }}"
                                            alt="Geri Care Hospital" /></a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
