<?php

namespace Codelight\WordPressDecorator\WordPress;

use Codelight\WordPressDecorator\DecoratorTrait;
use WP_User;

/**
 * Extends \WP_User with various custom functionality
 *
 * Class User Decorator
 *
 * @package Codelight\WordPressDecorator
 *
 * @method addCap()
 * @method addRole()
 * @method exists()
 * @method forBlog()
 * @method forSite()
 * @method get()
 * @method getCapsData()
 * @method getDataBy()
 * @method getRoleCaps()
 * @method getSiteId()
 * @method hasCap()
 * @method hasProp()
 * @method init()
 * @method levelReduction()
 * @method removeAllCaps()
 * @method removeCap()
 * @method removeRole()
 * @method setRole()
 * @method toArray()
 * @method translateLevelToCap()
 * @method updateUserLevelFromCaps()
 */
class UserDecorator
{
    use DecoratorTrait;

    /**
     * UserDecorator constructor.
     * @param WP_User $user
     */
    public function __construct(WP_User $user)
    {
        $this->object = $user;
    }

    public function getId(): int
    {
        return $this->object->ID;
    }

    public function getEmail(): string
    {
        return $this->object->data->user_email;
    }
}