<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Videos;
use App\Models\MediaRelease;
use App\Models\NewsEvent;

class PageViewController extends Controller
{
    public function aboutHospitalPage()
    {
        $title = 'Best Home Healthcare In Chennai | Geriatrician Near Me';
        $decription = 'Geri Care provides top-notch home healthcare services in Chennai with expert Geriatricians for senior citizens. Book an appointment now for Personalised care.';
        $keyword = '';
        $testimonial=Testimonial::where('status','1')->orderBy('created_at','desc')->where('type','Hospital')->get();
        return view('website.gericare_hospital.about-hospital', compact('title', 'decription', 'keyword','testimonial'));  
    }
    public function hospitalDepartmentPage()
    {
        return view('website.gericare_hospital.hospital-department');
    }
    public function geriatricMedicine()
    {
        return view('website.departments.geriatric-medicine');
    }
    public function geriatricCardiology()
    {
        return view('website.departments.geriatric-cardiology');
    }
    public function orthoGeriatrics()
    {
        return view('website.departments.ortho-geriatrics');
    }
    public function geriatricPsychiatry()
    {
        return view('website.departments.geriatric-psychiatry');
    }
    public function geriatricNeurology()
    {
        return view('website.departments.geriatric-neurology');
    }
    public function geriatricSurgery()
    {
        return view('website.departments.geriatric-surgery');
    }
    public function geriatricOncology()
    {
        return view('website.departments.geriatric-oncology');
    }
    public function geriatricUrology()
    {
        return view('website.departments.geriatric-urology');
    }
    public function gastroenTerology()
    {
        return view('website.departments.gastroenterology');
    }
    public function Pulmonology()
    {
        return view('website.departments.pulmonology');
    }
    public function GeriatricICU()
    {
        return view('website.departments.geriatric-icu');
    }
    public function Dermatology()
    {
        return view('website.departments.dermatology');
    }
    public function vascularSurgery()
    {
        return view('website.departments.vascular-surgery');
    }
    public function uroGynaecology()
    {
        return view('website.departments.uro-gynaecology');
    }
    public function Nephrology()
    {
        return view('website.departments.nephrology');
    }
    public function Pathology()
    {
        return view('website.departments.pathology');
    }
    public function geriatricPhysiotherapy()
    {
        return view('website.departments.geriatric-physiotherapy');
    }
    public function Ent()
    {
        return view('website.departments.ent');
    }
    public function Ophthalmology()
    {
        return view('website.departments.ophthalmology');
    }
    public function Dentistry()
    {
        return view('website.departments.dentistry');
    }
    public function fallsPrevention()
    {
        return view('website.gericare_clinics.falls-prevention');
    }
    public function MemoryClinic()
    {
        return view('website.gericare_clinics.memory-clinic');
    }
    public function IncontinenceClinic()
    {
        return view('website.gericare_clinics.incontinence-clinic');
    }
    public function PreventiveHealth()
    {
        return view('website.gericare_clinics.preventive-health');
    }
    public function AdultVaccinationClinic()
    {
        return view('website.gericare_clinics.adult-vaccination-clinic');
    }
    public function SeniorsDiabeticClinic()
    {
        return view('website.gericare_clinics.seniors-diabetic-clinic');
    }
    public function hospitalDoctorsPage()
    {
        $title = 'Our Doctors - Geri Care';
        $decription = 'Experience superior healthcare with our exceptional doctors. Trust our team for comprehensive medical expertise and Personalised care. Visit us today!';
        $keyword = '';
        return view('website.gericare_hospital.hospital-doctors', compact('title', 'decription', 'keyword'));
    } 

