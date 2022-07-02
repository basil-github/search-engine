require '../vendor/autoload.php';
use SearchEngine\Search;
  
 $API_KEY = '2c54d041e114cc735ffce35de8c2b24ae0133602c900cd70ac8b7cc83e4e9db6';
    $DOMAIN = 'google.com';
$query = ['Basil', 'Tea'];
    $client = new Search($API_KEY, $DOMAIN);
$results = $client->search(\$query);
