<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace MagentoEse\BookmarkSampleData\Setup\Patch\Data;


use Magento\Framework\Setup\Patch\DataPatchInterface;
use MagentoEse\BookmarkSampleData\Model\Bookmark;


class AddBookmarks implements DataPatchInterface
{
    /**
     * @var Bookmark
     */
    protected $bookmark;

    /**
     * AddBookmarks constructor.
     * @param Bookmark $bookmark
     */
    public function __construct(Bookmark $bookmark)
    {
        $this->bookmark = $bookmark;
    }

    public function apply()
    {
        $this->bookmark->install(['MagentoEse_BookmarkSampleData::fixtures/bookmarks.csv']);
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}