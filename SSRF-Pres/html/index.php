<?php
    if(isset($_GET['r'])) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $_GET['r']);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
    }

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>SSRF - PHP Lab</title>
    </head>

    <body>
        <h2>Server Side Request Forgery</h2>
        <br><br>
        <ul>
        <li>http://172.23.0.5/?r=</li>
        <li>http://localhost</li>
        <li>http://localhost:8081</li>
        <li>http://localhost:5000</li>
        <li>http://localhost:6000</li>
        <li>file:///localhost/example.txt</li>
        <li>http://admin:password@172.23.0.4:5984/_all_dbs</li>
        <li>http://admin:password@172.23.0.4:5984/ssrf-app/_all_docs</li>
        <li>http://admin:password@172.23.0.4:5984/ssrf-app/{doc_id}</li>
        </ul>
        <div>
            <p>Enter a URI to fetch</p>

            <form method="GET" action="#">
            <span>IP: 
                <input name="r" type="text" placeholder="uri://example.com" />
                <input type="submit" />
            </span>
            
            </form>
        </div>  

        <pre>
            
        <?php
            if(isset($_GET['r'])) {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $_GET['r']);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
            }
        ?>

        </pre>
    </body>

</html>