    public function drSrinivasPage()
    {
        $title = 'Dr. V. Srinivas - Senior Consultant Geriatrician';
        $decription = "Dr. V. Srinivas is a leading Geriatrician with over three decades of clinical practice in India and the UK. He is the Founder Director of Geri Care organization.";
        $keyword = '';
        return view('website.doctors_details.dr-srinivas', compact('title', 'decription', 'keyword'));
    }
    public function drLakshmipathyPage()
    {
        $title = 'Dr. N. Lakshmipathy Ramesh - Senior Consultant Geriatrician';
        $decription = "Dr. Lakshmipathy Ramesh (Dr. LPR) is an established Geriatrician in Chennai. He has over two decades of experience in taking care of the elderly people.";
        $keyword = '';
        return view('website.doctors_details.dr-lakshmipathy', compact('title', 'decription', 'keyword'));
    }
    public function drVasanthPage()
    {
        $title = 'Dr K. Vasanth - Consultant Geriatrician';
        $decription = "Dr. K. Vasanth is an experienced and highly skilled Elderly Care Physician Specialising in the complex medical needs of older patients.";
        $keyword = '';
        return view('website.doctors_details.dr-vasanth', compact('title', 'decription', 'keyword'));
    }
    public function drAshwinPage()
    {
        $title = 'Dr Ashwin Subramaniam - Senior Consultant & Diabetologist';
        $decription = "Dr. Ashwin is an experienced general physician and diabetologist, His expertise extends to acute and chronic conditions particularly in elderly patients.";
        $keyword = '';
        return view('website.doctors_details.dr-ashwin', compact('title', 'decription', 'keyword'));
    }
    public function drManickaSaravananPage()
    {
        $title = 'Dr. S Manicka Saravanan - Consultant Geriatrician';
        $decription = "Dr. Manicka Saravanan, a reputed Geriatrician with a postgraduate degree in Geriatric Medicine from AIIMS, brings close to a decade of clinical and research experience to the organization.";
        $keyword = '';
        return view('website.doctors_details.dr-manicka-saravanan', compact('title', 'decription', 'keyword'));
    }
    public function drTinuThambyPage()
    {
        $title = 'Tinu Thamby T - Clinical Psychologist';
        $decription = "Tinu Thamby T is a highly qualified clinical psychologist holding an M.Phil. in Clinical Psychology licensed by the Rehabilitation Council of India (RCI) with a decade of experience.";
        $keyword = '';
        return view('website.doctors_details.dr-tinu-thamby', compact('title', 'decription', 'keyword'));
    }

