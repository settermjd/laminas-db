<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Db\Sql\Ddl\Column;

use Laminas\Db\Sql\Ddl\Column\Floating;

class FloatingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Laminas\Db\Sql\Ddl\Column\Floating::getExpressionData
     */
    public function testGetExpressionData()
    {
        $column = new Floating('foo', 10, 5);
        $this->assertEquals(
            array(array(
                '%s %s NOT NULL',
                array('foo', 'FLOAT(10,5)'),
                array($column::TYPE_IDENTIFIER, $column::TYPE_LITERAL)
            )),
            $column->getExpressionData()
        );
    }
}