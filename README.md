# Emaillistvalidation-PHP

The verification API allows email addresses to be validated in your existing application during operations such as registration or user validation.

This API created for verify one email address per one api request, for example if you need to verify three emails - you need to request api three times. It's very simple to check "[email]", see in "one_by_one.php" example code

============================================================================================================== For information about status response please visit the page http://www.emaillistvalidation.com/documentation/

also for bulk verification you can use "bulk_email_verification.php" example code

This tool created for customers that want to upload emails list and download results in automatic mode. For example if you using bulk verification tool you need to: login to our service, open upload form, choose file, wait until file will be finished, download results. But this API allow to do this work for your software in fully automatic mode without login to site.

How it works:

your software uploading file with emails to our API and getting {file_id} as result

your software checking status of file by {file_id} (once per 10 minutes for example)

when status of file is "finished", your software downloading reports

============================================================================================================== For more information please visit the page http://www.emaillistvalidation.com/documentation/
