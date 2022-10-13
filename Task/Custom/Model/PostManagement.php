<?php 
namespace Task\Custom\Model;
 
 
class PostManagement {

	public $fruits;
	/**
	 * {@inheritdoc}
	 */
	public function __construct(array $fruits = [])
    {
        $this->fruits = $fruits;
		var_dump($fruits);
    }
	public function getPost ()   
	{
		$data = "api GET return the ";
		// $val = [$data];
		return $data;
	}
}
