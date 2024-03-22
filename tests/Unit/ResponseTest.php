<?php

use App\Http\Response;

it('can create a Response User', function() {
    //act
    $response = new Response(body: '{"foo": "bar"}', statusCode: 200);

    //assert
    expect($response->getStatusCode())->toBeInt()->toBe(200)
        ->and($response->getBody())->toMatchJson(['foo' => 'bar']);

});