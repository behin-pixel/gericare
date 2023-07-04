<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageViewController extends Controller
{
    public function aboutHospitalPage()
    {
        return view('website.gericare_hospital.about-hospital');
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
        return view('website.gericare_assisted_living.about-assisted-living');
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
        return view('website.gericare_clinics.about-clinics');
    }
    public function clinicsServicePage()
    {
        return view('website.gericare_clinics.clinics-service');
    }
    
    public function aboutHomeCarePage()
    {
        return view('website.gericare_homecare.about-homecare');
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
        return view('website.homecare_services.geriatric-physiotherapy-at-home');
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
        return view('website.homecare_services.skilled-nursing-care');
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
        return view('website.testimonials');
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
    public function CarrerThanksPage()
    {
        return view('website.carrer-thanks');
    } 
    public function ThanksContactusPage()
    {
        return view('website.thanks-contactus');
    }  


}
