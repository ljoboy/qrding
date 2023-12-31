<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;

final class UserController extends Controller
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
    public function store(StoreUserRequest $request): void
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): void
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): void
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user): void
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): void
    {

    }
}
