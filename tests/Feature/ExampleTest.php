<?php

<<<<<<< HEAD
test('example', function () {
    expect(true)->toBeTrue();
=======
it('returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
>>>>>>> a847d22 (Move to Laravel and Reverb)
});