    public function drSrinivasRajkumarPage()
    {
        $title = 'Dr. Srinivas Rajkumar T - Consultant Psychiatrist';
        $decription = "Dr. Srinivas Rajkumar T is a popular Geriatric Psychiatrist in Chennai. He believes in comprehensive evaluation of mental health conditions following a biopsychosocial approach.";
        $keyword = ''; 
        return view('website.doctors_details.dr-srinivas-rajkumar', compact('title', 'decription', 'keyword'));
    } 
    public function drMageshPage()
    {
        $title = 'Dr. Magesh R - Consultant Geriatrician';
        $decription = "Dr. Magesh's journey has equipped him with valuable skills and expertise in the field of Geriatric Medicine and Internal Medicine. Visit our website for more information.";
        $keyword = ''; 
        return view('website.doctors_details.dr-magesh', compact('title', 'decription', 'keyword'));
    } 
    public function drMuthuswamyPage()
    {
        $title = 'Dr. Muthuswamy - Senior Interventional Consultant Cardiologist';
        $decription = "Dr. Muthuswamy specialised in Cardiology and worked as a Consultant in Cardiology at various centres from 1989.";
        $keyword = ''; 
        return view('website.doctors_details.dr-muthuswamy', compact('title', 'decription', 'keyword'));
    } 
    public function rejivrajendranathPage()
    {
        $title = 'Dr. Rejiv Rajendranath - Medical Oncologist';
        $decription = "Dr. Rejiv Rajendranath, a Medical Oncologist with 19 years of experience, offers services such as chemotherapy, hormone therapy, and stem cell transplantation. Member of IMA and ISMPO.";
        $keyword = ''; 
        return view('website.doctors_details.dr-rejivrajendranath', compact('title', 'decription', 'keyword'));
    }
    public function drAnupamaPage()
    {
        $title = 'Dr. K. Anupama - Consultant Geriatrician';
        $decription = "Dr Anupama is an experienced Geriatrician and one of the few qualified female Geriatricians with expertise in female geriatric conditions. ";
        $keyword = ''; 
        return view('website.doctors_details.dr-anupama', compact('title', 'decription', 'keyword'));
    }
    public function drArulmozhiselvanPage()
    {
        $title = 'Dr. V. Arulmozhiselvan - Consultant Geriatrician';
        $decription = "Dr. V. Arulmozhiselvan, an experienced Consultant Geriatrician, specializes in enhancing the health of senior citizens in both inpatient and outpatient hospital settings. ";
        $keyword = ''; 
        return view('website.doctors_details.dr-arulmozhiselvan', compact('title', 'decription', 'keyword'));
    }
    public function drGuruBalajiPage()
    {
        $title = 'Dr. S. Guru Balaji - Senior Urologist';
        $decription = "Dr. Guru Balaji, a trained urologist in India and the United Kingdom, specializes in open, endourological, and laparoscopic procedures.";
        $keyword = ''; 
        return view('website.doctors_details.dr-guru-balaji', compact('title', 'decription', 'keyword'));
    }
    public function drKathiseranPage()
    {
        $title = 'Dr. Kathiresan - Senior Surgical Oncologist';
        $decription = "Dr. Kathiresan is a reputable senior surgical oncologist in Chennai with extensive education and experience in the field, including MBBS, MS (Gen.Surg) and MCh in surgical oncology from renowned institutions. ";
        $keyword = ''; 
        return view('website.doctors_details.dr-kathiresan', compact('title', 'decription', 'keyword'));
    }
    public function drRajKumarPage()
    {
        
        $title = 'Dr. P. Rajkumar - Senior Surgical Oncologist';
        $decription = "Dr. Rajkumar Poovananathan, a senior surgical oncologist at Geri Care Hospital, specializes in geriatric oncology. He heads the Geriatric Oncology Department at the Hospital.";
        $keyword = ''; 
        return view('website.doctors_details.dr-rajkumar', compact('title', 'decription', 'keyword'));
    }
    public function  drThiruvengidaPage()
    {
        $title = 'Dr. G. Thiruvengita Prasad - Senior Orthopedic Surgeon';
        $decription = "Dr. Thiruvengita Prasad G is a renowned Spine Surgeon, Sports Medicine Surgeon and Orthopedist and has an experience of 22 years in these fields.";
        $keyword = ''; 
        return view('website.doctors_details.dr-thiruvengida', compact('title', 'decription', 'keyword'));
    }
    public function  drFloraPage()
    {
        $title = 'Dr. Flora Alex - Consultant Geriatrician';
        $decription = "Dr. Flora, a specialist in managing diseases in the elderly, conducts Comprehensive Geriatric Assessments and tailors personalized treatment plans.";
        $keyword = ''; 
        return view('website.doctors_details.dr-flora-alex', compact('title', 'decription', 'keyword'));
    }
    public function  drUpSrinivasPage()
    {
        $title = 'Dr. U.P. Srinivasan - Senior Surgical Gastroenterolgist';
        $decription = "Dr. U.P. Srinivasan, a renowned Surgical Gastroenterologist in Chennai, brings a wealth of experience in laparoscopy and gastrointestinal surgery. ";
        $keyword = ''; 
        return view('website.doctors_details.dr-up-srinivas', compact('title', 'decription', 'keyword'));
    }
    public function  drBalamuruganSPage()
    {
        $title = 'Dr. S. Balamurugan - Senior Neurosurgeon';
        $decription = "Dr. S. Balamurugan has operated more than 3500 patients in his Neurosurgical career in the Government and Corporate sectors ranging from Aneurysm, AVM surgeries, Skull base Surgeries.";
        $keyword = ''; 
        return view('website.doctors_details.dr-balamurugan-s', compact('title', 'decription', 'keyword'));
    }

