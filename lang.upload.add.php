<?php
/*
Author: Fabrizio Giordano
To be done:
- add external conf file

*/

$product = $argv[1];
$country = $argv[2];
$language = $argv[3];
$csvColumn = $argv[4];
$csvKeyColumn = $argv[5];
$multiLingual = $argv[6];

$csvs = array(
		"fingerbooks" 	=> 'https://docs.google.com/spreadsheet/pub?key=0AoVR4wFeDQrYdDVReEY0MVBmajB3TXhhaFF4TzF6MEE&single=true&gid=5&output=csv',
		"gossipsalad" 	=> 'https://docs.google.com/spreadsheet/pub?key=0AoVR4wFeDQrYdFo3QWxOVVpxUFVOb3IxZTBhc1F3OEE&single=true&gid=5&output=csv',
		"muchgossip"	=> 'https://docs.google.com/spreadsheet/pub?key=0AoVR4wFeDQrYdHZvbl9rRmE5YnJSbkZUZF9YaXg3WEE&single=true&gid=5&output=csv',
		"playplanet"	=> 'https://docs.google.com/spreadsheet/pub?key=0AoVR4wFeDQrYdG0tV21nSC1IZW5qWkEyYWhFSHJCcGc&single=true&gid=5&output=csv',
		"blinko"		=> 'https://docs.google.com/spreadsheet/pub?key=0AoVR4wFeDQrYdHN4YTdKY1pPYVAtd1I1V1N1N2p0RFE&single=true&gid=5&output=csv',
		"cellybean"		=> 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdGc2OW55dFd4WmlTQVpMZXRyOGtmTkE&single=true&gid=0&output=csv',
                "smartmotime"             => 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdGc2OW55dFd4WmlTQVpMZXRyOGtmTkE&single=true&gid=0&output=csv',
                "blinkogold"             => 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdGc2OW55dFd4WmlTQVpMZXRyOGtmTkE&single=true&gid=0&output=csv',
                "ilovemusic"             => 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdGc2OW55dFd4WmlTQVpMZXRyOGtmTkE&single=true&gid=0&output=csv',
		"ifortuneapp" 	=> 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdExNU1BEZXVmQmQ3UHdKVGltM3FkV2c&output=csv',
		"ifortune"	=> 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdExNU1BEZXVmQmQ3UHdKVGltM3FkV2c&output=csv',
		"goldgamifive"	=> 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdEFEX1Z1ajZva01JaGxKcC1aTGxQdWc&single=true&gid=0&output=csv',
		"play" => 'https://docs.google.com/spreadsheet/pub?key=0ArGUjN82xqFSdGFDMnBHZFhJdVBEYzBYc0piUHdMdGc&single=true&gid=0&output=csv'
);

$csv = $csvs[$product];
$lang = $country."_".$country."_".$product.($multiLingual ? "_".$multiLingual : "");
$translationindex = $csvColumn;
$keyindex = $csvKeyColumn;
$dict = $language."-".$country."-".$country."_".$product;
$nation = $lang;

echo "\n";
echo "\n";
echo "csv file ".$csv."\n";
echo "lang ".$lang."\n";
echo "translation index ".$translationindex."\n";
echo "key index ".$keyindex."\n";
echo "dictonary ".$dict."\n";
echo "nation ".$nation."\n";
echo "\n";
echo "\n";


#$lang              = 'ca_ca_fingerbooks_eng';  //Lingua
#$translationindex  = 3;           							//Colonna del file csv
#$keyindex          = 1;                   			//Colonna della chiave della lingua

//$lang              = 'it_it_fingerbooks';      	//Lingua
//$translationindex  = 2;            							//Colonna del file csv
//$keyindex          = 1;                    			//Colonna della chiave della lingua
//$dict              = 'it-it-it_fingerbooks';   	//Stampa dizionario
//$nation            = 'it_it_fingerbooks';    		//Stampa dizionario

#$lang              = 'us_us_gossipsalad_eng';  //Lingua
#$translationindex  = 2;            						//Colonna del file csv
#$keyindex          = 1;                    		//Colonna della chiave della lingua
#$dict              = 'en-us-us_fingerbooks';   //Stampa dizionario
#$nation            = 'us_us_gossipsalad_eng';  //Stampa dizionario

#$lang              = 'ca_ca_muchgossip_eng';   //Lingua
#$translationindex  = 2;            						//Colonna del file csv
#$keyindex          = 1;                    		//Colonna della chiave della lingua
#$dict              = 'en-ca-ca_muchgossip';   	//Stampa dizionario
#$nation            = 'ca_ca_muchgossip_eng';   //Stampa dizionario

#$lang              = 'us_us_playplanet_eng';  	//Lingua
#$translationindex  = 2;            						//Colonna del file csv
#$keyindex          = 1;                    		//Colonna della chiave della lingua
#$dict              = 'en-us-us_playplanet';   	//Stampa dizionario
#$nation            = 'us_us_playplanet_eng';  	//Stampa dizionario

