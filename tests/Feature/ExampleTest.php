<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


    // public function testNonExistentRoute(){
    //     $response = $this->get('/viola');
    //     $response->assertStatus(200);
    // }

    public function testNewClientForm()
    {
        $response = $this->get('/clients/new');
        $response->assertStatus(200);
    }


    public function testLuciferListedInClients(){
        $response = $this->get('/clients');
        $this->assertContains('Lucifer', $response->getContent(),'HTML for list of clients should include Lucifer Morningstar');
    }

    /*
    public function testProfessorOption(){
        $response = $this->get('/clients/new');
        $this->assertContains('Professor',
            $response->getContent(), 
            'HTML should have Professor'
        );
    }
    */

}
