<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;

final class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): void
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request): void
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest): void
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest): void
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest): void
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest): void
    {

    }
}
