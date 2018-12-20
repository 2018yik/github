<?php
require('menu.php');
use PHPUnit\Framework\TestCase;
class menutest extends TestCase
{
	/**
     * @dataProvider menuProvider
     */
    public function testmenu($id, $name, $address,$dname,$tel) {
        $menu = new menu();
        $content = $menu->getMenu($id);
        $this->assertEquals($name, $content.$name);
        $this->assertEquals($address, $content.$address);
		 $this->assertEquals($dname, $content.$dname);
		$this->assertEquals($tel, $content.$tel);
		}
    
	
    public function menuProvider() {
        return [
            [1,'bluestone','','nth',''],
             [5,'bluestone','aaaaaaa','nth',''],
			[10,'bluestone','aaaaaaa','nth',''],
			['t','bluestone','aaaaaaa','nth',''],
        ];
    }
	
	
	
}

?>