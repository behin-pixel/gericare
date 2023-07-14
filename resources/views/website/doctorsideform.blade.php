<div class="form-detilsbox text-center">
<h4>Book Your Appointment</h4>
<form class="appointment-form" name="AppointmentForm" method="post"  action="#" id="AppointmentForm">
	@csrf	
						<input type="hidden" name="from" value="doctor_appointment" >
								<input type="hidden" name="form_name" value="book_an_appointment" >
  							<div class="row"> 
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="doctor_name" id="aname" class="form-control" value="{{$name ??''}}" readonly/>
								</div>
                                
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="text" name="name" id="aname" class="form-control" placeholder="Name *" required />
								</div> 
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="email" name="email" id="aemail" class="form-control" placeholder="Email" />
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<input type="tel" id="aphone" name="mobile_no" value="" class="form-control" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10" placeholder="Phone *" required>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="date">
										 
								<label class="onl-respsve">Appointment Date</label> 
										<input type="date" placeholder="Select Date" name="appointment_date" class="form-control" id="fecha1" placeholder="Date *" required>
										<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<label class="onl-respsve">Appointment Time</label> 
								<select class="form-control tmepcr" id="appointment_time" name="appointment_time" required>
                    				<option value="">Time</option>
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

<!-- <div class="col-sm-12 col-md-6 col-lg-6">
									<label class="text-light">Time </label> 
									<input type="time" class="form-control" name="appointment_time"  id="timepicker"/ placeholder="Select Time *" required>
								</div> -->
								<div class="col-sm-12 col-md-12 col-lg-12"> 
									<textarea class="form-control" name="details" placeholder="Message"></textarea>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-data cnt text-center clearfix"><input type="submit" id="submit_btn" name="submit" value="Submit"> </div>
										</div>
							</div>
						</form>
</div>