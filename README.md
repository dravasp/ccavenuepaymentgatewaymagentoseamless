CCAvenue Internet Payment Gateway Module for Magento 2.4x
============================================================
![CCAvenue Infibeam Avenues Ltd. Internet Payment Gateway Module for Magento 2.4x optimised for aws Bitnami - Partner Affiliate Marketing - WE SKY PRINT LLP](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/assets/27689043/020044ee-e213-4f1c-b1b0-6e63ad1c9288)

[![GitHub issues](https://img.shields.io/github/issues/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/issues)
[![GitHub forks](https://img.shields.io/github/forks/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/network)
[![GitHub stars](https://img.shields.io/github/stars/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/ccavenuepaymentgatewaymagentoseamless)
![Badge](https://img.shields.io/badge/Adobe%20Magento%20Commerce-on%20awsCloud%20Bitnami-blue)
![Github language](https://img.shields.io/github/languages/code-size/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![Packagist](https://img.shields.io/packagist/stars/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![YouTube Channel](https://img.shields.io/youtube/channel/subscribers/UCv-tdY7OFWk_f1JP4_hmS5A)
![Github Followers](https://img.shields.io/github/followers/dravasp?style=social)

Install using SSH
```
cd /opt/bitnami/magento
composer require dravasp/ccavenuepaymentgatewaymagentoseamless:dev-master
sudo magento-cli setup:upgrade
```
Login to Magento Admin > Configuration > Sales > Payment Methods

Instructions:
==================

[] Fill up CCAvenue integration form - Ref. to `https://www.ccavenue.com/merchant_onboarding_requisites.jsp` for Merchant Onboarding Requisites
  - Login to your CCAvenue Account and Go to My Account > Integration
  - Connect with your Dedicated Account Manager at CCAvenue
  - `Complete KYC and Request Approval for Live Keys`

[] Changes for going Live.
  - Insert your (variables) `Merchant ID` + `Access Code` + `Encyrption Key for Production Environment` in Stores > Configrations > Sales > Payment Methods > CCAvenue

[] Enabling the module and configuring it with your CCAvenue Merchant credentials
  - Login to your Magento Admin and go to Store > Configuration.
  - On the left side bar, scroll down and click on "Payment Method" under the Sales section.
  - Scroll down the page and "Enable" the CCAvenue module.
  - On the same page, click on "Payment Methods" on the sidebar under the section "SALES".
  - On this page, a "CCAvenue MCPG" section will appear. Click on it if its not already open.
  - Add your Merchant ID + Access Code + Encyrption Key here. Also specify sandbox to "NO" Always. 
    click "Save Config".
    Additionally, if you want that only buyers from particular country or countries should be able to use CCAvenue,  
    against the "Payment Applicable From" field, select "Specific Countries" and then select the countries in the box
    that opens up. In order to select more than one country, you will need to click on the countries with ctrl key of the 
    keyboard pressed. Sort Order field determines in which order CCAvenue will be displayed to the buyer during checkout.
   
[] Testing CCAvenue 
  - Make sure that sandbox mode is on and all details are entered in the CCAvenue configuration
  - Go to your store and place an order. 
  - If you configured CCAvenue correctly in the previous step, it should appear as an option under payment methods
    during checkout
  - When you click on checkout, it should redirect you to ccavenuepaymentgateway and show credit card and netbanking form. 
  - Use a Netbanking to complete a test payment. On Live Mode, your preferred Acceptance Modes will be Visible - CC, DC, Wallets, Netbanking
  - All banks netbanking are not activated by default - Usually takes 48-76 hours to activate all preferred partner banks.
  - VAS Team along with Dedicated Account Manager will email list of available banks for Netbanking

[] Checking the status of payment transaction at CCAvenue Dashboard from your Magento Admin
  - Login to admin and under Sales, click on Orders
  - Click on the first order in the data grid. This should be the order that you just placed
  - When the order details page opens up, look for "Payment Information" block. 
    Inside the block, you can see the latest status of the transaction on CCAvenue end. 

[] Corporate Office Address  - Payment Gateway with Global Presence
```
  - Infibeam Avenues Limited (India - IN) 
    - Mumbai Office - Level II, Plaza Asiad, S. V. Road, Santa Cruz (West), Mumbai - 400054. Maharashtra, India.
		+91 22 35155072
```
  - Ahmedabad Office - 28th Floor, Gift Two Tower, Block No. 56, Road 5C, Zone 5, Gift City, Gandhinagar - 382355. Gujarat, India
  - Pune Office - TRIOS CoWorkplace, Mont Vert Spectra, Office #106, 3rd floor, Opp. Hotel Wadeshwar, Baner Rd, Pallod farms, Baner, Pune - 411045, India
  - Delhi Office - Insta Office B-39, Near PVR Plaza, Block B, Connaught Place, New Delhi - 110001, India
  - Bengaluru Office - Narayan Reddy Complex, 3rd Floor, Cornor Woods, Opp Vaibhav Theatre, Above Karnataka Bank, Sanjay Nagar, Bangalore - 5600094, India
  - Chennai Office - HQ10 CoWorking Office, Bristol IT Park, Plot No. 10, 4th Floor, South Phase, Thiru.vi.Ka Industrial Estate, Guindy, Chennai - 600032, India

  - Avenues World FZ LLC (United Arab Emirates - UAE)
```
  - Dubai Office - Avenues World FZ LLC
	- Dubai Internet City Building # 17, Level 2, Office # 253 Opp. DIC Metro Station (seaside), P.O. Box 500416, Dubai, United Arab Emirates
		+971 4 5531029
```
  - Infibeam Avenues Saudi Arabia For Information Systems Technology Co. (Kingdom of Saudi Arabia - k.s.a)
	- Riyadh Office - Unit No. 2, First Floor, Alakhwin Building, Al Amir Abdulaziz Ibn Musaid Ibn Jalawi, Al Murabba, 12613, Riyadh, Kingdom of Saudi Arabia.
		+966 55 024 6031

  - AI Fintech Inc. (United States of America - USA)
	- New York Office - One Penn Plaza 36th Floor - New York 10119, US

[] Important Emails for Corporate Communications and Risk Assessment
	- Marketing `contact@ccavenue.com` / Technical `service@ccavenue.com` / Account `accounts@ccavenue.com` / Cardholder - Risk `risk@ccavenue.com`
 
[] Install using `composer require dravasp/ccavenuepaymentgatewaymagentoseamless:dev-master`
  - Please Do Not Run composer with sudo or install in project root directory / Please Do Not Upload Static Files to Webserver.
  - Request Integration Support or Seek Guidance from Repo Maintainers
```   
  - Sandbox URL Set - https://test.ccavenue.com/transaction.do?command=initiateTransaction (default-payload)
  - Alternate Sub-set URL - https://qasecure.ccavenue.com/transaction.do?command=initiateTransaction (Currently Enabled)
  - Production URL Set - https://secure.ccavenue.com/transaction.do?command=initiateTransaction (Currently Enabled)
```
  - For Testing UAT run 
		md5 <filename>

  - Example
	md5 /opt/bitnami/magento/var/log/system.log
	inside SSH Terminal to provide verification to VAS Team
	
  - One-page Checkout Enabled for Magento Commerce OS - Bitnami

CCAvenue India for Business
=========================================================================================

Presenting CCAvenue Merchant App - the most advanced omni-channel payments platform, designed to track all your transactions on the go and request for payments via LinkPay & QRPay in a jiffy.

<a href="https://apps.apple.com/in/app/ccavenue-india-for-business/id1607808934?itsct=apps_box_badge&amp;itscg=30200" style="display: inline-block; overflow: hidden; border-radius: 5px; width: 14%; height: 3%"><img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/en-us?size=250x83&amp;releaseDate=1689465600" alt="Download onthe App Store" style="display: inline-block; overflow: hidden; border-radius: 5px; width: 14%; height: 3%"></a>

```
The CCAvenue App makes it easy to track your business performance and manage it effectively even on the move.

With our 100% digital KYC, you get on-boarded instantly and can start accepting payments within minutes at zero cost.
CCAvenue offers payment solutions that suit all types of businesses, be it private or public limited company,
shop owners, teachers, doctors, freelancers or home business owners.
You can go cashless and receive payments through 200+ payment options including credit card, debit card, Netbanking, UPI, wallets & more.
Accepting payments is now simpler, easier & faster.

Accept Payments Instantly via:

CCAvenue LinkPay:
Create & share payment links with customers via SMS, Email or WhatsApp & receive payments immediately with just a single click!

CCAvenue QRPay:
Offer secure & contactless payments with CCAvenue QR, UPI QR or Bharat QR.
Google Play and the Google Play logo are trademarks of Google LLC.
Your customers can simply scan & pay via any UPI enabled App. Contact Email : contact@ccavenue.com
```
<a href="https://play.google.com/store/apps/details?id=com.ccavenue.mars.mobile&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1" style="display: inline-block; overflow: hidden; border-radius: 5px; width: 18%; height: 45%"><img alt='Get it on Google Play' src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" style="display: inline-block; overflow: hidden; border-radius: 5px; width: 18%; height: 45%"></a>



You will now be able to integrate CCAvenue with your existing Merchant Services Account of choice where you host your Merchant Account

Merchant Account or Cash Collection Service Account with India's Leading Banks allow high order value or high frequency volume (recurring trxns.) - 
```SBI Cards & Payment Services Limited (formerly known as SBI Cards & Payment Services Private Limited) / SBIePay```

Benefits of Merchant Services as opposed to standard Integration - 
```
Get an integrated, rules-based, proactive risk management system that is supported by industry standard security
Enjoy 99.9% uptime and a 24-hour helpdesk support
Get customised MIS solutions for your business needs
```

Optional Method to Allow Private Repositories via Composer

`composer config --global --auth http-basic.repo.packagist.com token c6addb89a67b2822d352d114`

	OR
 
`cd /opt/bitnami/magento`
`nano composer.json`

	Add the following to your composer.json by
```    
	"repositories": [{
		"type": "composer",
      		"url": "https://repo.packagist.com/our-company/cool-client-proj"
			}, 
	{"packagist.org": false}]
```
  Run 
	`composer update`

Subscribe to `MATRIX Communications WAP Service` for `Terminal` Access even in Remote Locations.
	- Register your interest at https://matrix.in
	- Complete KYC with TRAI Required

As per payment gateway policies and liability shift clause, it is merchant responsibility to adhere to PCI Compliant CMS through Payment Acceptance Directives

View Patch Type - `Required` or `Optional` (in the Display Patch Grid by following commands below)
The great part about using Bitnami Magento OS is they are all updated where mandatory security patches are applied to each release. You can view all patches applicable to your specific installation - `https://devdocs.magento.com/quality-patches/tool.html#patch-grid`

Steps to Follow - Login to SSH > cd to Magento Directory
`cd /opt/bitnami/magento`

```
sudo magento-cli maintenance:enable
composer require magento/quality-patches
./vendor/bin/magento-patches status
```
```
Select '2' Adobe Commerce Support followed by '1' to Display All Available Requred and Optional Patches
./vendor/bin/magento-patches apply MDVA-30106 MDVA-12304
```

```
Steps to Revert via Single Command -
./vendor/bin/magento-patches revert MDVA-30106 MDVA-12304
```

| Magento 2.4x on Bitnami  | Optional/REQUIRED  |  Patch Prefix
| ------------- | ------------- | ------------- |
| MDVA-30106 | Optional  |  MDVA
| MDVA-12304 | Optional  |  MDVA
| MDVA-19640 | Optional  |  MDVA
| MDVA-41061-V4 | Optional  |  MDVA
| MDVA-38346 | Optional  |  MDVA
| MDVA-38626 | Optional  |  MDVA
| MDVA-38728 | Optional  |  MDVA
| MDVA-41305-V2 | Optional  |  MDVA
| MDVA-42790 | Optional  |  MDVA
| MDVA-42269 | Optional  |  MDVA
| MDVA-42237 | Optional  |  MDVA
| MDVA-42410 | Optional  |  MDVA
| MDVA-41136 | Optional  |  MDVA
| MDVA-41628 | Optional  |  MDVA
| MDVA-42950 | Optional  |  MDVA
| MDVA-42689 | Optional  |  MDVA
| MDVA-41229 | Optional  |  MDVA
| MDVA-39605 | Optional  |  MDVA
| MDVA-43862 | Optional  |  MDVA
| MDVA-43824 | Optional  |  MDVA
| MDVA-43491 | Optional  |  MDVA
| MDVA-43601 | Optional  |  MDVA
| MDVA-44188 | Optional  |  MDVA
| MDVA-42283 | Optional  |  MDVA
| MDVA-43983 | Optional  |  MDVA
| MDVA-44100 | Optional  |  MDVA
| MDVA-43605 | Optional  |  MDVA
| MDVA-43102 | Optional  |  MDVA
| MDVA-43178 | Optional  |  MDVA
| MDVA-44887 | Optional  |  MDVA
| MDVA-44660 | Optional  |  MDVA
| MDVA-44703 | Optional  |  MDVA
| MDVA-44940 | Optional  |  MDVA
| MDVA-44562 | Optional  |  MDVA
| MDVA-43167 | Optional  |  MDVA
| MDVA-42807 | Optional  |  MDVA

```
Select '2' Adobe Commerce Support followed by '1' to Display All Available Requred and Optional Patches
./vendor/bin/magento-patches apply ACSD-45143 ACSD-44591
```

```
Steps to Revert via Single Command -
./vendor/bin/magento-patches revert ACSD-45143 ACSD-44591
```


| Magento 2.4x on Bitnami  | Optional/REQUIRED  |  Patch Prefix
| ------------- | ------------- | ------------- |
| ACSD-45143 | Optional  |  ACSD
| ACSD-44591 | Optional  |  ACSD
| ACSD-45169 | Optional  |  ACSD
| ACSD-45424 | Optional  |  ACSD
| ACSD-46146 | Optional  |  ACSD
| ACSD-45255 | Optional  |  ACSD
| ACSD-45488 | Optional  |  ACSD
| ACSD-45754 | Optional  |  ACSD
| ACSD-46213 | Optional  |  ACSD
| ACSD-46192 | Optional  |  ACSD
| ACSD-46404 | Optional  |  ACSD
| ACSD-46703 | Optional  |  ACSD
| ACSD-44851 | Optional  |  ACSD
| ACSD-45675 | Optional  |  ACSD
| ACSD-46869 | Optional  |  ACSD

```
sudo magento-cli cache:clean
sudo magento-cli indexer:reindex
sudo magento-cli maintenance:disable
```

You can avoid indexer:reindex command by entering
```
sudo magento-cli setup:upgrade
```
