<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class PageViewController extends Controller
{
    public function aboutHospitalPage()
    {
        $title = 'Best Home Healthcare In Chennai | Geriatrician Near Me';
        $decription = 'Geri Care provides top-notch home healthcare services in Chennai with expert Geriatricians for senior citizens. Book an appointment now for personalized care.';
        $keyword = '';
        return view('website.gericare_hospital.about-hospital', compact('title', 'decription', 'keyword'));  
    }
    public function hospitalDepartmentPage()
    {
        return view('website.gericare_hospital.hospital-department');
    }
    public function hospitalDoctorsPage()
    {
        return view('website.gericare_hospital.hospital-doctors');
    } 

    public function drSrinivasPage()
    {
        return view('website.doctors_details.dr-srinivas');
    }
    public function drLakshmipathyPage()
    {
        return view('website.doctors_details.dr-lakshmipathy');
    }
    public function drVasanthPage()
    {
        return view('website.doctors_details.dr-vasanth');
    }
    public function drAshwinPage()
    {
        return view('website.doctors_details.dr-ashwin');
    }
    public function drManickaSaravananPage()
    {
        return view('website.doctors_details.dr-manicka-saravanan');
    }
    public function drTinuThambyPage()
    {
        return view('website.doctors_details.dr-tinu-thamby');
    }

    public function drSrinivasRajkumarPage()
    {
        return view('website.doctors_details.dr-srinivas-rajkumar');
    } 
    public function drMageshPage()
    {
        return view('website.doctors_details.dr-magesh');
    }
    public function drAnupamaPage()
    {
        return view('website.doctors_details.dr-anupama');
    }
    public function drArulmozhiselvanPage()
    {
        return view('website.doctors_details.dr-arulmozhiselvan');
    }
    public function drGuruBalajiPage()
    {
        return view('website.doctors_details.dr-guru-balaji');
    }
    public function drKathiseranPage()
    {
        return view('website.doctors_details.dr-kathiseran');
    }
    public function drRajKumarPage()
    {
        return view('website.doctors_details.dr-rajkumar');
    }
    public function  drThiruvengidaPage()
    {
        return view('website.doctors_details.dr-thiruvengida');
    }
    public function  drFloraPage()
    {
        return view('website.doctors_details.dr-flora-alex');
    }
    public function  drUpSrinivasPage()
    {
        return view('website.doctors_details.dr-up-srinivas');
    }
    public function  drBalamuruganSPage()
    {
        return view('website.doctors_details.dr-balamurugan-s');
    }

    public function  drSrideviPage()
    {
        return view('website.doctors_details.dr-sridevi');
    }
    public function  drSusovanPage()
    {
        return view('website.doctors_details.dr-susovan');
    }
    public function  drBalamuruganBPage()
    {
        return view('website.doctors_details.dr-balamurugan-b');
    }
    public function  drSrinivasRajkumarTPage()
    {
        return view('website.doctors_details.dr-balamurugan');
    }
    public function hospitalFacilitiesPage()
    {
        return view('website.gericare_hospital.hospital-facilities');
    }


    public function aboutAssistedLivingPage()
    {
        $title = 'Assisted Living In Chennai for Senior Citizens - Geri Care';
        $decription = 'Get exceptional skilled nursing facility In chennai at Geri Care Assisted Living. Our residential arrangements for the elderly offer respite care, rehabilitative care, and more.';
        $keyword = '';
        $testimonial=Testimonial::where('status','1')->where('type','Assisted Living')->get();
        return view('website.gericare_assisted_living.about-assisted-living', compact('title', 'decription', 'keyword','testimonial')); 
    }
    public function assistedLivingServicePage()
    {
        return view('website.gericare_assisted_living.assisted-living-service');
    }
    public function assistedLivingFacilitiesPage()
    {
        return view('website.gericare_assisted_living.assisted-living-facilities');
    }

    
    public function aboutClinicsPage()
    {
        $testimonial=Testimonial::where('status','1')->where('type','Clinic')->get();
        return view('website.gericare_clinics.about-clinics',compact('testimonial'));
    }
    public function clinicsServicePage()
    {
        return view('website.gericare_clinics.clinics-service');
    }
    
    public function aboutHomeCarePage()
    {
        $testimonial=Testimonial::where('status','1')->where('type','Homecare')->get();
        return view('website.gericare_homecare.about-homecare',compact('testimonial'));
    }
    public function doctorVisitPage()
    {
        return view('website.gericare_homecare.homecare-doctor-visit');
    }
    public function nursingCarePage()
    {
        return view('website.gericare_homecare.homecare-nursing-care');
    }
    public function geriatriAssessmentCounsellingPage()
    {
        return view('website.gericare_homecare.homecare-attender-assistance');
    }
    public function homecareAttenderAssistancePage()
    {
        return view('website.gericare_homecare.homecare-attender-assistance');
    }
    public function homecareMedicalDevicesPage()
    {
        return view('website.gericare_homecare.homecare-medical-devices');
    }

    
    public function geriatricPhysiotherapyatHomePage()
    {
        $title = 'Best Physiotherapy at Home in Chennai - Geri Care';
        $decription = 'Experience convenient home physiotherapy in Chennai with Geri Care. Our expert therapists provide personalized care and rehabilitation services.';
        $keyword = '';
        return view('website.homecare_services.geriatric-physiotherapy-at-home', compact('title', 'decription', 'keyword')); 
    }
    public function psychiatristHomeVisitPage()
    {
        return view('website.homecare_services.psychiatrist-home-visit');
    }
    public function orthopedicianHomeVisitPage()
    {
        return view('website.homecare_services.orthopedician-home-visit');
    }
    public function DentistHomeVisitPage()
    {
        return view('website.homecare_services.dentist-home-visit');
    }
    public function IVFluidsMonitoringPage()
    {
        return view('website.homecare_services.iv-fluids-monitoring');
    }
    public function UrinaryCatheterizationPage()
    {
        return view('website.homecare_services.urinary-catheterization');
    }
    public function OutpatientAntibioticAdministrationPage()
    {
        return view('website.homecare_services.outpatient-antibiotic-administration');
    } 
    public function WoundCareDressingPage()
    {
        return view('website.homecare_services.wound-care-dressing');
    }
    public function ECGatHomePage()
    {
        return view('website.homecare_services.ecg-at-home');
    }
    public function SkilledNursingCarePage()
    {
        $title = 'Best Home Care Nursing Service in Chennai - Geri Care';
        $decription = 'Geri Care offers top-notch nursing care for seniors at home. Our qualified nurses provide warm, affectionate support, both physically and psychologically.';
        $keyword = '';
        return view('website.homecare_services.skilled-nursing-care', compact('title', 'decription', 'keyword'));  
    }
    public function HomeSampleCollectionPage()
    {
        return view('website.homecare_services.home-sample-collection');
    }
    public function LiveInCarePage()
    {
        return view('website.homecare_services.live-in-care');
    }
    public function CareForBedriddenPatientsPage()
    {
        return view('website.homecare_services.care-for-bedridden-patients');
    }
    
    public function aboutGericarePage()
    {
        return view('website.about_us.about-gericare');
    }
    public function leaderShipPage()
    {
        return view('website.about_us.leadership-team');
    }
    public function leaderShipSrinivasPage()
    {
        return view('website.about_us.team-dr-srinivas');
    }
    public function leaderShipLakshmipathyPage()
    {
        return view('website.about_us.team-dr-lakshmipathy');
    }
    public function awardsPage()
    {
        return view('website.about_us.awards-achievements');
    }
    public function careerPage()
    {
        return view('website.career.careers');
    }
    public function contactUsPage()
    {
        return view('website.contact_us.contact-us');
    }
    public function bookAppointmentPage()
    {
        return view('website.book_an_appointment.book-appointment');
    }
    public function testimonialPage()
    {
        $testimonial=Testimonial::where('status','1')->get();
        return view('website.testimonials',compact('testimonial'));
    }
    public function videotestimonialPage()
    {
        $testimonial=Testimonial::where('status','1')->get();
        return view('website.videotestimonials',compact('testimonial'));
       // return view('website.videotestimonials');
    }
    public function faqPage()
    {
        return view('website.faq');
    }
    public function mediaGalleryPage()
    {
        return view('website.in_news.media-gallery');
    } 
    public function newsEventsPage()
    {
        return view('website.in_news.news-events');
    } 
    public function GalleryPage()
    {
        return view('website.in_news.gallery');
    } 
    public function VideoGalleryPage()
    {
        return view('website.in_news.video-gallery');
    } 
    public function MediaToolKitPage()
    {
        return view('website.in_news.media-tool-kit');
    } 
    // public function bookAppointmentThanksPage()
    // {
    //     return view('website.book-appointmnet-thanks');
    // } 
    // public function requestcallbackThanksPage()
    // {
    //     return view('website.request-call-back-thanks');
    // } 
    // public function doctorAppointmnetThanksPage()
    // {
    //     return view('doctor-appointmnet-thanks');
    // } 
    // public function CarrerThanksPage()
    // {
    //     return view('website.carrer-thanks');
    // } 
    // public function consultThanksPage()
    // {
    //     return view('website.consult-thanks');
    // }  
    // public function ThanksContactusPage()
    // {
    //     return view('website.thanks-contactus');
    // }
    // public function newsDetailPage()
    // {
    //     return view('website.news-detail');
    // }  


}
