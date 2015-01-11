<?php

/*
 * This file is part of the CCDNForum ForumBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNForum\ForumBundle;

/**
 *
 * @category CCDNForum
 * @package  ForumBundle
 *
 * @author   Reece Fowell <reece@codeconsortium.com>
 * @license  http://opensource.org/licenses/MIT MIT
 * @version  Release: 2.0
 * @link     https://github.com/codeconsortium/CCDNForumForumBundle
 *
 * Doctrine mapping and resolve target entities code based on the code of the Sylius ResourceBundle
 * (c) Paweł Jędrzejewski.
 */
class CCDNForumForumBundle extends AbstractEntityInheritanceBundle
{
    /**
     * Configure format of mapping files.
     *
     * @var string
     */
    protected $mappingFormat = self::MAPPING_YAML;

    /**
     * Target entities resolver configuration (Interface / Mapped Superclass - Actually used Model Class).
     *
     * @return array
     */
    protected function getModelInterfaces()
    {
        return array(
            'CCDNForum\ForumBundle\Entity\Board'            => 'ccdn_forum_forum.entity.board.class',
            'CCDNForum\ForumBundle\Entity\Category'         => 'ccdn_forum_forum.entity.category.class',
            'CCDNForum\ForumBundle\Entity\Forum'            => 'ccdn_forum_forum.entity.forum.class',
            'CCDNForum\ForumBundle\Entity\Post'             => 'ccdn_forum_forum.entity.post.class',
            'CCDNForum\ForumBundle\Entity\Registry'         => 'ccdn_forum_forum.entity.registry.class',
            'CCDNForum\ForumBundle\Entity\Subscription'     => 'ccdn_forum_forum.entity.subscription.class',
            'CCDNForum\ForumBundle\Entity\Topic'            => 'ccdn_forum_forum.entity.topic.class',
        );
    }

    /**
     * Return the entity namespace.
     *
     * @return string
     */
    protected function getModelNamespace()
    {
        return 'CCDNForum\ForumBundle\Entity';
    }
}