    public function  drSrideviPage()
    {
        $title = 'Dr. K. Sreedevi - Senior Pulmonologist';
        $decription = "Dr. Sreedevi K. is a senior pulmonologist specializing in managing respiratory diseases in elderly patients. With expertise in conditions such as asthma, COPD, pneumonia, and sleep disorders.";
        $keyword = ''; 
        return view('website.doctors_details.dr-sridevi', compact('title', 'decription', 'keyword'));
    }
    public function  drSusovanPage()
    {
        $title = 'Dr Susovan Mitra - Chief Critical Care Physician & Intensivist';
        $decription = "Dr. Susovan Mitra possesses vast expertise in effectively managing critical conditions such as Sepsis, MODS, and emergency cases in both neurosurgical and medical fields, specifically in elderly patients.";
        $keyword = ''; 
        return view('website.doctors_details.dr-susovan', compact('title', 'decription', 'keyword'));
    }
    public function  drBalamuruganBPage()
    {
        
        $title = 'Dr. Balamurugan B - Senior Consultant Nephrologist';
        $decription = "Dr. B Balamurugan, a skilled Nephrologist in Chennai with over 30 years of experience, founded a dedicated Nephrology outpatient service in Velachery for comprehensive care of end-stage renal disease.";
        $keyword = ''; 
        return view('website.doctors_details.dr-balamurugan-b', compact('title', 'decription', 'keyword'));
    } 
    public function  saiRamPage()
    {
        
        $title = 'Dr. Sairam - Vascular Surgeon';
        $decription = "Meet Dr. Sairam Subramanian, a board-certified vascular surgeon with 12+ years of experience. Specializing in minimally invasive treatments for vascular disease, varicose veins, diabetic feet, and aortic aneurysms.";
        $keyword = ''; 
        return view('website.doctors_details.dr-sairam', compact('title', 'decription', 'keyword'));
    }
    public function  subashKumarapPage()
    {
        return view('website.doctors_details.dr-ap-subash-kumar');
    }
    public function  sujathaPage()
    {
        $title = 'Dr. Sujatha - Consultant Psychiatrist';
        $decription = "Dr. Sujatha, Post her M.B.B.S specialised in Psychiatry from Kasturibai medical college and worked as a private consultant from 2001-2007 with a main focus on women and adolescents.";
        $keyword = ''; 
        return view('website.doctors_details.dr-sujatha', compact('title', 'decription', 'keyword'));
    }
    public function  jayaramanPage()
    {
        $title = 'Dr Jayaraman - Pulmonologist';
        $decription = "Dr. S. Jayaraman, a practicing Pulmonologist in Chennai, specializes in diagnosing and treating various pulmonary diseases. he offers meticulous care and various diagnostic and therapeutic procedures.";
        $keyword = ''; 
        return view('website.doctors_details.dr-jayaraman', compact('title', 'decription', 'keyword'));
    }
    public function  mohanRaoPage()
    {
        $title = 'Dr. Mohan Rao - General Surgeon';
        $decription = "Dr. Mohan Rao qualified as a General surgeon and subsequently trained as a Laparoscopic Surgeon. He has 36 years of Surgical Experience as a General Surgeon and 20 years of Laparoscopic Surgery.";
        $keyword = ''; 
        return view('website.doctors_details.dr-mohan-rao', compact('title', 'decription', 'keyword'));
    }
    public function  asirjulinPage()
    {
        $title = 'Dr Asir Julin - Neurologist';
        $decription = "Dr.Asir has been associated with several reputed hospitals in Chennai as a consultant & stroke treatment specialist during the golden hour. With over 15 years of hands-on experience.";
        $keyword = ''; 
        return view('website.doctors_details.dr-asir-julin', compact('title', 'decription', 'keyword'));
    }
    public function  meenakshiPage()
    {
        $title = 'Dr. Meenakshi - Consultant Obstetrician & Gynaecologist';
        $decription = "Meet Dr. Meenakshi Balasubramanian - a compassionate gynecologist known for her holistic care and counseling skills. Specializing in high-risk pregnancies, laparoscopy, and Gynec Endocrinologye.";
        $keyword = '';  
        return view('website.doctors_details.dr-meenakshi', compact('title', 'decription', 'keyword'));
    }
    public function  banuPrakashPage()
    {
        $title = 'Dr. B.C.Bhanu Prakash - Ortho Geriatrician';
        $decription = "Dr. B.C.Bhanu Prakash is a Senior Consultant Specialising in primary, complex & revision knee and hip replacement surgeries.";
        $keyword = ''; 
        return view('website.doctors_details.dr-banu-prakash', compact('title', 'decription', 'keyword'));
    }
    public function  aarathiPage()
    {
        $title = 'Dr. Arathi Surendranath - Radiation Oncology';
        $decription = "Dr. Arathi Surendranath, an experienced Radiation Oncologist, specializes in the treatment of Central Nervous System Tumors. she offers expert care in the oncology department of reputed hospitals.";
        $keyword = ''; 
        return view('website.doctors_details.dr-arathi-surendranath', compact('title', 'decription', 'keyword'));
    }
    public function  vikramPage()
    {
        $title = 'Dr. Vikram - Surgical Gastroenterologist';
        $decription = "Dr. Vikram, an experienced Geriatric Surgical Gastroenterologist, specializes in endoscopy and endoscopic management of gastrointestinal issues. With over 20 years of experience, he offers expertise in treating hernias and fistulas.";
        $keyword = ''; 
        return view('website.doctors_details.dr-vikram', compact('title', 'decription', 'keyword'));
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
        $testimonial=Testimonial::where('status','1')->orderBy('created_at','desc')->where('type','Assisted Living')->get();
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
        $testimonial=Testimonial::where('status','1')->where('type','Clinic')->orderBy('created_at','desc')->get();
        return view('website.gericare_clinics.about-clinics',compact('testimonial'));
    }
    public function clinicsServicePage()
    {
        return view('website.gericare_clinics.clinics-service');
    }
    
