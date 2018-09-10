	<!DOCTYPE html>
<html>
<head>
  <title>Translate</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel = "stylesheet" href = "styling.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  
  
  </style>
</head>
<body scroll="no" style="overflow: hidden">
  
<div class="container">
  <br>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand head" href="#">Translate on the go</a>
    </div>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php">Home</a></li>
      <li><a href="https://qtrial2017q1az1.az1.qualtrics.com/jfe/form/SV_9EPYuT9WzlBaaGh" target="_blank">Complete Interaction</a></li>
	  <li><a href="error.html">Report Error</a></li>
	  <li><a href="view_error.php">View Error</a></li>
    </ul>
  </div>
  </nav>
 
  <div class="col-sm-3">
    <!--<div class="panel panel-default">
      <div class="panel-heading" align="center"><div class="testing">Input</div>
      </div>
      </div>-->
   <div class="Person"><h2> Person 1 </h2></div>
   <div class="Lang_select"><h4>Select Language to translate : </h4></div>
   <form action="index.php" method="post">
    <div class="form-group">
		<select name = "tolanguage" class="Drop">
			<option value="en" selected="selected">english</option>
			<option value="fr" <?php if(@$_POST['tolanguage'] == 'fr') { echo 'selected = \"selected\"'; } ?>>french</option>
			<option value="es" <?php if(@$_POST['tolanguage'] == 'es') { echo 'selected = \"selected\"'; } ?>>Spanish</option>
			<option value="hi"<?php if(@$_POST['tolanguage'] == 'hi') { echo 'selected = \"selected\"'; } ?>>Hindi</option>
			<option value="af"<?php if(@$_POST['tolanguage'] == 'af') { echo 'selected = \"selected\"'; } ?>>Afrikaans</option>
			<option value="ar"<?php if(@$_POST['tolanguage'] == 'ar') { echo 'selected = \"selected\"'; } ?>>Arabic</option>
			<option value="bn"<?php if(@$_POST['tolanguage'] == 'bn') { echo 'selected = \"selected\"'; } ?>>Bangla</option>
			<option value="bs"<?php if(@$_POST['tolanguage'] == 'bs') { echo 'selected = \"selected\"'; } ?>>Bosnian (Latin)</option>
			<option value="bg"<?php if(@$_POST['tolanguage'] == 'bg') { echo 'selected = \"selected\"'; } ?>>Bulgarian</option>
			<option value="yue"<?php if(@$_POST['tolanguage'] == 'yue') { echo 'selected = \"selected\"'; } ?>>Cantonese (Traditional)</option>
			<option value="ca"<?php if(@$_POST['tolanguage'] == 'ca') { echo 'selected = \"selected\"'; } ?>>Catalan</option>
			<option value="zh-Hans"<?php if(@$_POST['tolanguage'] == 'zh-Hans') { echo 'selected = \"selected\"'; } ?>>Chinese Simplified</option>
			<option value="hr"<?php if(@$_POST['tolanguage'] == 'hr') { echo 'selected = \"selected\"'; } ?>>Croatian</option>
			<option value="cs"<?php if(@$_POST['tolanguage'] == 'cs') { echo 'selected = \"selected\"'; } ?>>Czech</option>
			<option value="da"<?php if(@$_POST['tolanguage'] == 'da') { echo 'selected = \"selected\"'; } ?>>Danish</option>
			<option value="nl"<?php if(@$_POST['tolanguage'] == 'nl') { echo 'selected = \"selected\"'; } ?>>Dutch</option>
			<option value="et"<?php if(@$_POST['tolanguage'] == 'et') { echo 'selected = \"selected\"'; } ?>>Estonian</option>
			<option value="fj"<?php if(@$_POST['tolanguage'] == 'fj') { echo 'selected = \"selected\"'; } ?>>Fijian</option>
			<option value="de"<?php if(@$_POST['tolanguage'] == 'de') { echo 'selected = \"selected\"'; } ?>>German</option>
			<option value="el"<?php if(@$_POST['tolanguage'] == 'el') { echo 'selected = \"selected\"'; } ?>>Greek</option>
			<option value="it"<?php if(@$_POST['tolanguage'] == 'it') { echo 'selected = \"selected\"'; } ?>>Italian</option>
			<option value="ja"<?php if(@$_POST['tolanguage'] == 'ja') { echo 'selected = \"selected\"'; } ?>>Japanese</option>
			<option value="ru"<?php if(@$_POST['tolanguage'] == 'ru') { echo 'selected = \"selected\"'; } ?>>Russian</option>
			<option value="ta"<?php if(@$_POST['tolanguage'] == 'ta') { echo 'selected = \"selected\"'; } ?>>Tamil</option>
			<option value="th"<?php if(@$_POST['tolanguage'] == 'th') { echo 'selected = \"selected\"'; } ?>>Thai</option>
			<option value="tr"<?php if(@$_POST['tolanguage'] == 'tr') { echo 'selected = \"selected\"'; } ?>>Turkish</option>
			
		</select>
      <div class="box1"><textarea placeholder="Enter Text Here" class="form-control" name="txtToTranslate" rows="6" id="comment" value="<?php $result = ""; $inputStr = ""; echo($inputStr); ?>"></textarea></div>
      <button class="left_button" type="submit" >Translate</button> 
    </div>
  </form>
  </div>
   <div class="col-sm-6">
       <p class="abc"></p>
   </div>
  <div class="col-sm-3">
   <div class="Person"><h2> Person 2 </h2></div>
   <div class="Lang_select"><h4>Select Language to translate : </h4></div>
   <form action="index.php" method="post">
    <div class="form-group">
        <select name = "tolanguage" class="Drop">
			<option value="en" selected="selected">english</option>
			<option value="fr" <?php if(@$_POST['tolanguage'] == 'fr') { echo 'selected = \"selected\"'; } ?>>french</option>
			<option value="es" <?php if(@$_POST['tolanguage'] == 'es') { echo 'selected = \"selected\"'; } ?>>Spanish</option>
			<option value="hi"<?php if(@$_POST['tolanguage'] == 'hi') { echo 'selected = \"selected\"'; } ?>>Hindi</option>
			<option value="af"<?php if(@$_POST['tolanguage'] == 'af') { echo 'selected = \"selected\"'; } ?>>Afrikaans</option>
			<option value="ar"<?php if(@$_POST['tolanguage'] == 'ar') { echo 'selected = \"selected\"'; } ?>>Arabic</option>
			<option value="bn"<?php if(@$_POST['tolanguage'] == 'bn') { echo 'selected = \"selected\"'; } ?>>Bangla</option>
			<option value="bs"<?php if(@$_POST['tolanguage'] == 'bs') { echo 'selected = \"selected\"'; } ?>>Bosnian (Latin)</option>
			<option value="bg"<?php if(@$_POST['tolanguage'] == 'bg') { echo 'selected = \"selected\"'; } ?>>Bulgarian</option>
			<option value="yue"<?php if(@$_POST['tolanguage'] == 'yue') { echo 'selected = \"selected\"'; } ?>>Cantonese (Traditional)</option>
			<option value="ca"<?php if(@$_POST['tolanguage'] == 'ca') { echo 'selected = \"selected\"'; } ?>>Catalan</option>
			<option value="zh-Hans"<?php if(@$_POST['tolanguage'] == 'zh-Hans') { echo 'selected = \"selected\"'; } ?>>Chinese Simplified</option>
			<option value="hr"<?php if(@$_POST['tolanguage'] == 'hr') { echo 'selected = \"selected\"'; } ?>>Croatian</option>
			<option value="cs"<?php if(@$_POST['tolanguage'] == 'cs') { echo 'selected = \"selected\"'; } ?>>Czech</option>
			<option value="da"<?php if(@$_POST['tolanguage'] == 'da') { echo 'selected = \"selected\"'; } ?>>Danish</option>
			<option value="nl"<?php if(@$_POST['tolanguage'] == 'nl') { echo 'selected = \"selected\"'; } ?>>Dutch</option>
			<option value="et"<?php if(@$_POST['tolanguage'] == 'et') { echo 'selected = \"selected\"'; } ?>>Estonian</option>
			<option value="fj"<?php if(@$_POST['tolanguage'] == 'fj') { echo 'selected = \"selected\"'; } ?>>Fijian</option>
			<option value="de"<?php if(@$_POST['tolanguage'] == 'de') { echo 'selected = \"selected\"'; } ?>>German</option>
			<option value="el"<?php if(@$_POST['tolanguage'] == 'el') { echo 'selected = \"selected\"'; } ?>>Greek</option>
			<option value="it"<?php if(@$_POST['tolanguage'] == 'it') { echo 'selected = \"selected\"'; } ?>>Italian</option>
			<option value="ja"<?php if(@$_POST['tolanguage'] == 'ja') { echo 'selected = \"selected\"'; } ?>>Japanese</option>
			<option value="ru"<?php if(@$_POST['tolanguage'] == 'ru') { echo 'selected = \"selected\"'; } ?>>Russian</option>
			<option value="ta"<?php if(@$_POST['tolanguage'] == 'ta') { echo 'selected = \"selected\"'; } ?>>Tamil</option>
			<option value="th"<?php if(@$_POST['tolanguage'] == 'th') { echo 'selected = \"selected\"'; } ?>>Thai</option>
			<option value="tr"<?php if(@$_POST['tolanguage'] == 'tr') { echo 'selected = \"selected\"'; } ?>>Turkish</option>
		</select>
        <div class="box2"><textarea placeholder="Enter Text Here" class="form-control" name="txtToTranslate" rows="6" id="comment2" value="<?php $inputStr = ""; echo($inputStr); ?>"></textarea></div>
      <button class="right_button" type="submit">Translate</button>
    </div>
  </form>
      <p> </P>
  </div>    
