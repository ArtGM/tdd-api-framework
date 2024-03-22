<?php

it('retrieve the correct data from the books API', function () {
    //Arrange


    //Act
    $response = $this->json(method: 'GET', uri: 'books/1');



    //Assert
    expect($response->getStatusCode())->toBeInt()->toBe(200)
        ->and($response->getBody())->toMatchJson([
            'id' => 1,
            'title' => 'War and Peace',
            'year' => 1869,
            'author' => [
                'id' => 1,
                'name' => 'Leo Tolstoy',
                'bio' => 'A Russian writer who is regarded as one of the greatest authors of all time.',
            ],
        ]);

});
