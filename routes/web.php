<?php
include 'auth.php';
include 'admin.php';

use App\Http\Controllers\Website\BookAppointmentController;
use App\Http\Controllers\Website\CareerController;
use App\Http\Controllers\Website\ConsultantFormController;
use App\Http\Controllers\Website\PageViewController; 
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth_users']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
//  Route::get('/', function(){
//       return view('website.index');
//   });
  Route::get('/',[ConsultantFormController::class,'index'])->name('home');

// Route::get('/hospitals/gericare-hospitals',function(){
//     return view('website.hospitals.gericare-hospitals');
// });
Route::get('gericare-hospital',[PageViewController::class,'aboutHospitalPage'])->name('gericare-hospital.about-hospital');

Route::post('/consultant/form/save',[ConsultantFormController::class,'submitConsultantForm'])->name('consultant.form.submit');
Route::get('/contact/thanks',[ConsultantFormController::class,'contactThanks'])->name('contact.thanks');
Route::get('/consultant-thanks',[ConsultantFormController::class,'consultantThanks'])->name('consultant.thanks');
Route::get('/callback-thanks',[ConsultantFormController::class,'callBackThanks'])->name('callback.thanks');
Route::get('/career-thanks',[ConsultantFormController::class,'careerThanks'])->name('career.thanks');
Route::get('/doctor-appointment-thanks',[ConsultantFormController::class,'doctorAppThanks'])->name('doctorapp.thanks');
Route::get('/book-appointment-thanks',[ConsultantFormController::class,'serviceAppThanks'])->name('service.appointment.thanks');
Route::get('/department-thanks',[ConsultantFormController::class,'departmentAppThanks'])->name('departapp.thanks');

Route::post('/consultant/req_form/save',[ConsultantFormController::class,'submitConsultantReqForm'])->name('consultant.form.req_submit');
Route::post('/appointment/form/save',[BookAppointmentController::class,'saveAppointment'])->name('appointment.form.submit');
Route::post('/career/form/save',[CareerController::class,'applyJob'])->name('career.form.submit');

Route::get('hospital-departments',[PageViewController::class,'hospitalDepartmentPage'])->name('gericare-hospital.hospital-department');

Route::get('our-doctors',[PageViewController::class,'hospitalDoctorsPage'])->name('gericare-hospital.hospital-doctors');


Route::get('geriatric-medicine',[PageViewController::class,'geriatricMedicine'])->name('departments.geriatric-medicine');

Route::get('geriatric-cardiology',[PageViewController::class,'geriatricCardiology'])->name('departments.geriatric-cardiology');

Route::get('ortho-geriatrics',[PageViewController::class,'orthoGeriatrics'])->name('departments.ortho-geriatrics');

Route::get('geriatric-psychiatry',[PageViewController::class,'geriatricPsychiatry'])->name('departments.geriatric-psychiatry');

Route::get('geriatric-neurology',[PageViewController::class,'geriatricNeurology'])->name('departments.geriatric-neurology');

Route::get('geriatric-surgery',[PageViewController::class,'geriatricSurgery'])->name('departments.geriatric-surgery');

Route::get('geriatric-oncology',[PageViewController::class,'geriatricOncology'])->name('departments.geriatric-oncology');

Route::get('geriatric-urology',[PageViewController::class,'geriatricUrology'])->name('departments.geriatric-urology');

Route::get('gastroenterology',[PageViewController::class,'gastroenTerology'])->name('departments.gastroenterology');

Route::get('pulmonology',[PageViewController::class,'Pulmonology'])->name('departments.pulmonology');

Route::get('geriatric-icu',[PageViewController::class,'GeriatricICU'])->name('departments.geriatric-icu');

Route::get('dermatology',[PageViewController::class,'Dermatology'])->name('departments.dermatology');

Route::get('vascular-surgery',[PageViewController::class,'vascularSurgery'])->name('departments.vascular-surgery');

Route::get('uro-gynaecology',[PageViewController::class,'uroGynaecology'])->name('departments.uro-gynaecology');

Route::get('nephrology',[PageViewController::class,'Nephrology'])->name('departments.nephrology');

Route::get('pathology',[PageViewController::class,'Pathology'])->name('departments.pathology');

Route::get('ophthalmology',[PageViewController::class,'Ophthalmology'])->name('departments.ophthalmology');

Route::get('dentistry',[PageViewController::class,'Dentistry'])->name('departments.dentistry');

Route::get('geriatric-physiotherapy',[PageViewController::class,'geriatricPhysiotherapy'])->name('departments.geriatric-physiotherapy');