    public function aboutHomeCarePage()
    {
        $title = 'Home Health Care Services In Chennai - Geri Care';
        $decription = 'Discover Exceptional Home Health Care Services in Chennai! Geri Care Provides Top-Quality Healthcare for the Elderly. Call Now for Expert Assistance!';
        $keyword = '';
        $testimonial=Testimonial::where('status','1')->where('type','Homecare')->orderBy('created_at','desc')->get();
        return view('website.gericare_homecare.about-homecare',compact('testimonial','title', 'decription', 'keyword'));
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
        $decription = 'Experience convenient home physiotherapy in Chennai with Geri Care. Our expert therapists provide Personalised care and rehabilitation services.';
        $keyword = '';
        return view('website.homecare_services.geriatric-physiotherapy-at-home', compact('title', 'decription', 'keyword')); 
    }
    public function psychiatristHomeVisitPage()
    {
        $title = 'Psychiatrists For Home Visit in Chennai - Geri Care';
        $decription = 'Seeking psychiatric care at home in Chennai? Geri Care offers expert home visit psychiatrists, providing Personalised mental health care services. Contact us today!';
        $keyword = '';
        return view('website.homecare_services.psychiatrist-home-visit', compact('title', 'decription', 'keyword'));
    }
    public function orthopedicianHomeVisitPage()
    {
        $title = 'Orthopaedic Doctors Home Visit in Chennai - Geri Care';
        $decription = 'In need of orthopaedic care at home in Chennai? Geri Care provides expert home visit orthopaedic doctors offering Personalised orthopaedic care services. Contact us today!';
        $keyword = '';
        return view('website.homecare_services.orthopedician-home-visit', compact('title', 'decription', 'keyword'));
    }
    public function DentistHomeVisitPage()
    {
        $title = 'Best Dental Care at Home | Dentist Home Visit - Geri Care';
        $decription = 'Geri Care offers Personalised dental care at home with their expert dentist home visit service in Chennai. Experience convenient and superior oral healthcare.';
        $keyword = '';
        return view('website.homecare_services.dentist-home-visit', compact('title', 'decription', 'keyword'));
    }
    public function IVFluidsMonitoringPage()
    {
        $title = 'IV Fluids Monitoring - Geri Care';
        $decription = "Ensure optimal patient care with Geri Care's professional IV fluids monitoring services. Our expert team ensures accurate and efficient administration of IV fluids.";
        $keyword = '';
        return view('website.homecare_services.iv-fluids-monitoring', compact('title', 'decription', 'keyword'));
    }
    public function UrinaryCatheterizationPage()
    {
        $title = 'Urinary catheterization treatment at Home - Geri Care';
        $decription = 'Experience the convenience of urinary catheterization treatment at home with Geri Care. Our services prioritize comfort and ensure proper care in a familiar environment.';
        $keyword = '';
        return view('website.homecare_services.urinary-catheterization', compact('title', 'decription', 'keyword'));
    }
    public function OutpatientAntibioticAdministrationPage()
    {
        return view('website.homecare_services.outpatient-antibiotic-administration');
    } 
    public function WoundCareDressingPage()
    {
        $title = 'Wound Dressing Services at Home - Geri Care';
        $decription = "Geri Care offers convenient wound dressing services at home, saving you time and effort. Let our skilled team take care of your wound healing needs.";
        $keyword = ''; 
        return view('website.homecare_services.wound-care-dressing', compact('title', 'decription', 'keyword'));
    }
    public function ECGatHomePage()
    {
        $title = 'ECG Test at Home | Ecg Testing Services At Home - Geri Care';
        $decription = "Experience hassle-free ECG tests at the comfort of your home with Geri Care's professional testing services. Achieve peace of mind with our convenient and reliable solutions.";
        $keyword = ''; 
        return view('website.homecare_services.ecg-at-home', compact('title', 'decription', 'keyword'));
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
        $title = 'Book A Home Sample Collection Service - Geri Care';
        $decription = "Save time and effort with Geri Care's doorstep sample collection services. From blood samples to other tests, we bring reliable healthcare to your door.";
        $keyword = '';
        return view('website.homecare_services.home-sample-collection', compact('title', 'decription', 'keyword'));
    }
    public function LiveInCarePage()
    {
        $title = 'Live-In Senior Care Services - Geri Care';
        $decription = "Geri Care provides professional live-in elderly care services, prioritizing your loved ones' well-being and comfort. ";
        $keyword = '';   
        return view('website.homecare_services.live-in-care', compact('title', 'decription', 'keyword'));
    }
    public function CareForBedriddenPatientsPage()
    {
        $title = 'Home Health Care Services for Bedridden Seniors - Geri Care';
        $decription = "Geri Care offers comprehensive home health care services for bedridden seniors, prioritizing their comfort and overall well-being. Trust us for compassionate care at home.";
        $keyword = '';
        return view('website.homecare_services.care-for-bedridden-patients', compact('title', 'decription', 'keyword'));
    }
    
