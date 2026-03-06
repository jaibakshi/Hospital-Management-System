<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\DoctorMiddleware;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorDashboardController;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;


Route::get('/register', function () {
    return view('login_system.registration');    
});

Route::post('/registration', [UserController::class, 'register']);

Route::get('/login', function(){
    return view('login_system.userLogin');
});

Route::post('/login', [UserController::class, 'login']);

Route::middleware(['auth'])->group(function () {
Route::get('/home', [HomeController::class, 'index']);
Route::get('/hospital/cardiology',[HomeController::class,'cardiology']);
Route::get('/hospital/neurology', [HomeController::class, 'neurology']);
Route::get('/hospital/dentistry', [HomeController::class, 'dentistry']);
Route::get('/hospital/ortho', [HomeController::class, 'ortho']);
Route::get('/hospital/pulmonology',[HomeController::class, 'pulmonology']);
Route::get('/hospital/pharmacy',[HomeController::class, 'pharmacy']);
Route::get('/about', [HomeController::class,'about']);
Route::get('/ourdoctor', [HomeController::class,'ourdoctors']);
});
Route::get('/adminhome', function(){    
    return view('admin.admindashboard');
})->middleware('admin');

Route::get('/doctorhome', function(){
    return view('doctor.doctordashboard');
})->middleware('doctor');

// Route::get('/admin-doctor', function(){
//     return view('admin.admin_doctor_CRUD'); 
// });
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-doctor', [DoctorController::class, 'index'])->name('admin.doctor');
    Route::get('/admin-doctor/create', [DoctorController::class, 'create'])->name('admin.doctor.create');
    Route::post('/admin-doctor/store', [DoctorController::class, 'store'])->name('admin.doctor.store');
    Route::get('/admin-doctor/{id}/edit', [DoctorController::class, 'edit'])->name('admin.doctor.edit');
    Route::put('/admin-doctor/{id}', [DoctorController::class, 'update'])->name('admin.doctor.update');
    Route::delete('/admin-doctor/{id}', [DoctorController::class, 'destroy'])->name('admin.doctor.destroy');
    Route::get('/admin/appointment',[AppointmentController::class, 'adminAppointments']); 
    Route::get('/admin/patients',[UserController::Class, 'patients']);
    Route::get('/adminhome',[DoctorController::class,'dashboard']);
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-department', [DepartmentController::class, 'index'])->name('admin.department');
    Route::get('/admin-department/create', [DepartmentController::class, 'create'])->name('admin.department.create');
    Route::post('/admin-department/store', [DepartmentController::class, 'store'])->name('admin.department.store');
    Route::get('/admin-department/{id}/edit', [DepartmentController::class, 'edit'])->name('admin.department.edit');
    Route::put('/admin-department/{id}', [DepartmentController::class, 'update'])->name('admin.department.update');
    Route::delete('/admin-department/{id}', [DepartmentController::class, 'destroy'])->name('admin.department.destroy');
});
Route::post('/logout', [UserController::class, 'logout']);
Route::get('/logout', [UserController::class, 'logout']);

Route::middleware('auth')->group(function() {

    Route::get('/get-doctors/{id}', [AppointmentController::class, 'getDoctor']);
    Route::get('/get-slots', [AppointmentController::class, 'getslots']);
    Route::post('/appointments', [AppointmentController::class, 'store']);
    Route::get('/my-appointment',[AppointmentController::class, 'userAppointments'])
                ->name('user.appointments');
});

Route::middleware(['auth', 'doctor'])->group(function(){
    Route::get('/doctordashboard', function(){
        return view('doctor.doctordashboard');
    });
    Route::get('/doctor-appointment', [DoctorDashboardController::class, 'appointments']);
    Route::get('/doctor/patients', [DoctorDashboardController::class, 'patients']);
    Route::get('doctordashboard', [DoctorDashboardController::class,'dashboard']);
    });

Route::get('/services', function(){
    return view('services');
})->middleware('auth');

Route::get('/forgot-password',function(){
    return view('login_system.forgot-password');
});

Route::post('/forgot-password', function(Request $request){
    $request->validate(['email'=>'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );
    return back()->with('status', __($status));
});

Route::get('reset-password/{token}', function($token){
    return view('login_system.reset-password', ['token' => $token]);
})->name('password.reset');

Route::post('/reset-password', function (Request $request) {

    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:6|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email','password','password_confirmation','token'),

        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();
        }
    );

    if ($status == Password::PASSWORD_RESET) {
        return redirect('/login')->with('success','Password Reset Successful');
    }

    return back()->withErrors(['email' => [__($status)]]);
});