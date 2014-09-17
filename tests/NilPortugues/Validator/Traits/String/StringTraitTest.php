<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 9/17/14
 * Time: 8:44 PM
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tests\NilPortugues\Validator\Traits\String;

use NilPortugues\Validator\Traits\String\StringTrait;

/**
 * Class StringTraitTest
 * @package Tests\NilPortugues\Validator\Traits\String
 */
class StringTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function it_should_check_string_is_string()
    {
        $value = 'asdsdadds';
        $result = StringTrait::isString($value);
        $this->assertTrue($result);

        $value = new \StdClass();
        $result = StringTrait::isString($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_alphanumeric()
    {
        $value = 'Qwerty1234';
        $result = StringTrait::isAlphanumeric($value);
        $this->assertTrue($result);

        $value = '';
        $result = StringTrait::isAlphanumeric($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_alpha()
    {
        $value = 'querty';
        $result = StringTrait::isAlpha($value);
        $this->assertTrue($result);

        $value = 'querty123';
        $result = StringTrait::isAlpha($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_between()
    {
        $value = 'Nil';
        $result = StringTrait::between($value, 2, 4, false);
        $this->assertTrue($result);

        $value = 'Nilo';
        $result = StringTrait::between($value, 2, 4, true);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_charset()
    {
        $value = 'Portugués';

        $result = StringTrait::isCharset($value, 'UTF-8');

        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_all_consonants()
    {
        $value = 'a';
        $result = StringTrait::isAllConsonants($value);
        $this->assertFalse($result);

        $value = 'bs';
        $result = StringTrait::isAllConsonants($value);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_contains()
    {
        $value = 'AAAAAAAaaaA';
        $contains = 'aaa';
        $identical = true;
        $result = StringTrait::contains($value, $contains, $identical);
        $this->assertTrue($result);

        $value = 'AAAAAAA123A';
        $contains = 123;
        $identical = false;
        $result = StringTrait::contains($value, $contains, $identical);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_control_characters()
    {
        $value = "\n\t";
        $result = StringTrait::isControlCharacters($value);
        $this->assertTrue($result);

        $value = "\nHello\tWorld";
        $result = StringTrait::isControlCharacters($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_digit()
    {
        $value = 'A';
        $result = StringTrait::isDigit($value);
        $this->assertFalse($result);

        $value = 145.6;
        $result = StringTrait::isDigit($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_endsWith()
    {
        $value = 'AAAAAAAaaaA';
        $contains = 'aaaA';
        $identical = true;
        $result = StringTrait::endsWith($value, $contains, $identical);
        $this->assertTrue($result);

        $value = 'AAAAAAA123';
        $contains = 123;
        $identical = false;
        $result = StringTrait::endsWith($value, $contains, $identical);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_equals()
    {
        $value = 'hello';
        $comparedValue = 'hello';
        $identical = true;
        $result = StringTrait::equals($value, $comparedValue, $identical);
        $this->assertTrue($result);

        $value = '1';
        $comparedValue = 1;
        $identical = false;
        $result = StringTrait::equals($value, $comparedValue, $identical);

        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_in()
    {
        $haystack = 'a12245 asdhsjasd 63-211';
        $value = "122";
        $identical = false;
        $result = StringTrait::in($value, $haystack, $identical);
        $this->assertTrue($result);

        $haystack = 'a12245 asdhsjasd 63-211';
        $value = '5 asd';
        $identical = true;
        $result = StringTrait::in($value, $haystack, $identical);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_graph()
    {
        $value = 'arf12';
        $result = StringTrait::hasGraphicalCharsOnly($value);
        $this->assertTrue($result);

        $value = "asdf\n\r\t";
        $result = StringTrait::hasGraphicalCharsOnly($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_length()
    {
        $value = 'abcdefgh';
        $length = 5;
        $result = StringTrait::hasLength($value, $length);
        $this->assertFalse($result);

        $value = 'abcdefgh';
        $length = 8;
        $result = StringTrait::hasLength($value, $length);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_lowercase()
    {
        $value = 'strtolower';
        $result = StringTrait::isLowercase($value);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_not_empty()
    {
        $value = 'a';
        $result = StringTrait::notEmpty($value);
        $this->assertTrue($result);

        $value = '';
        $result = StringTrait::notEmpty($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_no_whitespace()
    {
        $value = 'aaaaa';
        $result = StringTrait::noWhitespace($value);
        $this->assertTrue($result);

        $value = 'lorem ipsum';
        $result = StringTrait::noWhitespace($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_printable()
    {
        $value = 'LMKA0$% _123';
        $result = StringTrait::hasPrintableCharsOnly($value);
        $this->assertTrue($result);

        $value = "LMKA0$%\t_123";
        $result = StringTrait::hasPrintableCharsOnly($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_punctuation()
    {
        $value = '&,.;[]';
        $result = StringTrait::isPunctuation($value);
        $this->assertTrue($result);

        $value = 'a';
        $result = StringTrait::isPunctuation($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_regex()
    {
        $value = 'a';
        $regex = '/[a-z]/';
        $result = StringTrait::matchesRegex($value, $regex);
        $this->assertTrue($result);

        $value = 'A';
        $regex = '/[a-z]/';
        $result = StringTrait::matchesRegex($value, $regex);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_slug()
    {
        $value = 'hello-world-yeah';
        $result = StringTrait::isSlug($value);
        $this->assertTrue($result);

        $value = '-hello-world-yeah';
        $result = StringTrait::isSlug($value);
        $this->assertFalse($result);

        $value = 'hello-world-yeah-';
        $result = StringTrait::isSlug($value);
        $this->assertFalse($result);

        $value = 'hello-world----yeah';
        $result = StringTrait::isSlug($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_space()
    {
        $value = '    ';
        $result = StringTrait::isSpace($value);
        $this->assertTrue($result);

        $value = 'e e';
        $result = StringTrait::isSpace($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_starts_with()
    {
        $value = 'aaaAAAAAAAA';
        $contains = 'aaaA';
        $identical = true;
        $result = StringTrait::startsWith($value, $contains, $identical);
        $this->assertTrue($result);

        $value = '123AAAAAAA';
        $contains = 123;
        $identical = false;
        $result = StringTrait::startsWith($value, $contains, $identical);
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_uppercase()
    {
        $value = 'AAAAAA';
        $result = StringTrait::isUppercase($value);
        $this->assertTrue($result);

        $value = 'aaaa';
        $result = StringTrait::isUppercase($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_version()
    {
        $value = '1.0.2';
        $result = StringTrait::isVersion($value);
        $this->assertTrue($result);

        $value = '1.0.2-beta';
        $result = StringTrait::isVersion($value);
        $this->assertTrue($result);

        $value = '1.0';
        $result = StringTrait::isVersion($value);
        $this->assertTrue($result);

        $value = '1.0.2 beta';
        $result = StringTrait::isVersion($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_vowel()
    {
        $value = 'aeA';
        $result = StringTrait::isVowel($value);
        $this->assertTrue($result);

        $value = 'cds';
        $result = StringTrait::isVowel($value);
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_should_check_string_is_xdigit()
    {
        $value = '100';
        $result = StringTrait::isHexDigit($value);
        $this->assertTrue($result);

        $value = 'h0000';
        $result = StringTrait::isHexDigit($value);
        $this->assertFalse($result);
    }
}