    public function aboutGericarePage()
    {
        $title = 'About - Geri Care';
        $decription = "Gericare is your dedicated companion in senior care, providing holistic support and Personalised services. Discover a new standard of well-being today!";
        $keyword = '';
        return view('website.about_us.about-gericare', compact('title', 'decription', 'keyword'));
    }
    public function leaderShipPage()
    {
        $title = 'Leadership Team - Geri Care';
        $decription = "Meet the exceptional leadership team at Geri Care. Our experienced leaders bring a wealth of knowledge and expertise to ensure exceptional senior care services.";
        $keyword = '';
        return view('website.about_us.leadership-team', compact('title', 'decription', 'keyword'));
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
        $title = 'Careers and Employment - Geri Care';
        $decription = "Discover diverse career paths at Geri Care that allow you to make a meaningful difference in people's lives. Explore our opportunities now!";
        $keyword = '';
        return view('website.career.careers', compact('title', 'decription', 'keyword'));
    }
    public function contactUsPage()
    { 
        $title = 'Contact Us - Geri Care';
        $decription = "Connect with Geri Care, the leading provider of senior care services. Our friendly experts are ready to assist you and provide guidance every step of the way.";
        $keyword = '';
        return view('website.contact_us.contact-us', compact('title', 'decription', 'keyword'));
    }
    public function bookAppointmentPage()
    {
        $title = 'Book an Appointment - Geri Care';
        $decription = "Get exceptional senior health care services at Geri Care. Secure your appointment today and receive Personalised care from our dedicated team of experts.";
        $keyword = '';
        return view('website.book_an_appointment.book-appointment', compact('title', 'decription', 'keyword'));
    }
    public function requestAppointmentPage()
    {
        $title = 'Request an Appointment - Geri Care';
        $decription = "Get exceptional senior health care services at Geri Care. Secure your appointment today and receive Personalised care from our dedicated team of experts.";
        $keyword = '';
        return view('website.request-an-appointment', compact('title', 'decription', 'keyword'));
    }
    public function testimonialPage()
    {
        $title = 'Testimonials - Geri Care';
        $decription = "Discover the power of real stories and experiences through our testimonials. Hear what families have to say about Geri Care's commitment to exceptional senior care.";
        $keyword = '';
        $testimonial=Testimonial::where('status','1')->orderBy('created_at','desc')->get();
        return view('website.testimonials',compact('testimonial','title', 'decription', 'keyword'));
    }
    public function videotestimonialPage()
    {
        $testimonial=Testimonial::where('status','1')->orderBy('created_at','desc')->get();
        return view('website.videotestimonials',compact('testimonial'));
       // return view('website.videotestimonials');
    }
    public function faqPage()
    {
        $title = 'Frequently Asked Questions (FAQs) - Geri Care';
        $decription = "Find answers to commonly asked questions about Geri Care's senior care services, facilities, and more. Our FAQ section provides valuable information to address your queries.";
        $keyword = '';
        return view('website.faq', compact('title', 'decription', 'keyword'));
    }
    public function termsConditionsPage()
    {
        return view('website.terms-and-conditions');
    }