#$lang              = 'fr_fr_blinko';  	//Lingua
#$translationindex  = 2;            						//Colonna del file csv
#$keyindex          = 1;                    		//Colonna della chiave della lingua
#$dict              = 'fr-fr-fr_blinko';   	//Stampa dizionario
#$nation            = 'fr_fr_blinko';  	//Stampa dizionario

// $lang              = 'ca_ca_cellybean_eng';   //Lingua
// $translationindex  = 2;                                                        //Colonna del file csv
// $keyindex          = 1;                                //Colonna della chiave della lingua
// $dict              = 'en-ca-ca_cellybean';        //Stampa dizionario
// $nation            = 'ca_ca_cellybean_eng';   //Stampa dizionario

$keys = array();
$counter = 1;
include 'clicolor.php';
$colors = new Colors();
echo $colors->getColoredString("Pubblica la lingua: $lang", "green", "light_green") . "\n";

//get($csv, $lang); die;
push($lang, $csv, $dict, $nation); die;
//printdictionary($dict,$nation); die;
//update($lang, 'FINGER_TIPS_AUTHOR', 'blabla', 1,1);

function get($csv, $lang) {
	file_put_contents($lang.'.txt', file_get_contents($csv));
	$row = 1;
	if (($handle = fopen($lang.'.txt', 'r')) !== FALSE) {
		while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
			if($row == 3) break;
			$num = count($data);
			echo "$num fields in line $row:\n";
			$row++;
			for ($c=0; $c < $num; $c++) {
				echo $c . ': ' . $data[$c] . "\n";
			}
		}
		fclose($handle);
	}
}

function push($lang, $csv, $dict, $nation) {
	global $counter, $keyindex, $translationindex;
	file_put_contents($lang.'.txt', file_get_contents($csv));
	$lines = count(file($lang.'.txt'));
	if (($handle = fopen($lang.'.txt', 'r')) !== FALSE) {
		$row = 1;
		while (($data = fgetcsv($handle, 10000, ",")) !== FALSE) {
			if($row == 1) { $row=2; continue; }
			echo $counter.'/'.$lines.' '; $counter++;
			#var_dump($data);die;
			update($lang,$data[$keyindex],$data[$translationindex], $dict, $nation);
		}
		fclose($handle);
		printdictionary($dict,$nation);
	}
}

//update('ca_ca_fingerbooks_eng', 'FINGER_LOGIN_USER_NOT_FOUND', 'User not found: verify username and password'); die;
function update($lang, $key, $translation, $dict, $nation) {
	#echo $lang.' - '.$key.' - '.$translation.' - '.$dict.' - '.$nation."\n"; return;
	global $colors, $keys;

	$key = trim($key);

	if(empty($key)){
		echo $colors->getColoredString("KEY: vuota, salto questa key", "brown", "light_gray") . "\n";
		return;
	}

	if(empty($translation)){
		echo $colors->getColoredString("$key: vuota salto questa traduzione", "cyan") . "\n";
		return;
	}

	if(in_array($key, $keys)) {
		echo $colors->getColoredString("$key: ", "yellow").$colors->getColoredString("gia' caricata", "yellow") . "\n";
		return;
	}
	$keys[] = $key;

	$submit_url = 'https://admin.dadanet.it/dictionary/index.php/main/browse/general/'.$lang.'?phrase=&key='.$key.'&notes=';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $submit_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ;
	curl_setopt($curl, CURLOPT_USERPWD, $_ENV["DADAUSER"].':'.$_ENV["DADAPWD"]);
	curl_setopt($curl, CURLOPT_SSLVERSION,3);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_HEADER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	//curl_setopt($curl, CURLOPT_POSTFIELDS, $params );
	$html = curl_exec($curl);
	$htmlinfo = curl_getinfo($curl);
	//var_dump($html);
	//var_dump($htmlinfo);
	curl_close($curl);

	$pattern = '/<input type="hidden" name="form_id" value="'.$key.':'.$lang.'">(.*)<input type="button" value="Undo"/ismU';
	preg_match_all($pattern,$html,$form); #var_dump($form);

	$pattern = '/<input type="hidden" name="(.*)" value="(.*)">/ismU';
	preg_match_all($pattern,$form[0][0],$matcha); #var_dump($matcha);

	$pattern = '/<input type="hidden" value="(.*)" name="(.*)"/ismU';
	preg_match_all($pattern,$form[0][0],$matchb); #var_dump($matchb);

	$current = html_entity_decode($matchb[1][0]);
	$current = preg_replace_callback("/(&#[0-9]+;)/", function($m) { return mb_convert_encoding($m[1], "UTF-8", "HTML-ENTITIES"); }, $current);

	if($current == $translation){
		echo $colors->getColoredString("$key:", "light_purple").$colors->getColoredString(" le traduzioni combaciano", "purple", "light_purple") . "\n";
		return;
	}

	$submit_url = 'https://admin.dadanet.it/dictionary/index.php/main/update';
	$params = array(
		$matcha[1][1] => $matcha[2][1],  //'form_id' => FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng
		$matcha[1][2] => $matcha[2][2],  //'lang' => ca_ca_fingerbooks_eng
		$matcha[1][3] => $matcha[2][3],  //'id' => 444944
		$matcha[1][4] => $matcha[2][4],  //'rif_id' => 27179

		$matchb[2][0] => $matchb[1][0],  //'previous_translation' => User not found: verify username and password
		$matchb[2][1] => $matchb[1][1],  //'previous_notes' =>

		'translation' => $translation,
		'notes' => ''
	);

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $submit_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ;
	curl_setopt($curl, CURLOPT_USERPWD, $_ENV["DADAUSER"].':'.$_ENV["DADAPWD"]);
	curl_setopt($curl, CURLOPT_SSLVERSION,3);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($params) );

	$html = curl_exec($curl);
	$htmlinfo = curl_getinfo($curl);
	//var_dump($html);
	//var_dump($htmlinfo);
	curl_close($curl);

	if($html == 'translation updated') {
		echo $colors->getColoredString("$key:", "light_green", "white").$colors->getColoredString(" translation updated", "green", "light_green") . "\n";
		echo '     From:'.$matchb[1][0]."\n";
		echo '       To:'.$translation."\n";

		return $html;
	}
	else {
		echo "\n\n\n";
		echo $colors->getColoredString("ERRORE $key non definita", "light_red", "read")."\n";
		echo $colors->getColoredString("$html", "red", "light_read")."\n";

		addKey($lang, $key, $translation, $dict, $nation);
	}
