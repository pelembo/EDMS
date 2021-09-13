<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\;

class ApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_()
    {
        $ = ::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/', $
        );

        $this->assertApiResponse($);
    }

    /**
     * @test
     */
    public function test_read_()
    {
        $ = ::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api//'.$->id
        );

        $this->assertApiResponse($->toArray());
    }

    /**
     * @test
     */
    public function test_update_()
    {
        $ = ::factory()->create();
        $edited = ::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api//'.$->id,
            $edited
        );

        $this->assertApiResponse($edited);
    }

    /**
     * @test
     */
    public function test_delete_()
    {
        $ = ::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api//'.$->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api//'.$->id
        );

        $this->response->assertStatus(404);
    }
}
