<?php  namespace Filebase;


class ValidationTest extends \PHPUnit\Framework\TestCase
{

    public function testValidatingStringRequired()
    {
        $db = new \Filebase\Database([
            'dir' => __DIR__.'/test_database',
            'validate' => [
                'name'   => [
                    'type' => 'string',
                    'required' => true
                ]
            ]
        ]);

        $db->get('test')->set(['name'=>'value'])->save();

        $this->assertEquals(true, true);
    }


    public function testValidatingNestedString()
    {
        $db = new \Filebase\Database([
            'dir' => __DIR__.'/test_database',
            'validate' => [
                'profile'   => [
                    'type' => 'array',
                    'aboutme'   => [
                        'type' => 'string',
                        'required' => true
                    ]
                ]
            ]
        ]);


        $array = [
            'profile' => [
                'aboutme' => 'I am a happy coder'
            ]
        ];


        $db->get('test')->set($array)->save();

        $this->assertEquals(true, true);
    }

}