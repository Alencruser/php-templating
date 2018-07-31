<?php 
require_once "vendor/autoload.php";

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' =>false));
$faker = Faker\Factory::create('fr_FR');
echo $twig->render('index.twig.html',[
	'company'=>$faker->company,
	'catchphrase'=>$faker->catchPhrase,
	'bs'=>$faker->word,
	'product'=>$faker->word,
	'material'=>$faker->word,
	'url'=>$faker->url,
	'src'=>$faker->imageUrl(400, 200, 'cats'),
	'color'=>$faker->colorName,
	'price'=>$faker->biasedNumberBetween($min = 0, $max = 1000, $function = 'sqrt'),
	'img'=>$faker->imageUrl(200, 200, 'cats'),
	'user'=>$faker->userName,
	'job'=>$faker->jobTitle,
	'mail'=>$faker->freeEmail,
	'phone'=>$faker->phoneNumber,
	'street'=>$faker->streetAddress,
	'postcode'=>$faker->postcode,
	'city'=>$faker->city
]);
 ?>