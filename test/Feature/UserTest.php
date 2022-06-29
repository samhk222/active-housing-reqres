<?php

use PHPUnit\Framework\TestCase;

final class UserTest extends TestCase
{
    /**
     * @test
     * @return string
     */
    public function it_can_get_an_user_that_exists()
    {
        $user_id = 1;
        $user = (new \Samhk222\ActiveHousingReqres\Models\V1\User)->getById($user_id);
        $this->assertObjectHasAttribute('data', $user);
        $this->assertTrue($user->data->id === $user_id);
    }

    /**
     * @test
     * @return string
     */
    public function it_can_handle_when_user_dont_exists()
    {
        $user_id = 1000000;
        $user = (new \Samhk222\ActiveHousingReqres\Models\V1\User)->getById($user_id);
        $this->assertObjectHasAttribute('error', $user);
        $this->assertEquals("User not found", $user->error);
    }

    /**
     * @test
     * @return string
     */
    public function it_gets_the_first_page_when_no_page_is_used_in_listing_all_users()
    {
        $users = (new \Samhk222\ActiveHousingReqres\Models\V1\User)->getUsers();
        $this->assertObjectHasAttribute('page', $users);
        $this->assertEquals(1, $users->page);
    }
}
