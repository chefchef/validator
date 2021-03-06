<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/26/14
 * Time: 8:28 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\NilPortugues\Validator\Resources;

use NilPortugues\Validator\Traits\FileUpload\FileUploadException;

/**
 * Class DummyFileUpload
 * @package Tests\NilPortugues\Validator\Resources
 */
class DummyFileUpload
{
    /**
     * @param $uploadName
     *
     * @throws \NilPortugues\Validator\Traits\FileUpload\FileUploadException
     */
    public static function isBetween($uploadName)
    {
        throw new FileUploadException($uploadName);
    }
}
