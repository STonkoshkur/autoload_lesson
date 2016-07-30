<?php
	function loader($className) {
		//echo "Want to load " . $className . "<br>";
		
		$mapping = [
			'Mindk\Blog\Content\Article' => 'vendor/Mindk/Blog/Content/Article.php',
			'Mindk\Blog\Content\Contact' => 'vendor/Mindk/Blog/Content/Contact.php',
			'Mindk\Blog\Content\Video' => 'vendor/Mindk/Blog/Content/Video.php',
			'Mindk\Blog\Category' => 'vendor/Mindk/Blog/Category.php',
			'Mindk\Blog\Content\Item' => 'vendor/Mindk/Blog/Content/Item.php'
		];

		require array_key_exists($className, $mapping) ? $mapping[$className] : '';
	}

	spl_autoload_register('loader');