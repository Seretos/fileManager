<?php
/**
 * Created by PhpStorm.
 * User: aappen
 * Date: 19.09.16
 * Time: 14:36
 */

namespace fileManager;

function file_exists ($file) {
    FileManagerTest::$functions['file_exists']['argument'] = $file;

    return FileManagerTest::$functions['file_exists']['result'];
}

function glob ($argument) {
    FileManagerTest::$functions['glob']['argument'] = $argument;

    return 'glob';
}

function array_map ($argument1, $argument2) {
    FileManagerTest::$functions['array_map']['argument'] = [$argument1, $argument2];
}

function mkdir ($argument1, $argument2, $argument3) {
    FileManagerTest::$functions['mkdir']['argument'] = [$argument1, $argument2, $argument3];

    return FileManagerTest::$functions['mkdir']['result'];
}

function get_class ($class) {
    FileManagerTest::$functions['get_class']['argument'] = $class;

    return FileManagerTest::$functions['get_class']['result'];
}

class FileManagerTest extends \PHPUnit_Framework_TestCase {
    public static $functions;

    /**
     * @var FileManager
     */
    private $manager;

    protected function setUp () {
        parent::setUp();

        $this->manager = new FileManager();

        self::$functions = [];
    }

    /**
     * @test
     */
    /*public function fileExists_method () {
        self::$functions['file_exists']['result'] = 'test1';

        $this->assertSame('test1', $this->manager->fileExists('myFile'));
        $this->assertSame(['file_exists' => ['result' => 'test1', 'argument' => 'myFile']], self::$functions);
    }*/

    /**
     * @test
     */
    /*public function clearDirectory () {
        $this->manager->clearDirectory('myDirectory');
        $this->assertSame(['glob' => ['argument' => 'myDirectory*.*'],
                           'array_map' => ['argument' => ['unlink', 'glob']]],
                          self::$functions);
    }*/

    /**
     * @test
     */
    /*public function createDirectory () {
        self::$functions['mkdir']['result'] = 'test1';

        $this->assertSame('test1', $this->manager->createDirectory('myDirectory', 123, true));
        $this->assertSame(['mkdir' => ['result' => 'test1', 'argument' => ['myDirectory', 123, true]]],
                          self::$functions);
    }*/

    /**
     * @test
     */
    /*public function getClassName () {
        self::$functions['get_class']['result'] = 'testClass';
        $this->assertSame('testClass', $this->manager->getClassName('myClass'));
        $this->assertSame(['get_class' => ['result' => 'testClass', 'argument' => 'myClass']],
                          self::$functions);
    }*/
}
