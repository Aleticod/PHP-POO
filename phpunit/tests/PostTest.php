<?php 

use PHPUnit\Framework\TestCase;
use App\Post;
use App\Comment;


class PostTest extends TestCase {

    public function test_add_commet_to_post() {
        // porcion a testear
        $post = new Post();
        $comment = new Comment();

        $post->addComment($comment);
        
        // testeo
        $this->assertEquals(1, $post->countComments());
        $this->assertInstanceOf(Comment::class, $post->getComment()[0]);
    }
}