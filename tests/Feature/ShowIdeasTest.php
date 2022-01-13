<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
  use RefreshDatabase;

/**
 * @test
 */
  public function  list_of_ideas_shows_on_main_page(): void
  {
    $ideaOne = Idea::factory()->create([
        'title' => 'My First Title',
        'description' => "Description of my First Title"
    ]);
    $ideaTwo = Idea::factory()->create([
        'title' => 'My Two Title',
        'description' => "Description of my Two Title"
    ]);

      $response = $this->get(route('idea.index'));

    $response->assertSuccessful('OK');
    $response->assertSee($ideaOne->title);
    $response->assertSee($ideaOne->description);
    $response->assertSee($ideaTwo->title);
    $response->assertSee($ideaTwo->description);
  }

    /**
     * @test
    */
    public function  single_idea_shows_correctly_on_the_show_page(): void
  {
    $idea = Idea::factory()->create([
        'title' => 'My First Title',
        'description' => "Description of my First Title"
    ]);

    $response = $this->get(route('idea.show', $idea));

    $response->assertSuccessful('OK');
    $response->assertSee($idea->title);
    $response->assertSee($idea->description);
  }

    /**
     *  @test
    */
    public function ideas_pagination_works()
    {

    Idea::factory()->count(Idea::PAGINATION_COUNT + 1)->create();

    $ideaOne = Idea::find(1);
    $ideaOne->title = 'My First Idea';
    $ideaOne->save();

    $ideaEleven = Idea::find(11);
    $ideaEleven->title = 'My Eleventh Idea';
    $ideaEleven->save();

    $response = $this->get('/');
    $response->assertSee($ideaOne->title);
    $response->assertDontSee($ideaEleven->title);

    $response = $this->get('/?page=2');

    $response->assertSee($ideaEleven->title);
    $response->assertDontSee($ideaOne->title);
  }

    /**
     * @test
    */
    public function same_idea_title_defferent_slugs()
    {

    $ideaOne = Idea::factory()->create([
        'title' => 'My First Idea',
        'description' => 'Description for my first idea',
    ]);

    $ideaTwo = Idea::factory()->create([
        'title' => 'My First Idea 1',
        'description' => 'Description for my first idea',
    ]);

    $response = $this->get(route('idea.show', $ideaOne));
    $response->assertSuccessful();
    $this->assertTrue(request()->path() === 'ideas/my-first-idea');


    $response = $this->get(route('idea.show', $ideaTwo));
    $response->assertSuccessful();
    $this->assertTrue(request()->path() === 'ideas/my-first-idea-1');
  }

}