    public function iagChennaiPage()
    {
        return view('website.iag-chennai');
    }
    public function inaugurationAdambakkamPage()
    {
        return view('website.inauguration-adambakkam');
    }
    public function raPuramLaunchPage()
    {
        return view('website.ra-puram-launch');
    }
    public function annaNagarClinicLaunchPage()
    {
        return view('website.annanagar-clinic-launch');
    }
    public function gericriticonConferencePage()
    {
        return view('website.gericriticon-conference');
    }
    public function newsEventsPage()
    {
        return view('website.in_news.news-and-events');
    }
    public function mediaGalleryPage()
    {
        $title = 'Media Gallery - Geri Care';
        $decription = "Step into the vibrant media gallery of Geri Care. Explore our memorable moments, heartwarming interactions, and the spirit of compassionate senior care.";
        $keyword = '';
        $media_release=MediaRelease::where('status','1')->orderBy('created_at','desc')->get();
        return view('website.in_news.media-gallery',compact('media_release','title', 'decription', 'keyword'));
    } 
    public function newsEventsDemoPage()
    {
        $title = 'News and Events - Geri Care';
        $decription = "Experience excellence in geriatric care at our renowned hospital. Stay informed about the latest news and exciting events happening at Geri Care. Join us today!";
        $keyword = '';
        $news_event=NewsEvent::where('status','1')->orderBy('created_at','desc')->get();
      
        return view('website.in_news.news-events-demo',compact('news_event','title', 'decription', 'keyword'));
    } 
    public function GalleryPage()
    {
        $title = 'Gallery - Geri Care';
        $decription = "Explore the Captivating Gallery of Geri Care's Home Health Care Services. Witness the heartwarming moments and events that await you. Browse now!";
        $keyword = '';
        return view('website.in_news.gallery', compact('title', 'decription', 'keyword'));
    } 
    public function VideoGalleryPage()
    {
        $title = 'Video Gallery - Geri Care';
        $decription = "Step into Geri Care's video gallery and witness the transformative impact of our services. Engaging videos that bring the essence of senior care to life.";
        $keyword = '';
        $videos=Videos::where('status','1')->orderBy('created_at','desc')->get();
        return view('website.in_news.video-gallery',compact('videos','title', 'decription', 'keyword'));

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
    public function newsDetailPage($slug)
    {
        $news_event_one=NewsEvent::where('slug',$slug)->first();
        return view('website.news-detail',compact('news_event_one'));
    }  


}
