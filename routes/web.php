<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleAndPermissionsController;
use App\Http\Middleware\Authentications;
use App\Livewire\Authen\Authen;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Expenses\Expenses;
use App\Livewire\Income\Components\RegisterStudentPrint;
use App\Livewire\Income\Income;
use App\Livewire\Income\Other;
use App\Livewire\Income\StudentRegister;
use App\Livewire\PersonalProfile\Employee;
use App\Livewire\PersonalProfile\EmployeeCreate;
use App\Livewire\PersonalProfile\PersonalProfile;
use App\Livewire\PersonalProfile\Student;
use App\Livewire\Report\Report;
use App\Livewire\RolePermissions\RolePermission;
use App\Livewire\Setting\Setting;
use App\Livewire\Setting\StudyCost;
use App\Livewire\Setting\StudyItems;
use App\Livewire\Setting\StudyLevel;
use App\Livewire\Setting\StudyRoom;
use App\Livewire\Setting\StudyYears;
use App\Livewire\Setting\TypeExpenses;
use App\Livewire\Setting\TypeIncome;
use App\Livewire\Setting\TypeTeacher;
use App\Livewire\Users\Users;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [AuthController::class, 'show']);
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('permission:user');

// Route::post('/login', [AuthController::class, 'login']);



Route::middleware([Authentications::class])->group(function () {

    Route::get('auth', Authen::class)->name('auth')->withoutMiddleware([Authentications::class]);
    Route::get('/', Dashboard::class)->name('home');
    Route::get('dashboard', Dashboard::class)->name('dashboard')->middleware('permission:dashboard');
    Route::get('expenses', Expenses::class)->name('expenses')->middleware('permission:expenses');
    Route::prefix('income')->group(function () {
        Route::get('/', Income::class)->name('income')->middleware('permission:income');
        Route::get('students', StudentRegister::class)->name('income.students');
        Route::get('students-print/{invoice}', RegisterStudentPrint::class)->name('income.students.print');
        Route::get('others', Other::class)->name('income.other');
    });


    Route::prefix('personal-profile')->group(function () {
        Route::get('/', PersonalProfile::class)->name('personal-profile')->middleware('permission:personalprofile');
        Route::get('employees', Employee::class)->name('employees')->middleware('permission:employees');
        Route::get('employees/create', EmployeeCreate::class)->name('employees_create');
        Route::get('employees/{id}', EmployeeCreate::class)->name('employees_view');
        Route::get('employees/{id}/{update}', EmployeeCreate::class)->name('employees_edit');
        Route::get('students', Student::class)->name('students')->middleware('permission:students');
    });




    Route::get('report', Report::class)->name('report')->middleware('permission:report');

    Route::prefix('setting')->group(function () {
        Route::get('/', Setting::class)->name('setting')->middleware('permission:setting');

        Route::get('study-level', StudyLevel::class)->name('setting.study.level')->middleware('permission:setting study level');
        Route::get('study-room', StudyRoom::class)->name('setting.study.room')->middleware('permission:setting study room');
        Route::get('type-income', TypeIncome::class)->name('setting.type.income')->middleware('permission:setting type income');
        Route::get('type-expenses', TypeExpenses::class)->name('setting.type.expenses')->middleware('permission:setting type expenses');
        Route::get('study-items', StudyItems::class)->name('setting.study.items')->middleware('permission:setting study items');
        Route::get('type-teacher', TypeTeacher::class)->name('setting.type.teacher')->middleware('permission:setting type teacher');
        Route::get('study-cost', StudyCost::class)->name('setting.study.cost')->middleware('permission:setting study cost');
        Route::get('study-year', StudyYears::class)->name('setting.study.year')->middleware('permission:setting study year');
    });


    Route::get('user', Users::class)->name('user')->middleware('permission:user');
    Route::get('role-permission', RolePermission::class)->name('role-permission')->middleware('permission:roleandpermission');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('/create-authentication', [AuthController::class, 'createuser'])->name('createuser')->withoutMiddleware([Authentications::class]);
    Route::get('/create-user', [AuthController::class, 'createuser'])->name('createuser')->withoutMiddleware([Authentications::class]);
    Route::get('/create-role', [AuthController::class, 'createrole'])->name('createrole')->withoutMiddleware([Authentications::class]);

    Route::get('/create-permissions-list', [RoleAndPermissionsController::class, 'createPermissions']);
    Route::get('/create-role-for-user', [RoleAndPermissionsController::class, 'createRoleForUser']);
});
