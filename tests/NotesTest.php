<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;
class NotesTest extends TestCase
{
    public function test_list()
    {
    	// Having
    	Note::create(['note' => 'Mi primera nota']);
    	Note::create(['note' => 'Mi Segunda nota']);

    	// WHEN
    	$this->visit('notes')
    	// then
    	-> see('Mi primera nota')
    	-> see('Mi segunda Nota');
    }
}
