/**
 * @package nmCAPTCHA2
 * @author Bill Newman <williamnewman@gmail.com>
 * @author Sara Newman <saranewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see test.php  
 * @see include/config.php
 * @see include/simple.php
 * @see include/multiple.php  
 * @todo none
 */

This example provides a test file named test.php, which allows one of two PHP include files, named simple.php or multiple.php, which are forms wired to google's reCAPTCHA2 API, to email info to your client from their website, eliminating form spam. 

Google's reCAPTCHA2 service allows us to connect and serve up the reCAPTCHA images and verify we have a human entering data.

INSTALLATION: The main installation steps can be outlined as follows:

1) Verify Site Keys in include file config.php
2) Add Client name & email in either include file simple.php or multiple.php
3) Check to be sure correct file is included (simple.php or multiple.php) in the file test.php
4) Test the file test.php to be sure it can send an email successfully
5) Move the include file reference simple.php or multiple.php to your website file that requires a form
6) (optional) Edit or change simple.php or multiple.php to meet your needs and test

SITE KEYS: If you're using Seattle Central's Edison server, you won't need to edit the API keys inside config.php.  However, to use this code on other servers you'll need to get a pair of API keys and load them into the variables in the include file, config.php.

Below are the keys for the server: seattlecentral.edu

$siteKey = "6Lf8FMkSAAAAAIR0DTQO4f0zjP-hlyBVcVTjRNB-";
$secretKey = "6Lf8FMkSAAAAAKsfveeLDuVJBWTNOm8PvRqL9lNm";

BACKGROUND: The main file we have which interacts with google's reCAPTCHA2 service is named contact_include.php.  This file provides the code that supports simple.php and multiple.php

EDITING simple.php & multiple.php: In these forms, only the form elements 'Email' and 'Name' are significant.  Any other form elements added, with any name or type (radio, checkbox, select, etc.) will be delivered via email with user entered data.  

Form elements named with underscores like: "How_We_Heard" will be replaced with spaces to allow for a better formatted email:

 How We Heard: Internet

If checkboxes are used, place "[]" at the end of each checkbox name, or PHP will not deliver multiple items, only the last item checked:

<input type="checkbox" name="Interested_In[]" value="New Website" /> New Website <br />
<input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
<input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />

Place your target email in the $toAddress variable.




