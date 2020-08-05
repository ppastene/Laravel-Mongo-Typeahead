<?php

namespace Tests\Feature;

use Tests\TestCase;

class SongsTest extends TestCase
{
    public function testGetAllSongs()
    {
        $response = $this->get('/api/songs/');

        $response->assertStatus(200);
    }

    public function testGetSongsNumber()
    {
        $response = $this->json('GET', '/api/songs/bad');

        $response->assertStatus(200)->assertJsonCount(3);
    }

    public function testGetCertainSong()
    {
        $response = $this->json('GET', '/api/songs/apple');

        $response->assertStatus(200)->assertJsonFragment(['title' => 'Bad Apple!! feat. Nomico']);
    }
}
