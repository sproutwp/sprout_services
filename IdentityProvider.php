<?php
/**
 * @package Sprout
 * @subpackage SproutServices
 * @since 1.0.0
 */
namespace Sprout\SproutServices;

use Sprout\SproutServices\Interfaces\IdentityProviderInterface;

/**
 * Class that handles the creation / providing of information and identity about an object.
 */
class IdentityProvider implements IdentityProviderInterface
{
    /**
     * Builds the identity of an object and stores it in its parent service.
     *
     * @param object $object Clearly an interface.
     */
    public function buildServiceIdentity( $object )
    {
        return [
            'interfaces' => class_implements( $object )
        ];
    }
}