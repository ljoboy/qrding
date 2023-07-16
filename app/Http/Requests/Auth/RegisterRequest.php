<?php

declare(strict_types=1);

namespace App\Http\Requests\Auth;

use App\Enums\RoleEnum;
use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

final class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => ['sometimes', 'required', 'string', 'in:' . implode(',', RoleEnum::getValues())],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function register()
    {
        try {
            DB::beginTransaction();

            $user = User::create($this->validated());

            event(new Registered($user));

            DB::commit();

            return $user;
        } catch (Exception $e) {
            DB::rollBack();

            throw ValidationException::withMessages([
                'error' => $e->getMessage(),
            ]);
        }
    }
}