Route::get('ent',[PageViewController::class,'Ent'])->name('departments.ent');

Route::get('dr-srinivas',[PageViewController::class,'drSrinivasPage'])->name('doctors-details.dr-srinivas');

Route::get('dr-lakshmipathy-ramesh',[PageViewController::class,'drLakshmipathyPage'])->name('doctors-details.dr-lakshmipathy'); 

Route::get('dr-anupama',[PageViewController::class,'drAnupamaPage'])->name('doctors-details.dr-anupama'); 

Route::get('dr-arulmozhiselvan',[PageViewController::class,'drArulmozhiselvanPage'])->name('doctors-details.dr-arulmozhiselvan'); 

Route::get('dr-guru-balaji',[PageViewController::class,'drGuruBalajiPage'])->name('doctors-details.dr-guru-balaji'); 

Route::get('dr-kathiresan',[PageViewController::class,'drKathiseranPage'])->name('doctors-details.dr-kathiresan'); 

Route::get('dr-rajkumar',[PageViewController::class,'drRajKumarPage'])->name('doctors-details.dr-rajkumar'); 

Route::get('dr-thiruvengida',[PageViewController::class,'drThiruvengidaPage'])->name('doctors-details.dr-thiruvengida'); 

Route::get('dr-flora-alex',[PageViewController::class,'drFloraPage'])->name('doctors-details.dr-flora-alex'); 

Route::get('dr-up-srinivas',[PageViewController::class,'drUpSrinivasPage'])->name('doctors-details.dr-up-srinivas'); 

Route::get('dr-balamurugan-s',[PageViewController::class,'drBalamuruganSPage'])->name('doctors-details.dr-balamurugan-s'); 

Route::get('dr-balamurugan-b',[PageViewController::class,'drBalamuruganBPage'])->name('doctors-details.dr-balamurugan-b'); 

Route::get('dr-sridevi',[PageViewController::class,'drSrideviPage'])->name('doctors-details.dr-sridevi'); 

Route::get('dr-susovan',[PageViewController::class,'drSusovanPage'])->name('doctors-details.dr-susovan'); 

Route::get('dr-vasanth',[PageViewController::class,'drVasanthPage'])->name('doctors-details.dr-vasanth');

Route::get('dr-ashwin-subramaniam',[PageViewController::class,'drAshwinPage'])->name('doctors-details.dr-ashwin'); 

Route::get('dr-manicka-saravanan',[PageViewController::class,'drManickaSaravananPage'])->name('doctors-details.dr-manicka-saravanan');

Route::get('tinu-thamby',[PageViewController::class,'drTinuThambyPage'])->name('doctors-details.tinu-thamby');

Route::get('dr-srinivas-rajkumar',[PageViewController::class,'drSrinivasRajkumarPage'])->name('doctors-details.dr-srinivas-rajkumar'); 

Route::get('dr-magesh',[PageViewController::class,'drMageshPage'])->name('doctors-details.dr-magesh'); 

Route::get('dr-muthuswamy',[PageViewController::class,'drMuthuswamyPage'])->name('doctors-details.dr-muthuswamy');

Route::get('dr-rejivrajendranath',[PageViewController::class,'rejivRajendranathPage'])->name('doctors-details.dr-rejivrajendranath');

Route::get('dr-sairam',[PageViewController::class,'saiRamPage'])->name('doctors-details.dr-sairam');

Route::get('dr-ap-subash-kumar',[PageViewController::class,'subashKumarapPage'])->name('doctors-details.dr-ap-subash-kumar');

Route::get('dr-sujatha',[PageViewController::class,'sujathaPage'])->name('doctors-details.dr-sujatha');

Route::get('dr-jayaraman',[PageViewController::class,'jayaramanPage'])->name('doctors-details.dr-jayaraman');

Route::get('dr-mohan-rao',[PageViewController::class,'mohanRaoPage'])->name('doctors-details.dr-mohan-rao');

Route::get('dr-asir-julin',[PageViewController::class,'asirjulinPage'])->name('doctors-details.dr-asir-julin'); 

Route::get('dr-meenakshi',[PageViewController::class,'meenakshiPage'])->name('doctors-details.dr-meenakshidr-meenakshi'); 


Route::get('dr-banu-prakash',[PageViewController::class,'banuPrakashPage'])->name('doctors-details.dr-banu-prakash'); 


Route::get('dr-arathi-surendranath',[PageViewController::class,'aarathiPage'])->name('doctors-details.dr-arathi-surendranath'); 


Route::get('dr-vikram',[PageViewController::class,'vikramPage'])->name('doctors-details.dr-vikram'); 


