<?php

return [
	'root_path' => 'app/',
	'childs' => [
		'Frontend'  => [
	    	'root_path' => 'namespaces/frontend/',
	    	'childs' => [
	        	'Controller' => 'controllers/',
	        	'Form' => 'forms/',
	        ]
	    ],
	    'Backend' => [
	    	'root_path' => 'namespaces/backend/',
	    	'childs' => [
	        	'Controller' => 'controllers/',
	        	'Form' => 'forms/',
	        ]
	    ],
	    'Model'	=> [
	    	'root_path' => 'model/',
	    	'childs' => [
		    	'Entity' => 'entities/',
		    	'Table' => 'tables/',
		    ]
	    ]
	]
];