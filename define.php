<?php
	define('PI', 3.14);
	// ====================== PATHS ===========================
	define ('DS'					, '/');
	define ('ROOT_PATH'				, dirname(__FILE__));						// Định nghĩa đường dẫn đến thư mục gốc
	define ('LIBRARY_PATH'			, ROOT_PATH . DS . 'libs' . DS);			// Định nghĩa đường dẫn đến thư mục thư viện
	define ('LIBRARY_EXT_PATH'		, LIBRARY_PATH . DS . 'extends' . DS);		// Định nghĩa đường dẫn đến thư mục thư viện
	define ('PUBLIC_PATH'			, ROOT_PATH . DS . 'public' . DS);			
	define ('SCRIPS_PATH'			, PUBLIC_PATH . 'scripts' . DS);			
	define ('UPLOAD_PATH'			, PUBLIC_PATH  . 'files' . DS);				// Định nghĩa đường dẫn đến thư mục public							
	define ('APPLICATION_PATH'		, ROOT_PATH . DS . 'application' . DS);		// Định nghĩa đường dẫn đến thư mục application
	define ('MODULE_PATH'			, APPLICATION_PATH . 'module' . DS);		// Định nghĩa đường dẫn đến thư mục module														
	define ('BLOCK_PATH'			, APPLICATION_PATH . 'block' . DS);		    // Định nghĩa đường dẫn đến thư mục block														
	define ('TEMPLATE_PATH'			, PUBLIC_PATH . 'template' . DS);			// Định nghĩa đường dẫn đến thư mục template							
	define ('DEFAULT_BLOCK_PATH'    , PUBLIC_PATH . 'template' . DS .'default'. DS.'block'. DS);		     // Định nghĩa đường dẫn đến thư mục default block														
	define	('ROOT_URL'				, DS . 'php_mvc_multy' . DS);
	define	('APPLICATION_URL'		, ROOT_URL . 'application' . DS);
	define	('PUBLIC_URL'			, ROOT_URL . 'public' . DS);
	define	('TEMPLATE_URL'			, PUBLIC_URL . 'template' . DS);

	//======================= IMAGE LINK =======================
	define	('LINK_IMAGE_CATEGORY'	, PUBLIC_URL . 'files'. DS .'category'. DS); 
	define	('LINK_IMAGE_BOOK'		, PUBLIC_URL . 'files'. DS .'book'. DS); 
	//=========================================================
	define	('DEFAULT_MODULE'		, 'default');
	define	('DEFAULT_CONTROLLER'	, 'index');
	define	('DEFAULT_ACTION'		, 'index');	
	// ====================== DATABASE TABLE===========================
	define ('TBL_GROUP'			, 'group');
	define ('TBL_USER'			, 'user');
	define ('TBL_PRIVELEGE'		, 'privilege');
	define ('TBL_CATEGORY'		, 'category');
	define ('TBL_BOOK'			, 'book');
	define ('TBL_CART'			, 'cart');
	
	// ====================== DATABASE ===========================
	define("DB_HOST", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "php_bookstore");		
	define('DB_TABLE', 'group');		
	define	('DB_TABLE_GROUP'			, 'group');
	define	('DB_TABLE_USER'			, 'user');
	define	('DB_TABLE_CATEGORY'		, 'category');
	define	('DB_TABLE_BOOK'			, 'book');
	define	('DB_TABLE_CART'			, 'cart');
		