Route::get('/gericare-hospital/hospital-facilities',[PageViewController::class,'hospitalFacilitiesPage'])->name('gericare-hospital.hospital-facilities');


Route::get('assisted-living',[PageViewController::class,'aboutAssistedLivingPage'])->name('gericare-assisted-living.about-assisted-living');

Route::get('/gericare-assisted-living/assisted-living-service',[PageViewController::class,'assistedLivingServicePage'])->name('gericare-assisted-living.assisted-living-service');

Route::get('/gericare-assisted-living/assisted-living-facilities',[PageViewController::class,'assistedLivingFacilitiesPage'])->name('gericare-assisted-living.assisted-living-facilities');


Route::get('about-clinics',[PageViewController::class,'aboutClinicsPage'])->name('gericare-clinics.about-clinics');

Route::get('/gericare-clinics/clinics-service',[PageViewController::class,'clinicsServicePage'])->name('gericare-clinics.clinics-service');



Route::get('falls-prevention-clinic',[PageViewController::class,'fallsPrevention'])->name('gericare-clinics.falls-prevention-clinic');

Route::get('memory-clinic',[PageViewController::class,'MemoryClinic'])->name('gericare-clinics.memory-clinic');

Route::get('incontinence-clinic',[PageViewController::class,'IncontinenceClinic'])->name('gericare-clinics.incontinence-clinic');

Route::get('preventive-health-care-clinic',[PageViewController::class,'PreventiveHealth'])->name('gericare-clinics.preventive-health-care-clinic');

Route::get('adult-vaccination-clinic',[PageViewController::class,'AdultVaccinationClinic'])->name('gericare-clinics.adult-vaccination-clinic');

Route::get('seniors-diabetic-clinic',[PageViewController::class,'SeniorsDiabeticClinic'])->name('gericare-clinics.seniors-diabetic-clinic');

Route::get('hypertension-clinic',[PageViewController::class,'HypertensionClinic'])->name('gericare-clinics.hypertension-clinic');

Route::get('sleep-disorder-clinic',[PageViewController::class,'SleepDisorderClinic'])->name('gericare-clinics.sleep-disorder-clinic');



Route::get('homecare',[PageViewController::class,'aboutHomeCarePage'])->name('gericare-homecare.about-homecare');

Route::get('doctor-visit',[PageViewController::class,'doctorVisitPage'])->name('gericare-homecare.homecare-doctor-visit');

Route::get('/gericare-homecare/service-we-offer/homecare-nursing-care',[PageViewController::class,'nursingCarePage'])->name('gericare-homecare.homecare-nursing-care');

Route::get('/gericare-homecare/service-we-offer/homecare-geriatri-assessment-counselling',[PageViewController::class,'geriatriAssessmentCounsellingPage'])->name('gericare-homecare.homecare-geriatri-assessment-counselling');

Route::get('/gericare-homecare/service-we-offer/homecare-attender-assistance',[PageViewController::class,'homecareAttenderAssistancePage'])->name('gericare-homecare.homecare-attender-assistance');

Route::get('/gericare-homecare/service-we-offer/homecare-medical-devices',[PageViewController::class,'homecareMedicalDevicesPage'])->name('gericare-homecare.homecare-medical-devices');

Route::get('physio-care',[PageViewController::class,'geriatricPhysiotherapyatHomePage'])->name('homecare-services.geriatric-physiotherapy-at-home'); 

Route::get('psychiatrist-for-home-visit',[PageViewController::class,'psychiatristHomeVisitPage'])->name('homecare-services.psychiatrist-home-visit'); 

Route::get('orthopedician-home-visit',[PageViewController::class,'orthopedicianHomeVisitPage'])->name('homecare-services.orthopedician-home-visit'); 

Route::get('dentist-at-home',[PageViewController::class,'DentistHomeVisitPage'])->name('homecare-services.dentist-home-visit'); 

Route::get('iv-fluids-monitoring',[PageViewController::class,'IVFluidsMonitoringPage'])->name('homecare-services.iv-fluids-monitoring');

Route::get('urinary-catheterization-at-home',[PageViewController::class,'UrinaryCatheterizationPage'])->name('homecare-services.urinary-catheterization');

Route::get('outpatient-parenteral-antimicrobial-administration',[PageViewController::class,'OutpatientAntibioticAdministrationPage'])->name('homecare-services.outpatient-antibiotic-administration');

Route::get('wound-care-dressing',[PageViewController::class,'WoundCareDressingPage'])->name('homecare-services.wound-care-dressing');

