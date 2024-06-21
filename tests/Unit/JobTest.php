<?php
use App\Models\Employer;
use App\Models\Job;

it('belongs to employer', function () {
    // = = = Arrang e= = =
    $employer = Employer::factory()->create();
    // to override things declared in factory, pass an array
    $job = Job::factory()->create([
        'employer_id' => $employer->id
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();



    //Asser
    // expect(true)->toBeTrue();
});