return;
}

function addKey($lang, $key, $translation, $dict, $nation) {
	global $colors, $keys;
	echo "\n\n\n";
	echo "Add new key to GENERAL\n\n";

	$postUrl = "https://admin.dadanet.it/dictionary/index.php/main/addkey";
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $postUrl);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC) ;
	curl_setopt($curl, CURLOPT_USERPWD, $_ENV["DADAUSER"].':'.$_ENV["DADAPWD"]);
	curl_setopt($curl, CURLOPT_SSLVERSION,3);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	curl_setopt($curl, CURLOPT_POSTFIELDS, "key_to_add=$key&page=general&_=");

	$htmlPost = curl_exec($curl);
	$htmlPostinfo = curl_getinfo($curl);
	//var_dump($html);
	//var_dump($htmlinfo);
	curl_close($curl);

	if ($htmlPost == "key $key added to page general") {
		$resPost = print_r($htmlPostinfo, true);
		//echo $htmlPost." with ".$resPost."\n\n";
		echo "Now go to update value ... ";
		if( ($k = array_search($key, $keys)) !== false ) {
		    unset($keys[$k]);
		}
		$html = update($lang, $key, $translation, $dict, $nation);

		if($html == 'translation updated') {
			echo $colors->getColoredString("$key:", "light_green", "white").$colors->getColoredString(" translation updated", "green", "light_green") . "\n";
			echo '     From:'.$matchb[1][0]."\n";
			echo '       To:'.$translation."\n";
		}
		else {
			echo "$html    VERY BAD PROBLEM\n\n";
		}

	}
	else {
		echo $key." not created, something went wrong... Sorry!\n\n\n";
	}
}

function printdictionary($dict, $nation) {
	global $colors;
	$submit_url = 'https://admin.dadanet.it/dictionary/crea_dizionari.php?dict='.$dict.'&nation='.$nation.'&page=all&_=';
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $submit_url);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ;
	curl_setopt($curl, CURLOPT_USERPWD, $_ENV["DADAUSER"].':'.$_ENV["DADAPWD"]);
	curl_setopt($curl, CURLOPT_SSLVERSION,3);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
	#curl_setopt($curl, CURLOPT_HEADER, true);
	#curl_setopt($curl, CURLOPT_POST, true);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
	#curl_setopt($curl, CURLOPT_POSTFIELDS, $params );
	$html = curl_exec($curl);
	$htmlinfo = curl_getinfo($curl);
	#var_dump($html);
	#var_dump($htmlinfo);
	curl_close($curl);

	if(preg_match('/dict/', $html)) {
		echo $colors->getColoredString("dizionario stampato", "yellow")."\n";
	}
	else {
		echo $colors->getColoredString("DIZIONARIO NON STAMPATO", "red", "light_read")."\n";
	}
}





/*
<input type="hidden" name="form_id" value="FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng">
<input type="hidden" name="lang" value="ca_ca_fingerbooks_eng">
<input type="hidden" name="id" value="444944">
<input type="hidden" name="rif_id" value="27179">
<input type="hidden" value="User not found: verify username and password" name="previous_translation" id="previous_translation:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng">
<input type="hidden" value="" name="previous_notes" id="previous_notes:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng">
<input type="button" value="Undo" onclick="$('translation:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng').value=$('previous_translation:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng').value; $('notes:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng').value=$('previous_notes:FINGER_LOGIN_USER_NOT_FOUND:ca_ca_fingerbooks_eng').value;">
<input type="submit" value="Update">
*/