Route::get('ecg-test-at-home',[PageViewController::class,'ECGatHomePage'])->name('homecare-services.ecg-at-home');
 
Route::get('nursing-care',[PageViewController::class,'SkilledNursingCarePage'])->name('homecare-services.skilled-nursing-care');

Route::get('home-sample-collection',[PageViewController::class,'HomeSampleCollectionPage'])->name('homecare-services.home-sample-collection');

Route::get('live-in-elderly-care',[PageViewController::class,'LiveInCarePage'])->name('homecare-services.live-in-care');

Route::get('care-for-bedridden-elderly-at-home',[PageViewController::class,'CareForBedriddenPatientsPage'])->name('homecare-services.care-for-bedridden-patients');

Route::get('about-gericare',[PageViewController::class,'aboutGericarePage'])->name('about-us.about-gericare');

Route::get('leadership',[PageViewController::class,'leaderShipPage'])->name('about-us.leadership-team');

Route::get('/about-gericare/team-dr-srinivas',[PageViewController::class,'leaderShipSrinivasPage'])->name('about-us.team-dr-srinivas');

Route::get('/about-gericare/team-dr-lakshmipathy',[PageViewController::class,'leaderShipLakshmipathyPage'])->name('about-us.team-dr-lakshmipathy');

Route::get('/about-us/awards-achievements',[PageViewController::class,'awardsPage'])->name('about-us.awards-achievements');


Route::get('media-gallery',[PageViewController::class,'mediaGalleryPage'])->name('in-news.media-gallery');

Route::get('news-and-events-demo',[PageViewController::class,'newsEventsDemoPage'])->name('in-news.news-events-demo');

Route::get('gallery',[PageViewController::class,'GalleryPage'])->name('in-news.gallery');

Route::get('/in-news/media-tool-kit',[PageViewController::class,'MediaToolKitPage'])->name('in-news.media-tool-kit');

Route::get('video-gallery',[PageViewController::class,'VideoGalleryPage'])->name('in-news.video-gallery');

Route::get('contact-us',[PageViewController::class,'contactUsPage'])->name('contact-us');

Route::get('book-an-appointment',[PageViewController::class,'bookAppointmentPage'])->name('book-appointment');

Route::get('request-an-appointment',[PageViewController::class,'requestAppointmentPage'])->name('request-an-appointment');

Route::get('thanks-contactus',[PageViewController::class,'ThanksContactusPage'])->name('thanks-contactus');

Route::get('carrer-thanks',[PageViewController::class,'CarrerThanksPage'])->name('carrer-thanks');


Route::get('book-appointmnet-thanks',[PageViewController::class,'bookAppointmentThanksPage'])->name('book-appointmnet-thanks');

Route::get('request-call-back-thanks',[PageViewController::class,'requestcallbackThanksPage'])->name('request-call-back-thanks');

Route::get('doctor-appointmnet-thanks',[PageViewController::class,'doctorAppointmnetThanksPage'])->name('doctor-appointmnet-thanks');

Route::get('consult-thanks',[PageViewController::class,'consultThanksPage'])->name('consult-thanks');


Route::get('career',[PageViewController::class,'careerPage'])->name('careers');

Route::get('testimonials',[PageViewController::class,'testimonialPage'])->name('testimonials'); 
Route::get('videotestimonials',[PageViewController::class,'videotestimonialPage'])->name('videotestimonials'); 

Route::get('faqs',[PageViewController::class,'faqPage'])->name('faq'); 

Route::get('terms-and-conditions',[PageViewController::class,'termsConditionsPage'])->name('terms-and-conditions'); 

Route::get('iag-chennai',[PageViewController::class,'iagChennaiPage'])->name('iag-chennai');
Route::get('inauguration-adambakkam',[PageViewController::class,'inaugurationAdambakkamPage'])->name('inauguration-adambakkam'); 
Route::get('ra-puram-launch',[PageViewController::class,'raPuramLaunchPage'])->name('ra-puram-launch');
Route::get('annanagar-clinic-launch',[PageViewController::class,'annaNagarClinicLaunchPage'])->name('annanagar-clinic-launch');
Route::get('gericriticon-conference',[PageViewController::class,'gericriticonConferencePage'])->name('gericriticon-conference');
Route::get('news-and-events',[PageViewController::class,'newsEventsPage'])->name('news-and-events');

Route::get('news-detail/{slug?}',[PageViewController::class,'newsDetailPage'])->name('news-detail'); 



Route::get('/error-404', function(){  return view('errors.404');});


Route::any('{query}', function() { return redirect('/error-404'); })->where('query', '.*');
