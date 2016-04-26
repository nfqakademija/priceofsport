<?php

namespace  ImportBundle\Checker;

class GetPageContent {

    /**
     *  Checks if URL exists
     *  Checks if URL is redirected to other page
     *  Fetches original URL
     *
     * @param $url
     * @return null
     */
    public function getProperUrl($url)
    {
        $file = $url;
        $file_headers = @get_headers($file);
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
            echo "This page does not exist!";
            return null;
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


        curl_setopt($ch, CURLOPT_URL, $url);
        $out = curl_exec($ch);

        $out = str_replace("\r", "", $out);

        $headers_end = strpos($out, "\n\n");
        if( $headers_end !== false ) {
            $out = substr($out, 0, $headers_end);
        }

        $headers = explode("\n", $out);

        foreach($headers as $header) {
            if( substr($header, 0, 10) == "Location: " ) {
                $url = substr($header, 10);
                break;
            }
        }

        curl_close($ch);

        return $url; //return url if everything is ok
    }

}

