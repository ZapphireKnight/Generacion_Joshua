<?php       
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier chaAre you ready to tak
 nges, it'll appear as if the options have been reset.
 */ 

function optionsframework_option_name() {
	// Change this to use your theme slug
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );
	return $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'the-church'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
*/

function optionsframework_options() {
	//array of all custom font types.
	$font_types = array( '' => '',
    'ABeeZee' => 'ABeeZee',
    'Abel' => 'Abel',
    'Abril Fatface' => 'Abril Fatface',
    'Aclonica' => 'Aclonica',
    'Acme' => 'Acme',
    'Actor' => 'Actor',
    'Adamina' => 'Adamina',
    'Advent Pro' => 'Advent Pro',
    'Aguafina Script' => 'Aguafina Script',
    'Akronim' => 'Akronim',
    'Aladin' => 'Aladin',
    'Aldrich' => 'Aldrich',
    'Alegreya' => 'Alegreya',
    'Alegreya Sans SC' => 'Alegreya Sans SC',
    'Alegreya SC' => 'Alegreya SC',
    'Alex Brush' => 'Alex Brush',
    'Alef' => 'Alef',
    'Alfa Slab One' => 'Alfa Slab One',
    'Alice' => 'Alice',
    'Alike' => 'Alike',
    'Alike Angular' => 'Alike Angular',
    'Allan' => 'Allan',
    'Allerta' => 'Allerta',
    'Allerta Stencil' => 'Allerta Stencil',
    'Allura' => 'Allura',
    'Almendra' => 'Almendra',
    'Almendra Display' => 'Almendra Display',
    'Almendra SC' => 'Almendra SC',
    'Amiri' => 'Amiri',
    'Amarante' => 'Amarante',
    'Amaranth' => 'Amaranth',
    'Amatic SC' => 'Amatic SC',
    'Amethysta' => 'Amethysta',
    'Amita' => 'Amita',
    'Anaheim' => 'Anaheim',
    'Andada' => 'Andada',
    'Andika' => 'Andika',
    'Annie Use Your Telescope' => 'Annie Use Your Telescope',
    'Anonymous Pro' => 'Anonymous Pro',
    'Antic' => 'Antic',
    'Antic Didone' => 'Antic Didone',
    'Antic Slab' => 'Antic Slab',
    'Anton' => 'Anton',
    'Angkor' => 'Angkor',
    'Arapey' => 'Arapey',
    'Arbutus' => 'Arbutus',
    'Arbutus Slab' => 'Arbutus Slab',
    'Architects Daughter' => 'Architects Daughter',
    'Archivo White' => 'Archivo White',
    'Archivo Narrow' => 'Archivo Narrow',
    'Arial' => 'Arial',
    'Arimo' => 'Arimo',
    'Arya' => 'Arya',
    'Arizonia' => 'Arizonia',
    'Armata' => 'Armata',
    'Artifika' => 'Artifika',
    'Arvo' => 'Arvo',
    'Asar' => 'Asar',
    'Asap' => 'Asap',
    'Asset' => 'Asset',
	'Assistant' => 'Assistant',
    'Astloch' => 'Astloch',
    'Asul' => 'Asul',
    'Atomic Age' => 'Atomic Age',
    'Aubrey' => 'Aubrey',
    'Audiowide' => 'Audiowide',
    'Autour One' => 'Autour One',
    'Average' => 'Average',
    'Average Sans' => 'Average Sans',
    'Averia Gruesa Libre' => 'Averia Gruesa Libre',
    'Averia Libre' => 'Averia Libre',
    'Averia Sans Libre' => 'Averia Sans Libre',
    'Averia Serif Libre' => 'Averia Serif Libre',
    'Battambang' => 'Battambang',
    'Bad Script' => 'Bad Script',
    'Bayon' => 'Bayon',
    'Balthazar' => 'Balthazar',
    'Bangers' => 'Bangers',
    'Basic' => 'Basic',
    'Baumans' => 'Baumans',
    'Belgrano' => 'Belgrano',
    'Belleza' => 'Belleza',
    'BenchNine' => 'BenchNine',
    'Bentham' => 'Bentham',
    'Berkshire Swash' => 'Berkshire Swash',
    'Bevan' => 'Bevan',
    'Bigelow Rules' => 'Bigelow Rules',
    'Bigshot One' => 'Bigshot One',
    'Bilbo' => 'Bilbo',
    'Bilbo Swash Caps' => 'Bilbo Swash Caps',
    'Biryani' => 'Biryani',
    'Bitter' => 'Bitter',
    'White Ops One' => 'White Ops One',
    'Bokor' => 'Bokor',
    'Bonbon' => 'Bonbon',
    'Boogaloo' => 'Boogaloo',
    'Bowlby One' => 'Bowlby One',
    'Bowlby One SC' => 'Bowlby One SC',
    'Brawler' => 'Brawler',
    'Bree Serif' => 'Bree Serif',
    'Bubblegum Sans' => 'Bubblegum Sans',
    'Bubbler One' => 'Bubbler One',
    'Buda' => 'Buda',
    'Buenard' => 'Buenard',
    'Butcherman' => 'Butcherman',
    'Butcherman Caps' => 'Butcherman Caps',
    'Butterfly Kids' => 'Butterfly Kids',
    'Cabin' => 'Cabin',
    'Cabin Condensed' => 'Cabin Condensed',
    'Cabin Sketch' => 'Cabin Sketch',
    'Cabin' => 'Cabin',
    'Caesar Dressing' => 'Caesar Dressing',
    'Cagliostro' => 'Cagliostro',
    'Calligraffitti' => 'Calligraffitti',
    'Cambay' => 'Cambay',
    'Cambo' => 'Cambo',
    'Candal' => 'Candal',
    'Cantarell' => 'Cantarell',
    'Cantata One' => 'Cantata One',
    'Cantora One' => 'Cantora One',
    'Capriola' => 'Capriola',
    'Cardo' => 'Cardo',
    'Carme' => 'Carme',
    'Carrois Gothic' => 'Carrois Gothic',
    'Carrois Gothic SC' => 'Carrois Gothic SC',
    'Carter One' => 'Carter One',
    'Caveat' => 'Caveat',
    'Caveat Brush' => 'Caveat Brush',
    'Catamaran' => 'Catamaran',
    'Caudex' => 'Caudex',
    'Cedarville Cursive' => 'Cedarville Cursive',
    'Ceviche One' => 'Ceviche One',
    'Changa One' => 'Changa One',
    'Chango' => 'Chango',
    'Chau Philomene One' => 'Chau Philomene One',
    'Chenla' => 'Chenla',
    'Chela One' => 'Chela One',
    'Chelsea Market' => 'Chelsea Market',
    'Cherry Cream Soda' => 'Cherry Cream Soda',
    'Cherry Swash' => 'Cherry Swash',
    'Chewy' => 'Chewy',
    'Chicle' => 'Chicle',
    'Chivo' => 'Chivo',
    'Chonburi' => 'Chonburi',
    'Cinzel' => 'Cinzel',
    'Cinzel Decorative' => 'Cinzel Decorative',
    'Clicker Script' => 'Clicker Script',
    'Coda' => 'Coda',
    'Codystar' => 'Codystar',
    'Combo' => 'Combo',
    'Comfortaa' => 'Comfortaa',
    'Coming Soon' => 'Coming Soon',
    'Condiment' => 'Condiment',
    'Content' => 'Content',
    'Contrail One' => 'Contrail One',
    'Convergence' => 'Convergence',
    'Cookie' => 'Cookie',
    'Comic Sans MS' => 'Comic Sans MS',
    'Copse' => 'Copse',
    'Corben' => 'Corben',
    'Courgette' => 'Courgette',
    'Cousine' => 'Cousine',
    'Coustard' => 'Coustard',
    'Covered By Your Grace' => 'Covered By Your Grace',
    'Crafty Girls' => 'Crafty Girls',
    'Creepster' => 'Creepster',
    'Creepster Caps' => 'Creepster Caps',
    'Crete Round' => 'Crete Round',
    'Crimson' => 'Crimson',
    'Croissant One' => 'Croissant One',
    'Crushed' => 'Crushed',
    'Cuprum' => 'Cuprum',
    'Cutive' => 'Cutive',
    'Cutive Mono' => 'Cutive Mono',
    'Damion' => 'Damion',
    'Dangrek' => 'Dangrek',
    'Dancing Script' => 'Dancing Script',
    'Dawning of a New Day' => 'Dawning of a New Day',
    'Days One' => 'Days One',
    'Dekko' => 'Dekko',
    'Delius' => 'Delius',
    'Delius Swash Caps' => 'Delius Swash Caps',
    'Delius Unicase' => 'Delius Unicase',
    'Della Respira' => 'Della Respira',
    'Denk One' => 'Denk One',
    'Devonshire' => 'Devonshire',
    'Dhurjati' => 'Dhurjati',
    'Didact Gothic' => 'Didact Gothic',
    'Diplomata' => 'Diplomata',
    'Diplomata SC' => 'Diplomata SC',
    'Domine' => 'Domine',
    'Donegal One' => 'Donegal One',
    'Doppio One' => 'Doppio One',
    'Dorsa' => 'Dorsa',
    'Dosis' => 'Dosis',
    'Dr Sugiyama' => 'Dr Sugiyama',
    'Droid Sans' => 'Droid Sans',
    'Droid Sans Mono' => 'Droid Sans Mono',
    'Droid Serif' => 'Droid Serif',
    'Duru Sans' => 'Duru Sans',
    'Dynalight' => 'Dynalight',
    'EB Garamond' => 'EB Garamond',
    'Eczar' => 'Eczar',
    'Eagle Lake' => 'Eagle Lake',
    'Eater' => 'Eater',
    'Eater Caps' => 'Eater Caps',
    'Economica' => 'Economica',
    'Ek Mukta' => 'Ek Mukta',
    'Electrolize' => 'Electrolize',
    'Elsie' => 'Elsie',
    'Elsie Swash Caps' => 'Elsie Swash Caps',
    'Emblema One' => 'Emblema One',
    'Emilys Candy' => 'Emilys Candy',
    'Engagement' => 'Engagement',
    'Englebert' => 'Englebert',
    'Enriqueta' => 'Enriqueta',
    'Erica One' => 'Erica One',
    'Esteban' => 'Esteban',
    'Euphoria Script' => 'Euphoria Script',
    'Ewert' => 'Ewert',
    'Exo' => 'Exo',
    'Exo 2' => 'Exo 2',
    'Expletus Sans' => 'Expletus Sans',
    'Fanwood Text' => 'Fanwood Text',
    'Fascinate' => 'Fascinate',
    'Fascinate Inline' => 'Fascinate Inline',
    'Fasthand' => 'Fasthand',
    'Faster One' => 'Faster One',
    'Federant' => 'Federant',
    'Federo' => 'Federo',
    'Felipa' => 'Felipa',
    'Fenix' => 'Fenix',
    'Finger Paint' => 'Finger Paint',
    'Fira Mono' => 'Fira Mono',
    'Fira Sans' => 'Fira Sans',
    'Fjalla One' => 'Fjalla One',
    'Fjord One' => 'Fjord One',
    'Flamenco' => 'Flamenco',
    'Flavors' => 'Flavors',
    'Fondamento' => 'Fondamento',
    'Fontdiner Swanky' => 'Fontdiner Swanky',
    'Forum' => 'Forum',
    'Francois One' => 'Francois One',
    'FreeSans' => 'FreeSans',

    'Freckle Face' => 'Freckle Face',
    'Fredericka the Great' => 'Fredericka the Great',
    'Fredoka One' => 'Fredoka One',
    'Fresca' => 'Fresca',
    'Freehand' => 'Freehand',
    'Frijole' => 'Frijole',
    'Fruktur' => 'Fruktur',
    'Fugaz One' => 'Fugaz One',
    'Gafata' => 'Gafata',
    'Galdeano' => 'Galdeano',
    'Galindo' => 'Galindo',
    'Gentium Basic' => 'Gentium Basic',
    'Gentium Book Basic' => 'Gentium Book Basic',
    'Geo' => 'Geo',
    'Georgia' => 'Georgia',
    'Geostar' => 'Geostar',
    'Geostar Fill' => 'Geostar Fill',
    'Germania One' => 'Germania One',
    'Gilda Display' => 'Gilda Display',
    'Give You Glory' => 'Give You Glory',
    'Glass Antiqua' => 'Glass Antiqua',
    'Glegoo' => 'Glegoo',
    'Gloria Hallelujah' => 'Gloria Hallelujah',
    'Goblin One' => 'Goblin One',
    'Gochi Hand' => 'Gochi Hand',
    'Gorditas' => 'Gorditas',
    'Gurajada' => 'Gurajada',
    'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
    'Graduate' => 'Graduate',
    'Grand Hotel' => 'Grand Hotel',
    'Gravitas One' => 'Gravitas One',
    'Great Vibes' => 'Great Vibes',
    'Griffy' => 'Griffy',
    'Gruppo' => 'Gruppo',
    'Gudea' => 'Gudea',
    'Gidugu' => 'Gidugu',
    'GFS Didot' => 'GFS Didot',
    'GFS Neohellenic' => 'GFS Neohellenic',
    'Habibi' => 'Habibi',
    'Hammersmith One' => 'Hammersmith One',
    'Halant' => 'Halant',
    'Hanalei' => 'Hanalei',
    'Hanalei Fill' => 'Hanalei Fill',
    'Handlee' => 'Handlee',
    'Hanuman' => 'Hanuman',
    'Happy Monkey' => 'Happy Monkey',
    'Headland One' => 'Headland One',
    'Henny Penny' => 'Henny Penny',
    'Herr Von Muellerhoff' => 'Herr Von Muellerhoff',
    'Hind' => 'Hind',
    'Hind Siliguri' => 'Hind Siliguri',
    'Hind Vadodara' => 'Hind Vadodara',
    'Holtwood One SC' => 'Holtwood One SC',
    'Homemade Apple' => 'Homemade Apple',
    'Homenaje' => 'Homenaje',
    'IM Fell' => 'IM Fell',
    'Itim' => 'Itim',
    'Iceberg' => 'Iceberg',
    'Iceland' => 'Iceland',
    'Imprima' => 'Imprima',
    'Inconsolata' => 'Inconsolata',
    'Inder' => 'Inder',
    'Indie Flower' => 'Indie Flower',
    'Inknut Antiqua' => 'Inknut Antiqua',
    'Inika' => 'Inika',
    'Irish Growler' => 'Irish Growler',
    'Istok Web' => 'Istok Web',
    'Italiana' => 'Italiana',
    'Italianno' => 'Italianno',
    'Jacques Francois' => 'Jacques Francois',
    'Jacques Francois Shadow' => 'Jacques Francois Shadow',
    'Jim Nightshade' => 'Jim Nightshade',
    'Jockey One' => 'Jockey One',
    'Jaldi' => 'Jaldi',
    'Jolly Lodger' => 'Jolly Lodger',
    'Josefin Sans' => 'Josefin Sans',
    'Josefin Sans' => 'Josefin Sans',
    'Josefin Slab' => 'Josefin Slab',
    'Joti One' => 'Joti One',
    'Judson' => 'Judson',
    'Julee' => 'Julee',
    'Julius Sans One' => 'Julius Sans One',
    'Junge' => 'Junge',
    'Jura' => 'Jura',
    'Just Another Hand' => 'Just Another Hand',
    'Just Me Again Down Here' => 'Just Me Again Down Here',
    'Kadwa' => 'Kadwa',
    'Kdam Thmor' => 'Kdam Thmor',
    'Kalam' => 'Kalam', 
    'Kameron' => 'Kameron',
    'Kantumruy' => 'Kantumruy',
    'Karma' => 'Karma',
    'Karla' => 'Karla',
    'Kaushan Script' => 'Kaushan Script',
    'Kavoon' => 'Kavoon',
    'Keania One' => 'Keania One',
    'Kelly Slab' => 'Kelly Slab',
    'Kenia' => 'Kenia',
    'Khand' => 'Khand',
    'Khmer' => 'Khmer',
    'Khula' => 'Khula',
    'Kite One' => 'Kite One',
    'Knewave' => 'Knewave',
    'Kotta One' => 'Kotta One',
    'Kranky' => 'Kranky',
    'Kreon' => 'Kreon',
    'Kristi' => 'Kristi',
    'Koulen' => 'Koulen',
    'Krona One' => 'Krona One',
    'Kurale' => 'Kurale',
    'Lakki Reddy' => 'Lakki Reddy',
    'La Belle Aurore' => 'La Belle Aurore',
    'Lancelot' => 'Lancelot',
    'Laila' => 'Laila',
    'Lato' => 'Lato',
    'Lateef' => 'Lateef',
    'League Script' => 'League Script',
    'Leckerli One' => 'Leckerli One',
    'Ledger' => 'Ledger',
    'Lekton' => 'Lekton',
    'Lemon' => 'Lemon',

    'Libre Baskerville' => 'Libre Baskerville',
    'Life Savers' => 'Life Savers',
    'Lilita One' => 'Lilita One',
    'Limelight' => 'Limelight',
    'Linden Hill' => 'Linden Hill',
    'Lobster' => 'Lobster',
    'Lobster Two' => 'Lobster Two',
    'Londrina Outline' => 'Londrina Outline',
    'Londrina Shadow' => 'Londrina Shadow',
    'Londrina Sketch' => 'Londrina Sketch',
    'Londrina Solid' => 'Londrina Solid',
    'Lora' => 'Lora',
    'Love Ya Like A Sister' => 'Love Ya Like A Sister',
    'Loved by the King' => 'Loved by the King',
    'Lovers Quarrel' => 'Lovers Quarrel',
    'Lucida Sans Unicode' => 'Lucida Sans Unicode',
    'Luckiest Guy' => 'Luckiest Guy',
    'Lusitana' => 'Lusitana',
    'Lustria' => 'Lustria',
    'Macondo' => 'Macondo',
    'Macondo Swash Caps' => 'Macondo Swash Caps',
    'Magra' => 'Magra',
    'Maiden Orange' => 'Maiden Orange',
    'Mallanna' => 'Mallanna',
    'Mandali' => 'Mandali',
    'Mako' => 'Mako',
    'Marcellus' => 'Marcellus',
    'Marcellus SC' => 'Marcellus SC',
    'Marck Script' => 'Marck Script',
    'Margarine' => 'Margarine',
    'Marko One' => 'Marko One',
    'Marmelad' => 'Marmelad',
    'Marvel' => 'Marvel',
    'Martel' => 'Martel',
    'Martel Sans' => 'Martel Sans',
    'Mate' => 'Mate',
    'Mate SC' => 'Mate SC',
    'Maven Pro' => 'Maven Pro',
    'McLaren' => 'McLaren',
    'Meddon' => 'Meddon',
    'MedievalSharp' => 'MedievalSharp',
    'Medula One' => 'Medula One',
    'Megrim' => 'Megrim',
    'Meie Script' => 'Meie Script',
    'Merienda' => 'Merienda',
    'Merienda One' => 'Merienda One',
    'Merriweather' => 'Merriweather',
    'Metal' => 'Metal',
    'Metal Mania' => 'Metal Mania',
    'Metamorphous' => 'Metamorphous',
    'Metrophobic' => 'Metrophobic',
    'Michroma' => 'Michroma',
    'Milonga' => 'Milonga',
    'Miltonian' => 'Miltonian',
    'Miltonian Tattoo' => 'Miltonian Tattoo',
    'Miniver' => 'Miniver',
    'Miss Fajardose' => 'Miss Fajardose',
    'Miss Saint Delafield' => 'Miss Saint Delafield',
    'Modak' => 'Modak',
    'Modern Antiqua' => 'Modern Antiqua',
    'Molengo' => 'Molengo',
    'Molle' => 'Molle',
    'Moulpali' => 'Moulpali',
    'Monda' => 'Monda',
    'Monofett' => 'Monofett',
    'Monoton' => 'Monoton',
    'Monsieur La Doulaise' => 'Monsieur La Doulaise',
    'Montaga' => 'Montaga',
    'Montez' => 'Montez',
    'Montserrat' => 'Montserrat',
    'Montserrat Alternates' => 'Montserrat Alternates',
    'Montserrat Subrayada' => 'Montserrat Subrayada',
    'Mountains of Christmas' => 'Mountains of Christmas',
    'Mouse Memoirs' => 'Mouse Memoirs',
    'Moul' => 'Moul',
    'Mr Bedford' => 'Mr Bedford',
    'Mr Bedfort' => 'Mr Bedfort',
    'Mr Dafoe' => 'Mr Dafoe',
    'Mr De Haviland' => 'Mr De Haviland',
    'Mrs Saint Delafield' => 'Mrs Saint Delafield',
    'Mrs Sheppards' => 'Mrs Sheppards',
    'Muli' => 'Muli',
    'Mystery Quest' => 'Mystery Quest',
    'Neucha' => 'Neucha',
    'Neuton' => 'Neuton',
    'New Rocker' => 'New Rocker',
    'News Cycle' => 'News Cycle',
    'Niconne' => 'Niconne',
    'Nixie One' => 'Nixie One',
    'Nobile' => 'Nobile',
    'Nokora' => 'Nokora',
    'Norican' => 'Norican',
    'Nosifer' => 'Nosifer',
    'Nosifer Caps' => 'Nosifer Caps',
    'Nova Mono' => 'Nova Mono',
    'Noticia Text' => 'Noticia Text',
    'Noto Sans' => 'Noto Sans',
    'Noto Serif' => 'Noto Serif',
    'Nova Round' => 'Nova Round',
    'Numans' => 'Numans',
    'Nunito' => 'Nunito',
    'NTR' => 'NTR',
    'Offside' => 'Offside',
    'Oldenburg' => 'Oldenburg',
    'Oleo Script' => 'Oleo Script',
    'Oleo Script Swash Caps' => 'Oleo Script Swash Caps',
    'Open Sans' => 'Open Sans',
    'Open Sans Condensed' => 'Open Sans Condensed',
    'Oranienbaum' => 'Oranienbaum',
    'Orbitron' => 'Orbitron',
    'Odor Mean Chey' => 'Odor Mean Chey',
    'Oregano' => 'Oregano',
    'Orienta' => 'Orienta',
    'Original Surfer' => 'Original Surfer',
    'Oswald' => 'Oswald',
    'Over the Rainbow' => 'Over the Rainbow',
    'Overlock' => 'Overlock',
    'Overlock SC' => 'Overlock SC',
    'Ovo' => 'Ovo',
    'Oxygen' => 'Oxygen',
    'Oxygen Mono' => 'Oxygen Mono',
    'Palanquin Dark' => 'Palanquin Dark',
    'Peddana' => 'Peddana',
    'Poppins' => 'Poppins',
    'PT Mono' => 'PT Mono',
    'PT Sans' => 'PT Sans',
    'PT Sans Caption' => 'PT Sans Caption',
    'PT Sans Narrow' => 'PT Sans Narrow',
    'PT Serif' => 'PT Serif',
    'PT Serif Caption' => 'PT Serif Caption',
    'Pacifico' => 'Pacifico',
    'Paprika' => 'Paprika',
    'Parisienne' => 'Parisienne',
    'Passero One' => 'Passero One',
    'Passion One' => 'Passion One',
    'Patrick Hand' => 'Patrick Hand',
    'Patrick Hand SC' => 'Patrick Hand SC',
    'Patua One' => 'Patua One',
    'Paytone One' => 'Paytone One',
    'Peralta' => 'Peralta',
    'Permanent Marker' => 'Permanent Marker',
    'Petit Formal Script' => 'Petit Formal Script',
    'Petrona' => 'Petrona',
    'Philosopher' => 'Philosopher',
    'Piedra' => 'Piedra',
    'Pinyon Script' => 'Pinyon Script',
    'Pirata One' => 'Pirata One',
    'Plaster' => 'Plaster',
    'Palatino Linotype' => 'Palatino Linotype',
    'Play' => 'Play',
    'Playball' => 'Playball',
    'Playfair Display' => 'Playfair Display',
    'Playfair Display SC' => 'Playfair Display SC',
    'Podkova' => 'Podkova',
    'Poiret One' => 'Poiret One',
    'Poller One' => 'Poller One',
    'Poly' => 'Poly',
    'Pompiere' => 'Pompiere',
    'Pontano Sans' => 'Pontano Sans',
    'Port Lligat Sans' => 'Port Lligat Sans',
    'Port Lligat Slab' => 'Port Lligat Slab',
    'Prata' => 'Prata',
    'Pragati Narrow' => 'Pragati Narrow',
    'Preahvihear' => 'Preahvihear',
    'Press Start 2P' => 'Press Start 2P',
    'Princess Sofia' => 'Princess Sofia',
    'Prociono' => 'Prociono',
    'Prosto One' => 'Prosto One',
    'Puritan' => 'Puritan',
    'Purple Purse' => 'Purple Purse',
    'Quando' => 'Quando',
    'Quantico' => 'Quantico',
    'Quattrocento' => 'Quattrocento',
    'Quattrocento Sans' => 'Quattrocento Sans',
    'Questrial' => 'Questrial',
    'Quicksand' => 'Quicksand',
    'Quintessential' => 'Quintessential',
    'Qwigley' => 'Qwigley',
    'Racing Sans One' => 'Racing Sans One',
    'Radley' => 'Radley',
    'Rajdhani' => 'Rajdhani',
    'Raleway Dots' => 'Raleway Dots',
    'Raleway' => 'Raleway',
    'Rambla' => 'Rambla',
    'Ramabhadra' => 'Ramabhadra',
    'Ramaraja' => 'Ramaraja',
    'Rammetto One' => 'Rammetto One',
    'Ranchers' => 'Ranchers',
    'Rancho' => 'Rancho',
    'Ranga' => 'Ranga',
    'Ravi Prakash' => 'Ravi Prakash',
    'Rationale' => 'Rationale',
    'Redressed' => 'Redressed',
    'Reenie Beanie' => 'Reenie Beanie',
    'Revalia' => 'Revalia',
    'Rhodium Libre' => 'Rhodium Libre',
    'Ribeye' => 'Ribeye',
    'Ribeye Marrow' => 'Ribeye Marrow',
    'Righteous' => 'Righteous',
    'Risque' => 'Risque',
    'Roboto' => 'Roboto',
    'Roboto Condensed' => 'Roboto Condensed',
    'Roboto Mono' => 'Roboto Mono',
    'Roboto Slab' => 'Roboto Slab',
    'Rochester' => 'Rochester',
    'Rock Salt' => 'Rock Salt',
    'Rokkitt' => 'Rokkitt',
    'Romanesco' => 'Romanesco',
    'Ropa Sans' => 'Ropa Sans',
    'Rosario' => 'Rosario',
    'Rosarivo' => 'Rosarivo',
    'Rouge Script' => 'Rouge Script',
    'Rozha One' => 'Rozha One',
    'Rubik' => 'Rubik',
    'Rubik One' => 'Rubik One',
    'Rubik Mono One' => 'Rubik Mono One',
    'Ruda' => 'Ruda',
    'Rufina' => 'Rufina',
    'Ruge Boogie' => 'Ruge Boogie',
    'Ruluko' => 'Ruluko',
    'Rum Raisin' => 'Rum Raisin',
    'Ruslan Display' => 'Ruslan Display',
    'Russo One' => 'Russo One',
    'Ruthie' => 'Ruthie',
    'Rye' => 'Rye',
    'Sacramento' => 'Sacramento',
    'Sail' => 'Sail',
    'Salsa' => 'Salsa',
    'Sanchez' => 'Sanchez',
    'Sancreek' => 'Sancreek',
    'Sahitya' => 'Sahitya',
    'Sansita One' => 'Sansita One',
    'Sarpanch' => 'Sarpanch',
    'Sarina' => 'Sarina',
    'Satisfy' => 'Satisfy',
    'Scada' => 'Scada',
    'Scheherazade' => 'Scheherazade',
    'Schoolbell' => 'Schoolbell',
    'Seaweed Script' => 'Seaweed Script',
    'Sarala' => 'Sarala',
    'Sevillana' => 'Sevillana',
    'Seymour One' => 'Seymour One',
    'Shadows Into Light' => 'Shadows Into Light',
    'Shadows Into Light Two' => 'Shadows Into Light Two',
    'Shanti' => 'Shanti',
    'Share' => 'Share',
    'Share Tech' => 'Share Tech',
    'Share Tech Mono' => 'Share Tech Mono',
    'Shojumaru' => 'Shojumaru',
    'Short Stack' => 'Short Stack',
    'Sigmar One' => 'Sigmar One',
    'Suranna' => 'Suranna',
    'Suravaram' => 'Suravaram',
    'Suwannaphum' => 'Suwannaphum',
    'Signika' => 'Signika',
    'Signika Negative' => 'Signika Negative',
    'Simonetta' => 'Simonetta',
    'Siemreap' => 'Siemreap',
    'Sirin Stencil' => 'Sirin Stencil',
    'Six Caps' => 'Six Caps',
    'Skranji' => 'Skranji',
    'Slackey' => 'Slackey',
    'Smokum' => 'Smokum',
    'Smythe' => 'Smythe',
    'Sniglet' => 'Sniglet',
    'Snippet' => 'Snippet',
    'Snowburst One' => 'Snowburst One',
    'Sofadi One' => 'Sofadi One',
    'Sofia' => 'Sofia',
    'Sonsie One' => 'Sonsie One',
    'Sorts Mill Goudy' => 'Sorts Mill Goudy',
    'Sorts Mill Goudy' => 'Sorts Mill Goudy',
    'Source Code Pro' => 'Source Code Pro',
    'Source Sans Pro' => 'Source Sans Pro',
    'Special I am one' => 'Special I am one',
    'Spicy Rice' => 'Spicy Rice',
    'Spinnaker' => 'Spinnaker',
    'Spirax' => 'Spirax',
    'Squada One' => 'Squada One',
    'Sree Krushnadevaraya' => 'Sree Krushnadevaraya',
    'Stalemate' => 'Stalemate',
    'Stalinist One' => 'Stalinist One',
    'Stardos Stencil' => 'Stardos Stencil',
    'Stint Ultra Condensed' => 'Stint Ultra Condensed',
    'Stint Ultra Expanded' => 'Stint Ultra Expanded',
    'Stoke' => 'Stoke',
    'Stoke' => 'Stoke',
    'Strait' => 'Strait',
    'Sura' => 'Sura',
    'Sumana' => 'Sumana',
    'Sue Ellen Francisco' => 'Sue Ellen Francisco',
    'Sunshiney' => 'Sunshiney',
    'Supermercado One' => 'Supermercado One',
    'Swanky and Moo Moo' => 'Swanky and Moo Moo',
    'Syncopate' => 'Syncopate',
    'Symbol' => 'Symbol',
    'Timmana' => 'Timmana',
    'Taprom' => 'Taprom',
    'Tangerine' => 'Tangerine',
    'Tahoma' => 'Tahoma',
    'Teko' => 'Teko',
    'Telex' => 'Telex',
    'Tenali Ramakrishna' => 'Tenali Ramakrishna',
    'Tenor Sans' => 'Tenor Sans',
    'Terminal Dosis' => 'Terminal Dosis',
    'Terminal Dosis Light' => 'Terminal Dosis Light',
    'Text Me One' => 'Text Me One',
    'The Girl Next Door' => 'The Girl Next Door',
    'Tienne' => 'Tienne',
    'Tillana' => 'Tillana',
    'Tinos' => 'Tinos',
    'Titan One' => 'Titan One',
    'Titillium Web' => 'Titillium Web',
    'Trade Winds' => 'Trade Winds',
    'Trebuchet MS' => 'Trebuchet MS',
    'Trocchi' => 'Trocchi',
    'Trochut' => 'Trochut',
    'Trykker' => 'Trykker',
    'Tulpen One' => 'Tulpen One',
    'Ubuntu' => 'Ubuntu',
    'Ubuntu Condensed' => 'Ubuntu Condensed',
    'Ubuntu Mono' => 'Ubuntu Mono',
    'Ultra' => 'Ultra',
    'Uncial Antiqua' => 'Uncial Antiqua',
    'Underdog' => 'Underdog',
    'Unica One' => 'Unica One',
    'UnifrakturCook' => 'UnifrakturCook',
    'UnifrakturMaguntia' => 'UnifrakturMaguntia',
    'Unkempt' => 'Unkempt',
    'Unlock' => 'Unlock',
    'Unna' => 'Unna',
    'VT323' => 'VT323',
    'Vampiro One' => 'Vampiro One',
    'Varela' => 'Varela',
    'Varela Round' => 'Varela Round',
    'Vast Shadow' => 'Vast Shadow',
    'Vesper Libre' => 'Vesper Libre',
    'Verdana' => 'Verdana',
    'Vibur' => 'Vibur',
    'Vidaloka' => 'Vidaloka',
    'Viga' => 'Viga',
    'Voces' => 'Voces',
    'Volkhov' => 'Volkhov',
    'Vollkorn' => 'Vollkorn',
    'Voltaire' => 'Voltaire',
    'Waiting for the Sunrise' => 'Waiting for the Sunrise',
    'Wallpoet' => 'Wallpoet',
    'Walter Turncoat' => 'Walter Turncoat',
    'Warnes' => 'Warnes',
    'Wellfleet' => 'Wellfleet',
    'Wendy One' => 'Wendy One',
    'Wire One' => 'Wire One',
    'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    'Yantramanav' => 'Yantramanav',
    'Yellowtail' => 'Yellowtail',
    'Yeseva One' => 'Yeseva One',
    'Yesteryear' => 'Yesteryear',
    'Zeyada' => 'Zeyada'
  );

	//array of all font sizes.
	$font_sizes = array( 
		'10px' => '10px',
		'11px' => '11px',
	);
	
	$options = array();
	$imagepath =  get_template_directory_uri() . '/images/';

	
	for($n=12;$n<=200;$n+=1){
		$font_sizes[$n.'px'] = $n.'px';
	}
	
	// Pull all the pages into an array
	 $options_pages = array();
	 $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	 $options_pages[''] = 'Select a page:';
	 foreach ($options_pages_obj as $page) {
	  $options_pages[$page->ID] = $page->post_title;
	 }

	// array of section content.
	$section_text = array(	

		1 => array(
			'section_title'	=> '',
			'menutitle'		=> 'section1',
			'bgcolor' 		=> '#2e023b',
			'bgimage'		=> get_template_directory_uri().'/images/section1bg.jpg',
			'class'			=> '',
			'content'		=> '<p class="urgent-causes"><strong>URGET CAUSES</strong></p>[subtitle align="center" size="47px" color="#ffffff" description="The Five Points of Gospel Truth"]Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. <br />Interdum et malesuada fames ac ante ipsum primis in fauci Pellentesque.
			
[raised-goal raised="Raised: $20,000.00" percentage="60.5%" goal="Goal: $50,000.00" color="#ffffff" bdcolor="#ffffff"]
			
[button align="center" name="DONATE NOW!" link="#" target=""]',
		),
		
		2 => array(
			'section_title'	=> 'Upcoming Event',
			'menutitle'		=> 'section2',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[subtitle align="center" size="16px" color="#555555" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante <br />ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est"][gt-events-coll limit="3"]'),
		
		3 => array(
			'section_title'	=> '',
			'menutitle'		=> 'section3',
			'bgcolor' 		=> '#f4f4f4',
			'bgimage'		=>  '',
			'class'			=> '',
			'content'		=> '[column_content type="one_half"]<img src="'.get_template_directory_uri().'/images/vision-history.png" />[/column_content][column_content type="one_half_last"][aboutme icon="'.get_template_directory_uri().'/images/vision.png" title="OUR VISION" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est" url="#" target="_self"][aboutme icon="'.get_template_directory_uri().'/images/church.png" title="CHURCH HISTORY" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est" url="#" target="_self"][/column_content]',
		),
		
		4 => array(
			'section_title'	=> 'Love the lord Your God with All Your Hearth',
			'menutitle'		=> 'section4',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> get_template_directory_uri().'/images/section4bg.jpg',
			'class'			=> '',
			'content'		=> '[subtitle align="center" size="16px" color="#ffffff" description="Message from Charles Hannon. October 20th, 2018."][sermons_link icon="fas fa-video" link="#" target="_blank"][sermons_link icon="fas fa-headphones" link="#" target="_blank"][sermons_link icon="far fa-file-pdf" link="#" target="_blank"][sermons_link icon="fas fa-link" link="#" target="_blank"][button align="center" name="VIEW ALL SERMONS" link="#" target="_self"]'
		),	
		
		
		5 => array(
			'section_title'	=> 'Latest News',
			'menutitle'		=> 'section5',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[subtitle align="center" size="16px" color="#717171" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante<br /> ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est"]
[latest-news showposts="2" date="show" excerptlength="25" readmore="DETAILS"]'
		),	
		
		6 => array(
			'section_title'	=> 'Our Pastors',
			'menutitle'		=> 'section6',
			'bgcolor' 		=> '#f4f4f4',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[subtitle align="center" size="16px" color="#717171" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante<br /> ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est"][our-team show="4"]'
			),				
		
		7 => array(
			'section_title'	=> 'Church Testimonials',
			'menutitle'		=> 'section7',
			'bgcolor' 		=> '#f9f9f9',
			'bgimage'		=> get_template_directory_uri().'/images/section9bg.jpg',
			'class'			=> '',
			'content'		=> '[space height="20px"][testimonials][space height="50px"]
[our_donation image="'.get_template_directory_uri().'/images/donation-renovation.jpg" title="Donation for Church Renovation" content="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuadaul." skillbar_bgcolor="#f0f0f0" percent="50%" percent_bgcolor="#ddb667" raised_price="$4500" goal_price="$9000" donate_button="DONATE" link="#" ]			
			',
		),
 
		8 => array(
			'section_title'	=> 'Church Gallery',
			'menutitle'		=> 'section8',
			'bgcolor' 		=> '#f4f4f4',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[space height="20px"][photogallery filter="false" show="8"]
',
		),	
		
		9 => array(
			'section_title'	=> 'Church Shop',
			'menutitle'		=> 'section9',
			'bgcolor' 		=> '#ffffff',
			'bgimage'		=> '',
			'class'			=> '',
			'content'		=> '[subtitle align="center" size="16px" color="#717171" description="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuada fames ac ante<br /> ipsum primis in fauci. Pellentesque in aliquam enim, quis lobortis arcu. Curabitur quis ultrices est"][space height="20px"][recent_products per_page="4" columns="4"]',
		),			 
	);

	$options = array();

	//Basic Settings
	$options[] = array(
		'name' => __('Basic Settings', 'the-church'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'the-church'),
		'desc' => __('Upload your main logo here', 'the-church'),
		'id' => 'logo',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Change your custom logo height', 'the-church'),
		'id' => 'logoheight',
		'std' => '60px',
		'type' => 'text');
		
	$options[] = array(	
		'name' => __('Site title & Description', 'the-church'),		
		'desc'	=> __('Check To show site title and description', 'the-church'),
		'id'	=> 'hide_titledesc',
		'type'	=> 'checkbox',
		'std'	=> '');		
		
	$options[] = array(	
		'name' => __('Layout Option', 'the-church'),		
		'desc'	=> __('Check To Show Box Layout ', 'the-church'),
		'id'	=> 'boxlayout',
		'type'	=> 'checkbox',
		'std'	=> '');
			
	$options[] = array(
		'name' => __('Sticky Header', 'the-church'),
		'desc' => __('UnCheck this to hide sticky header on scroll', 'the-church'),
		'id' => 'headstick',
		'std' => 'true',
		'type' => 'checkbox');		
			
	$options[] = array(
		'name' => __('Disable Animation', 'the-church'),
		'desc' => __('Check this to hide animation on scroll', 'the-church'),
		'id' => 'scrollanimation',
		'std' => '',
		'type' => 'checkbox');		

	$options[] = array(
		'name' => __('Custom CSS', 'the-church'),
		'desc' => __('Some Custom Styling for your site. Place any css codes here instead of the style.css file.', 'the-church'),
		'id' => 'style2',
		'std' => '',
		'type' => 'textarea');	
		
	$options[] = array(
		'name' => __('Header Top Social Icons', 'the-church'),
		'desc' => __('Edit header info from here. NOTE: Icon name should be in lowercase without space.(exa.phone) More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/', 'the-church'),
		'id' => 'headersocial',
		'std' => '
[social_area] 
[social icon="fab fa-facebook-f" link="#"] 
[social icon="fab fa-twitter" link="#"] 
[social icon="fab fa-google-plus-g" link="#"] 
[social icon="fab fa-linkedin-in" link="#"] 
[social icon="fas fa-rss" link="#"] 
[social icon="fab fa-youtube" link="#"]
[/social_area]',
		'type' => 'textarea');
		
				
	$options[] = array(
		'name' => __('Header Logo Right Info Email', 'the-church'),
		'desc' => __('add header right email', 'the-church'),
		'id' => 'headerinfoemail',
		'std' => '<i class="far fa-envelope"></i><span>Email Us At <br><a href="mailto:info@sitename.com">info@sitename.com</a></span>',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Header Right Phone Number', 'the-church'),
		'id' => 'headerinfophone',
		'std' => '<i class="fa-rotate-90 fa fa-phone"></i><span> Call Us Now! <br>123 852 7854</span>',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Header Right Donation button', 'the-church'),
		'id' => 'headerinfobutton',
		'std' => '<a href="#" class="donatenow">Donate Now!</a>',
		'type' => 'textarea');	
		
 	$options[] = array(
		'name' => __('Header Search', 'the-church'),
		'desc' => __('Check to hide header search', 'the-church'),
		'id' => 'headerseacrh',
		'std' => '',
		'type' => 'checkbox');	 
		
	// font family start 		
	$options[] = array(
		'name' => __('Font Faces', 'the-church'),
		'desc' => __('Select font for the body text', 'the-church'),
		'id' => 'bodyfontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the textual logo', 'the-church'),
		'id' => 'logofontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for the navigation text', 'the-church'),
		'id' => 'navfontface',
		'type' => 'select',
		'std' => 'Roboto',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font family for all heading tag.', 'the-church'),
		'id' => 'headfontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );
		
	$options[] = array(
		'desc' => __('Select font for Section title', 'the-church'),
		'id' => 'sectiontitlefontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );		
			
	$options[] = array(
		'desc' => __('Select font for Slide title', 'the-church'),
		'id' => 'slidetitlefontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );	
		
	$options[] = array(
		'desc' => __('Select font for Slide Description', 'the-church'),
		'id' => 'slidedesfontface',
		'type' => 'select',
		'std' => 'Assistant',
		'options' => $font_types );	

		
	// font sizes start	
	$options[] = array(
		'name' => __('Font Sizes', 'the-church'),
		'desc' => __('Select font size for body text', 'the-church'),
		'id' => 'bodyfontsize',
		'type' => 'select',
		'std' => '16px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for textual logo', 'the-church'),
		'id' => 'logofontsize',
		'type' => 'select',
		'std' => '37px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for navigation', 'the-church'),
		'id' => 'navfontsize',
		'type' => 'select',
		'std' => '15px',
		'options' => $font_sizes );	
		
	$options[] = array(
		'desc' => __('Select font size for section title', 'the-church'),
		'id' => 'sectitlesize',
		'type' => 'select',
		'std' => '47px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for footer title', 'the-church'),
		'id' => 'ftfontsize',
		'type' => 'select',
		'std' => '21px',
		'options' => $font_sizes );	

	$options[] = array(
		'desc' => __('Select h1 font size', 'the-church'),
		'id' => 'h1fontsize',
		'std' => '30px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h2 font size', 'the-church'),
		'id' => 'h2fontsize',
		'std' => '26px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h3 font size', 'the-church'),
		'id' => 'h3fontsize',
		'std' => '20px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h4 font size', 'the-church'),
		'id' => 'h4fontsize',
		'std' => '22px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h5 font size', 'the-church'),
		'id' => 'h5fontsize',
		'std' => '18px',
		'type' => 'select',
		'options' => $font_sizes);

	$options[] = array(
		'desc' => __('Select h6 font size', 'the-church'),
		'id' => 'h6fontsize',
		'std' => '16px',
		'type' => 'select',
		'options' => $font_sizes);

	// font colors start
	$options[] = array(
		'name' => __('Site Colors Scheme', 'the-church'),
		'desc' => __('Change the color scheme of hole site', 'the-church'),
		'id' => 'colorscheme',
		'std' => '#a65418',
		'type' => 'color');
		
	$options[] = array(			
		'desc' => __('Select Second color of hover', 'the-church'),
		'id' => 'colorscheme_hover',
		'std' => '#ddb667',
		'type' => 'color');		
		
	$options[] = array(	
		'name' => __('Font Colors', 'the-church'),	
		'desc' => __('Select font color for the body text', 'the-church'),
		'id' => 'bodyfontcolor',
		'std' => '#373735',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for header top phone and email strip', 'the-church'),
		'id' => 'headertopfontcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for logo', 'the-church'),
		'id' => 'logofontcolor',
		'std' => '#353535',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for logo tagline', 'the-church'),
		'id' => 'logotaglinecolor',
		'std' => '#353535',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font color for header social icons', 'the-church'),
		'id' => 'socialfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for section title', 'the-church'),
		'id' => 'sectitlecolor',
		'std' => '#353535',
		'type' => 'color');	
	
	$options[] = array(
		'desc' => __('Select font color for navigation', 'the-church'),
		'id' => 'navfontcolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for homepage top three boxes title', 'the-church'),
		'id' => 'hometopfourbxtitlecolor',
		'std' => '#101010',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for widget title', 'the-church'),
		'id' => 'wdgttitleccolor',
		'std' => '#444444',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer title', 'the-church'),
		'id' => 'foottitlecolor',
		'std' => '#ffffff',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select font color for footer', 'the-church'),
		'id' => 'footdesccolor',
		'std' => '#ababab',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer Copyright', 'the-church'),
		'id' => 'designcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for links / anchor tags', 'the-church'),
		'id' => 'linkhovercolor',
		'std' => '#272727',
		'type' => 'color');			
		
	$options[] = array(
		'desc' => __('Select font color for sidebar li a', 'the-church'),
		'id' => 'sidebarfontcolor',
		'std' => '#78797c',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font hover color for footer copyright links', 'the-church'),
		'id' => 'copylinkshover',
		'std' => '#ffffff',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h1 font color', 'the-church'),
		'id' => 'h1fontcolor',
		'std' => '#353535',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select h2 font color', 'the-church'),
		'id' => 'h2fontcolor',
		'std' => '#353535',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select h3 font color', 'the-church'),
		'id' => 'h3fontcolor',
		'std' => '#353535',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select h4 font color', 'the-church'),
		'id' => 'h4fontcolor',
		'std' => '#353535',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h5 font color', 'the-church'),
		'id' => 'h5fontcolor',
		'std' => '#353535',
		'type' => 'color');	

	$options[] = array(
		'desc' => __('Select h6 font color', 'the-church'),
		'id' => 'h6fontcolor',
		'std' => '#000000',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer social icons', 'the-church'),
		'id' => 'footsocialcolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for gallery filter ', 'the-church'),
		'id' => 'galleryfiltercolor',
		'std' => '#111111',
		'type' => 'color');			
		
	$options[] = array(
		'desc' => __('Select font color for photogallery title ', 'the-church'),
		'id' => 'gallerytitlecolorhv',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for client testimonilas description', 'the-church'),
		'id' => 'testimonialdescriptioncolor',
		'std' => '#8b8a8a',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for sidebar widget box', 'the-church'),
		'id' => 'widgetboxfontcolor',
		'std' => '#6e6d6d',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for footer recent posts title', 'the-church'),
		'id' => 'footerpoststitlecolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(
		'desc' => __('Select font color for toggle menu on responsive', 'the-church'),
		'id' => 'togglemenucolor',
		'std' => '#ffffff',
		'type' => 'color');		
 
		
	// Background start			
	$options[] = array(
		'name' => __('Background Colors', 'the-church'),				
		'desc' => __('Select background color for header search', 'the-church'),
		'id' => 'headersearchbgcolor',
		'std' => '#954810',
		'type' => 'color');		
		
	$options[] = array(
		'desc' => __('Select background color for footer', 'the-church'),
		'id' => 'footerbgcolor',
		'std' => '#000000',
		'type' => 'color');
		
	$options[] = array(
		'desc' => __('Select background color for Copyright', 'the-church'),
		'id' => 'copyrightbgcolor',
		'std' => '#000000',
		'type' => 'color');			
	
	$options[] = array(
		'desc' => __('Select background color for sidebar widget box', 'the-church'),
		'id' => 'widgetboxbgcolor',
		'std' => '#ffffff',
		'type' => 'color');	
					

	// Border colors			
	$options[] = array(	
		'name' => __('Border Colors', 'the-church'),		
		'desc' => __('Select border color for sidebar li a', 'the-church'),
		'id' => 'sidebarliaborder',
		'std' => '#f6f5f5',
		'type' => 'color');	
		
	$options[] = array(			
		'desc' => __('Select border color for top navigation dropdown li', 'the-church'),
		'id' => 'navlibdcolor',
		'std' => '#954810',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select border color for client testimonials Box', 'the-church'),
		'id' => 'testimonialboxbg',
		'std' => '#f6f6f6',
		'type' => 'color');			

	// Default Buttons		
	$options[] = array(
		'name' => __('Button Colors', 'the-church'),
		'desc' => __('Select background hover color for default button', 'the-church'),
		'id' => 'btnbghvcolor',
		'std' => '#555555',
		'type' => 'color');		

	$options[] = array(
		'desc' => __('Select font color default button', 'the-church'),
		'id' => 'btntxtcolor',
		'std' => '#ffffff',
		'type' => 'color');

	$options[] = array(
		'desc' => __('Select font hover color for default button', 'the-church'),
		'id' => 'btntxthvcolor',
		'std' => '#ffffff',
		'type' => 'color');						

	// Slider Caption colors
	$options[] = array(	
		'name' => __('Slider Caption Colors', 'the-church'),				
		'desc' => __('Select font color for slider title', 'the-church'),
		'id' => 'slidetitlecolor',
		'std' => '#ffffff',
		'type' => 'color');			
		
	$options[] = array(		
		'desc' => __('Select font color for slider description', 'the-church'),
		'id' => 'slidedesccolor',
		'std' => '#ffffff',
		'type' => 'color');	
		
		
	$options[] = array(
		'desc' => __('Select font size for slider title', 'the-church'),
		'id' => 'slidetitlefontsize',
		'type' => 'select',
		'std' => '70px',
		'options' => $font_sizes );
		
	$options[] = array(
		'desc' => __('Select font size for slider description', 'the-church'),
		'id' => 'slidedescfontsize',
		'type' => 'select',
		'std' => '16px',
		'options' => $font_sizes );
		
	// Slider controls colors		
	$options[] = array(
		'name' => __('Slider controls Colors', 'the-church'),
		'desc' => __('Select background color for slider pager (dots)', 'the-church'),
		'id' => 'sldpagebg',
		'std' => '#ffffff',
		'type' => 'color');		
		
	$options[] = array(
		'desc' => __('Select background color for slider navigation arrows', 'the-church'),
		'id' => 'sldarrowbg',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(		
		'desc' => __('Select background opacity color for header slider navigation arrows', 'the-church'),
		'id' => 'sldarrowopacity',
		'std' => '1',
		'type' => 'select',
		'options'	=> array('1'=>1, '0.9'=>0.9,'0.8'=>0.8,'0.7'=>0.7,'0.6'=>0.6,'0.5'=>0.5,'0.4'=>0.4,'0.3'=>0.3,'0.2'=>0.2,'0.1'=>0.1,'0.0'=>0.0,));			
		
	$options[] = array(
		'desc' => __('Select Border color for slider pager', 'the-church'),
		'id' => 'sldpagehvbd',
		'std' => '#ffffff',
		'type' => 'color');	
		
	$options[] = array(	
		'name' => __('Excerpt Lenth', 'the-church'),			
		'desc' => __('Select excerpt length for testimonials section', 'the-church'),
		'id' => 'testimonialsexcerptlength',
		'std' => '18',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for blog templates posts', 'the-church'),
		'id' => 'blogpostexcerptlength',
		'std' => '35',
		'type' => 'text');
		
	$options[] = array(		
		'desc' => __('Change read more button text for latest blog post', 'the-church'),
		'id' => 'readmoretext',
		'std' => 'Read More',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change Show All Button text for photo gallery section', 'the-church'),
		'id' => 'galleryshowallbtn',
		'std' => 'Show All',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('Change menu word on responsive view', 'the-church'),
		'id' => 'menuwordchange',
		'std' => 'Menu',
		'type' => 'text');			
		
	$options[] = array(
		'name' => __('Blog Single Layout', 'the-church'),
		'desc' => __('Select layout. eg:ight-sidebar, left-sidebar, full-width', 'the-church'),
		'id' => 'singlelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Blog Single Right Sidebar', 'singleleft'=>'Blog Single Left Sidebar', 'sitefull'=>'Blog Single Full Width', 'nosidebar'=>'Blog Single No Sidebar') );	
		
	$options[] = array(
		'name' => __('Team Single Layout', 'the-church'),
		'desc' => __('Select layout. eg:left,right,full', 'the-church'),
		'id' => 'teamsinglelayout',
		'type' => 'select',
		'std' => 'singleright',
		'options' => array('singleright'=>'Team Single Right Sidebar', 'singleleft'=>'Team Single Left Sidebar', 'sitefull'=>'Team Single Full Width', 'nosidebar'=>'Team Single No Sidebar') );		
		
	$options[] = array(
		'name' => __('Woocommerce Page Layout', 'the-church'),
		'desc' => __('Select layout. eg:right-sidebar, left-sidebar, full-width', 'the-church'),
		'id' => 'woocommercelayout',
		'type' => 'select',
		'std' => 'woocommercesitefull',
		'options' => array('woocommerceright'=>'Woocommerce Right Sidebar', 'woocommerceleft'=>'Woocommerce Left Sidebar', 'woocommercesitefull'=>'Woocommerce Full Width') );	
		
	$options[] = array(	
		'name' => __('Testimonials Rotating Speed', 'the-church'),	
		'desc' => __('manage testimonials rotating speed.', 'the-church'),
		'id' => 'testimonialsrotatingspeed',
		'std' => '8000',
		'type' => 'text');	
		
	$options[] = array(		
		'desc' => __('True/False Auto play Testimonials.','the-church'),
		'id' => 'testimonialsautoplay',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'True', 'false'=>'False'));			
		

	//Layout Settings
	$options[] = array(
		'name' => __('Sections', 'the-church'),
		'type' => 'heading');
			
	$options[] = array(			
		'name' => __('Four Box Services Section', 'the-church'),		
		'desc'	=> __('first Services box for frontpage section','the-church'),
		'id' 	=> 'box1',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for first box.', 'the-church'),
		'id' => 'boximg1',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Second Services box for frontpage section','the-church'),
		'id' 	=> 'box2',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for second box.', 'the-church'),
		'id' => 'boximg2',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Third Services box for frontpage section','the-church'),
		'id' 	=> 'box3',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for third box.', 'the-church'),
		'id' => 'boximg3',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
	
	$options[] = array(	
		'desc'	=> __('Fourth Services box for frontpage section','the-church'),
		'id' 	=> 'box4',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for fourth box.', 'the-church'),
		'id' => 'boximg4',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(	
		'desc'	=> __('Fifth Services box for frontpage section','the-church'),
		'id' 	=> 'box5',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for fifth box.', 'the-church'),
		'id' => 'boximg5',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(	
		'desc'	=> __('Six Services box for frontpage section','the-church'),
		'id' 	=> 'box6',
		'type'	=> 'select',
		'options' => $options_pages,
	);
	
	$options[] = array(		
		'desc' => __('upload image for six box.', 'the-church'),
		'id' => 'boximg6',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');
		
	$options[] = array(		
		'desc' => __('Select excerpt length for services four boxes section', 'the-church'),
		'id' => 'pageboxlength',
		'std' => '20',
		'type' => 'text');			
	
	$options[] = array(			
			'desc'	=> __('Check to hide above our services three column section', 'the-church'),
			'id'	=> 'hidefourbxsec',
			'type'	=> 'checkbox',
			'std'	=> '');		

	//Why our church sectiom start
	$options[] = array(	
		'name' => __('Why our church Section', 'the-church'),
		'desc'	=> __('select page for Why our church section','the-church'),
		'id' 	=> 'welcomebox',
		'type'	=> 'select',
		'options' => $options_pages,
	);

	$options[] = array(		
		'desc' => __('upload image for Why our church section', 'the-church'),
		'id' => 'welcomeimage',
		'class' => '',
		'std'	=> '',
		'type' => 'upload');		
	
	$options[] = array(		
		'desc' => __('Why our church Section Featured Shortcode', 'the-church'),
		'id' => 'welcomefeatured',
		'std' => '[features image="'.get_template_directory_uri().'/images/feature1.png" title="Gloriy God" description="Donec in metus lectu. Integer vulputate porta elit, fringilla mollis mag luctus vel." link="#"]

[features image="'.get_template_directory_uri().'/images/feature2.png" title="Believe Biblicaly" description="Donec in metus lectu. Integer vulputate porta elit, fringilla mollis mag luctus vel." link="#"]

[features image="'.get_template_directory_uri().'/images/feature3.png" title="Love Community" description="Donec in metus lectu. Integer vulputate porta elit, fringilla mollis mag luctus vel." link="#"]

[features image="'.get_template_directory_uri().'/images/feature4.png" title="Love people" description="Donec in metus lectu. Integer vulputate porta elit, fringilla mollis mag luctus vel." link="#"]

[clear]',
		'type' => 'textarea');			

	$options[] = array(			
			'desc'	=> __('Check to hide Why our church section', 'the-church'),
			'id'	=> 'hidewelcomesection',
			'type'	=> 'checkbox',
			'std'	=> ''); //Why our church sectiom end
		
	$options[] = array(
		'name' => __('Number of Sections', 'the-church'),
		'desc' => __('Select number of sections', 'the-church'),
		'id' => 'numsection',
		'type' => 'select',
		'std' => '9',
		'options' => array_combine(range(1,30), range(1,30)) );

	$numsecs = of_get_option( 'numsection', 9 );

	for( $n=1; $n<=$numsecs; $n++){
		$options[] = array(
			'desc' => __("<h3>Section ".$n."</h3>", 'the-church'),
			'class' => 'toggle_title',
			'type' => 'info');	
	
		$options[] = array(
			'name' => __('Section Title', 'the-church'),
			'id' => 'sectiontitle'.$n,
			'std' => ( ( isset($section_text[$n]['section_title']) ) ? $section_text[$n]['section_title'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section ID', 'the-church'),
			'desc'	=> __('Enter your section ID here. SECTION ID MUST BE IN SMALL LETTERS ONLY AND DO NOT ADD SPACE OR SYMBOL.', 'the-church'),
			'id' => 'menutitle'.$n,
			'std' => ( ( isset($section_text[$n]['menutitle']) ) ? $section_text[$n]['menutitle'] : '' ),
			'type' => 'text');

		$options[] = array(
			'name' => __('Section Background Color', 'the-church'),
			'desc' => __('Select background color for section', 'the-church'),
			'id' => 'sectionbgcolor'.$n,
			'std' => ( ( isset($section_text[$n]['bgcolor']) ) ? $section_text[$n]['bgcolor'] : '' ),
			'type' => 'color');
			
		$options[] = array(
			'name' => __('Background Image', 'the-church'),
			'id' => 'sectionbgimage'.$n,
			'class' => '',
			'std' => ( ( isset($section_text[$n]['bgimage']) ) ? $section_text[$n]['bgimage'] : '' ),
			'type' => 'upload');

		$options[] = array(
			'name' => __('Section CSS Class', 'the-church'),
			'desc' => __('Set class for this section.', 'the-church'),
			'id' => 'sectionclass'.$n,
			'std' => ( ( isset($section_text[$n]['class']) ) ? $section_text[$n]['class'] : '' ),
			'type' => 'text');
			
		$options[] = array(
			'name'	=> __('Hide Section', 'the-church'),
			'desc'	=> __('Check to hide this section', 'the-church'),
			'id'	=> 'hidesec'.$n,
			'type'	=> 'checkbox',
			'std'	=> '');

		$options[] = array(
			'name' => __('Section Content', 'the-church'),
			'id' => 'sectioncontent'.$n,
			'std' => ( ( isset($section_text[$n]['content']) ) ? $section_text[$n]['content'] : '' ),
			'type' => 'editor');
	}


	//SLIDER SETTINGS
	$options[] = array(
		'name' => __('Homepage Slider', 'the-church'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Inner Page Banner', 'the-church'),
		'desc' => __('Upload inner page banner for site', 'the-church'),
		'id' => 'innerpagebanner',
		'class' => '',
		'std'	=> get_template_directory_uri()."/images/inner-banner.jpg",
		'type' => 'upload');
		
		
	$options[] = array(
		'name' => __('Custom Slider Shortcode Area For Home Page', 'the-church'),
		'desc' => __('Enter here your slider shortcode without php tag', 'the-church'),
		'id' => 'customslider',
		'std' => '',
		'type' => 'textarea');		
		
	$options[] = array(
		'name' => __('Slider Effects and Timing', 'the-church'),
		'desc' => __('Select slider effect.','the-church'),
		'id' => 'slideefect',
		'std' => 'random',
		'type' => 'select',
		'options' => array('random'=>'Random', 'fade'=>'Fade', 'fold'=>'Fold', 'sliceDown'=>'Slide Down', 'sliceDownLeft'=>'Slide Down Left', 'sliceUp'=>'Slice Up', 'sliceUpLeft'=>'Slice Up Left', 'sliceUpDown'=>'Slice Up Down', 'sliceUpDownLeft'=>'Slice Up Down Left', 'slideInRight'=>'SlideIn Right', 'slideInLeft'=>'SlideIn Left', 'boxRandom'=>'Box Random', 'boxRain'=>'Box Rain', 'boxRainReverse'=>'Box Rain Reverse', 'boxRainGrow'=>'Box Rain Grow', 'boxRainGrowReverse'=>'Box Rain Grow Reverse' ));
		
	$options[] = array(
		'desc' => __('Animation speed should be multiple of 100.', 'the-church'),
		'id' => 'slideanim',
		'std' => 500,
		'type' => 'text');
		
	$options[] = array(
		'desc' => __('Add slide pause time.', 'the-church'),
		'id' => 'slidepause',
		'std' => 4000,
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slide Controllers', 'the-church'),
		'desc' => __('Hide/Show Direction Naviagtion of slider.','the-church'),
		'id' => 'slidenav',
		'std' => 'true',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Hide/Show pager of slider.','the-church'),
		'id' => 'slidepage',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Show', 'false'=>'Hide'));
		
	$options[] = array(
		'desc' => __('Pause Slide on Hover.','the-church'),
		'id' => 'slidepausehover',
		'std' => 'false',
		'type' => 'select',
		'options' => array('true'=>'Yes', 'false'=>'No'));
		
		
	$options[] = array(
		'name' => __('Slider Image 1', 'the-church'),
		'desc' => __('First Slide', 'the-church'),
		'id' => 'slide1',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider1.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 1', 'the-church'),
		'id' => 'slidetitle1',
		'std' => '<h2><span>There is no other way except Jesus</span>We believe in God</h2>',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc1',
		'std' => 'Cras metus quam, condimentum ut venen rutrum ediam et malsuada fames ac ante. Sed vehicula at r quis fringnull lobortis fermentum dignissim.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton1',
		'std' => 'READ MORE',
		'type' => 'text');	

	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl1',
		'std' => '#',
		'type' => 'text');		
		
	
	$options[] = array(
		'name' => __('Slider Image 2', 'the-church'),
		'desc' => __('Second Slide', 'the-church'),
		'class' => '',
		'id' => 'slide2',
		'std' => get_template_directory_uri()."/images/slides/slider2.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 2', 'the-church'),
		'id' => 'slidetitle2',
		'std' => '<h2><span>We come to World for Serving &amp; Sharing</span>Loving God Loving Others</h2>',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc2',
		'std' => 'Donec in metus lectus. Integer vulputate porta elittin fringilla mollis mag luctus vel. Interdum et malsuada fames ac ante ipsum primis in fauci.',
		'type' => 'textarea');	
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton2',
		'std' => 'READ MORE',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl2',
		'std' => '#',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Slider Image 3', 'the-church'),
		'desc' => __('Third Slide', 'the-church'),
		'id' => 'slide3',
		'class' => '',
		'std' => get_template_directory_uri()."/images/slides/slider3.jpg",
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 3', 'the-church'),
		'id' => 'slidetitle3',
		'std' => '<h2><span>Find Your Way Back Home</span>Hopes - Love The Lord!</h2>',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc3',
		'std' => 'Cras metus quam, condimentum ut venen rutrum ediam et malsuada fames ac ante. Sed vehicula at r quis fringnull lobortis fermentum dignissim.',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton3',
		'std' => 'READ MORE',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl3',
		'std' => '#',
		'type' => 'text');	
	
	$options[] = array(
		'name' => __('Slider Image 4', 'the-church'),
		'desc' => __('Third Slide', 'the-church'),
		'id' => 'slide4',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 4', 'the-church'),
		'id' => 'slidetitle4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc4',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton4',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl4',
		'std' => '',
		'type' => 'text');				
	
	$options[] = array(
		'name' => __('Slider Image 5', 'the-church'),
		'desc' => __('Fifth Slide', 'the-church'),
		'id' => 'slide5',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 5', 'the-church'),
		'id' => 'slidetitle5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc5',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton5',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl5',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 6', 'the-church'),
		'desc' => __('Sixth Slide', 'the-church'),
		'id' => 'slide6',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 6', 'the-church'),
		'id' => 'slidetitle6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc6',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton6',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl6',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 7', 'the-church'),
		'desc' => __('Seventh Slide', 'the-church'),
		'id' => 'slide7',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 7', 'the-church'),
		'id' => 'slidetitle7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc7',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton7',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl7',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 8', 'the-church'),
		'desc' => __('Eighth Slide', 'the-church'),
		'id' => 'slide8',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 8', 'the-church'),
		'id' => 'slidetitle8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc8',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton8',
		'std' => '',
		'type' => 'text');		
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl8',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 9', 'the-church'),
		'desc' => __('Ninth Slide', 'the-church'),
		'id' => 'slide9',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 9', 'the-church'),
		'id' => 'slidetitle9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc9',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton9',
		'std' => '',
		'type' => 'text');			
		
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl9',
		'std' => '',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Slider Image 10', 'the-church'),
		'desc' => __('Tenth Slide', 'the-church'),
		'id' => 'slide10',
		'class' => '',
		'std' => '',
		'type' => 'upload');
		
	$options[] = array(
		'desc' => __('Title 10', 'the-church'),
		'id' => 'slidetitle10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Description or Tagline', 'the-church'),
		'id' => 'slidedesc10',
		'std' => '',
		'type' => 'textarea');
		
	$options[] = array(
		'desc' => __('Read More Button Text', 'the-church'),
		'id' => 'slidebutton10',
		'std' => '',
		'type' => 'text');			
	
	$options[] = array(
		'desc' => __('Slide Url for Read More Button', 'the-church'),
		'id' => 'slideurl10',
		'std' => '',
		'type' => 'text');
	
	//Footer SETTINGS
	$options[] = array(
		'name' => __('Footer', 'the-church'),
		'type' => 'heading');
				
	$options[] = array(
		'name' => __('Footer Layout', 'the-church'),
		'desc' => __('footer Select layout. eg:Column, 1, 2, 3 and 4', 'the-church'),
		'id' => 'footerlayout',
		'type' => 'select',
		'std' => 'threecolumn',
		'options' => array('onecolumn'=>'Footer 1 column', 'twocolumn'=>'Footer 2 column', 'threecolumn'=>'Footer 3 column', 'fourcolumn'=>'Footer 4 column', 'fivecolumn'=>'Copyright Section Only',));	
				
	$options[] = array(
		'desc' => __('Select background Image for footer', 'the-church'),
		'id' => 'footerbgimage',
		'std' => get_template_directory_uri().'/images/footer-bg.jpg',
		'type' => 'upload');		


				
	$options[] = array(
		'name' => __('Footer About company Title', 'the-church'),
		'desc' => __('about company title for footer', 'the-church'),
		'id' => 'abouttitle',
		'std' => 'The church',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('About company Description', 'the-church'),
		'desc' => __('about company description for footer', 'the-church'),
		'id' => 'aboutusdescription',
		'std' => '<p>Quisque non sollicitudin urna, sed maximus tellus. Integer fringilla dolor eu mi luctus dictum. Nulla libero nunc, hendrerit quis arcu id, porttitor rutrum lectus. Suspendisse malesuada hendrerit felis a bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
<p>Aenean at orci vehicula, blandit sapien nec, imperdiet eros. Fusce mattis nulla dolor, et ullamcorper orci cursus iaculis.</p>',
		'type' => 'textarea');
		
	$options[] = array(
		'name' => __('Footer Quick link title', 'the-church'),
		'desc' => __('Add footer quick link title here', 'the-church'),
		'id' => 'quicklinktitle',
		'std' => 'Useful Links',
		'type' => 'text');	
		
	
	$options[] = array(
		'name' => __('Our Services Title', 'the-church'),
		'desc' => __('our services title.', 'the-church'),
		'id' => 'ourservicestitle',
		'std' => 'Our Services',
		'type' => 'text');	
		
	$options[] = array(
		'name' => __('latest News', 'the-church'),
		'desc' => __('Add latest news title here', 'the-church'),
		'id' => 'letestpoststitle',
		'std' => 'latest News',
		'type' => 'text');	
		
		
	$options[] = array(
		'desc' => __('Footer Copyright text', 'the-church'),
		'id' => 'copytext',
		'std' => 'Copyright &copy; 2018. All rights reserved | Design &amp; developed by <a href="'.esc_url('https://www.gracethemes.com/').'" target="_blank">Grace Themes</a>',
		'type' => 'textarea',);
		
	$options[] = array(
		'desc' => __('Footer Back to Top Button', 'the-church'),
		'id' => 'backtotop',
		'std' => '[back-to-top]',
		'type' => 'textarea',);
		
	//Contact Page
	$options[] = array(
		'name' => __('Contact Us Page', 'the-church'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Contact page details', 'the-church'),
		'desc' => __('Add contact page details here', 'the-church'),
		'id' => 'contactpagedetails',
		'std' => '[column_content type="one_half"]
	 <h2 class="section_title">Contact Details</h2>
	 [contact-details icon="fas fa-map-marker-alt" title="Address" info="10 Nr. Street Road, Ohio, USA"]
	 [contact-details icon="fas fa-phone-square" title="Contact No." info="+91 345-677-554"]
	 [contact-details icon="fas fa-envelope" title="Email Address" info="info@sitename.com"]
	 [contact-details icon="fab fa-skype" title="Skype Id" info="mysiteweb"]
	 [contact-details icon="far fa-clock" title="Working Days" info="monday-friday 10.00AM-6.00PM"]	
[/column_content]

[column_content type="one_half_last"]
<h2 class="section_title">Send Us A Message</h2>
[contactform to_email="test@example.com" title="Contact Form"]
[/column_content]',
		'type' => 'editor');
		
		

	//Short codes
	$options[] = array(
		'name' => __('Short Codes', 'the-church'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Latest News', 'the-church'),
		'desc' => __('[latest-news showposts="4" date="show" readmore="READ MORE"]', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Our Team', 'the-church'),
		'desc' => __('[our-team show="4"]', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Testimonials Rotator', 'the-church'),
		'desc' => __('[testimonials]', 'the-church'),
		'type' => 'info');	
	
	$options[] = array(
		'name' => __('Shop Product Shortcode', 'the-church'),
		'desc' => __('[recent_products per_page="4" columns="4"]', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Raised and Goal Shortcode', 'the-church'),
		'desc' => __('[raised-goal raised="Raised: $20,000.00" percentage="60.5%" goal="Goal: $50,000.00" color="#ffffff" bdcolor="#ffffff"]', 'the-church'),
		'type' => 'info');		
	
	$options[] = array(
		'name' => __('Upcoming Event Shortcode', 'the-church'),
		'desc' => __('[gt-events-coll limit="3"]', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Our Mission  Shortcode', 'the-church'),
		'desc' => __('[aboutme icon="add image here" title="CHURCH HISTORY" description="Donec in metus lectus." url="#" target="_self"]', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Sermons Icon link box Shortcode', 'the-church'),
		'desc' => __('[sermons_link icon="fas fa-link" link="#" target="_blank"]', 'the-church'),
		'type' => 'info');		

	$options[] = array(
		'name' => __('Our Donation Shortcode', 'the-church'),
		'desc' => __('[our_donation image="ADD LEFT SIDE IMAGE HERE" title="Donation for Church Renovation" content="Donec in metus lectus. Integer vulputate porta elit, fringilla mollis mag luctus vel. Interdum et malesuadaul." skillbar_bgcolor="#f0f0f0" percent="50%" percent_bgcolor="#ddb667" raised_price="$4500" goal_price="$9000" donate_button="DONATE" link="#" ]	', 'the-church'),
		'type' => 'info');	
					
	$options[] = array(
		'name' => __('Our Skills', 'the-church'),
		'desc' => __('[skill title="Adobe Photoshop" percent="90" bgcolor="#a65418"]<br />
		[skill title="WordPress" percent="60" bgcolor="#a65418"]<br />
		[skill title="Photography" percent="70" bgcolor="#a65418"]<br />
		[skill title="SEO" percent="50" bgcolor="#a65418"]', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Counter', 'the-church'),
		'desc' => __('
		[counter value="4,300" title="MODELS"]<br />
		[counter value="2,430" title="PHOTOGRAPHERS"]<br />
		[counter value="3,620" title="DANCERS"]<br />
		[counter value="1,757" title="MUSICIANS"]', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Contact Details', 'the-church'),
		'desc' => __('[contact-details icon="fas fa-map-marker-alt" title="Address" info="10 Nr. Street Road, Ohio, USA"]<br />
	 [contact-details icon="fas fa-phone-square" title="Contact No." info="+91 345-677-554"]<br />
	 [contact-details icon="fas fa-envelope" title="Email Address" info="info@sitename.com"]<br />
	 [contact-details icon="fab fa-skype" title="Skype Id" info="mysiteweb"]<br />
	 [contact-details icon="far fa-clock" title="Working Days" info="monday-friday 10.00AM-6.00PM"]	', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Our Partners', 'the-church'),
		'desc' => __('[client_lists]<br />
		[client image="Enter here client image logo url with https:" link="#"]<br />
		[client image="Enter here client image logo url with https:" link="#"]<br />
		[client image="Enter here client image logo url with https:" link="#"]<br />
		[client image="Enter here client image logo url with https:" link="#"]<br />
		[client image="Enter here client image logo url with https:" link="#"]<br />
		[/client_lists]', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Photo Gallery', 'the-church'),
		'desc' => __('[photogallery filter="true" show="8"]', 'the-church'),
		'type' => 'info');		
		
	$options[] = array(
		'name' => __('Contact Form', 'the-church'),
		'desc' => __('[contactform to_email="test@example.com" title="Contact Form"] 
', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Custom Button', 'the-church'),
		'desc' => __('[button align="center" name="Read More" link="#" target=""]', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Search Form', 'the-church'),
		'desc' => __('[searchform]', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Social Icons ( Note: More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/)', 'the-church'),
		'desc' => __('[social_area]<br />
			[social icon="fab fa-facebook-f" link="#"]<br />
			[social icon="fab fa-twitter" link="#"]<br />
			[social icon="fab fa-linkedin-in" link="#"]<br />
			[social icon="fab fa-google-plus-g" link="#"]<br />
		[/social_area]', 'the-church'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('2 Column Content', 'the-church'),
		'desc' => __('<pre>
[column_content type="one_half"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_half_last"]
	Column 2 Content goes here...
[/column_content]
</pre>', 'the-church'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('3 Column Content', 'the-church'),
		'desc' => __('<pre>
[column_content type="one_third"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_third"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_third_last"]
	Column 3 Content goes here...
[/column_content]
</pre>', 'the-church'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('4 Column Content', 'the-church'),
		'desc' => __('<pre>
[column_content type="one_fourth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fourth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fourth_last"]
	Column 4 Content goes here...
[/column_content]
</pre>', 'the-church'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('5 Column Content', 'the-church'),
		'desc' => __('<pre>
[column_content type="one_fifth"]
	Column 1 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 2 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 3 Content goes here...
[/column_content]

[column_content type="one_fifth"]
	Column 4 Content goes here...
[/column_content]

[column_content type="one_fifth_last"]
	Column 5 Content goes here...
[/column_content]
</pre>', 'the-church'),
		'type' => 'info');	

	$options[] = array(
		'name' => __('Tabs', 'the-church'),
		'desc' => __('<pre>
[tabs]
	[tab title="TAB TITLE 1"]
		TAB CONTENT 1
	[/tab]
	[tab title="TAB TITLE 2"]
		TAB CONTENT 2
	[/tab]
	[tab title="TAB TITLE 3"]
		TAB CONTENT 3
	[/tab]
[/tabs]
</pre>', 'the-church'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Toggle Content', 'the-church'),
		'desc' => __('<pre>
[toggle_content title="Toggle Title 1"]
	Toggle content 1...
[/toggle_content]
[toggle_content title="Toggle Title 2"]
	Toggle content 2...
[/toggle_content]
[toggle_content title="Toggle Title 3"]
	Toggle content 3...
[/toggle_content]
</pre>', 'the-church'),
		'type' => 'info');


	$options[] = array(
		'name' => __('Accordion Content', 'the-church'),
		'desc' => __('<pre>
[accordion]
	[accordion_content title="ACCORDION TITLE 1"]
		ACCORDION CONTENT 1
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 2"]
		ACCORDION CONTENT 2
	[/accordion_content]
	[accordion_content title="ACCORDION TITLE 3"]
		ACCORDION CONTENT 3
	[/accordion_content]
[/accordion]
</pre>', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Clear', 'the-church'),
		'desc' => __('<pre>
[clear]
</pre>', 'the-church'),
		'type' => 'info');	
		
	$options[] = array(
		'name' => __('Blank Height (space)', 'the-church'),
		'desc' => __('<pre>
[space height="20px"]
</pre>', 'the-church'),
		'type' => 'info');		

	$options[] = array(
		'name' => __('HR / Horizontal separation line', 'the-church'),
		'desc' => __('<pre>
[hr] or &lt;hr&gt;
</pre>', 'the-church'),
		'type' => 'info');
		
	$options[] = array(
		'name' => __('Subtitle', 'the-church'),
		'desc' => __('[subtitle color="#111111" size="15px" align="left" description="short descriptio here"]', 'the-church'),
		'type' => 'info');	
	
	$options[] = array(
		'name' => __('Scroll to Top', 'the-church'),
		'desc' => __('[back-to-top] 
', 'the-church'),
		'type' => 'info');

	return $options;
}