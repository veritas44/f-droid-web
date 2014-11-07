<?php
$stopwords = array( //{{{
	"algún",
	"alguna",
	"algunas",
	"alguno",
	"algunos",
	"ambos",
	"ampleamos",
	"ante",
	"antes",
	"aquel",
	"aquellas",
	"aquellos",
	"aqui",
	"arriba",
	"atras",
	"bajo",
	"bastante",
	"bien",
	"cada",
	"cierta",
	"ciertas",
	"cierto",
	"ciertos",
	"como",
	"con",
	"conseguimos",
	"conseguir",
	"consigo",
	"consigue",
	"consiguen",
	"consigues",
	"cual",
	"cuando",
	"dentro",
	"desde",
	"donde",
	"dos",
	"el",
	"ellas",
	"ellos",
	"empleais",
	"emplean",
	"emplear",
	"empleas",
	"empleo",
	"en",
	"encima",
	"entonces",
	"entre",
	"era",
	"eramos",
	"eran",
	"eras",
	"eres",
	"es",
	"esta",
	"estaba",
	"estado",
	"estais",
	"estamos",
	"estan",
	"estoy",
	"fin",
	"fue",
	"fueron",
	"fui",
	"fuimos",
	"gueno",
	"ha",
	"hace",
	"haceis",
	"hacemos",
	"hacen",
	"hacer",
	"haces",
	"hago",
	"incluso",
	"intenta",
	"intentais",
	"intentamos",
	"intentan",
	"intentar",
	"intentas",
	"intento",
	"ir",
	"la",
	"largo",
	"las",
	"lo",
	"los",
	"mientras",
	"mio",
	"modo",
	"muchos",
	"muy",
	"nos",
	"nosotros",
	"otro",
	"para",
	"pero",
	"podeis",
	"podemos",
	"poder",
	"podria",
	"podriais",
	"podriamos",
	"podrian",
	"podrias",
	"por",
	"porque",
	"por qué",
	"primero ",
	"puede",
	"pueden",
	"puedo",
	"quien",
	"sabe",
	"sabeis",
	"sabemos",
	"saben",
	"saber",
	"sabes",
	"ser",
	"si",
	"siendo",
	"sin",
	"sobre",
	"sois",
	"solamente",
	"solo",
	"somos",
	"soy",
	"su",
	"sus",
	"también",
	"teneis",
	"tenemos",
	"tener",
	"tengo",
	"tiempo",
	"tiene",
	"tienen",
	"todo",
	"trabaja",
	"trabajais",
	"trabajamos",
	"trabajan",
	"trabajar",
	"trabajas",
	"trabajo",
	"tras",
	"tuyo",
	"ultimo",
	"un",
	"una",
	"unas",
	"uno",
	"unos",
	"usa",
	"usais",
	"usamos",
	"usan",
	"usar",
	"usas",
	"uso",
	"va",
	"vais",
	"valor",
	"vamos",
	"van",
	"vaya",
	"verdad",
	"verdadera",
	"verdadero",
	"vosotras",
	"vosotros",
	"voy",
	"yo"
); //}}}
function sanitize($text, $stopwords) { //{{{
	$pattern_markup = "/<\/?[^>]*>/";
	$pattern = "/[^áíúéóña-z]+/";
	$result = preg_split($pattern, preg_replace($pattern_markup, '', strtolower($text)));
	return array_unique(array_diff($result, $stopwords));
};//}}}
?>
