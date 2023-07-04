<?php
include 'auth.php';
include 'admin.php';

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
Route::get('/', function(){
    return view('website.index');
});
// Route::get('/hospitals/gericare-hospitals',function(){
//     return view('website.hospitals.gericare-hospitals');
// });
Route::get('/gericare-hospital/about-hospital',[PageViewController::class,'aboutHospitalPage'])->name('gericare-hospital.about-hospital');

Route::get('/gericare-hospital/hospital-department',[PageViewController::class,'hospitalDepartmentPage'])->name('gericare-hospital.hospital-department');

Route::get('/gericare-hospital/hospital-doctors',[PageViewController::class,'hospitalDoctorsPage'])->name('gericare-hospital.hospital-doctors');


Route::get('/gericare-hospital/hospital-doctors/dr-srinivas',[PageViewController::class,'drSrinivasPage'])->name('doctors-details.dr-srinivas');

Route::get('/gericare-hospital/hospital-doctors/dr-lakshmipathy',[PageViewController::class,'drLakshmipathyPage'])->name('doctors-details.dr-lakshmipathy'); 

Route::get('/gericare-hospital/hospital-doctors/dr-anupama',[PageViewController::class,'drAnupamaPage'])->name('doctors-details.dr-anupama'); 

Route::get('/gericare-hospital/hospital-doctors/dr-arulmozhiselvan',[PageViewController::class,'drArulmozhiselvanPage'])->name('doctors-details.dr-arulmozhiselvan'); 

Route::get('/gericare-hospital/hospital-doctors/dr-guru-balaji',[PageViewController::class,'drGuruBalajiPage'])->name('doctors-details.dr-guru-balaji'); 

Route::get('/gericare-hospital/hospital-doctors/dr-kathiseran',[PageViewController::class,'drKathiseranPage'])->name('doctors-details.dr-kathiseran'); 

Route::get('/gericare-hospital/hospital-doctors/dr-rajkumar',[PageViewController::class,'drRajKumarPage'])->name('doctors-details.dr-rajkumar'); 

Route::get('/gericare-hospital/hospital-doctors/dr-thiruvengida',[PageViewController::class,'drThiruvengidaPage'])->name('doctors-details.dr-thiruvengida'); 

Route::get('/gericare-hospital/hospital-doctors/dr-flora-alex',[PageViewController::class,'drFloraPage'])->name('doctors-details.dr-flora-alex'); 

Route::get('/gericare-hospital/hospital-doctors/dr-up-srinivas',[PageViewController::class,'drUpSrinivasPage'])->name('doctors-details.dr-up-srinivas'); 

Route::get('/gericare-hospital/hospital-doctors/dr-balamurugan-s',[PageViewController::class,'drBalamuruganSPage'])->name('doctors-details.dr-balamurugan-s'); 

Route::get('/gericare-hospital/hospital-doctors/dr-balamurugan-b',[PageViewController::class,'drBalamuruganBPage'])->name('doctors-details.dr-balamurugan-b'); 

Route::get('/gericare-hospital/hospital-doctors/dr-sridevi',[PageViewController::class,'drSrideviPage'])->name('doctors-details.dr-sridevi'); 

Route::get('/gericare-hospital/hospital-doctors/dr-susovan',[PageViewController::class,'drSusovanPage'])->name('doctors-details.dr-susovan'); 

Route::get('/gericare-hospital/hospital-doctors/dr-vasanth',[PageViewController::class,'drVasanthPage'])->name('doctors-details.dr-vasanth');
Route::get('/gericare-hospital/hospital-doctors/dr-ashwin',[PageViewController::class,'drAshwinPage'])->name('doctors-details.dr-ashwin'); 
Route::get('/gericare-hospital/hospital-doctors/dr-manicka-saravanan',[PageViewController::class,'drManickaSaravananPage'])->name('doctors-details.dr-manicka-saravanan');
Route::get('/gericare-hospital/hospital-doctors/dr-tinu-thamby',[PageViewController::class,'drTinuThambyPage'])->name('doctors-details.dr-tinu-thamby');

Route::get('/gericare-hospital/hospital-doctors/dr-srinivas-rajkumar',[PageViewController::class,'drSrinivasRajkumarPage'])->name('doctors-details.dr-srinivas-rajkumar'); 

Route::get('/gericare-hospital/hospital-doctors/dr-magesh',[PageViewController::class,'drMageshPage'])->name('doctors-details.dr-magesh'); 

Route::get('/gericare-hospital/hospital-facilities',[PageViewController::class,'hospitalFacilitiesPage'])->name('gericare-hospital.hospital-facilities');


Route::get('/gericare-assisted-living/about-assisted-living',[PageViewController::class,'aboutAssistedLivingPage'])->name('gericare-assisted-living.about-assisted-living');

Route::get('/gericare-assisted-living/assisted-living-service',[PageViewController::class,'assistedLivingServicePage'])->name('gericare-assisted-living.assisted-living-service');

Route::get('/gericare-assisted-living/assisted-living-facilities',[PageViewController::class,'assistedLivingFacilitiesPage'])->name('gericare-assisted-living.assisted-living-facilities');


Route::get('/gericare-clinics/about-clinics',[PageViewController::class,'aboutClinicsPage'])->name('gericare-clinics.about-clinics');

Route::get('/gericare-clinics/clinics-service',[PageViewController::class,'clinicsServicePage'])->name('gericare-clinics.clinics-service');


Route::get('/gericare-homecare/about-homecare',[PageViewController::class,'aboutHomeCarePage'])->name('gericare-homecare.about-homecare');

