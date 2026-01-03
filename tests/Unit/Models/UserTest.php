<?php

use App\Models\User;

test('to array', function () {
    $user = User::factory()->create()->fresh();

    expect(array_keys($user->toArray()))->toBe([
        'id',
        'name',
        'email',
        'email_verified_at',
        'created_at',
        'updated_at',
        'deleted_at',
    ]);
});

test('getFilamentName returns name', function () {
    $user = User::factory()->create(['name' => 'John Doe']);

    expect($user->getFilamentName())->toBe('John Doe');
});

test('can be soft deleted', function () {
    $user = User::factory()->create();

    $user->delete();

    expect($user->trashed())->toBeTrue()
        ->and(User::withTrashed()->find($user->id))->not->toBeNull()
        ->and(User::find($user->id))->toBeNull();
});

test('can be restored after soft delete', function () {
    $user = User::factory()->create();

    $user->delete();
    $user->restore();

    expect($user->trashed())->toBeFalse()
        ->and(User::find($user->id))->not->toBeNull();
});

test('can be force deleted', function () {
    $user = User::factory()->create();

    $user->forceDelete();

    expect(User::withTrashed()->find($user->id))->toBeNull();
});
