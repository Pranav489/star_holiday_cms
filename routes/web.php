<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HeroSectionController;
use App\Http\Controllers\Api\HotelBookingSectionController;
use App\Http\Controllers\Api\VideoSectionController;
use App\Http\Controllers\Api\TestimonialController;
use App\Http\Controllers\Api\AboutUsController;
use App\Http\Controllers\Api\RestaurantGalleryController;
use App\Http\Controllers\Api\StayReasonController;
use App\Http\Controllers\Api\HotelStatisticsController;
use App\Http\Controllers\Api\AboutSectionController;
use App\Http\Controllers\Api\ResortVideoController;
use App\Http\Controllers\Api\AboutResortController;
use App\Http\Controllers\Api\CtaSectionController;
use App\Http\Controllers\Api\RestaurantSectionController;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\FacilityController;
use App\Http\Controllers\Api\AboutFacilityContentController;
use App\Http\Controllers\Api\GalleryController;
use App\Http\Controllers\Api\AboutSaputaraController;
use App\Http\Controllers\Api\FestivalGalleryController;
use App\Http\Controllers\Api\ContactInfoController;
use App\Http\Controllers\Api\RoomController;
use App\Http\Controllers\Api\CoupleRoomVideoController;
use App\Http\Controllers\Api\CoupleRoomImageController;
use App\Http\Controllers\Api\FamilyRoomVideoController;
use App\Http\Controllers\Api\FamilyRoomImageController;
use App\Http\Controllers\Api\SixBedroomVideoController;
use App\Http\Controllers\Api\SixRoomImageController;
use App\Http\Controllers\Api\CoupleRoomController;
use App\Http\Controllers\Api\ImpactStatController;
use App\Http\Controllers\Api\FamilyRoomAboutController;
use App\Http\Controllers\Api\CoupleRoomAboutController;
use App\Http\Controllers\Api\SixbedroomAboutController;
use App\Http\Controllers\Api\FamilyAboutSectionController;
use App\Http\Controllers\Api\FourBedRoomAboutController;

Route::prefix('/api')->group(function () {
    Route::get('/family-rooms-about', [FamilyRoomsAboutSectionController::class, 'index']);
    Route::get('/hero-sections', [HeroSectionController::class, 'index']);
    Route::get('/hotel-booking-section', [HotelBookingSectionController::class, 'index']);
    Route::get('/video-section', [VideoSectionController::class, 'showActive']);
    Route::get('/testimonials', [TestimonialController::class, 'index']);
    Route::get('/about-us', [AboutUsController::class, 'index']);
    Route::get('restaurant-gallery', [RestaurantGalleryController::class, 'index']);
    Route::get('stay-reasons', [StayReasonController::class, 'index']);
    Route::get('/hotel-statistics', [HotelStatisticsController::class, 'index']);
    Route::get('/about-sections', [AboutSectionController::class, 'index']);
    Route::get('resort-video', [ResortVideoController::class, 'show']);
    Route::get('/about-resort', [AboutResortController::class, 'index']);
    Route::get('/cta-section', [CtaSectionController::class, 'showActive']);
    Route::get('/restaurant-section', [RestaurantSectionController::class, 'index']);
    Route::get('/videos', [VideoController::class, 'index']);
    Route::get('/facilities', [FacilityController::class, 'index']);
    Route::get('/facilities/{id}', [FacilityController::class, 'show']);
    Route::get('/about-facilities-content', [AboutFacilityContentController::class, 'index']);
    Route::get('/gallery', [GalleryController::class, 'index']);
    Route::get('/about-saputara', [AboutSaputaraController::class, 'index']);
    Route::get('/about-saputara/{section}', [AboutSaputaraController::class, 'show'])
        ->where('section', 'about|sightseeing|testimonials|gallery');
    Route::get('/festival-gallery', [FestivalGalleryController::class, 'index']);
    Route::get('/festival-gallery/category/{categoryId}', [FestivalGalleryController::class, 'byCategory']);
    Route::get('/contact', [ContactInfoController::class, 'index']);
    Route::get('/Luxury-room', [RoomController::class, 'index']);
    Route::get('/couple-room-videos', [CoupleRoomVideoController::class, 'index']);
    Route::get('/couple-room-images', [CoupleRoomImageController::class, 'index']);
    Route::get('/family-room-videos', [FamilyRoomVideoController::class, 'index']);
    Route::get('/family-room-images', [FamilyRoomImageController::class, 'index']);
    Route::get('/six-bedroom-videos', [SixBedroomVideoController::class, 'index']);
    Route::get('/six-room-images', [SixRoomImageController::class, 'index']);
    Route::get('/couple-rooms', [CoupleRoomController::class, 'index']);
    Route::get('/impact-stats', [ImpactStatController::class, 'active']);
    Route::get('/couple-room-about', [CoupleRoomAboutController::class, 'index']);
    // Route::get('/family-rooms-about', [FamilyAboutSectionController::class, 'index']);
    // Route::get('/sixbedroom-about', [SixbedroomAboutController::class, 'index']);
    Route::get('/sixbedroom-about', [SixbedroomAboutController::class, 'index']);
    Route::get('/four-bedroom-about', [FourBedRoomAboutController::class, 'index']);
Route::post('/four-bedroom-about', [FourBedRoomAboutController::class, 'store']);

   



});
