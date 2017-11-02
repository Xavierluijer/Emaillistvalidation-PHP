<!-- upload the file -->
$key = "PUT YOUR API KEY HERE";
$settings['file_contents'] ="@/home/Downloads/emails.txt"; //path to your file
$url = 'https://apps.emaillistvalidation.com/api/verifApiFile?secret='.$key.'&filename=my_emails.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $settings);
$file_id = curl_exec($ch); //you need to save this FILE ID for get file status and download reports in future
curl_close($ch);


<!-- download ready file -->
$key = "PUT YOUR API KEY HERE";
            $url = 'https://apps.emaillistvalidation.com/api/getApiFileInfo?secret='.$key.'&id=10700';
            $string = file_get_contents($url);
            list($file_id,$filename,$unique,$lines,$lines_processed,$status,$timestamp,$link1,$link2) = explode('|',$string); //parse data
