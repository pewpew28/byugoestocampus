<?php

use App\Models\Member;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'role:admin|peserta'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:peserta')->group(function () {
        //  profil peserta
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // project
        Route::get('/project', [ProjectController::class, 'view'])->name('project');
        Route::get('/project/create', [ProjectController::class, 'create_view'])->name('project_create');
        Route::post('/project', [ProjectController::class, 'create'])->name('create');
        Route::patch('/project', [ProjectController::class, 'publish'])->name('publish');

        //proposal
        Route::get('/proposal', [ProposalController::class, 'index'])->name('proposal');
        Route::get('/proposal/{id_proposal}', [ProposalController::class, 'edit'])->name('proposal.edit');
        Route::patch('/proposal/ide-bisnis/input/{id_proposal}', [ProposalController::class, 'ide_bisnis_create'])->name('proposal.ide.bisnis');
        // Route::patch('/proposal/laba-rugi/input/{id_proposal}', [ProposalController::class, 'laba_rugi'])->name('proposal.laba.rugi');
        // Route::patch('/proposal/pemasaran/input/{id_proposal}', [ProposalController::class, 'pemasaran'])->name('proposal.pemasaran');
        // Route::patch('/proposal/maintenance/input/{id_proposal}', [ProposalController::class, 'maintenance'])->name('proposal.maintenance');
        
        //member
        Route::get('/proposal/member', [MemberController::class, 'index'])->name('proposal.member');
        Route::post('/proposal/member', [MemberController::class, 'create'])->name('proposal.member.new');
    });
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
