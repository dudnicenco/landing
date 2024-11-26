<?php
if ( $_POST["name"] !== null or $_POST["phone"] !== null) {
$queryUrl = 'xxx';
$queryData = http_build_query(array(
    'fields' => array(
        'TITLE' => '#2724 Плойка для локонов', 
        'NAME' => $_POST["name"],
        'PHONE' => array(
            array(
                "VALUE" => $_POST["phone"], 
                "VALUE_TYPE" => "WORK"
            )
        ),
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y")
)); 
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $queryUrl,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
curl_close($curl);}
?>

<!DOCTYPE html>
<html>

<head>
    <script>
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
    </script>
    <script src="static/jquery.min.js"></script>
            <title>Заказ принят</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" type="text/css" href="static/style.css" media="all">
    <style>
    body { margin-top: 50px }

    .gift-box {
	position: relative;
	background: #fff;
	border: 2px solid #f50000;
	max-width: 800px;
    }
    .gift-box:after, .gift-box:before {
	top: 100%;
	left: 50%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
    }

    .gift-box:after {
	border-color: rgba(136, 183, 213, 0);
	border-top-color: #fff;
	border-width: 30px;
	margin-left: -30px;
    }
    .gift-box:before {
	border-color: rgba(245, 0, 0, 0);
        border-top-color: #f50000;
        border-width: 33px;
        margin-left: -33px;
    }
    </style>

    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '704686984899783');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=704686984899783&ev=Lead&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

    

</head>

<body>

    <h1>Ваша заявка принята</h1>
    
    <!-- <h2>Спасибо за проявленный интерес!</h2> -->

    <p>
        Спасибо за Ваш заказ!<br>
        Наш оператор свяжется с Вами в самое ближайшее время. Пожалуйста, включите ваш контактный телефон.    </p>

    <table style="margin: auto">
            
        <tr>
            <th>Вы заказали</th>
            <td>
                                    <p>Плойка для локонов</p>
                            </td>
        </tr>
    
    

       

        <tr>
            <th>Имя</th>
            
            	<td><span class="x_client_name"><?php echo $_POST["name"]?></span></td>
        </tr>

        
        
        <tr>
            <th>Телефон для связи</th>
            <td><span class="x_client_phone"><?php echo $_POST["phone"]?></span></td>
        </tr>

                
    </table>
    
    
    

</body>
</html>