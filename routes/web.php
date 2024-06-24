<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/projetos', function () {
    return view('projetos');
})->name('projetos');


Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');


Route::get('user/login', [AuthController::class, 'login'])->name('login-user');
Route::post('user/login', [AuthController::class, 'signin'])->name('login');
Route::get('user/register', [AuthController::class, 'register'])->name('register');
Route::get('user/signout', [AuthController::class, 'signOut'])->name('signout');

Route::post('user/edit', [UserController::class, 'store'])->name('edit');
Route::post('user/register', [UserController::class, 'create'])->name('create');
Route::post('user/delete', [UserController::class, 'delete'])->name('delete');
// Curriculum
Route::get('curriculum', [CurriculumController::class, 'index'])->name('curriculums.index');
Route::get('curriculum/new', [CurriculumController::class, 'edit'])->name('curriculums.new');
Route::get('curriculum/{curriculum}/edit', [CurriculumController::class, 'edit'])->name('curriculums.edit');
Route::get('curriculum/{curriculum}', [CurriculumController::class, 'show'])->name('curriculums.show');
Route::post('curriculum/{curriculum}', [CurriculumController::class, 'store'])->name('curriculums.update');
Route::post('curriculum', [CurriculumController::class, 'store'])->name('curriculums.store');

Route::get('curriculum/{curriculum}/projects/', [CurriculumController::class, 'projects'])->name('curriculums.projects');

Route::get('curriculum/{curriculum}/delete', [CurriculumController::class, 'delete'])->name('curriculums.delete');
//
// Projects
Route::get('projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('projects/new', [ProjectsController::class, 'edit'])->name('projects.new');
Route::get('projects/{project}/edit', [ProjectsController::class, 'show'])->name('projects.show');

Route::post('projects', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('projects/{project}', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::post('projects/{project}', [ProjectsController::class, 'store'])->name('projects.update');

Route::get('curriculum/{curriculum}/projects/{project}/delete', [ProjectsController::class, 'delete'])->name('projects.delete');
//
// Topics
Route::get('curriculum/{curriculum}/topics', [TopicController::class, 'index'])->name('topics');
Route::get('curriculum/{curriculum}/topics/{topic:title}', [TopicController::class, 'show'])->name('topics.show');

Route::get('curriculum/{curriculum}/topics/{topic:title}', [TopicController::class, 'edit'])->name('topics.edit');
Route::post('curriculum/{curriculum}/topics/{topic:title}', [TopicController::class, 'store'])->name('topics.update');
Route::get('curriculum/{curriculum}/topics/new', [TopicController::class, 'edit'])->name('topics.new');
Route::post('curriculum/{curriculum}/topics', [TopicController::class, 'store'])->name('topics.store');

Route::get('curriculum/{curriculum}/topics/{topic:title}/delete', [TopicController::class, 'delete'])->name('items.delete');
// Items
Route::get('curriculum/{curriculum}/topics/{topic:title}/items', [ProjectsController::class, 'index'])->name('items');
Route::get('curriculum/{curriculum}/topics/{topic:title}/items/{item}', [ProjectsController::class, 'show'])->name('items.show');

Route::get('curriculum/{curriculum}/topics/{topic:title}/items/{item}', [ProjectsController::class, 'edit'])->name('items.edit');
Route::post('curriculum/{curriculum}/topics/{topic:title}/items/{item}', [ProjectsController::class, 'store'])->name('items.update');
Route::get('curriculum/{curriculum}/topics/{topic:title}/items/new', [ProjectsController::class, 'edit'])->name('items.new');
Route::post('curriculum/{curriculum}/topics/{topic:title}/items', [ProjectsController::class, 'store'])->name('items.store');

Route::get('curriculum/{curriculum}/topics/{topic:title}/items/{item}/delete', [ProjectsController::class, 'delete'])->name('items.delete');
//
// Interactions

Route::get('curriculum/{curriculum}/topics/{topic:title}/projects/{project}/attach', [TopicController::class, 'attachProject'])->name('interactions.projects.attach');
Route::get('curriculum/{curriculum}/topics/{topic:title}/projects/{project}/detach', [TopicController::class, 'detachProject'])->name('interactions.projects.detach');