Route::get('/gericare-homecare/service-we-offer/homecare-doctor-visit',[PageViewController::class,'doctorVisitPage'])->name('gericare-homecare.homecare-doctor-visit');

Route::get('/gericare-homecare/service-we-offer/homecare-nursing-care',[PageViewController::class,'nursingCarePage'])->name('gericare-homecare.homecare-nursing-care');

Route::get('/gericare-homecare/service-we-offer/homecare-geriatri-assessment-counselling',[PageViewController::class,'geriatriAssessmentCounsellingPage'])->name('gericare-homecare.homecare-geriatri-assessment-counselling');

Route::get('/gericare-homecare/service-we-offer/homecare-attender-assistance',[PageViewController::class,'homecareAttenderAssistancePage'])->name('gericare-homecare.homecare-attender-assistance');

Route::get('/gericare-homecare/service-we-offer/homecare-medical-devices',[PageViewController::class,'homecareMedicalDevicesPage'])->name('gericare-homecare.homecare-medical-devices');


Route::get('/gericare-homecare/service-we-offer/geriatric-physiotherapy-at-home',[PageViewController::class,'geriatricPhysiotherapyatHomePage'])->name('homecare-services.geriatric-physiotherapy-at-home'); 

Route::get('/gericare-homecare/service-we-offer/psychiatrist-home-visit',[PageViewController::class,'psychiatristHomeVisitPage'])->name('homecare-services.psychiatrist-home-visit'); 

Route::get('/gericare-homecare/service-we-offer/orthopedician-home-visit',[PageViewController::class,'orthopedicianHomeVisitPage'])->name('homecare-services.orthopedician-home-visit'); 

Route::get('/gericare-homecare/service-we-offer/dentist-home-visit',[PageViewController::class,'DentistHomeVisitPage'])->name('homecare-services.dentist-home-visit'); 

Route::get('/gericare-homecare/service-we-offer/iv-fluids-monitoring',[PageViewController::class,'IVFluidsMonitoringPage'])->name('homecare-services.iv-fluids-monitoring');

Route::get('/gericare-homecare/service-we-offer/urinary-catheterization',[PageViewController::class,'UrinaryCatheterizationPage'])->name('homecare-services.urinary-catheterization');

Route::get('/gericare-homecare/service-we-offer/outpatient-antibiotic-administration',[PageViewController::class,'OutpatientAntibioticAdministrationPage'])->name('homecare-services.outpatient-antibiotic-administration');

Route::get('/gericare-homecare/service-we-offer/wound-care-dressing',[PageViewController::class,'WoundCareDressingPage'])->name('homecare-services.wound-care-dressing');

Route::get('/gericare-homecare/service-we-offer/ecg-at-home',[PageViewController::class,'ECGatHomePage'])->name('homecare-services.ecg-at-home');
 
Route::get('/gericare-homecare/service-we-offer/skilled-nursing-care',[PageViewController::class,'SkilledNursingCarePage'])->name('homecare-services.skilled-nursing-care');

Route::get('/gericare-homecare/service-we-offer/home-sample-collection',[PageViewController::class,'HomeSampleCollectionPage'])->name('homecare-services.home-sample-collection');

Route::get('/gericare-homecare/service-we-offer/live-in-care',[PageViewController::class,'LiveInCarePage'])->name('homecare-services.live-in-care');

Route::get('/gericare-homecare/service-we-offer/care-for-bedridden-patients',[PageViewController::class,'CareForBedriddenPatientsPage'])->name('homecare-services.care-for-bedridden-patients');

Route::get('/about-us/about-gericare',[PageViewController::class,'aboutGericarePage'])->name('about-us.about-gericare');

Route::get('/about-us/leadership-team',[PageViewController::class,'leaderShipPage'])->name('about-us.leadership-team');

Route::get('/about-us/team-dr-srinivas',[PageViewController::class,'leaderShipSrinivasPage'])->name('about-us.team-dr-srinivas');

Route::get('/about-us/team-dr-lakshmipathy',[PageViewController::class,'leaderShipLakshmipathyPage'])->name('about-us.team-dr-lakshmipathy');

Route::get('/about-us/awards-achievements',[PageViewController::class,'awardsPage'])->name('about-us.awards-achievements');


Route::get('/in-news/media-gallery',[PageViewController::class,'mediaGalleryPage'])->name('in-news.media-gallery');

Route::get('/in-news/news-events',[PageViewController::class,'newsEventsPage'])->name('in-news.news-events');

Route::get('/in-news/gallery',[PageViewController::class,'GalleryPage'])->name('in-news.gallery');

Route::get('/in-news/media-tool-kit',[PageViewController::class,'MediaToolKitPage'])->name('in-news.media-tool-kit');

Route::get('/in-news/video-gallery',[PageViewController::class,'VideoGalleryPage'])->name('in-news.video-gallery');

Route::get('contact-us',[PageViewController::class,'contactUsPage'])->name('contact-us');

Route::get('book-an-appointment',[PageViewController::class,'BookAnAppointmentPage'])->name('book-an-appointment');

Route::get('thanks-contactus',[PageViewController::class,'ThanksContactusPage'])->name('thanks-contactus');

Route::get('carrer-thanks',[PageViewController::class,'CarrerThanksPage'])->name('carrer-thanks');

Route::get('careers',[PageViewController::class,'careerPage'])->name('careers');

Route::get('testimonials',[PageViewController::class,'testimonialPage'])->name('testimonials'); 

Route::get('faq',[PageViewController::class,'faqPage'])->name('faq'); 

