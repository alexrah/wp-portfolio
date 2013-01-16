<?php
	function get_available_fonts() {
		$fonts = array(
			'arial' => array(
			'name' => 'Arial',
			'import' => '',
			'css' => "font-family: Arial, sans-serif;"
			),
			'abel' => array(
			'name' => 'Abel',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Abel);',
			'css' => "font-family: 'Abel', sans-serif;"
			),
			'abril fatface' => array(
			'name' => 'Abril Fatface',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Abril+Fatface);',
			'css' => "font-family: 'Abril Fatface', sans-serif;"
			),
			'aclonica' => array(
			'name' => 'Aclonica',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Aclonica);',
			'css' => "font-family: 'Aclonica', sans-serif;"
			),
			'acme' => array(
			'name' => 'Acme',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Acme);',
			'css' => "font-family: 'Acme', sans-serif;"
			),
			'actor' => array(
			'name' => 'Actor',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Actor);',
			'css' => "font-family: 'Actor', sans-serif;"
			),
			'adamina' => array(
			'name' => 'Adamina',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Adamina);',
			'css' => "font-family: 'Adamina', sans-serif;"
			),
			'advent pro' => array(
			'name' => 'Advent Pro',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Advent+Pro);',
			'css' => "font-family: 'Advent Pro', sans-serif;"
			),
			'advent pro (plus all weights)' => array(
			'name' => 'Advent Pro (plus all weights)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Advent+Pro:100,200,300,400,500,600,700);',
			'css' => "font-family: 'Advent Pro (plus all weights)', sans-serif;"
			),
			'aguafina script' => array(
			'name' => 'Aguafina Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Aguafina+Script);',
			'css' => "font-family: 'Aguafina Script', sans-serif;"
			),
			'aladin' => array(
			'name' => 'Aladin',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Aladin);',
			'css' => "font-family: 'Aladin', sans-serif;"
			),
			'aldrich' => array(
			'name' => 'Aldrich',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Aldrich);',
			'css' => "font-family: 'Aldrich', sans-serif;"
			),
			'alex brush' => array(
			'name' => 'Alex Brush',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Alex+Brush);',
			'css' => "font-family: 'Alex Brush', sans-serif;"
			),
			'alfa slab one' => array(
			'name' => 'Alfa Slab One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Alfa+Slab+One);',
			'css' => "font-family: 'Alfa Slab One', sans-serif;"
			),
			'alice' => array(
			'name' => 'Alice',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Alice);',
			'css' => "font-family: 'Alice', sans-serif;"
			),
			'alike angular' => array(
			'name' => 'Alike Angular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Alike+Angular);',
			'css' => "font-family: 'Alike Angular', sans-serif;"
			),
			'alike' => array(
			'name' => 'Alike',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Alike);',
			'css' => "font-family: 'Alike', sans-serif;"
			),
			'allan' => array(
			'name' => 'Allan',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Allan);',
			'css' => "font-family: 'Allan', sans-serif;"
			),
			'allerta stencil' => array(
			'name' => 'Allerta Stencil',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Allerta+Stencil);',
			'css' => "font-family: 'Allerta Stencil', sans-serif;"
			),
			'allerta' => array(
			'name' => 'Allerta',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Allerta);',
			'css' => "font-family: 'Allerta', sans-serif;"
			),
			'allura' => array(
			'name' => 'Allura',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Allura);',
			'css' => "font-family: 'Allura', sans-serif;"
			),
			'almendra sc' => array(
			'name' => 'Almendra SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Almendra+SC);',
			'css' => "font-family: 'Almendra SC', sans-serif;"
			),
			'almendra' => array(
			'name' => 'Almendra',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Almendra);',
			'css' => "font-family: 'Almendra', sans-serif;"
			),
			'almendra:400,bold' => array(
			'name' => 'Almendra:400,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Almendra:400,bold);',
			'css' => "font-family: 'Almendra:400,bold', sans-serif;"
			),
			'amaranth' => array(
			'name' => 'Amaranth',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Amaranth);',
			'css' => "font-family: 'Amaranth', sans-serif;"
			),
			'amatic sc' => array(
			'name' => 'Amatic SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Amatic+SC);',
			'css' => "font-family: 'Amatic SC', sans-serif;"
			),
			'amatic sc:400,700' => array(
			'name' => 'Amatic SC:400,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Amatic+SC:400,700);',
			'css' => "font-family: 'Amatic SC:400,700', sans-serif;"
			),
			'amethysta' => array(
			'name' => 'Amethysta',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Amethysta);',
			'css' => "font-family: 'Amethysta', sans-serif;"
			),
			'andada' => array(
			'name' => 'Andada',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Andada);',
			'css' => "font-family: 'Andada', sans-serif;"
			),
			'andika' => array(
			'name' => 'Andika',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Andika);',
			'css' => "font-family: 'Andika', sans-serif;"
			),
			'annie use your telescope' => array(
			'name' => 'Annie Use Your Telescope',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Annie+Use+Your+Telescope);',
			'css' => "font-family: 'Annie Use Your Telescope', sans-serif;"
			),
			'anonymous pro' => array(
			'name' => 'Anonymous Pro',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Anonymous+Pro);',
			'css' => "font-family: 'Anonymous Pro', sans-serif;"
			),
			'anonymous pro (plus italic, bold, and bold italic)' => array(
			'name' => 'Anonymous Pro (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Anonymous+Pro:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Anonymous Pro (plus italic, bold, and bold italic)', sans-serif;"
			),
			'antic didone' => array(
			'name' => 'Antic Didone',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Antic+Didone);',
			'css' => "font-family: 'Antic Didone', sans-serif;"
			),
			'antic slab' => array(
			'name' => 'Antic Slab',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Antic+Slab);',
			'css' => "font-family: 'Antic Slab', sans-serif;"
			),
			'antic' => array(
			'name' => 'Antic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Antic);',
			'css' => "font-family: 'Antic', sans-serif;"
			),
			'anton' => array(
			'name' => 'Anton',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Anton);',
			'css' => "font-family: 'Anton', sans-serif;"
			),
			'arapey' => array(
			'name' => 'Arapey',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arapey);',
			'css' => "font-family: 'Arapey', sans-serif;"
			),
			'arapey:400,400italic' => array(
			'name' => 'Arapey:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arapey:400,400italic);',
			'css' => "font-family: 'Arapey:400,400italic', sans-serif;"
			),
			'arbutus' => array(
			'name' => 'Arbutus',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arbutus);',
			'css' => "font-family: 'Arbutus', sans-serif;"
			),
			'architects daughter' => array(
			'name' => 'Architects Daughter',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Architects+Daughter);',
			'css' => "font-family: 'Architects Daughter', sans-serif;"
			),
			'arimo' => array(
			'name' => 'Arimo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arimo);',
			'css' => "font-family: 'Arimo', sans-serif;"
			),
			'arimo (plus italic, bold, and bold italic)' => array(
			'name' => 'Arimo (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arimo:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Arimo (plus italic, bold, and bold italic)', sans-serif;"
			),
			'arizonia' => array(
			'name' => 'Arizonia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arizonia);',
			'css' => "font-family: 'Arizonia', sans-serif;"
			),
			'armata' => array(
			'name' => 'Armata',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Armata);',
			'css' => "font-family: 'Armata', sans-serif;"
			),
			'artifika' => array(
			'name' => 'Artifika',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Artifika);',
			'css' => "font-family: 'Artifika', sans-serif;"
			),
			'arvo' => array(
			'name' => 'Arvo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arvo);',
			'css' => "font-family: 'Arvo', sans-serif;"
			),
			'arvo (plus italic, bold, and bold italic)' => array(
			'name' => 'Arvo (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Arvo:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Arvo (plus italic, bold, and bold italic)', sans-serif;"
			),
			'asap' => array(
			'name' => 'Asap',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Asap);',
			'css' => "font-family: 'Asap', sans-serif;"
			),
			'asap (plus all weights and italics)' => array(
			'name' => 'Asap (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Asap:400,400italic,700,700italic);',
			'css' => "font-family: 'Asap (plus all weights and italics)', sans-serif;"
			),
			'asset' => array(
			'name' => 'Asset',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Asset);',
			'css' => "font-family: 'Asset', sans-serif;"
			),
			'astloch' => array(
			'name' => 'Astloch',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Astloch);',
			'css' => "font-family: 'Astloch', sans-serif;"
			),
			'astloch (plus bold)' => array(
			'name' => 'Astloch (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Astloch:regular,bold);',
			'css' => "font-family: 'Astloch (plus bold)', sans-serif;"
			),
			'asul' => array(
			'name' => 'Asul',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Asul);',
			'css' => "font-family: 'Asul', sans-serif;"
			),
			'asul:400,bold' => array(
			'name' => 'Asul:400,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Asul:400,bold);',
			'css' => "font-family: 'Asul:400,bold', sans-serif;"
			),
			'atomic age' => array(
			'name' => 'Atomic Age',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Atomic+Age);',
			'css' => "font-family: 'Atomic Age', sans-serif;"
			),
			'aubrey' => array(
			'name' => 'Aubrey',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Aubrey);',
			'css' => "font-family: 'Aubrey', sans-serif;"
			),
			'average' => array(
			'name' => 'Average',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Average);',
			'css' => "font-family: 'Average', sans-serif;"
			),
			'averia gruesa libre' => array(
			'name' => 'Averia Gruesa Libre',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Gruesa+Libre);',
			'css' => "font-family: 'Averia Gruesa Libre', sans-serif;"
			),
			'averia libre' => array(
			'name' => 'Averia Libre',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Libre);',
			'css' => "font-family: 'Averia Libre', sans-serif;"
			),
			'averia libre (plus all weights and italics)' => array(
			'name' => 'Averia Libre (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Libre:300,300italic,400,400italic,700,700italic);',
			'css' => "font-family: 'Averia Libre (plus all weights and italics)', sans-serif;"
			),
			'averia sans libre' => array(
			'name' => 'Averia Sans Libre',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Sans+Libre);',
			'css' => "font-family: 'Averia Sans Libre', sans-serif;"
			),
			'averia sans libre (plus all weights and italics)' => array(
			'name' => 'Averia Sans Libre (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Sans+Libre:300,300italic,400,400italic,700,700italic);',
			'css' => "font-family: 'Averia Sans Libre (plus all weights and italics)', sans-serif;"
			),
			'averia serif libre' => array(
			'name' => 'Averia Serif Libre',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Serif+Libre);',
			'css' => "font-family: 'Averia Serif Libre', sans-serif;"
			),
			'averia serif libre (plus all weights and italics)' => array(
			'name' => 'Averia Serif Libre (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Averia+Serif+Libre:300,300italic,400,400italic,700,700italic);',
			'css' => "font-family: 'Averia Serif Libre (plus all weights and italics)', sans-serif;"
			),
			'bad script' => array(
			'name' => 'Bad Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bad+Script);',
			'css' => "font-family: 'Bad Script', sans-serif;"
			),
			'balthazar' => array(
			'name' => 'Balthazar',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Balthazar);',
			'css' => "font-family: 'Balthazar', sans-serif;"
			),
			'bangers' => array(
			'name' => 'Bangers',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bangers);',
			'css' => "font-family: 'Bangers', sans-serif;"
			),
			'basic' => array(
			'name' => 'Basic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Basic);',
			'css' => "font-family: 'Basic', sans-serif;"
			),
			'baumans' => array(
			'name' => 'Baumans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Baumans);',
			'css' => "font-family: 'Baumans', sans-serif;"
			),
			'belgrano' => array(
			'name' => 'Belgrano',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Belgrano);',
			'css' => "font-family: 'Belgrano', sans-serif;"
			),
			'bentham' => array(
			'name' => 'Bentham',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bentham);',
			'css' => "font-family: 'Bentham', sans-serif;"
			),
			'berkshire swash' => array(
			'name' => 'Berkshire Swash',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Berkshire+Swash);',
			'css' => "font-family: 'Berkshire Swash', sans-serif;"
			),
			'bevan' => array(
			'name' => 'Bevan',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bevan);',
			'css' => "font-family: 'Bevan', sans-serif;"
			),
			'bigshot one' => array(
			'name' => 'Bigshot One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bigshot+One);',
			'css' => "font-family: 'Bigshot One', sans-serif;"
			),
			'bilbo swash caps' => array(
			'name' => 'Bilbo Swash Caps',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bilbo+Swash+Caps);',
			'css' => "font-family: 'Bilbo Swash Caps', sans-serif;"
			),
			'bilbo' => array(
			'name' => 'Bilbo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bilbo);',
			'css' => "font-family: 'Bilbo', sans-serif;"
			),
			'bitter' => array(
			'name' => 'Bitter',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bitter);',
			'css' => "font-family: 'Bitter', sans-serif;"
			),
			'bitter:400,400italic,700' => array(
			'name' => 'Bitter:400,400italic,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bitter:400,400italic,700);',
			'css' => "font-family: 'Bitter:400,400italic,700', sans-serif;"
			),
			'black ops one' => array(
			'name' => 'Black Ops One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Black+Ops+One);',
			'css' => "font-family: 'Black Ops One', sans-serif;"
			),
			'bonbon' => array(
			'name' => 'Bonbon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bonbon);',
			'css' => "font-family: 'Bonbon', sans-serif;"
			),
			'boogaloo' => array(
			'name' => 'Boogaloo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Boogaloo);',
			'css' => "font-family: 'Boogaloo', sans-serif;"
			),
			'bowlby one sc' => array(
			'name' => 'Bowlby One SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bowlby+One+SC);',
			'css' => "font-family: 'Bowlby One SC', sans-serif;"
			),
			'bowlby one' => array(
			'name' => 'Bowlby One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bowlby+One);',
			'css' => "font-family: 'Bowlby One', sans-serif;"
			),
			'brawler' => array(
			'name' => 'Brawler',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Brawler);',
			'css' => "font-family: 'Brawler', sans-serif;"
			),
			'bree serif' => array(
			'name' => 'Bree Serif',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bree+Serif);',
			'css' => "font-family: 'Bree Serif', sans-serif;"
			),
			'bubblegum sans' => array(
			'name' => 'Bubblegum Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Bubblegum+Sans);',
			'css' => "font-family: 'Bubblegum Sans', sans-serif;"
			),
			'buda' => array(
			'name' => 'Buda',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Buda:light);',
			'css' => "font-family: 'Buda', sans-serif;"
			),
			'buenard' => array(
			'name' => 'Buenard',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Buenard);',
			'css' => "font-family: 'Buenard', sans-serif;"
			),
			'buenard:400,bold' => array(
			'name' => 'Buenard:400,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Buenard:400,bold);',
			'css' => "font-family: 'Buenard:400,bold', sans-serif;"
			),
			'butcherman' => array(
			'name' => 'Butcherman',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Butcherman);',
			'css' => "font-family: 'Butcherman', sans-serif;"
			),
			'butterfly kids' => array(
			'name' => 'Butterfly Kids',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Butterfly+Kids);',
			'css' => "font-family: 'Butterfly Kids', sans-serif;"
			),
			'cabin condensed' => array(
			'name' => 'Cabin Condensed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin+Condensed);',
			'css' => "font-family: 'Cabin Condensed', sans-serif;"
			),
			'cabin condensed:400,500,600,700' => array(
			'name' => 'Cabin Condensed:400,500,600,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700);',
			'css' => "font-family: 'Cabin Condensed:400,500,600,700', sans-serif;"
			),
			'cabin sketch' => array(
			'name' => 'Cabin Sketch',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin+Sketch);',
			'css' => "font-family: 'Cabin Sketch', sans-serif;"
			),
			'cabin sketch bold' => array(
			'name' => 'Cabin Sketch Bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin+Sketch:bold);',
			'css' => "font-family: 'Cabin Sketch Bold', sans-serif;"
			),
			'cabin sketch:regular,bold' => array(
			'name' => 'Cabin Sketch:regular,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin+Sketch:regular,bold);',
			'css' => "font-family: 'Cabin Sketch:regular,bold', sans-serif;"
			),
			'cabin' => array(
			'name' => 'Cabin',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin);',
			'css' => "font-family: 'Cabin', sans-serif;"
			),
			'cabin (plus 500, 600, and bold)' => array(
			'name' => 'Cabin (plus 500, 600, and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cabin:regular,500,600,bold);',
			'css' => "font-family: 'Cabin (plus 500, 600, and bold)', sans-serif;"
			),
			'caesar dressing' => array(
			'name' => 'Caesar Dressing',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Caesar+Dressing);',
			'css' => "font-family: 'Caesar Dressing', sans-serif;"
			),
			'cagliostro' => array(
			'name' => 'Cagliostro',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cagliostro);',
			'css' => "font-family: 'Cagliostro', sans-serif;"
			),
			'calligraffitti' => array(
			'name' => 'Calligraffitti',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Calligraffitti);',
			'css' => "font-family: 'Calligraffitti', sans-serif;"
			),
			'cambo' => array(
			'name' => 'Cambo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cambo);',
			'css' => "font-family: 'Cambo', sans-serif;"
			),
			'candal' => array(
			'name' => 'Candal',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Candal);',
			'css' => "font-family: 'Candal', sans-serif;"
			),
			'cantarell' => array(
			'name' => 'Cantarell',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cantarell);',
			'css' => "font-family: 'Cantarell', sans-serif;"
			),
			'cantarell (plus italic, bold, and bold italic)' => array(
			'name' => 'Cantarell (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cantarell:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Cantarell (plus italic, bold, and bold italic)', sans-serif;"
			),
			'cantata one' => array(
			'name' => 'Cantata One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cantata+One);',
			'css' => "font-family: 'Cantata One', sans-serif;"
			),
			'cardo' => array(
			'name' => 'Cardo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cardo);',
			'css' => "font-family: 'Cardo', sans-serif;"
			),
			'carme' => array(
			'name' => 'Carme',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Carme);',
			'css' => "font-family: 'Carme', sans-serif;"
			),
			'carter one' => array(
			'name' => 'Carter One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Carter+One);',
			'css' => "font-family: 'Carter One', sans-serif;"
			),
			'caudex' => array(
			'name' => 'Caudex',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Caudex);',
			'css' => "font-family: 'Caudex', sans-serif;"
			),
			'caudex (plus italic, bold, and bold italic)' => array(
			'name' => 'Caudex (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Caudex:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Caudex (plus italic, bold, and bold italic)', sans-serif;"
			),
			'cedarville cursive' => array(
			'name' => 'Cedarville Cursive',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cedarville+Cursive);',
			'css' => "font-family: 'Cedarville Cursive', sans-serif;"
			),
			'ceviche one' => array(
			'name' => 'Ceviche One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ceviche+One);',
			'css' => "font-family: 'Ceviche One', sans-serif;"
			),
			'changa one' => array(
			'name' => 'Changa One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Changa+One);',
			'css' => "font-family: 'Changa One', sans-serif;"
			),
			'chango' => array(
			'name' => 'Chango',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chango);',
			'css' => "font-family: 'Chango', sans-serif;"
			),
			'chelsea market' => array(
			'name' => 'Chelsea Market',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chelsea+Market);',
			'css' => "font-family: 'Chelsea Market', sans-serif;"
			),
			'cherry cream soda' => array(
			'name' => 'Cherry Cream Soda',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cherry+Cream+Soda);',
			'css' => "font-family: 'Cherry Cream Soda', sans-serif;"
			),
			'chewy' => array(
			'name' => 'Chewy',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chewy);',
			'css' => "font-family: 'Chewy', sans-serif;"
			),
			'chicle' => array(
			'name' => 'Chicle',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chicle);',
			'css' => "font-family: 'Chicle', sans-serif;"
			),
			'chivo' => array(
			'name' => 'Chivo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chivo);',
			'css' => "font-family: 'Chivo', sans-serif;"
			),
			'chivo (plus bold)' => array(
			'name' => 'Chivo (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Chivo:400,900);',
			'css' => "font-family: 'Chivo (plus bold)', sans-serif;"
			),
			'coda' => array(
			'name' => 'Coda',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Coda);',
			'css' => "font-family: 'Coda', sans-serif;"
			),
			'coda:400,800' => array(
			'name' => 'Coda:400,800',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Coda:400,800);',
			'css' => "font-family: 'Coda:400,800', sans-serif;"
			),
			'codystar' => array(
			'name' => 'Codystar',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Codystar);',
			'css' => "font-family: 'Codystar', sans-serif;"
			),
			'codystar (plus all weights)' => array(
			'name' => 'Codystar (plus all weights)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Codystar:300,400);',
			'css' => "font-family: 'Codystar (plus all weights)', sans-serif;"
			),
			'comfortaa' => array(
			'name' => 'Comfortaa',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Comfortaa);',
			'css' => "font-family: 'Comfortaa', sans-serif;"
			),
			'comfortaa (plus book and bold)' => array(
			'name' => 'Comfortaa (plus book and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Comfortaa:300,400,700);',
			'css' => "font-family: 'Comfortaa (plus book and bold)', sans-serif;"
			),
			'coming soon' => array(
			'name' => 'Coming Soon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Coming+Soon);',
			'css' => "font-family: 'Coming Soon', sans-serif;"
			),
			'concert one' => array(
			'name' => 'Concert One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Concert+One);',
			'css' => "font-family: 'Concert One', sans-serif;"
			),
			'condiment' => array(
			'name' => 'Condiment',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Condiment);',
			'css' => "font-family: 'Condiment', sans-serif;"
			),
			'contrail one' => array(
			'name' => 'Contrail One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Contrail+One);',
			'css' => "font-family: 'Contrail One', sans-serif;"
			),
			'convergence' => array(
			'name' => 'Convergence',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Convergence);',
			'css' => "font-family: 'Convergence', sans-serif;"
			),
			'cookie' => array(
			'name' => 'Cookie',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cookie);',
			'css' => "font-family: 'Cookie', sans-serif;"
			),
			'copse' => array(
			'name' => 'Copse',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Copse);',
			'css' => "font-family: 'Copse', sans-serif;"
			),
			'corben' => array(
			'name' => 'Corben',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Corben);',
			'css' => "font-family: 'Corben', sans-serif;"
			),
			'corben:400,bold' => array(
			'name' => 'Corben:400,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Corben:400,bold);',
			'css' => "font-family: 'Corben:400,bold', sans-serif;"
			),
			'corben bold' => array(
			'name' => 'Corben Bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Corben:bold);',
			'css' => "font-family: 'Corben Bold', sans-serif;"
			),
			'cousine' => array(
			'name' => 'Cousine',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cousine);',
			'css' => "font-family: 'Cousine', sans-serif;"
			),
			'cousine (plus italic, bold, and bold italic)' => array(
			'name' => 'Cousine (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cousine:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Cousine (plus italic, bold, and bold italic)', sans-serif;"
			),
			'coustard' => array(
			'name' => 'Coustard',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Coustard);',
			'css' => "font-family: 'Coustard', sans-serif;"
			),
			'coustard (plus ultra bold)' => array(
			'name' => 'Coustard (plus ultra bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Coustard:400,900);',
			'css' => "font-family: 'Coustard (plus ultra bold)', sans-serif;"
			),
			'covered by your grace' => array(
			'name' => 'Covered By Your Grace',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);',
			'css' => "font-family: 'Covered By Your Grace', sans-serif;"
			),
			'crafty girls' => array(
			'name' => 'Crafty Girls',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Crafty+Girls);',
			'css' => "font-family: 'Crafty Girls', sans-serif;"
			),
			'creepster' => array(
			'name' => 'Creepster',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Creepster);',
			'css' => "font-family: 'Creepster', sans-serif;"
			),
			'crete round' => array(
			'name' => 'Crete Round',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Crete+Round);',
			'css' => "font-family: 'Crete Round', sans-serif;"
			),
			'crete round:400,400italic' => array(
			'name' => 'Crete Round:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Crete+Round:400,400italic);',
			'css' => "font-family: 'Crete Round:400,400italic', sans-serif;"
			),
			'crimson text' => array(
			'name' => 'Crimson Text',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Crimson+Text);',
			'css' => "font-family: 'Crimson Text', sans-serif;"
			),
			'crushed' => array(
			'name' => 'Crushed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Crushed);',
			'css' => "font-family: 'Crushed', sans-serif;"
			),
			'cuprum' => array(
			'name' => 'Cuprum',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cuprum);',
			'css' => "font-family: 'Cuprum', sans-serif;"
			),
			'cutive' => array(
			'name' => 'Cutive',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Cutive);',
			'css' => "font-family: 'Cutive', sans-serif;"
			),
			'damion' => array(
			'name' => 'Damion',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Damion);',
			'css' => "font-family: 'Damion', sans-serif;"
			),
			'dancing script' => array(
			'name' => 'Dancing Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Dancing+Script);',
			'css' => "font-family: 'Dancing Script', sans-serif;"
			),
			'dawning of a new day' => array(
			'name' => 'Dawning of a New Day',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Dawning+of+a+New+Day);',
			'css' => "font-family: 'Dawning of a New Day', sans-serif;"
			),
			'days one' => array(
			'name' => 'Days One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Days+One);',
			'css' => "font-family: 'Days One', sans-serif;"
			),
			'delius swash caps' => array(
			'name' => 'Delius Swash Caps',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Delius+Swash+Caps);',
			'css' => "font-family: 'Delius Swash Caps', sans-serif;"
			),
			'delius unicase' => array(
			'name' => 'Delius Unicase',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Delius+Unicase);',
			'css' => "font-family: 'Delius Unicase', sans-serif;"
			),
			'delius' => array(
			'name' => 'Delius',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Delius);',
			'css' => "font-family: 'Delius', sans-serif;"
			),
			'devonshire' => array(
			'name' => 'Devonshire',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Devonshire);',
			'css' => "font-family: 'Devonshire', sans-serif;"
			),
			'didact gothic' => array(
			'name' => 'Didact Gothic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Didact+Gothic);',
			'css' => "font-family: 'Didact Gothic', sans-serif;"
			),
			'diplomata sc' => array(
			'name' => 'Diplomata SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Diplomata+SC);',
			'css' => "font-family: 'Diplomata SC', sans-serif;"
			),
			'diplomata' => array(
			'name' => 'Diplomata',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Diplomata);',
			'css' => "font-family: 'Diplomata', sans-serif;"
			),
			'doppio one' => array(
			'name' => 'Doppio One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Doppio+One);',
			'css' => "font-family: 'Doppio One', sans-serif;"
			),
			'dorsa' => array(
			'name' => 'Dorsa',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Dorsa);',
			'css' => "font-family: 'Dorsa', sans-serif;"
			),
			'dr sugiyama' => array(
			'name' => 'Dr Sugiyama',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Dr+Sugiyama);',
			'css' => "font-family: 'Dr Sugiyama', sans-serif;"
			),
			'droid sans mono' => array(
			'name' => 'Droid Sans Mono',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Sans+Mono);',
			'css' => "font-family: 'Droid Sans Mono', sans-serif;"
			),
			'droid sans' => array(
			'name' => 'Droid Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Sans);',
			'css' => "font-family: 'Droid Sans', sans-serif;"
			),
			'droid sans (plus bold)' => array(
			'name' => 'Droid Sans (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold);',
			'css' => "font-family: 'Droid Sans (plus bold)', sans-serif;"
			),
			'droid serif' => array(
			'name' => 'Droid Serif',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Serif);',
			'css' => "font-family: 'Droid Serif', sans-serif;"
			),
			'droid serif (plus italic, bold, and bold italic)' => array(
			'name' => 'Droid Serif (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Droid+Serif:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Droid Serif (plus italic, bold, and bold italic)', sans-serif;"
			),
			'duru sans' => array(
			'name' => 'Duru Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Duru+Sans);',
			'css' => "font-family: 'Duru Sans', sans-serif;"
			),
			'dynalight' => array(
			'name' => 'Dynalight',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Dynalight);',
			'css' => "font-family: 'Dynalight', sans-serif;"
			),
			'eb garamond' => array(
			'name' => 'EB Garamond',
			'import' => '@import url(http://fonts.googleapis.com/css?family=EB+Garamond);',
			'css' => "font-family: 'EB Garamond', sans-serif;"
			),
			'eater' => array(
			'name' => 'Eater',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Eater);',
			'css' => "font-family: 'Eater', sans-serif;"
			),
			'economica' => array(
			'name' => 'Economica',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Economica);',
			'css' => "font-family: 'Economica', sans-serif;"
			),
			'economica (plus all weights and italics)' => array(
			'name' => 'Economica (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Economica:400,400italic,700,700italic);',
			'css' => "font-family: 'Economica (plus all weights and italics)', sans-serif;"
			),
			'electrolize' => array(
			'name' => 'Electrolize',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Electrolize);',
			'css' => "font-family: 'Electrolize', sans-serif;"
			),
			'emblema one' => array(
			'name' => 'Emblema One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Emblema+One);',
			'css' => "font-family: 'Emblema One', sans-serif;"
			),
			'emilys candy' => array(
			'name' => 'Emilys Candy',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Emilys+Candy);',
			'css' => "font-family: 'Emilys Candy', sans-serif;"
			),
			'engagement' => array(
			'name' => 'Engagement',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Engagement);',
			'css' => "font-family: 'Engagement', sans-serif;"
			),
			'enriqueta' => array(
			'name' => 'Enriqueta',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Enriqueta);',
			'css' => "font-family: 'Enriqueta', sans-serif;"
			),
			'enriqueta:400,700' => array(
			'name' => 'Enriqueta:400,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Enriqueta:400,700);',
			'css' => "font-family: 'Enriqueta:400,700', sans-serif;"
			),
			'erica one' => array(
			'name' => 'Erica One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Erica+One);',
			'css' => "font-family: 'Erica One', sans-serif;"
			),
			'esteban' => array(
			'name' => 'Esteban',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Esteban);',
			'css' => "font-family: 'Esteban', sans-serif;"
			),
			'euphoria script' => array(
			'name' => 'Euphoria Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Euphoria+Script);',
			'css' => "font-family: 'Euphoria Script', sans-serif;"
			),
			'ewert' => array(
			'name' => 'Ewert',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ewert);',
			'css' => "font-family: 'Ewert', sans-serif;"
			),
			'exo' => array(
			'name' => 'Exo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Exo);',
			'css' => "font-family: 'Exo', sans-serif;"
			),
			'exo (plus all weights and italics)' => array(
			'name' => 'Exo (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic);',
			'css' => "font-family: 'Exo (plus all weights and italics)', sans-serif;"
			),
			'expletus sans' => array(
			'name' => 'Expletus Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Expletus+Sans);',
			'css' => "font-family: 'Expletus Sans', sans-serif;"
			),
			'expletus sans (plus 500, 600, and bold)' => array(
			'name' => 'Expletus Sans (plus 500, 600, and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Expletus+Sans:regular,500,600,bold);',
			'css' => "font-family: 'Expletus Sans (plus 500, 600, and bold)', sans-serif;"
			),
			'fanwood text' => array(
			'name' => 'Fanwood Text',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fanwood+Text);',
			'css' => "font-family: 'Fanwood Text', sans-serif;"
			),
			'fanwood text (plus italic)' => array(
			'name' => 'Fanwood Text (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fanwood+Text:400,400italic);',
			'css' => "font-family: 'Fanwood Text (plus italic)', sans-serif;"
			),
			'fascinate inline' => array(
			'name' => 'Fascinate Inline',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fascinate+Inline);',
			'css' => "font-family: 'Fascinate Inline', sans-serif;"
			),
			'fascinate' => array(
			'name' => 'Fascinate',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fascinate);',
			'css' => "font-family: 'Fascinate', sans-serif;"
			),
			'federant' => array(
			'name' => 'Federant',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Federant);',
			'css' => "font-family: 'Federant', sans-serif;"
			),
			'federo' => array(
			'name' => 'Federo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Federo);',
			'css' => "font-family: 'Federo', sans-serif;"
			),
			'felipa' => array(
			'name' => 'Felipa',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Felipa);',
			'css' => "font-family: 'Felipa', sans-serif;"
			),
			'fjord one' => array(
			'name' => 'Fjord One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fjord+One);',
			'css' => "font-family: 'Fjord One', sans-serif;"
			),
			'flamenco' => array(
			'name' => 'Flamenco',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Flamenco);',
			'css' => "font-family: 'Flamenco', sans-serif;"
			),
			'flamenco:300' => array(
			'name' => 'Flamenco:300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Flamenco:300);',
			'css' => "font-family: 'Flamenco:300', sans-serif;"
			),
			'flavors' => array(
			'name' => 'Flavors',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Flavors);',
			'css' => "font-family: 'Flavors', sans-serif;"
			),
			'fondamento' => array(
			'name' => 'Fondamento',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fondamento);',
			'css' => "font-family: 'Fondamento', sans-serif;"
			),
			'fondamento:400,400italic' => array(
			'name' => 'Fondamento:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fondamento:400,400italic);',
			'css' => "font-family: 'Fondamento:400,400italic', sans-serif;"
			),
			'fontdiner swanky' => array(
			'name' => 'Fontdiner Swanky',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fontdiner+Swanky);',
			'css' => "font-family: 'Fontdiner Swanky', sans-serif;"
			),
			'forum' => array(
			'name' => 'Forum',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Forum);',
			'css' => "font-family: 'Forum', sans-serif;"
			),
			'francois one' => array(
			'name' => 'Francois One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Francois+One);',
			'css' => "font-family: 'Francois One', sans-serif;"
			),
			'fredoka one' => array(
			'name' => 'Fredoka One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fredoka+One);',
			'css' => "font-family: 'Fredoka One', sans-serif;"
			),
			'fresca' => array(
			'name' => 'Fresca',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fresca);',
			'css' => "font-family: 'Fresca', sans-serif;"
			),
			'frijole' => array(
			'name' => 'Frijole',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Frijole);',
			'css' => "font-family: 'Frijole', sans-serif;"
			),
			'fugaz one' => array(
			'name' => 'Fugaz One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Fugaz+One);',
			'css' => "font-family: 'Fugaz One', sans-serif;"
			),
			'galdeano' => array(
			'name' => 'Galdeano',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Galdeano);',
			'css' => "font-family: 'Galdeano', sans-serif;"
			),
			'gentium basic' => array(
			'name' => 'Gentium Basic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gentium+Basic);',
			'css' => "font-family: 'Gentium Basic', sans-serif;"
			),
			'gentium basic (plus bold and italic)' => array(
			'name' => 'Gentium Basic (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic);',
			'css' => "font-family: 'Gentium Basic (plus bold and italic)', sans-serif;"
			),
			'gentium book basic' => array(
			'name' => 'Gentium Book Basic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gentium+Book+Basic);',
			'css' => "font-family: 'Gentium Book Basic', sans-serif;"
			),
			'gentium book basic (plus bold and italic)' => array(
			'name' => 'Gentium Book Basic (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400italic,700,700italic);',
			'css' => "font-family: 'Gentium Book Basic (plus bold and italic)', sans-serif;"
			),
			'geo' => array(
			'name' => 'Geo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Geo);',
			'css' => "font-family: 'Geo', sans-serif;"
			),
			'geostar fill' => array(
			'name' => 'Geostar Fill',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Geostar+Fill);',
			'css' => "font-family: 'Geostar Fill', sans-serif;"
			),
			'geostar' => array(
			'name' => 'Geostar',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Geostar);',
			'css' => "font-family: 'Geostar', sans-serif;"
			),
			'germania one' => array(
			'name' => 'Germania One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Germania+One);',
			'css' => "font-family: 'Germania One', sans-serif;"
			),
			'give you glory' => array(
			'name' => 'Give You Glory',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Give+You+Glory);',
			'css' => "font-family: 'Give You Glory', sans-serif;"
			),
			'glass antiqua' => array(
			'name' => 'Glass Antiqua',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Glass+Antiqua);',
			'css' => "font-family: 'Glass Antiqua', sans-serif;"
			),
			'glegoo' => array(
			'name' => 'Glegoo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Glegoo);',
			'css' => "font-family: 'Glegoo', sans-serif;"
			),
			'gloria hallelujah' => array(
			'name' => 'Gloria Hallelujah',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gloria+Hallelujah);',
			'css' => "font-family: 'Gloria Hallelujah', sans-serif;"
			),
			'goblin one' => array(
			'name' => 'Goblin One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Goblin+One);',
			'css' => "font-family: 'Goblin One', sans-serif;"
			),
			'gochi hand' => array(
			'name' => 'Gochi Hand',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gochi+Hand);',
			'css' => "font-family: 'Gochi Hand', sans-serif;"
			),
			'gochi hand:400' => array(
			'name' => 'Gochi Hand:400',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gochi+Hand:400);',
			'css' => "font-family: 'Gochi Hand:400', sans-serif;"
			),
			'gorditas' => array(
			'name' => 'Gorditas',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gorditas);',
			'css' => "font-family: 'Gorditas', sans-serif;"
			),
			'gorditas (plus bold)' => array(
			'name' => 'Gorditas (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gorditas:400,bold);',
			'css' => "font-family: 'Gorditas (plus bold)', sans-serif;"
			),
			'goudy bookletter 1911' => array(
			'name' => 'Goudy Bookletter 1911',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911);',
			'css' => "font-family: 'Goudy Bookletter 1911', sans-serif;"
			),
			'graduate' => array(
			'name' => 'Graduate',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Graduate);',
			'css' => "font-family: 'Graduate', sans-serif;"
			),
			'gravitas one' => array(
			'name' => 'Gravitas One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gravitas+One);',
			'css' => "font-family: 'Gravitas One', sans-serif;"
			),
			'gruppo' => array(
			'name' => 'Gruppo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gruppo);',
			'css' => "font-family: 'Gruppo', sans-serif;"
			),
			'gudea' => array(
			'name' => 'Gudea',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gudea);',
			'css' => "font-family: 'Gudea', sans-serif;"
			),
			'gudea:400,italic,bold' => array(
			'name' => 'Gudea:400,italic,bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Gudea:400,italic,bold);',
			'css' => "font-family: 'Gudea:400,italic,bold', sans-serif;"
			),
			'habibi' => array(
			'name' => 'Habibi',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Habibi);',
			'css' => "font-family: 'Habibi', sans-serif;"
			),
			'hammersmith one' => array(
			'name' => 'Hammersmith One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Hammersmith+One);',
			'css' => "font-family: 'Hammersmith One', sans-serif;"
			),
			'handlee' => array(
			'name' => 'Handlee',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Handlee);',
			'css' => "font-family: 'Handlee', sans-serif;"
			),
			'happy monkey' => array(
			'name' => 'Happy Monkey',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Happy+Monkey);',
			'css' => "font-family: 'Happy Monkey', sans-serif;"
			),
			'henny penny' => array(
			'name' => 'Henny Penny',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Henny+Penny);',
			'css' => "font-family: 'Henny Penny', sans-serif;"
			),
			'herr von muellerhoff' => array(
			'name' => 'Herr Von Muellerhoff',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff);',
			'css' => "font-family: 'Herr Von Muellerhoff', sans-serif;"
			),
			'holtwood one sc' => array(
			'name' => 'Holtwood One SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Holtwood+One+SC);',
			'css' => "font-family: 'Holtwood One SC', sans-serif;"
			),
			'homemade apple' => array(
			'name' => 'Homemade Apple',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Homemade+Apple);',
			'css' => "font-family: 'Homemade Apple', sans-serif;"
			),
			'homenaje' => array(
			'name' => 'Homenaje',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Homenaje);',
			'css' => "font-family: 'Homenaje', sans-serif;"
			),
			'im fell dw pica sc' => array(
			'name' => 'IM Fell DW Pica SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica+SC);',
			'css' => "font-family: 'IM Fell DW Pica SC', sans-serif;"
			),
			'im fell dw pica' => array(
			'name' => 'IM Fell DW Pica',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica);',
			'css' => "font-family: 'IM Fell DW Pica', sans-serif;"
			),
			'im fell dw pica (plus italic)' => array(
			'name' => 'IM Fell DW Pica (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:regular,italic);',
			'css' => "font-family: 'IM Fell DW Pica (plus italic)', sans-serif;"
			),
			'im fell double pica sc' => array(
			'name' => 'IM Fell Double Pica SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica+SC);',
			'css' => "font-family: 'IM Fell Double Pica SC', sans-serif;"
			),
			'im fell double pica' => array(
			'name' => 'IM Fell Double Pica',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica);',
			'css' => "font-family: 'IM Fell Double Pica', sans-serif;"
			),
			'im fell double pica (plus italic)' => array(
			'name' => 'IM Fell Double Pica (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica:regular,italic);',
			'css' => "font-family: 'IM Fell Double Pica (plus italic)', sans-serif;"
			),
			'im fell english sc' => array(
			'name' => 'IM Fell English SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+English+SC);',
			'css' => "font-family: 'IM Fell English SC', sans-serif;"
			),
			'im fell english' => array(
			'name' => 'IM Fell English',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+English);',
			'css' => "font-family: 'IM Fell English', sans-serif;"
			),
			'im fell english (plus italic)' => array(
			'name' => 'IM Fell English (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+English:regular,italic);',
			'css' => "font-family: 'IM Fell English (plus italic)', sans-serif;"
			),
			'im fell french canon sc' => array(
			'name' => 'IM Fell French Canon SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+French+Canon+SC);',
			'css' => "font-family: 'IM Fell French Canon SC', sans-serif;"
			),
			'im fell french canon' => array(
			'name' => 'IM Fell French Canon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+French+Canon);',
			'css' => "font-family: 'IM Fell French Canon', sans-serif;"
			),
			'im fell french canon (plus italic)' => array(
			'name' => 'IM Fell French Canon (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+French+Canon:regular,italic);',
			'css' => "font-family: 'IM Fell French Canon (plus italic)', sans-serif;"
			),
			'im fell great primer sc' => array(
			'name' => 'IM Fell Great Primer SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer+SC);',
			'css' => "font-family: 'IM Fell Great Primer SC', sans-serif;"
			),
			'im fell great primer' => array(
			'name' => 'IM Fell Great Primer',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer);',
			'css' => "font-family: 'IM Fell Great Primer', sans-serif;"
			),
			'im fell great primer (plus italic)' => array(
			'name' => 'IM Fell Great Primer (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:regular,italic);',
			'css' => "font-family: 'IM Fell Great Primer (plus italic)', sans-serif;"
			),
			'iceberg' => array(
			'name' => 'Iceberg',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Iceberg);',
			'css' => "font-family: 'Iceberg', sans-serif;"
			),
			'iceland' => array(
			'name' => 'Iceland',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Iceland);',
			'css' => "font-family: 'Iceland', sans-serif;"
			),
			'imprima' => array(
			'name' => 'Imprima',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Imprima);',
			'css' => "font-family: 'Imprima', sans-serif;"
			),
			'inconsolata' => array(
			'name' => 'Inconsolata',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Inconsolata);',
			'css' => "font-family: 'Inconsolata', sans-serif;"
			),
			'inder' => array(
			'name' => 'Inder',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Inder);',
			'css' => "font-family: 'Inder', sans-serif;"
			),
			'indie flower' => array(
			'name' => 'Indie Flower',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Indie+Flower);',
			'css' => "font-family: 'Indie Flower', sans-serif;"
			),
			'inika' => array(
			'name' => 'Inika',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Inika);',
			'css' => "font-family: 'Inika', sans-serif;"
			),
			'inika (plus bold)' => array(
			'name' => 'Inika (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Inika:400,bold);',
			'css' => "font-family: 'Inika (plus bold)', sans-serif;"
			),
			'irish grover' => array(
			'name' => 'Irish Grover',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Irish+Grover);',
			'css' => "font-family: 'Irish Grover', sans-serif;"
			),
			'irish growler' => array(
			'name' => 'Irish Growler',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Irish+Growler);',
			'css' => "font-family: 'Irish Growler', sans-serif;"
			),
			'istok web' => array(
			'name' => 'Istok Web',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Istok+Web);',
			'css' => "font-family: 'Istok Web', sans-serif;"
			),
			'istok web (plus italic, bold, and bold italic)' => array(
			'name' => 'Istok Web (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic);',
			'css' => "font-family: 'Istok Web (plus italic, bold, and bold italic)', sans-serif;"
			),
			'italiana' => array(
			'name' => 'Italiana',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Italiana);',
			'css' => "font-family: 'Italiana', sans-serif;"
			),
			'italianno' => array(
			'name' => 'Italianno',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Italianno);',
			'css' => "font-family: 'Italianno', sans-serif;"
			),
			'jim nightshade' => array(
			'name' => 'Jim Nightshade',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jim+Nightshade);',
			'css' => "font-family: 'Jim Nightshade', sans-serif;"
			),
			'jockey one' => array(
			'name' => 'Jockey One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jockey+One);',
			'css' => "font-family: 'Jockey One', sans-serif;"
			),
			'jolly lodger' => array(
			'name' => 'Jolly Lodger',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jolly+Lodger);',
			'css' => "font-family: 'Jolly Lodger', sans-serif;"
			),
			'josefin sans regular 400' => array(
			'name' => 'Josefin Sans Regular 400',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans);',
			'css' => "font-family: 'Josefin Sans Regular 400', sans-serif;"
			),
			'josefin sans 100' => array(
			'name' => 'Josefin Sans 100',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:100);',
			'css' => "font-family: 'Josefin Sans 100', sans-serif;"
			),
			'josefin sans 100 (plus italic)' => array(
			'name' => 'Josefin Sans 100 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:100,100italic);',
			'css' => "font-family: 'Josefin Sans 100 (plus italic)', sans-serif;"
			),
			'josefin sans 600' => array(
			'name' => 'Josefin Sans 600',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:600);',
			'css' => "font-family: 'Josefin Sans 600', sans-serif;"
			),
			'josefin sans 600 (plus italic)' => array(
			'name' => 'Josefin Sans 600 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:600,600italic);',
			'css' => "font-family: 'Josefin Sans 600 (plus italic)', sans-serif;"
			),
			'josefin sans bold 700' => array(
			'name' => 'Josefin Sans Bold 700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:bold);',
			'css' => "font-family: 'Josefin Sans Bold 700', sans-serif;"
			),
			'josefin sans bold 700 (plus italic)' => array(
			'name' => 'Josefin Sans Bold 700 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:bold,bolditalic);',
			'css' => "font-family: 'Josefin Sans Bold 700 (plus italic)', sans-serif;"
			),
			'josefin sans light 300' => array(
			'name' => 'Josefin Sans Light 300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:light);',
			'css' => "font-family: 'Josefin Sans Light 300', sans-serif;"
			),
			'josefin sans light 300 (plus italic)' => array(
			'name' => 'Josefin Sans Light 300 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:light,lightitalic);',
			'css' => "font-family: 'Josefin Sans Light 300 (plus italic)', sans-serif;"
			),
			'josefin sans regular 400 (plus italic)' => array(
			'name' => 'Josefin Sans Regular 400 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Sans:regular,regularitalic);',
			'css' => "font-family: 'Josefin Sans Regular 400 (plus italic)', sans-serif;"
			),
			'josefin slab regular 400' => array(
			'name' => 'Josefin Slab Regular 400',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab);',
			'css' => "font-family: 'Josefin Slab Regular 400', sans-serif;"
			),
			'josefin slab 100' => array(
			'name' => 'Josefin Slab 100',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:100);',
			'css' => "font-family: 'Josefin Slab 100', sans-serif;"
			),
			'josefin slab 100 (plus italic)' => array(
			'name' => 'Josefin Slab 100 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:100,100italic);',
			'css' => "font-family: 'Josefin Slab 100 (plus italic)', sans-serif;"
			),
			'josefin slab 600' => array(
			'name' => 'Josefin Slab 600',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:600);',
			'css' => "font-family: 'Josefin Slab 600', sans-serif;"
			),
			'josefin slab 600 (plus italic)' => array(
			'name' => 'Josefin Slab 600 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:600,600italic);',
			'css' => "font-family: 'Josefin Slab 600 (plus italic)', sans-serif;"
			),
			'josefin slab bold 700' => array(
			'name' => 'Josefin Slab Bold 700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:bold);',
			'css' => "font-family: 'Josefin Slab Bold 700', sans-serif;"
			),
			'josefin slab bold 700 (plus italic)' => array(
			'name' => 'Josefin Slab Bold 700 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:bold,bolditalic);',
			'css' => "font-family: 'Josefin Slab Bold 700 (plus italic)', sans-serif;"
			),
			'josefin slab light 300' => array(
			'name' => 'Josefin Slab Light 300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:light);',
			'css' => "font-family: 'Josefin Slab Light 300', sans-serif;"
			),
			'josefin slab light 300 (plus italic)' => array(
			'name' => 'Josefin Slab Light 300 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:light,lightitalic);',
			'css' => "font-family: 'Josefin Slab Light 300 (plus italic)', sans-serif;"
			),
			'josefin slab regular 400 (plus italic)' => array(
			'name' => 'Josefin Slab Regular 400 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Josefin+Slab:regular,regularitalic);',
			'css' => "font-family: 'Josefin Slab Regular 400 (plus italic)', sans-serif;"
			),
			'judson' => array(
			'name' => 'Judson',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Judson);',
			'css' => "font-family: 'Judson', sans-serif;"
			),
			'judson (plus bold)' => array(
			'name' => 'Judson (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Judson:regular,regularitalic,bold);',
			'css' => "font-family: 'Judson (plus bold)', sans-serif;"
			),
			'julee' => array(
			'name' => 'Julee',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Julee);',
			'css' => "font-family: 'Julee', sans-serif;"
			),
			'junge' => array(
			'name' => 'Junge',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Junge);',
			'css' => "font-family: 'Junge', sans-serif;"
			),
			'jura regular' => array(
			'name' => 'Jura Regular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jura);',
			'css' => "font-family: 'Jura Regular', sans-serif;"
			),
			'jura 500' => array(
			'name' => 'Jura 500',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jura:500);',
			'css' => "font-family: 'Jura 500', sans-serif;"
			),
			'jura 600' => array(
			'name' => 'Jura 600',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jura:600);',
			'css' => "font-family: 'Jura 600', sans-serif;"
			),
			'jura light' => array(
			'name' => 'Jura Light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Jura:light);',
			'css' => "font-family: 'Jura Light', sans-serif;"
			),
			'just another hand' => array(
			'name' => 'Just Another Hand',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Just+Another+Hand);',
			'css' => "font-family: 'Just Another Hand', sans-serif;"
			),
			'just me again down here' => array(
			'name' => 'Just Me Again Down Here',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Just+Me+Again+Down+Here);',
			'css' => "font-family: 'Just Me Again Down Here', sans-serif;"
			),
			'kameron' => array(
			'name' => 'Kameron',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kameron);',
			'css' => "font-family: 'Kameron', sans-serif;"
			),
			'kameron (plus bold)' => array(
			'name' => 'Kameron (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kameron:400,700);',
			'css' => "font-family: 'Kameron (plus bold)', sans-serif;"
			),
			'karla' => array(
			'name' => 'Karla',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Karla);',
			'css' => "font-family: 'Karla', sans-serif;"
			),
			'karla (plus all weights and italics)' => array(
			'name' => 'Karla (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic);',
			'css' => "font-family: 'Karla (plus all weights and italics)', sans-serif;"
			),
			'kaushan script' => array(
			'name' => 'Kaushan Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kaushan+Script);',
			'css' => "font-family: 'Kaushan Script', sans-serif;"
			),
			'kelly slab' => array(
			'name' => 'Kelly Slab',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kelly+Slab);',
			'css' => "font-family: 'Kelly Slab', sans-serif;"
			),
			'kenia' => array(
			'name' => 'Kenia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kenia);',
			'css' => "font-family: 'Kenia', sans-serif;"
			),
			'knewave' => array(
			'name' => 'Knewave',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Knewave);',
			'css' => "font-family: 'Knewave', sans-serif;"
			),
			'kotta one' => array(
			'name' => 'Kotta One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kotta+One);',
			'css' => "font-family: 'Kotta One', sans-serif;"
			),
			'kranky' => array(
			'name' => 'Kranky',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kranky);',
			'css' => "font-family: 'Kranky', sans-serif;"
			),
			'kreon' => array(
			'name' => 'Kreon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kreon);',
			'css' => "font-family: 'Kreon', sans-serif;"
			),
			'kreon (plus light and bold)' => array(
			'name' => 'Kreon (plus light and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kreon:light,regular,bold);',
			'css' => "font-family: 'Kreon (plus light and bold)', sans-serif;"
			),
			'kristi' => array(
			'name' => 'Kristi',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Kristi);',
			'css' => "font-family: 'Kristi', sans-serif;"
			),
			'krona one' => array(
			'name' => 'Krona One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Krona+One);',
			'css' => "font-family: 'Krona One', sans-serif;"
			),
			'la belle aurore' => array(
			'name' => 'La Belle Aurore',
			'import' => '@import url(http://fonts.googleapis.com/css?family=La+Belle+Aurore);',
			'css' => "font-family: 'La Belle Aurore', sans-serif;"
			),
			'lancelot' => array(
			'name' => 'Lancelot',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lancelot);',
			'css' => "font-family: 'Lancelot', sans-serif;"
			),
			'lato 100' => array(
			'name' => 'Lato 100',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:100);',
			'css' => "font-family: 'Lato 100', sans-serif;"
			),
			'lato 100 (plus italic)' => array(
			'name' => 'Lato 100 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:100,100italic);',
			'css' => "font-family: 'Lato 100 (plus italic)', sans-serif;"
			),
			'lato 900' => array(
			'name' => 'Lato 900',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:900);',
			'css' => "font-family: 'Lato 900', sans-serif;"
			),
			'lato 900 (plus italic)' => array(
			'name' => 'Lato 900 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:900,900italic);',
			'css' => "font-family: 'Lato 900 (plus italic)', sans-serif;"
			),
			'lato bold 700' => array(
			'name' => 'Lato Bold 700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:bold);',
			'css' => "font-family: 'Lato Bold 700', sans-serif;"
			),
			'lato bold 700 (plus italic)' => array(
			'name' => 'Lato Bold 700 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:bold,bolditalic);',
			'css' => "font-family: 'Lato Bold 700 (plus italic)', sans-serif;"
			),
			'lato light 300' => array(
			'name' => 'Lato Light 300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:light);',
			'css' => "font-family: 'Lato Light 300', sans-serif;"
			),
			'lato light 300 (plus italic)' => array(
			'name' => 'Lato Light 300 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:light,lightitalic);',
			'css' => "font-family: 'Lato Light 300 (plus italic)', sans-serif;"
			),
			'lato regular 400' => array(
			'name' => 'Lato Regular 400',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:regular);',
			'css' => "font-family: 'Lato Regular 400', sans-serif;"
			),
			'lato regular 400 (plus italic)' => array(
			'name' => 'Lato Regular 400 (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lato:regular,regularitalic);',
			'css' => "font-family: 'Lato Regular 400 (plus italic)', sans-serif;"
			),
			'league script' => array(
			'name' => 'League Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=League+Script);',
			'css' => "font-family: 'League Script', sans-serif;"
			),
			'leckerli one' => array(
			'name' => 'Leckerli One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Leckerli+One);',
			'css' => "font-family: 'Leckerli One', sans-serif;"
			),
			'ledger' => array(
			'name' => 'Ledger',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ledger);',
			'css' => "font-family: 'Ledger', sans-serif;"
			),
			'lekton' => array(
			'name' => 'Lekton',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lekton);',
			'css' => "font-family: 'Lekton', sans-serif;"
			),
			'lekton (plus italic and bold)' => array(
			'name' => 'Lekton (plus italic and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lekton:regular,italic,bold);',
			'css' => "font-family: 'Lekton (plus italic and bold)', sans-serif;"
			),
			'lemon' => array(
			'name' => 'Lemon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lemon);',
			'css' => "font-family: 'Lemon', sans-serif;"
			),
			'lilita one' => array(
			'name' => 'Lilita One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lilita+One);',
			'css' => "font-family: 'Lilita One', sans-serif;"
			),
			'limelight' => array(
			'name' => 'Limelight',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Limelight);',
			'css' => "font-family: 'Limelight', sans-serif;"
			),
			'linden hill' => array(
			'name' => 'Linden Hill',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Linden+Hill);',
			'css' => "font-family: 'Linden Hill', sans-serif;"
			),
			'linden hill:400,400italic' => array(
			'name' => 'Linden Hill:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Linden+Hill:400,400italic);',
			'css' => "font-family: 'Linden Hill:400,400italic', sans-serif;"
			),
			'lobster two' => array(
			'name' => 'Lobster Two',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lobster+Two);',
			'css' => "font-family: 'Lobster Two', sans-serif;"
			),
			'lobster two (plus italic, bold, and bold italic)' => array(
			'name' => 'Lobster Two (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic);',
			'css' => "font-family: 'Lobster Two (plus italic, bold, and bold italic)', sans-serif;"
			),
			'lobster' => array(
			'name' => 'Lobster',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lobster);',
			'css' => "font-family: 'Lobster', sans-serif;"
			),
			'londrina outline' => array(
			'name' => 'Londrina Outline',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Londrina+Outline);',
			'css' => "font-family: 'Londrina Outline', sans-serif;"
			),
			'londrina shadow' => array(
			'name' => 'Londrina Shadow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Londrina+Shadow);',
			'css' => "font-family: 'Londrina Shadow', sans-serif;"
			),
			'londrina sketch' => array(
			'name' => 'Londrina Sketch',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Londrina+Sketch);',
			'css' => "font-family: 'Londrina Sketch', sans-serif;"
			),
			'londrina solid' => array(
			'name' => 'Londrina Solid',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Londrina+Solid);',
			'css' => "font-family: 'Londrina Solid', sans-serif;"
			),
			'lora' => array(
			'name' => 'Lora',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lora);',
			'css' => "font-family: 'Lora', sans-serif;"
			),
			'lora (plus bold and italic)' => array(
			'name' => 'Lora (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic);',
			'css' => "font-family: 'Lora (plus bold and italic)', sans-serif;"
			),
			'love ya like a sister' => array(
			'name' => 'Love Ya Like A Sister',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister);',
			'css' => "font-family: 'Love Ya Like A Sister', sans-serif;"
			),
			'loved by the king' => array(
			'name' => 'Loved by the King',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Loved+by+the+King);',
			'css' => "font-family: 'Loved by the King', sans-serif;"
			),
			'luckiest guy' => array(
			'name' => 'Luckiest Guy',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Luckiest+Guy);',
			'css' => "font-family: 'Luckiest Guy', sans-serif;"
			),
			'lusitana' => array(
			'name' => 'Lusitana',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lusitana);',
			'css' => "font-family: 'Lusitana', sans-serif;"
			),
			'lusitana (plus bold)' => array(
			'name' => 'Lusitana (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lusitana:400,bold);',
			'css' => "font-family: 'Lusitana (plus bold)', sans-serif;"
			),
			'lustria' => array(
			'name' => 'Lustria',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Lustria);',
			'css' => "font-family: 'Lustria', sans-serif;"
			),
			'macondo swash caps' => array(
			'name' => 'Macondo Swash Caps',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Macondo+Swash+Caps);',
			'css' => "font-family: 'Macondo Swash Caps', sans-serif;"
			),
			'macondo' => array(
			'name' => 'Macondo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Macondo);',
			'css' => "font-family: 'Macondo', sans-serif;"
			),
			'magra' => array(
			'name' => 'Magra',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Magra);',
			'css' => "font-family: 'Magra', sans-serif;"
			),
			'magra (plus bold)' => array(
			'name' => 'Magra (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Magra:400,bold);',
			'css' => "font-family: 'Magra (plus bold)', sans-serif;"
			),
			'maiden orange' => array(
			'name' => 'Maiden Orange',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maiden+Orange);',
			'css' => "font-family: 'Maiden Orange', sans-serif;"
			),
			'mako' => array(
			'name' => 'Mako',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mako);',
			'css' => "font-family: 'Mako', sans-serif;"
			),
			'marck script' => array(
			'name' => 'Marck Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Marck+Script);',
			'css' => "font-family: 'Marck Script', sans-serif;"
			),
			'marko one' => array(
			'name' => 'Marko One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Marko+One);',
			'css' => "font-family: 'Marko One', sans-serif;"
			),
			'marmelad' => array(
			'name' => 'Marmelad',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Marmelad);',
			'css' => "font-family: 'Marmelad', sans-serif;"
			),
			'marvel' => array(
			'name' => 'Marvel',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Marvel);',
			'css' => "font-family: 'Marvel', sans-serif;"
			),
			'marvel (plus bold and italic)' => array(
			'name' => 'Marvel (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Marvel:400,400italic,700,700italic);',
			'css' => "font-family: 'Marvel (plus bold and italic)', sans-serif;"
			),
			'mate sc' => array(
			'name' => 'Mate SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mate+SC);',
			'css' => "font-family: 'Mate SC', sans-serif;"
			),
			'mate' => array(
			'name' => 'Mate',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mate);',
			'css' => "font-family: 'Mate', sans-serif;"
			),
			'mate:400,400italic' => array(
			'name' => 'Mate:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mate:400,400italic);',
			'css' => "font-family: 'Mate:400,400italic', sans-serif;"
			),
			'maven pro' => array(
			'name' => 'Maven Pro',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maven+Pro);',
			'css' => "font-family: 'Maven Pro', sans-serif;"
			),
			'maven pro 500' => array(
			'name' => 'Maven Pro 500',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maven+Pro:500);',
			'css' => "font-family: 'Maven Pro 500', sans-serif;"
			),
			'maven pro 900' => array(
			'name' => 'Maven Pro 900',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maven+Pro:900);',
			'css' => "font-family: 'Maven Pro 900', sans-serif;"
			),
			'maven pro 700' => array(
			'name' => 'Maven Pro 700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Maven+Pro:bold);',
			'css' => "font-family: 'Maven Pro 700', sans-serif;"
			),
			'meddon' => array(
			'name' => 'Meddon',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Meddon);',
			'css' => "font-family: 'Meddon', sans-serif;"
			),
			'medievalsharp' => array(
			'name' => 'MedievalSharp',
			'import' => '@import url(http://fonts.googleapis.com/css?family=MedievalSharp);',
			'css' => "font-family: 'MedievalSharp', sans-serif;"
			),
			'medula one' => array(
			'name' => 'Medula One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Medula+One);',
			'css' => "font-family: 'Medula One', sans-serif;"
			),
			'megrim' => array(
			'name' => 'Megrim',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Megrim);',
			'css' => "font-family: 'Megrim', sans-serif;"
			),
			'merienda one' => array(
			'name' => 'Merienda One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Merienda+One);',
			'css' => "font-family: 'Merienda One', sans-serif;"
			),
			'merriweather' => array(
			'name' => 'Merriweather',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Merriweather);',
			'css' => "font-family: 'Merriweather', sans-serif;"
			),
			'metamorphous' => array(
			'name' => 'Metamorphous',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Metamorphous);',
			'css' => "font-family: 'Metamorphous', sans-serif;"
			),
			'metrophobic' => array(
			'name' => 'Metrophobic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Metrophobic);',
			'css' => "font-family: 'Metrophobic', sans-serif;"
			),
			'michroma' => array(
			'name' => 'Michroma',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Michroma);',
			'css' => "font-family: 'Michroma', sans-serif;"
			),
			'miltonian tattoo' => array(
			'name' => 'Miltonian Tattoo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Miltonian+Tattoo);',
			'css' => "font-family: 'Miltonian Tattoo', sans-serif;"
			),
			'miltonian' => array(
			'name' => 'Miltonian',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Miltonian);',
			'css' => "font-family: 'Miltonian', sans-serif;"
			),
			'miniver' => array(
			'name' => 'Miniver',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Miniver);',
			'css' => "font-family: 'Miniver', sans-serif;"
			),
			'miss fajardose' => array(
			'name' => 'Miss Fajardose',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Miss+Fajardose);',
			'css' => "font-family: 'Miss Fajardose', sans-serif;"
			),
			'miss saint delafield' => array(
			'name' => 'Miss Saint Delafield',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Miss+Saint+Delafield);',
			'css' => "font-family: 'Miss Saint Delafield', sans-serif;"
			),
			'modern antiqua' => array(
			'name' => 'Modern Antiqua',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Modern+Antiqua);',
			'css' => "font-family: 'Modern Antiqua', sans-serif;"
			),
			'molengo' => array(
			'name' => 'Molengo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Molengo);',
			'css' => "font-family: 'Molengo', sans-serif;"
			),
			'monofett' => array(
			'name' => 'Monofett',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Monofett);',
			'css' => "font-family: 'Monofett', sans-serif;"
			),
			'monoton' => array(
			'name' => 'Monoton',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Monoton);',
			'css' => "font-family: 'Monoton', sans-serif;"
			),
			'monsieur la doulaise' => array(
			'name' => 'Monsieur La Doulaise',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise);',
			'css' => "font-family: 'Monsieur La Doulaise', sans-serif;"
			),
			'montaga' => array(
			'name' => 'Montaga',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Montaga);',
			'css' => "font-family: 'Montaga', sans-serif;"
			),
			'montez' => array(
			'name' => 'Montez',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Montez);',
			'css' => "font-family: 'Montez', sans-serif;"
			),
			'montserrat' => array(
			'name' => 'Montserrat',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Montserrat);',
			'css' => "font-family: 'Montserrat', sans-serif;"
			),
			'mountains of christmas' => array(
			'name' => 'Mountains of Christmas',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mountains+of+Christmas);',
			'css' => "font-family: 'Mountains of Christmas', sans-serif;"
			),
			'mr bedford' => array(
			'name' => 'Mr Bedford',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mr+Bedford);',
			'css' => "font-family: 'Mr Bedford', sans-serif;"
			),
			'mr dafoe' => array(
			'name' => 'Mr Dafoe',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mr+Dafoe);',
			'css' => "font-family: 'Mr Dafoe', sans-serif;"
			),
			'mr de haviland' => array(
			'name' => 'Mr De Haviland',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mr+De+Haviland);',
			'css' => "font-family: 'Mr De Haviland', sans-serif;"
			),
			'mrs saint delafield' => array(
			'name' => 'Mrs Saint Delafield',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield);',
			'css' => "font-family: 'Mrs Saint Delafield', sans-serif;"
			),
			'mrs sheppards' => array(
			'name' => 'Mrs Sheppards',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mrs+Sheppards);',
			'css' => "font-family: 'Mrs Sheppards', sans-serif;"
			),
			'muli regular' => array(
			'name' => 'Muli Regular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Muli);',
			'css' => "font-family: 'Muli Regular', sans-serif;"
			),
			'muli light' => array(
			'name' => 'Muli Light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Muli:light);',
			'css' => "font-family: 'Muli Light', sans-serif;"
			),
			'muli light (plus italic)' => array(
			'name' => 'Muli Light (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Muli:light,lightitalic);',
			'css' => "font-family: 'Muli Light (plus italic)', sans-serif;"
			),
			'muli regular (plus italic)' => array(
			'name' => 'Muli Regular (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Muli:regular,regularitalic);',
			'css' => "font-family: 'Muli Regular (plus italic)', sans-serif;"
			),
			'mystery quest' => array(
			'name' => 'Mystery Quest',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Mystery+Quest);',
			'css' => "font-family: 'Mystery Quest', sans-serif;"
			),
			'neucha' => array(
			'name' => 'Neucha',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Neucha);',
			'css' => "font-family: 'Neucha', sans-serif;"
			),
			'neuton' => array(
			'name' => 'Neuton',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Neuton);',
			'css' => "font-family: 'Neuton', sans-serif;"
			),
			'news cycle' => array(
			'name' => 'News Cycle',
			'import' => '@import url(http://fonts.googleapis.com/css?family=News+Cycle);',
			'css' => "font-family: 'News Cycle', sans-serif;"
			),
			'niconne' => array(
			'name' => 'Niconne',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Niconne);',
			'css' => "font-family: 'Niconne', sans-serif;"
			),
			'nixie one' => array(
			'name' => 'Nixie One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nixie+One);',
			'css' => "font-family: 'Nixie One', sans-serif;"
			),
			'nobile' => array(
			'name' => 'Nobile',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nobile);',
			'css' => "font-family: 'Nobile', sans-serif;"
			),
			'nobile (plus italic, bold, and bold italic)' => array(
			'name' => 'Nobile (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nobile:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Nobile (plus italic, bold, and bold italic)', sans-serif;"
			),
			'nokora' => array(
			'name' => 'Nokora',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nokora);',
			'css' => "font-family: 'Nokora', sans-serif;"
			),
			'nokora:400,700' => array(
			'name' => 'Nokora:400,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nokora:400,700);',
			'css' => "font-family: 'Nokora:400,700', sans-serif;"
			),
			'norican' => array(
			'name' => 'Norican',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Norican);',
			'css' => "font-family: 'Norican', sans-serif;"
			),
			'nosifer' => array(
			'name' => 'Nosifer',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nosifer);',
			'css' => "font-family: 'Nosifer', sans-serif;"
			),
			'noticia text' => array(
			'name' => 'Noticia Text',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Noticia+Text);',
			'css' => "font-family: 'Noticia Text', sans-serif;"
			),
			'noticia text:400,400italic,700,700italic' => array(
			'name' => 'Noticia Text:400,400italic,700,700italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic);',
			'css' => "font-family: 'Noticia Text:400,400italic,700,700italic', sans-serif;"
			),
			'nova cut' => array(
			'name' => 'Nova Cut',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Cut);',
			'css' => "font-family: 'Nova Cut', sans-serif;"
			),
			'nova flat' => array(
			'name' => 'Nova Flat',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Flat);',
			'css' => "font-family: 'Nova Flat', sans-serif;"
			),
			'nova mono' => array(
			'name' => 'Nova Mono',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Mono);',
			'css' => "font-family: 'Nova Mono', sans-serif;"
			),
			'nova oval' => array(
			'name' => 'Nova Oval',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Oval);',
			'css' => "font-family: 'Nova Oval', sans-serif;"
			),
			'nova round' => array(
			'name' => 'Nova Round',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Round);',
			'css' => "font-family: 'Nova Round', sans-serif;"
			),
			'nova script' => array(
			'name' => 'Nova Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Script);',
			'css' => "font-family: 'Nova Script', sans-serif;"
			),
			'nova slim' => array(
			'name' => 'Nova Slim',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Slim);',
			'css' => "font-family: 'Nova Slim', sans-serif;"
			),
			'nova square' => array(
			'name' => 'Nova Square',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nova+Square);',
			'css' => "font-family: 'Nova Square', sans-serif;"
			),
			'numans' => array(
			'name' => 'Numans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Numans);',
			'css' => "font-family: 'Numans', sans-serif;"
			),
			'nunito regular' => array(
			'name' => 'Nunito Regular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nunito);',
			'css' => "font-family: 'Nunito Regular', sans-serif;"
			),
			'nunito light' => array(
			'name' => 'Nunito Light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Nunito:light);',
			'css' => "font-family: 'Nunito Light', sans-serif;"
			),
			'ofl sorts mill goudy tt' => array(
			'name' => 'OFL Sorts Mill Goudy TT',
			'import' => '@import url(http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT);',
			'css' => "font-family: 'OFL Sorts Mill Goudy TT', sans-serif;"
			),
			'ofl sorts mill goudy tt (plus italic)' => array(
			'name' => 'OFL Sorts Mill Goudy TT (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT:regular,italic);',
			'css' => "font-family: 'OFL Sorts Mill Goudy TT (plus italic)', sans-serif;"
			),
			'old standard tt' => array(
			'name' => 'Old Standard TT',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Old+Standard+TT);',
			'css' => "font-family: 'Old Standard TT', sans-serif;"
			),
			'old standard tt (plus italic and bold)' => array(
			'name' => 'Old Standard TT (plus italic and bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Old+Standard+TT:regular,italic,bold);',
			'css' => "font-family: 'Old Standard TT (plus italic and bold)', sans-serif;"
			),
			'oldenburg' => array(
			'name' => 'Oldenburg',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Oldenburg);',
			'css' => "font-family: 'Oldenburg', sans-serif;"
			),
			'open sans condensed' => array(
			'name' => 'Open Sans Condensed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed);',
			'css' => "font-family: 'Open Sans Condensed', sans-serif;"
			),
			'open sans condensed (plus all weights and italics)' => array(
			'name' => 'Open Sans Condensed (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700);',
			'css' => "font-family: 'Open Sans Condensed (plus all weights and italics)', sans-serif;"
			),
			'open sans condensed light (plus italic)' => array(
			'name' => 'Open Sans Condensed Light (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans+Condensed:light,lightitalic);',
			'css' => "font-family: 'Open Sans Condensed Light (plus italic)', sans-serif;"
			),
			'open sans 600' => array(
			'name' => 'Open Sans 600',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:600,600italic);',
			'css' => "font-family: 'Open Sans 600', sans-serif;"
			),
			'open sans 800' => array(
			'name' => 'Open Sans 800',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:800,800italic);',
			'css' => "font-family: 'Open Sans 800', sans-serif;"
			),
			'open sans bold' => array(
			'name' => 'Open Sans bold',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:bold,bolditalic);',
			'css' => "font-family: 'Open Sans bold', sans-serif;"
			),
			'open sans light' => array(
			'name' => 'Open Sans light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:light,lightitalic);',
			'css' => "font-family: 'Open Sans light', sans-serif;"
			),
			'open sans (all weights)' => array(
			'name' => 'Open Sans (all weights)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:light,lightitalic,regular,regularitalic,600,600italic,bold,bolditalic,800,800italic);',
			'css' => "font-family: 'Open Sans (all weights)', sans-serif;"
			),
			'open sans regular' => array(
			'name' => 'Open Sans regular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Open+Sans:regular,regularitalic);',
			'css' => "font-family: 'Open Sans regular', sans-serif;"
			),
			'orbitron regular (400)' => array(
			'name' => 'Orbitron Regular (400)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Orbitron);',
			'css' => "font-family: 'Orbitron Regular (400)', sans-serif;"
			),
			'orbitron 500' => array(
			'name' => 'Orbitron 500',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Orbitron:500);',
			'css' => "font-family: 'Orbitron 500', sans-serif;"
			),
			'orbitron 900' => array(
			'name' => 'Orbitron 900',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Orbitron:900);',
			'css' => "font-family: 'Orbitron 900', sans-serif;"
			),
			'orbitron regular (700)' => array(
			'name' => 'Orbitron Regular (700)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Orbitron:bold);',
			'css' => "font-family: 'Orbitron Regular (700)', sans-serif;"
			),
			'original surfer' => array(
			'name' => 'Original Surfer',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Original+Surfer);',
			'css' => "font-family: 'Original Surfer', sans-serif;"
			),
			'oswald' => array(
			'name' => 'Oswald',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Oswald);',
			'css' => "font-family: 'Oswald', sans-serif;"
			),
			'over the rainbow' => array(
			'name' => 'Over the Rainbow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Over+the+Rainbow);',
			'css' => "font-family: 'Over the Rainbow', sans-serif;"
			),
			'overlock sc' => array(
			'name' => 'Overlock SC',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Overlock+SC);',
			'css' => "font-family: 'Overlock SC', sans-serif;"
			),
			'overlock' => array(
			'name' => 'Overlock',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Overlock);',
			'css' => "font-family: 'Overlock', sans-serif;"
			),
			'overlock:400,400italic,700,700italic,900,900italic' => array(
			'name' => 'Overlock:400,400italic,700,700italic,900,900italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Overlock:400,400italic,700,700italic,900,900italic);',
			'css' => "font-family: 'Overlock:400,400italic,700,700italic,900,900italic', sans-serif;"
			),
			'ovo' => array(
			'name' => 'Ovo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ovo);',
			'css' => "font-family: 'Ovo', sans-serif;"
			),
			'pt mono' => array(
			'name' => 'PT Mono',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Mono);',
			'css' => "font-family: 'PT Mono', sans-serif;"
			),
			'pt sans caption' => array(
			'name' => 'PT Sans Caption',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Caption);',
			'css' => "font-family: 'PT Sans Caption', sans-serif;"
			),
			'pt sans caption (plus bold)' => array(
			'name' => 'PT Sans Caption (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Caption:regular,bold);',
			'css' => "font-family: 'PT Sans Caption (plus bold)', sans-serif;"
			),
			'pt sans narrow' => array(
			'name' => 'PT Sans Narrow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Narrow);',
			'css' => "font-family: 'PT Sans Narrow', sans-serif;"
			),
			'pt sans narrow (plus bold)' => array(
			'name' => 'PT Sans Narrow (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans+Narrow:regular,bold);',
			'css' => "font-family: 'PT Sans Narrow (plus bold)', sans-serif;"
			),
			'pt sans' => array(
			'name' => 'PT Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans);',
			'css' => "font-family: 'PT Sans', sans-serif;"
			),
			'pt sans (plus itlic, bold, and bold italic)' => array(
			'name' => 'PT Sans (plus itlic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Sans:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'PT Sans (plus itlic, bold, and bold italic)', sans-serif;"
			),
			'pt serif caption' => array(
			'name' => 'PT Serif Caption',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Serif+Caption);',
			'css' => "font-family: 'PT Serif Caption', sans-serif;"
			),
			'pt serif caption (plus italic)' => array(
			'name' => 'PT Serif Caption (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Serif+Caption:regular,italic);',
			'css' => "font-family: 'PT Serif Caption (plus italic)', sans-serif;"
			),
			'pt serif' => array(
			'name' => 'PT Serif',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Serif);',
			'css' => "font-family: 'PT Serif', sans-serif;"
			),
			'pt serif (plus italic, bold, and bold italic)' => array(
			'name' => 'PT Serif (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=PT+Serif:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'PT Serif (plus italic, bold, and bold italic)', sans-serif;"
			),
			'pacifico' => array(
			'name' => 'Pacifico',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Pacifico);',
			'css' => "font-family: 'Pacifico', sans-serif;"
			),
			'parisienne' => array(
			'name' => 'Parisienne',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Parisienne);',
			'css' => "font-family: 'Parisienne', sans-serif;"
			),
			'passero one' => array(
			'name' => 'Passero One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Passero+One);',
			'css' => "font-family: 'Passero One', sans-serif;"
			),
			'passion one' => array(
			'name' => 'Passion One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Passion+One);',
			'css' => "font-family: 'Passion One', sans-serif;"
			),
			'passion one:400,700,900' => array(
			'name' => 'Passion One:400,700,900',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Passion+One:400,700,900);',
			'css' => "font-family: 'Passion One:400,700,900', sans-serif;"
			),
			'patrick hand' => array(
			'name' => 'Patrick Hand',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Patrick+Hand);',
			'css' => "font-family: 'Patrick Hand', sans-serif;"
			),
			'patua one' => array(
			'name' => 'Patua One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Patua+One);',
			'css' => "font-family: 'Patua One', sans-serif;"
			),
			'paytone one' => array(
			'name' => 'Paytone One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Paytone+One);',
			'css' => "font-family: 'Paytone One', sans-serif;"
			),
			'permanent marker' => array(
			'name' => 'Permanent Marker',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Permanent+Marker);',
			'css' => "font-family: 'Permanent Marker', sans-serif;"
			),
			'petrona' => array(
			'name' => 'Petrona',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Petrona);',
			'css' => "font-family: 'Petrona', sans-serif;"
			),
			'philosopher' => array(
			'name' => 'Philosopher',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Philosopher);',
			'css' => "font-family: 'Philosopher', sans-serif;"
			),
			'piedra' => array(
			'name' => 'Piedra',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Piedra);',
			'css' => "font-family: 'Piedra', sans-serif;"
			),
			'pinyon script' => array(
			'name' => 'Pinyon Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Pinyon+Script);',
			'css' => "font-family: 'Pinyon Script', sans-serif;"
			),
			'plaster' => array(
			'name' => 'Plaster',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Plaster);',
			'css' => "font-family: 'Plaster', sans-serif;"
			),
			'play' => array(
			'name' => 'Play',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Play);',
			'css' => "font-family: 'Play', sans-serif;"
			),
			'play (plus bold)' => array(
			'name' => 'Play (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Play:regular,bold);',
			'css' => "font-family: 'Play (plus bold)', sans-serif;"
			),
			'playball' => array(
			'name' => 'Playball',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Playball);',
			'css' => "font-family: 'Playball', sans-serif;"
			),
			'playfair display' => array(
			'name' => 'Playfair Display',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Playfair+Display);',
			'css' => "font-family: 'Playfair Display', sans-serif;"
			),
			'podkova' => array(
			'name' => 'Podkova',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Podkova);',
			'css' => "font-family: 'Podkova', sans-serif;"
			),
			'poiret one' => array(
			'name' => 'Poiret One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Poiret+One);',
			'css' => "font-family: 'Poiret One', sans-serif;"
			),
			'poller one' => array(
			'name' => 'Poller One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Poller+One);',
			'css' => "font-family: 'Poller One', sans-serif;"
			),
			'poly' => array(
			'name' => 'Poly',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Poly);',
			'css' => "font-family: 'Poly', sans-serif;"
			),
			'poly:400,400italic' => array(
			'name' => 'Poly:400,400italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Poly:400,400italic);',
			'css' => "font-family: 'Poly:400,400italic', sans-serif;"
			),
			'pompiere' => array(
			'name' => 'Pompiere',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Pompiere);',
			'css' => "font-family: 'Pompiere', sans-serif;"
			),
			'pontano sans' => array(
			'name' => 'Pontano Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Pontano+Sans);',
			'css' => "font-family: 'Pontano Sans', sans-serif;"
			),
			'port lligat sans' => array(
			'name' => 'Port Lligat Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Port+Lligat+Sans);',
			'css' => "font-family: 'Port Lligat Sans', sans-serif;"
			),
			'port lligat slab' => array(
			'name' => 'Port Lligat Slab',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Port+Lligat+Slab);',
			'css' => "font-family: 'Port Lligat Slab', sans-serif;"
			),
			'prata' => array(
			'name' => 'Prata',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Prata);',
			'css' => "font-family: 'Prata', sans-serif;"
			),
			'princess sofia' => array(
			'name' => 'Princess Sofia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Princess+Sofia);',
			'css' => "font-family: 'Princess Sofia', sans-serif;"
			),
			'prociono' => array(
			'name' => 'Prociono',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Prociono);',
			'css' => "font-family: 'Prociono', sans-serif;"
			),
			'prosto one' => array(
			'name' => 'Prosto One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Prosto+One);',
			'css' => "font-family: 'Prosto One', sans-serif;"
			),
			'puritan' => array(
			'name' => 'Puritan',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Puritan);',
			'css' => "font-family: 'Puritan', sans-serif;"
			),
			'puritan (plus italic, bold, and bold italic)' => array(
			'name' => 'Puritan (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Puritan:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Puritan (plus italic, bold, and bold italic)', sans-serif;"
			),
			'quantico' => array(
			'name' => 'Quantico',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quantico);',
			'css' => "font-family: 'Quantico', sans-serif;"
			),
			'quantico:400,400italic,700,700italic' => array(
			'name' => 'Quantico:400,400italic,700,700italic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quantico:400,400italic,700,700italic);',
			'css' => "font-family: 'Quantico:400,400italic,700,700italic', sans-serif;"
			),
			'quattrocento sans' => array(
			'name' => 'Quattrocento Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quattrocento+Sans);',
			'css' => "font-family: 'Quattrocento Sans', sans-serif;"
			),
			'quattrocento' => array(
			'name' => 'Quattrocento',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quattrocento);',
			'css' => "font-family: 'Quattrocento', sans-serif;"
			),
			'questrial' => array(
			'name' => 'Questrial',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Questrial);',
			'css' => "font-family: 'Questrial', sans-serif;"
			),
			'quicksand' => array(
			'name' => 'Quicksand',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quicksand);',
			'css' => "font-family: 'Quicksand', sans-serif;"
			),
			'quicksand:300,400,700' => array(
			'name' => 'Quicksand:300,400,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Quicksand:300,400,700);',
			'css' => "font-family: 'Quicksand:300,400,700', sans-serif;"
			),
			'qwigley' => array(
			'name' => 'Qwigley',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Qwigley);',
			'css' => "font-family: 'Qwigley', sans-serif;"
			),
			'radley' => array(
			'name' => 'Radley',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Radley);',
			'css' => "font-family: 'Radley', sans-serif;"
			),
			'raleway' => array(
			'name' => 'Raleway',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Raleway:100);',
			'css' => "font-family: 'Raleway', sans-serif;"
			),
			'rammetto one' => array(
			'name' => 'Rammetto One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rammetto+One);',
			'css' => "font-family: 'Rammetto One', sans-serif;"
			),
			'rancho' => array(
			'name' => 'Rancho',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rancho);',
			'css' => "font-family: 'Rancho', sans-serif;"
			),
			'rationale' => array(
			'name' => 'Rationale',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rationale);',
			'css' => "font-family: 'Rationale', sans-serif;"
			),
			'redressed' => array(
			'name' => 'Redressed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Redressed);',
			'css' => "font-family: 'Redressed', sans-serif;"
			),
			'reenie beanie' => array(
			'name' => 'Reenie Beanie',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Reenie+Beanie);',
			'css' => "font-family: 'Reenie Beanie', sans-serif;"
			),
			'revalia' => array(
			'name' => 'Revalia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Revalia);',
			'css' => "font-family: 'Revalia', sans-serif;"
			),
			'ribeye marrow' => array(
			'name' => 'Ribeye Marrow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ribeye+Marrow);',
			'css' => "font-family: 'Ribeye Marrow', sans-serif;"
			),
			'ribeye' => array(
			'name' => 'Ribeye',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ribeye);',
			'css' => "font-family: 'Ribeye', sans-serif;"
			),
			'righteous' => array(
			'name' => 'Righteous',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Righteous);',
			'css' => "font-family: 'Righteous', sans-serif;"
			),
			'rochester' => array(
			'name' => 'Rochester',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rochester);',
			'css' => "font-family: 'Rochester', sans-serif;"
			),
			'rock salt' => array(
			'name' => 'Rock Salt',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rock+Salt);',
			'css' => "font-family: 'Rock Salt', sans-serif;"
			),
			'rokkitt' => array(
			'name' => 'Rokkitt',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rokkitt);',
			'css' => "font-family: 'Rokkitt', sans-serif;"
			),
			'ropa sans' => array(
			'name' => 'Ropa Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ropa+Sans);',
			'css' => "font-family: 'Ropa Sans', sans-serif;"
			),
			'ropa sans (plus italics)' => array(
			'name' => 'Ropa Sans (plus italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic);',
			'css' => "font-family: 'Ropa Sans (plus italics)', sans-serif;"
			),
			'rosario' => array(
			'name' => 'Rosario',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rosario);',
			'css' => "font-family: 'Rosario', sans-serif;"
			),
			'rouge script' => array(
			'name' => 'Rouge Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Rouge+Script);',
			'css' => "font-family: 'Rouge Script', sans-serif;"
			),
			'ruda' => array(
			'name' => 'Ruda',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruda);',
			'css' => "font-family: 'Ruda', sans-serif;"
			),
			'ruda (plus all bold and 900)' => array(
			'name' => 'Ruda (plus all bold and 900)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruda:400,bold,900);',
			'css' => "font-family: 'Ruda (plus all bold and 900)', sans-serif;"
			),
			'ruge boogie' => array(
			'name' => 'Ruge Boogie',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruge+Boogie);',
			'css' => "font-family: 'Ruge Boogie', sans-serif;"
			),
			'ruluko' => array(
			'name' => 'Ruluko',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruluko);',
			'css' => "font-family: 'Ruluko', sans-serif;"
			),
			'ruslan display' => array(
			'name' => 'Ruslan Display',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruslan+Display);',
			'css' => "font-family: 'Ruslan Display', sans-serif;"
			),
			'ruthie' => array(
			'name' => 'Ruthie',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ruthie);',
			'css' => "font-family: 'Ruthie', sans-serif;"
			),
			'sail' => array(
			'name' => 'Sail',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sail);',
			'css' => "font-family: 'Sail', sans-serif;"
			),
			'salsa' => array(
			'name' => 'Salsa',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Salsa);',
			'css' => "font-family: 'Salsa', sans-serif;"
			),
			'sancreek' => array(
			'name' => 'Sancreek',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sancreek);',
			'css' => "font-family: 'Sancreek', sans-serif;"
			),
			'sansita one' => array(
			'name' => 'Sansita One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sansita+One);',
			'css' => "font-family: 'Sansita One', sans-serif;"
			),
			'sarina' => array(
			'name' => 'Sarina',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sarina);',
			'css' => "font-family: 'Sarina', sans-serif;"
			),
			'satisfy' => array(
			'name' => 'Satisfy',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Satisfy);',
			'css' => "font-family: 'Satisfy', sans-serif;"
			),
			'schoolbell' => array(
			'name' => 'Schoolbell',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Schoolbell);',
			'css' => "font-family: 'Schoolbell', sans-serif;"
			),
			'seaweed script' => array(
			'name' => 'Seaweed Script',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Seaweed+Script);',
			'css' => "font-family: 'Seaweed Script', sans-serif;"
			),
			'sevillana' => array(
			'name' => 'Sevillana',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sevillana);',
			'css' => "font-family: 'Sevillana', sans-serif;"
			),
			'shadows into light two' => array(
			'name' => 'Shadows Into Light Two',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two);',
			'css' => "font-family: 'Shadows Into Light Two', sans-serif;"
			),
			'shadows into light' => array(
			'name' => 'Shadows Into Light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Shadows+Into+Light);',
			'css' => "font-family: 'Shadows Into Light', sans-serif;"
			),
			'shanti' => array(
			'name' => 'Shanti',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Shanti);',
			'css' => "font-family: 'Shanti', sans-serif;"
			),
			'share' => array(
			'name' => 'Share',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Share);',
			'css' => "font-family: 'Share', sans-serif;"
			),
			'share (plus all weights and italics)' => array(
			'name' => 'Share (plus all weights and italics)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Share:400,400italic,700,700italic);',
			'css' => "font-family: 'Share (plus all weights and italics)', sans-serif;"
			),
			'shojumaru' => array(
			'name' => 'Shojumaru',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Shojumaru);',
			'css' => "font-family: 'Shojumaru', sans-serif;"
			),
			'short stack' => array(
			'name' => 'Short Stack',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Short+Stack);',
			'css' => "font-family: 'Short Stack', sans-serif;"
			),
			'sigmar one' => array(
			'name' => 'Sigmar One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sigmar+One);',
			'css' => "font-family: 'Sigmar One', sans-serif;"
			),
			'signika negative' => array(
			'name' => 'Signika Negative',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Signika+Negative);',
			'css' => "font-family: 'Signika Negative', sans-serif;"
			),
			'signika negative:300,400,600,700' => array(
			'name' => 'Signika Negative:300,400,600,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700);',
			'css' => "font-family: 'Signika Negative:300,400,600,700', sans-serif;"
			),
			'signika' => array(
			'name' => 'Signika',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Signika);',
			'css' => "font-family: 'Signika', sans-serif;"
			),
			'signika:300,400,600,700' => array(
			'name' => 'Signika:300,400,600,700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Signika:300,400,600,700);',
			'css' => "font-family: 'Signika:300,400,600,700', sans-serif;"
			),
			'simonetta' => array(
			'name' => 'Simonetta',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Simonetta);',
			'css' => "font-family: 'Simonetta', sans-serif;"
			),
			'simonetta (plus italic)' => array(
			'name' => 'Simonetta (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Simonetta:400,400italic);',
			'css' => "font-family: 'Simonetta (plus italic)', sans-serif;"
			),
			'sirin stencil' => array(
			'name' => 'Sirin Stencil',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sirin+Stencil);',
			'css' => "font-family: 'Sirin Stencil', sans-serif;"
			),
			'six caps' => array(
			'name' => 'Six Caps',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Six+Caps);',
			'css' => "font-family: 'Six Caps', sans-serif;"
			),
			'slackey' => array(
			'name' => 'Slackey',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Slackey);',
			'css' => "font-family: 'Slackey', sans-serif;"
			),
			'smokum' => array(
			'name' => 'Smokum',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Smokum);',
			'css' => "font-family: 'Smokum', sans-serif;"
			),
			'smythe' => array(
			'name' => 'Smythe',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Smythe);',
			'css' => "font-family: 'Smythe', sans-serif;"
			),
			'sniglet' => array(
			'name' => 'Sniglet',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sniglet:800);',
			'css' => "font-family: 'Sniglet', sans-serif;"
			),
			'snippet' => array(
			'name' => 'Snippet',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Snippet);',
			'css' => "font-family: 'Snippet', sans-serif;"
			),
			'sofia' => array(
			'name' => 'Sofia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sofia);',
			'css' => "font-family: 'Sofia', sans-serif;"
			),
			'sonsie one' => array(
			'name' => 'Sonsie One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sonsie+One);',
			'css' => "font-family: 'Sonsie One', sans-serif;"
			),
			'sorts mill goudy' => array(
			'name' => 'Sorts Mill Goudy',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy);',
			'css' => "font-family: 'Sorts Mill Goudy', sans-serif;"
			),
			'sorts mill goudy (plus italic)' => array(
			'name' => 'Sorts Mill Goudy (plus italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sorts+Mill+Goudy:400,400italic);',
			'css' => "font-family: 'Sorts Mill Goudy (plus italic)', sans-serif;"
			),
			'special elite' => array(
			'name' => 'Special Elite',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Special+Elite);',
			'css' => "font-family: 'Special Elite', sans-serif;"
			),
			'spicy rice' => array(
			'name' => 'Spicy Rice',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Spicy+Rice);',
			'css' => "font-family: 'Spicy Rice', sans-serif;"
			),
			'spinnaker' => array(
			'name' => 'Spinnaker',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Spinnaker);',
			'css' => "font-family: 'Spinnaker', sans-serif;"
			),
			'spirax' => array(
			'name' => 'Spirax',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Spirax);',
			'css' => "font-family: 'Spirax', sans-serif;"
			),
			'squada one' => array(
			'name' => 'Squada One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Squada+One);',
			'css' => "font-family: 'Squada One', sans-serif;"
			),
			'stardos stencil' => array(
			'name' => 'Stardos Stencil',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Stardos+Stencil);',
			'css' => "font-family: 'Stardos Stencil', sans-serif;"
			),
			'stardos stencil (plus bold)' => array(
			'name' => 'Stardos Stencil (plus bold)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Stardos+Stencil:400,700);',
			'css' => "font-family: 'Stardos Stencil (plus bold)', sans-serif;"
			),
			'stint ultra condensed' => array(
			'name' => 'Stint Ultra Condensed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Stint+Ultra+Condensed);',
			'css' => "font-family: 'Stint Ultra Condensed', sans-serif;"
			),
			'stint ultra expanded' => array(
			'name' => 'Stint Ultra Expanded',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Stint+Ultra+Expanded);',
			'css' => "font-family: 'Stint Ultra Expanded', sans-serif;"
			),
			'stoke' => array(
			'name' => 'Stoke',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Stoke);',
			'css' => "font-family: 'Stoke', sans-serif;"
			),
			'sue ellen francisco' => array(
			'name' => 'Sue Ellen Francisco',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sue+Ellen+Francisco);',
			'css' => "font-family: 'Sue Ellen Francisco', sans-serif;"
			),
			'sunshiney' => array(
			'name' => 'Sunshiney',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Sunshiney);',
			'css' => "font-family: 'Sunshiney', sans-serif;"
			),
			'supermercado one' => array(
			'name' => 'Supermercado One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Supermercado+One);',
			'css' => "font-family: 'Supermercado One', sans-serif;"
			),
			'swanky and moo moo' => array(
			'name' => 'Swanky and Moo Moo',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Swanky+and+Moo+Moo);',
			'css' => "font-family: 'Swanky and Moo Moo', sans-serif;"
			),
			'syncopate' => array(
			'name' => 'Syncopate',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Syncopate);',
			'css' => "font-family: 'Syncopate', sans-serif;"
			),
			'tangerine' => array(
			'name' => 'Tangerine',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Tangerine);',
			'css' => "font-family: 'Tangerine', sans-serif;"
			),
			'telex' => array(
			'name' => 'Telex',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Telex);',
			'css' => "font-family: 'Telex', sans-serif;"
			),
			'tenor sans' => array(
			'name' => 'Tenor Sans',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Tenor+Sans);',
			'css' => "font-family: 'Tenor Sans', sans-serif;"
			),
			'terminal dosis light' => array(
			'name' => 'Terminal Dosis Light',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis+Light);',
			'css' => "font-family: 'Terminal Dosis Light', sans-serif;"
			),
			'terminal dosis regular' => array(
			'name' => 'Terminal Dosis Regular',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis);',
			'css' => "font-family: 'Terminal Dosis Regular', sans-serif;"
			),
			'terminal dosis 200' => array(
			'name' => 'Terminal Dosis 200',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:200);',
			'css' => "font-family: 'Terminal Dosis 200', sans-serif;"
			),
			'terminal dosis 300' => array(
			'name' => 'Terminal Dosis 300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:300);',
			'css' => "font-family: 'Terminal Dosis 300', sans-serif;"
			),
			'terminal dosis 500' => array(
			'name' => 'Terminal Dosis 500',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:500);',
			'css' => "font-family: 'Terminal Dosis 500', sans-serif;"
			),
			'terminal dosis 600' => array(
			'name' => 'Terminal Dosis 600',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:600);',
			'css' => "font-family: 'Terminal Dosis 600', sans-serif;"
			),
			'terminal dosis 700' => array(
			'name' => 'Terminal Dosis 700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:700);',
			'css' => "font-family: 'Terminal Dosis 700', sans-serif;"
			),
			'terminal dosis 800' => array(
			'name' => 'Terminal Dosis 800',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Terminal+Dosis:800);',
			'css' => "font-family: 'Terminal Dosis 800', sans-serif;"
			),
			'the girl next door' => array(
			'name' => 'The Girl Next Door',
			'import' => '@import url(http://fonts.googleapis.com/css?family=The+Girl+Next+Door);',
			'css' => "font-family: 'The Girl Next Door', sans-serif;"
			),
			'tinos' => array(
			'name' => 'Tinos',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Tinos);',
			'css' => "font-family: 'Tinos', sans-serif;"
			),
			'tinos (plus italic, bold, and bold italic)' => array(
			'name' => 'Tinos (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Tinos:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Tinos (plus italic, bold, and bold italic)', sans-serif;"
			),
			'titan one' => array(
			'name' => 'Titan One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Titan+One);',
			'css' => "font-family: 'Titan One', sans-serif;"
			),
			'trade winds' => array(
			'name' => 'Trade Winds',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Trade+Winds);',
			'css' => "font-family: 'Trade Winds', sans-serif;"
			),
			'trochut' => array(
			'name' => 'Trochut',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Trochut);',
			'css' => "font-family: 'Trochut', sans-serif;"
			),
			'trochut (plus bold and italic)' => array(
			'name' => 'Trochut (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Trochut:400,italic,bold);',
			'css' => "font-family: 'Trochut (plus bold and italic)', sans-serif;"
			),
			'trykker' => array(
			'name' => 'Trykker',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Trykker);',
			'css' => "font-family: 'Trykker', sans-serif;"
			),
			'tulpen one' => array(
			'name' => 'Tulpen One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Tulpen+One);',
			'css' => "font-family: 'Tulpen One', sans-serif;"
			),
			'ubuntu condensed' => array(
			'name' => 'Ubuntu Condensed',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu+Condensed);',
			'css' => "font-family: 'Ubuntu Condensed', sans-serif;"
			),
			'ubuntu mono' => array(
			'name' => 'Ubuntu Mono',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu+Mono);',
			'css' => "font-family: 'Ubuntu Mono', sans-serif;"
			),
			'ubuntu mono:regular,italic,bold,bolditalic' => array(
			'name' => 'Ubuntu Mono:regular,italic,bold,bolditalic',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu+Mono:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Ubuntu Mono:regular,italic,bold,bolditalic', sans-serif;"
			),
			'ubuntu' => array(
			'name' => 'Ubuntu',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu);',
			'css' => "font-family: 'Ubuntu', sans-serif;"
			),
			'ubuntu (plus italic, bold, and bold italic)' => array(
			'name' => 'Ubuntu (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Ubuntu (plus italic, bold, and bold italic)', sans-serif;"
			),
			'ultra' => array(
			'name' => 'Ultra',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Ultra);',
			'css' => "font-family: 'Ultra', sans-serif;"
			),
			'uncial antiqua' => array(
			'name' => 'Uncial Antiqua',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Uncial+Antiqua);',
			'css' => "font-family: 'Uncial Antiqua', sans-serif;"
			),
			'unifrakturcook' => array(
			'name' => 'UnifrakturCook',
			'import' => '@import url(http://fonts.googleapis.com/css?family=UnifrakturCook:bold);',
			'css' => "font-family: 'UnifrakturCook', sans-serif;"
			),
			'unifrakturmaguntia' => array(
			'name' => 'UnifrakturMaguntia',
			'import' => '@import url(http://fonts.googleapis.com/css?family=UnifrakturMaguntia);',
			'css' => "font-family: 'UnifrakturMaguntia', sans-serif;"
			),
			'unkempt' => array(
			'name' => 'Unkempt',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Unkempt);',
			'css' => "font-family: 'Unkempt', sans-serif;"
			),
			'unlock' => array(
			'name' => 'Unlock',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Unlock);',
			'css' => "font-family: 'Unlock', sans-serif;"
			),
			'unna' => array(
			'name' => 'Unna',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Unna);',
			'css' => "font-family: 'Unna', sans-serif;"
			),
			'vt323' => array(
			'name' => 'VT323',
			'import' => '@import url(http://fonts.googleapis.com/css?family=VT323);',
			'css' => "font-family: 'VT323', sans-serif;"
			),
			'varela round' => array(
			'name' => 'Varela Round',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Varela+Round);',
			'css' => "font-family: 'Varela Round', sans-serif;"
			),
			'varela' => array(
			'name' => 'Varela',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Varela);',
			'css' => "font-family: 'Varela', sans-serif;"
			),
			'vast shadow' => array(
			'name' => 'Vast Shadow',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vast+Shadow);',
			'css' => "font-family: 'Vast Shadow', sans-serif;"
			),
			'vibur' => array(
			'name' => 'Vibur',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vibur);',
			'css' => "font-family: 'Vibur', sans-serif;"
			),
			'vidaloka' => array(
			'name' => 'Vidaloka',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vidaloka);',
			'css' => "font-family: 'Vidaloka', sans-serif;"
			),
			'viga' => array(
			'name' => 'Viga',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Viga);',
			'css' => "font-family: 'Viga', sans-serif;"
			),
			'voces' => array(
			'name' => 'Voces',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Voces);',
			'css' => "font-family: 'Voces', sans-serif;"
			),
			'volkhov' => array(
			'name' => 'Volkhov',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Volkhov);',
			'css' => "font-family: 'Volkhov', sans-serif;"
			),
			'volkhov (plus bold and italic)' => array(
			'name' => 'Volkhov (plus bold and italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Volkhov:400,400italic,700,700italic);',
			'css' => "font-family: 'Volkhov (plus bold and italic)', sans-serif;"
			),
			'vollkorn' => array(
			'name' => 'Vollkorn',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vollkorn);',
			'css' => "font-family: 'Vollkorn', sans-serif;"
			),
			'vollkorn (plus italic, bold, and bold italic)' => array(
			'name' => 'Vollkorn (plus italic, bold, and bold italic)',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Vollkorn:regular,italic,bold,bolditalic);',
			'css' => "font-family: 'Vollkorn (plus italic, bold, and bold italic)', sans-serif;"
			),
			'voltaire' => array(
			'name' => 'Voltaire',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Voltaire);',
			'css' => "font-family: 'Voltaire', sans-serif;"
			),
			'waiting for the sunrise' => array(
			'name' => 'Waiting for the Sunrise',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Waiting+for+the+Sunrise);',
			'css' => "font-family: 'Waiting for the Sunrise', sans-serif;"
			),
			'wallpoet' => array(
			'name' => 'Wallpoet',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Wallpoet);',
			'css' => "font-family: 'Wallpoet', sans-serif;"
			),
			'walter turncoat' => array(
			'name' => 'Walter Turncoat',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Walter+Turncoat);',
			'css' => "font-family: 'Walter Turncoat', sans-serif;"
			),
			'wellfleet' => array(
			'name' => 'Wellfleet',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Wellfleet);',
			'css' => "font-family: 'Wellfleet', sans-serif;"
			),
			'wire one' => array(
			'name' => 'Wire One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Wire+One);',
			'css' => "font-family: 'Wire One', sans-serif;"
			),
			'yanone kaffeesatz' => array(
			'name' => 'Yanone Kaffeesatz',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz);',
			'css' => "font-family: 'Yanone Kaffeesatz', sans-serif;"
			),
			'yanone kaffeesatz:300' => array(
			'name' => 'Yanone Kaffeesatz:300',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:300);',
			'css' => "font-family: 'Yanone Kaffeesatz:300', sans-serif;"
			),
			'yanone kaffeesatz:400' => array(
			'name' => 'Yanone Kaffeesatz:400',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400);',
			'css' => "font-family: 'Yanone Kaffeesatz:400', sans-serif;"
			),
			'yanone kaffeesatz:700' => array(
			'name' => 'Yanone Kaffeesatz:700',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700);',
			'css' => "font-family: 'Yanone Kaffeesatz:700', sans-serif;"
			),
			'yellowtail' => array(
			'name' => 'Yellowtail',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yellowtail);',
			'css' => "font-family: 'Yellowtail', sans-serif;"
			),
			'yeseva one' => array(
			'name' => 'Yeseva One',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yeseva+One);',
			'css' => "font-family: 'Yeseva One', sans-serif;"
			),
			'yesteryear' => array(
			'name' => 'Yesteryear',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Yesteryear);',
			'css' => "font-family: 'Yesteryear', sans-serif;"
			),
			'zeyada' => array(
			'name' => 'Zeyada',
			'import' => '@import url(http://fonts.googleapis.com/css?family=Zeyada);',
			'css' => "font-family: 'Zeyada', sans-serif;"
			), 
		);
	
		return apply_filters('theme_available_fonts', $fonts);
	}
?>
<?php
	// adds page-x css class to menu items
	function my_special_nav_class($classes, $item) {
		//if (is_page()) {
			$classes[] = 'page-'.get_post_meta($item->ID, '_menu_item_object_id', true);
		//}
		
		return $classes;
	}
	add_filter( 'nav_menu_css_class', 'my_special_nav_class', 10, 2 );
?>