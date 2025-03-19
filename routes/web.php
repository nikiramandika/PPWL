<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard'); })->name('dashboard');

Route::get('/users', function () {
    return view('users.index'); })->name('users.index');
Route::get('/users/create', function () {
    return view('users.create'); })->name('users.create');
Route::get('/users/edit', function () {
    return view('users.edit'); })->name('users.edit');

Route::get('/products', function () {
    return view('products.index'); })->name('products.index');
Route::get('/products/create', function () {
    return view('products.create'); })->name('products.create');
Route::get('/products/edit', function () {
    return view('products.edit'); })->name('products.edit');