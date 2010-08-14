<?php
/**
 * Blog - PostTable Model
 *
 * This file contains the auto-generated PostTabel model for the blog demo.
 *
 * LICENSE
 *
 * This file is part of the Breeze Framework package and is subject to the new
 * BSD license.  For full copyright and license information, please see the
 * LICENSE file that is distributed with this package.
 *
 * @author     Jeff Welch <whatthejeff@gmail.com>
 * @category   Blog
 * @package    Models
 * @subpackage Post
 * @copyright  Copyright (c) 2010, Breeze Framework
 * @license    New BSD License
 * @version    $Id$
 */

/**
 * PostTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 *
 * @category   Blog
 * @package    Models
 * @subpackage Post
 */
class PostTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object PostTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Post');
    }
}