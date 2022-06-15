<?php  namespace LeafDB;

use LeafDB\Format\DecodingException;
use LeafDB\Format\EncodingException;
use LeafDB\Format\Yaml;

class FormatYamlTest extends \PHPUnit\Framework\TestCase
{
    public function testFormatYamlEnsureDataIntegrity()
    {
        $data = [
            'name' => 'timothy-m_arois',
            'email' => 'email@email.com'
        ];

        $Yaml = Yaml::encode($data, false);
        $testData = Yaml::decode($Yaml);

        $this->assertEquals($data, $testData);
    }

}