<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FrequentlyAskedQuestionsController;
use App\Http\Controllers\Admin\FranchisingOpportunitiesController;
use App\Http\Controllers\Admin\BookAppointmentController;
use App\Http\Controllers\Admin\ReachUsController;
use App\Http\Controllers\Admin\DoctorsController;
use App\Http\Controllers\Admin\HospitalLabManagementController;
use App\Http\Controllers\Admin\ClinicalLabManagementController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\HealthCheckupController;
use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ApiConfigController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\JobPostController;
use App\Http\Controllers\Admin\ResearchController;
use App\Http\Controllers\Admin\PaymentConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NewsAndEventsController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\MediaReleaseController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrganController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth_users'])->group(function () {

    // ================================================= //
        Route::group(['prefix' => 'admin'], function () {
            Route::group(['prefix' => 'dashboard'], function () {
            Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
            Route::post('/export', [DashboardController::class, 'exportData'])->name('dashboard.export');
        });
        Route::get('/dashboardData', [DashboardController::class, 'dashboardData'])->name('dashboard.data');
        Route::post('/dashboard-status', [DashboardController::class, 'status'])->name('dashboard.status');
        Route::post('/dashboard-remark', [DashboardController::class, 'remark'])->name('dashboard.remark');
        // Route::group(['prefix' => 'settings'], function () {
            Route::get('/profile', [ProfileController::class, 'index'])->name('admin.profile');
            Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
            Route::post('/profile_image', [ProfileController::class, 'imageDelete'])->name('profile.image');
        
            Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
            Route::group(['prefix' => 'user'], function () {
                Route::get('/', [UserController::class, 'index'])->name('user.index');
                Route::get('create', [UserController::class, 'create'])->name('user.create');
                Route::post('create', [UserController::class, 'store'])->name('user.store');
                Route::get('edit/{id}', [UserController::class, 'edit'])->name('user.edit');
                Route::put('edit/{id}', [UserController::class, 'update'])->name('user.update');
                Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
            });
            Route::group(['prefix' => 'role'], function () {
                Route::get('/', [RoleController::class, 'index'])->name('role.index');
                Route::get('create', [RoleController::class, 'create'])->name('role.create');
                Route::post('create', [RoleController::class, 'store'])->name('role.store');
                Route::get('edit/{id}', [RoleController::class, 'edit'])->name('role.edit');
                Route::put('edit/{id}', [RoleController::class, 'update'])->name('role.update');
                Route::delete('delete/{id}', [RoleController::class, 'destroy'])->name('role.delete');
            });
            
            
        // });
        Route::group(['prefix' => 'master'], function () {
            
          
            Route::group(['prefix' => 'banner'], function () {
                Route::get('/', [BannerController::class, 'index'])->name('banner.index');
                Route::get('create', [BannerController::class, 'create'])->name('banner.create');
                Route::post('create/{id?}', [BannerController::class, 'store'])->name('banner.store');
                Route::get('edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
                Route::delete('delete/{id?}', [BannerController::class, 'delete'])->name('banner.delete');
            });          
        });
        Route::group(['prefix' => 'news-and-events'], function () {
            Route::get('/', [NewsAndEventsController::class, 'index'])->name('news-and-events.index');
            Route::get('create', [NewsAndEventsController::class, 'create'])->name('news-and-events.create');
            Route::post('create/{id?}', [NewsAndEventsController::class, 'store'])->name('news-and-events.store');
            Route::post('update/{id?}', [NewsAndEventsController::class, 'update'])->name('news-and-events.update');
            Route::get('edit/{id}', [NewsAndEventsController::class, 'edit'])->name('news-and-events.edit');
            Route::delete('delete/{id?}', [NewsAndEventsController::class, 'destroy'])->name('news-and-events.destroy');
        });

        Route::group(['prefix'=>'media-release'],function(){
            Route::get('/',[MediaReleaseController::class,'index'])->name('media-release.index');
            Route::get('/create', [MediaReleaseController::class, 'create'])->name('media-release.create'); 
            Route::post('create/{id?}', [MediaReleaseController::class, 'store'])->name('media-release.store');    
            Route::get('/edit/{id}', [MediaReleaseController::class, 'edit'])->name('media-release.edit'); 
            Route::delete('/delete/{id}', [MediaReleaseController::class, 'delete'])->name('media-release.delete');  
            // Route::post('/export', [TestimonialController::class, 'exportData'])->name('testimonial.export');
    
        });

        Route::group(['prefix'=>'reports'],function(){
            Route::get('/',[ReportsController::class,'index'])->name('reports.index');          
            Route::get('/consult/export', [ReportsController::class, 'exportConsultReport'])->name('consult.reports.export');
            Route::get('/contact/report',[ReportsController::class,'contactReport'])->name('reports.contact.report');
            Route::get('/contact/export', [ReportsController::class, 'exportContactReport'])->name('contact.reports.export');
            Route::get('/callback/report',[ReportsController::class,'callBackReport'])->name('reports.callback.report');
            Route::get('/callback/export', [ReportsController::class, 'exportCallBackReport'])->name('callback.reports.export');      
            Route::get('/doctorapp/report',[ReportsController::class,'docotorAppointmentReport'])->name('reports.doctorapp.report');
            Route::get('/doctorapp/export', [ReportsController::class, 'exportdocotorAppointmentReport'])->name('doctorapp.reports.export'); 
            Route::get('/departmentapp/report',[ReportsController::class,'departmentAppointmentReport'])->name('reports.departmentapp.report');
            Route::get('/departmentapp/export', [ReportsController::class, 'exportdepartmentAppointmentReport'])->name('departmentapp.reports.export');      
            Route::get('/serviceapp/report',[ReportsController::class,'serviceAppointmentReport'])->name('reports.serviceapp.report');
            Route::get('/serviceapp/export', [ReportsController::class, 'exportServiceAppointmentReport'])->name('serviceapp.reports.export'); 
            Route::get('/career/report',[ReportsController::class,'careerReport'])->name('reports.career.report');
            Route::get('/career/export', [ReportsController::class, 'exportCareerReport'])->name('career.reports.export');      
        });

        Route::group(['prefix'=>'video'],function(){
            Route::get('/',[VideosController::class,'index'])->name('video.index');
            Route::get('/create', [VideosController::class, 'create'])->name('video.create'); 
            Route::post('create/{id?}', [VideosController::class, 'store'])->name('video.store');    
            Route::get('/edit/{id}', [VideosController::class, 'edit'])->name('video.edit'); 
            Route::delete('/delete/{id}', [VideosController::class, 'delete'])->name('video.delete');  
            // Route::post('/export', [TestimonialController::class, 'exportData'])->name('testimonial.export');
    
        });

        Route::group(['prefix' => 'news-letter'],function(){
            Route::get('/', [NewsLetterController::class, 'index'])->name('news-letter.index');
            Route::get('/{id}', [NewsLetterController::class, 'show'])->name('news-letter.show');
            Route::delete('/{id?}', [NewsLetterController::class, 'delete'])->name('news-letter.delete');
            Route::post('/export', [NewsLetterController::class, 'exportData'])->name('news-letter.export');

        });


        Route::group(['prefix' => 'customers'], function () {
            Route::get('/', [CustomersController::class, 'index'])->name('customers.index');
            Route::get('/show/{id}', [CustomersController::class, 'show'])->name('customers.show');
            Route::post('/export', [CustomersController::class, 'exportData'])->name('customers.export');

        });

        Route::group(['prefix' => 'organs'], function () {
            Route::get('/', [OrganController::class, 'index'])->name('organ.index');
            Route::get('/create', [OrganController::class, 'create'])->name('organ.create'); 
            Route::post('/create', [OrganController::class, 'store'])->name('organ.store'); 
            Route::get('/edit/{id}', [OrganController::class, 'edit'])->name('organ.edit'); 
            Route::post('/edit/{id}', [OrganController::class, 'update'])->name('organ.update'); 
            Route::delete('/destroy/{id}', [OrganController::class, 'destroy'])->name('organ.destroy');  
        });
      
        Route::group(['prefix' => 'media'], function () {
            Route::get('/', [MediaController::class, 'index'])->name('media.index');
            Route::get('/create', [MediaController::class, 'create'])->name('media.create'); 
            Route::post('/create', [MediaController::class, 'store'])->name('media.store'); 
            Route::get('/edit/{id}', [MediaController::class, 'edit'])->name('media.edit'); 
            Route::post('/edit/{id}', [MediaController::class, 'update'])->name('media.update'); 
            Route::delete('/destroy/{id}', [MediaController::class, 'destroy'])->name('media.destroy');  
        }); 
    // ================================================= //


    // Route::get('patients', [EnquiryController::class, 'index'])->name('patients.index');
    // Route::get('doctors', [DoctorsController::class, 'index'])->name('doctors.index');
    // Route::get('health-checkup', [HealthCheckupController::class, 'index'])->name('health-checkup.index');
    // Route::get('reach-us', [ReachUsController::class, 'index'])->name('reach-us.index');


    // Route::get('/faq', [FrequentlyAskedQuestionsController::class, 'index'])->name('faq.index');
    // Route::delete('/faq/{id}', [FrequentlyAskedQuestionsController::class, 'destroy'])->name('faq.delete');
    // Route::get('/faq/{id}', [FrequentlyAskedQuestionsController::class, 'show'])->name('faq.show');
    // Route::post('/faq/export', [FrequentlyAskedQuestionsController::class, 'exportData'])->name('faq.export');

    // Route::get('/hospital-lab-management', [HospitalLabManagementController::class, 'index'])->name('hospital-lab-management.index');
    // Route::delete('/hospital-lab-management/{id}', [HospitalLabManagementController::class, 'destroy'])->name('hospital-lab-management.delete');
    // Route::get('/hospital-lab-management/{id}', [HospitalLabManagementController::class, 'show'])->name('hospital-lab-management.show');
    // Route::post('/hospital-lab-management/export', [HospitalLabManagementController::class, 'exportData'])->name('hospital-lab-management.export');

    // Route::get('/clinical-lab-management', [ClinicalLabManagementController::class, 'index'])->name('clinical-lab-management.index');
    // Route::delete('/clinical-lab-management/{id}', [ClinicalLabManagementController::class, 'destroy'])->name('clinical-lab-management.delete');
    // Route::get('/clinical-lab-management/{id}', [ClinicalLabManagementController::class, 'show'])->name('clinical-lab-management.show');
    // Route::post('/clinical-lab-management/export', [ClinicalLabManagementController::class, 'exportData'])->name('clinical-lab-management.export');

    // Route::get('/franchising-opportunities', [FranchisingOpportunitiesController::class, 'index'])->name('franchising-opportunities.index');
    // Route::delete('/franchising-opportunities/{id}', [FranchisingOpportunitiesController::class, 'destroy'])->name('franchising-opportunities.delete');
    // Route::get('/franchising-opportunities/{id}', [FranchisingOpportunitiesController::class, 'show'])->name('franchising-opportunities.show');
    // Route::post('/franchising-opportunities/export', [FranchisingOpportunitiesController::class, 'exportData'])->name('franchising-opportunities.export');


    // Route::get('/research', [ResearchController::class, 'index'])->name('research.index');
    // Route::delete('/research/{id}', [ResearchController::class, 'destroy'])->name('research.delete');
    // Route::get('/research/{id}', [ResearchController::class, 'show'])->name('research.show');
    // Route::post('/research/export', [ResearchController::class, 'exportData'])->name('research.export');


    Route::get('/book-an-appointment', [BookAppointmentController::class, 'index'])->name('book-an-appointment.index');
    Route::delete('/book-an-appointment/{id}', [BookAppointmentController::class, 'destroy'])->name('book-an-appointment.delete');
    Route::get('/book-an-appointment/{id}', [BookAppointmentController::class, 'show'])->name('book-an-appointment.show');
    Route::post('/book-an-appointment/export', [BookAppointmentController::class, 'exportData'])->name('book-an-appointment.export');

    Route::group(['prefix' => 'job-post'], function () {
        Route::get('/', [JobPostController::class, 'index'])->name('job-post.index');
        Route::get('/create', [JobPostController::class, 'create'])->name('job-post.create'); 
        Route::post('/create', [JobPostController::class, 'store'])->name('job-post.store'); 
        Route::get('/edit/{id}', [JobPostController::class, 'edit'])->name('job-post.edit'); 
        Route::post('/edit/{id}', [JobPostController::class, 'update'])->name('job-post.update'); 
        Route::delete('/destroy/{id}', [JobPostController::class, 'delete'])->name('job-post.destroy');  
    }); 
    Route::group(['prefix'=>'testimonial'],function(){
        Route::get('/',[TestimonialController::class,'index'])->name('testimonial.index');
        Route::get('/create', [TestimonialController::class, 'create'])->name('testimonial.create'); 
        Route::post('create/{id?}', [TestimonialController::class, 'store'])->name('testimonial.store');

        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit'); 
        Route::delete('/delete/{id}', [TestimonialController::class, 'delete'])->name('testimonial.delete');  
        // Route::post('/export', [TestimonialController::class, 'exportData'])->name('testimonial.export');

    });
        Route::group(['prefix' => 'department'], function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('department.index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('department.create'); 
        Route::post('/create', [DepartmentController::class, 'store'])->name('department.store'); 
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit'); 
        Route::post('/edit/{id}', [DepartmentController::class, 'update'])->name('department.update'); 
        Route::delete('/destroy/{id}', [DepartmentController::class, 'delete'])->name('department.destroy');  
    }); 
    
    Route::get('careers', [CareerController::class, 'index'])->name('careers.index');
    Route::delete('careers/delete/{id?}', [CareerController::class, 'delete'])->name('careers.delete'); 
    Route::get('careers/status/{id}', [CareerController::class, 'status'])->name('careers.status');
    Route::get('careers/resume/{id}', [CareerController::class, 'download'])->name('resume.download');
    Route::get('careers/view/{id}', [CareerController::class, 'view'])->name('careers.view');
    Route::post('/careers/export', [CareerController::class, 'exportData'])->name('careers.export');


    Route::get('contact-us', [ContactUsController::class, 'index'])->name('contact-us.index');
    Route::delete('contact-us/delete/{id?}', [ContactUsController::class, 'delete'])->name('contact-us.delete'); 
    Route::get('contact-us/view/{id}', [ContactUsController::class, 'view'])->name('contact-us.view');
    Route::post('/contact-us/export', [ContactUsController::class, 'exportData'])->name('contact-us.export');

    
});
});

Route::get('test-mail',function() {
    $action = new ApiController();
    $action->sendMailNotification(6,'DENIED');
    return "action";
});
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);