</div>

</body>
</html>


		
		
		<?php

// NOTE: Be sure to uncomment the following line in your php.ini file.
// ;extension=php_openssl.dll

// **********************************************
// *** Update or verify the following values. ***
// **********************************************

// Replace the subscriptionKey string value with your valid subscription key.

if('POST' == $_SERVER['REQUEST_METHOD'])
{

$key = 'YOUR_KEY';

$host = "https://api.microsofttranslator.com";
$path = "/V2/Http.svc/Translate";

//$target = "hi";
$inputStr     = $_POST["txtToTranslate"];
$text = "Hello";
$inputlanguage = $_POST["tolanguage"];

//$params = '?to=' . $target . '&text=' . urlencode($inputStr);

$params = '?to=' . $inputlanguage . '&text=' . urlencode($inputStr);

$content = '';



function Translate ($host, $path, $key, $params, $content) {

    $headers = "Content-type: text/xml\r\n" .
        "Ocp-Apim-Subscription-Key: $key\r\n";

    // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
    // http://php.net/manual/en/function.stream-context-create.php
    $options = array (
        'http' => array (
            'header' => $headers,
            'method' => 'GET'
        )
    );
    $context  = stream_context_create ($options);
    $result = file_get_contents ($host . $path . $params, false, $context);
    return $result;
}

$result = Translate ($host, $path, $key, $params, $content);
}
//echo $result;
?>
	<p><h1>&nbsp;&nbsp;&nbsp;Translated Text: &nbsp; <?php echo($result);  ?></h1></p>
		
		
    </body>
</html>



