CCAvenue Internet Payment Gateway Module for Magento 2.4x
============================================================
![CCAvenue Infibeam Avenues Ltd. Internet Payment Gateway Module for Magento 2.4x optimised for aws Bitnami - Partner Affiliate Marketing - WE SKY PRINT LLP](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/assets/27689043/020044ee-e213-4f1c-b1b0-6e63ad1c9288)&emsp;<a href="https://apps.apple.com/in/app/ccavenue-india-for-business/id1607808934?itscg=30200&amp;itsct=apps_box_appicon" style="width: 7%; height: 7%; border-radius: 3%; overflow: hidden; display: inline-block; vertical-align: middle;"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple126/v4/80/af/c6/80afc674-115e-33e1-12e9-345f13112f2f/AppIcon-0-0-1x_U007emarketing-0-7-0-sRGB-85-220.png/540x540bb.jpg" alt="CCAvenue India for Business" style="width: 7%; height: 7%; border-radius: 3%; overflow: hidden; display: inline-block; vertical-align: middle;"></a>&emsp;<img src="https://tools-qr-production.s3.amazonaws.com/output/apple-toolbox/d454a723e1b47c55fc308ee6270d65ef/a186a6fd0dc2b22609e0a5a3d52bee7f.png" style="width: 7%; height: 7%; border-radius: 3%; overflow: hidden; display: inline-block; vertical-align: middle;"> &emsp; <img src="https://upload.wikimedia.org/wikipedia/commons/archive/9/9e/20220314171849%21Ia-infibeam-avenues.png" alt="Infibeam logo" height="70" width="200"></a>

[![GitHub issues](https://img.shields.io/github/issues/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/issues)
[![GitHub forks](https://img.shields.io/github/forks/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/network)
[![GitHub stars](https://img.shields.io/github/stars/dravasp/ccavenuepaymentgatewaymagentoseamless?logo=github&style=flat-square)](https://github.com/ccavenuepaymentgatewaymagentoseamless)
![Badge](https://img.shields.io/badge/Adobe%20Magento%20Commerce-on%20awsCloud%20Bitnami-blue)
![Github language](https://img.shields.io/github/languages/code-size/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![Packagist](https://img.shields.io/packagist/dt/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![Packagist](https://img.shields.io/packagist/stars/dravasp/ccavenuepaymentgatewaymagentoseamless?style=flat-square)
![YouTube Channel](https://img.shields.io/youtube/channel/subscribers/UCv-tdY7OFWk_f1JP4_hmS5A)
![Github Followers](https://img.shields.io/github/followers/dravasp?style=social)

```
If you are running 16GB NVMe Server - Change memory value to 15.5G - sudo nano /opt/bitnami/php/etc/php.ini and sudo /opt/bitnami/ctlscript.sh restart
```

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
  - Sandbox URL Set - https://test.ccavenue.com/transaction.do?command=initiateTransaction (default-payload - Set for Seamless)
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

To enable SMS Notification across to Customers via Magento OS LTS -
```
https://docs.aws.amazon.com/sns/latest/dg/channels-sms-senderid-india.html
https://trueconnect.jio.com
https://www.kaleyra.com
https://business.truecaller.com/register
https://developers.facebook.com/docs/whatsapp/on-premises/get-started/installation/aws
https://developers.facebook.com/docs/whatsapp/on-premises/payments-api/payments-in/pg
https://aws.amazon.com/startups
```
- Enable `Truecaller Business Profile` for your Business Number
- `Activate Do-Not-Disturb` on your +91 Mobile Number (Opt-out of Promotions)

- Imimobile Cloud Communications (india) Private Limited - 145534 - CIN U72900TG2020FTC145534
- Built with Love at Hyderabad, India - Connect with Happiness Specialist - rbandyop@cisco.com

SMS Entity and Template Registration with TSP - FLOW DIAGRAM
- Register Telemarketer > 1102000001293 as My Telemarketer
- Sign-in to `KYC enabled TRAI account Manager using JioTrueConnect Login` for `SENDER ID` Registration
- Register `SMS Header` (`Transactional` - Order Updates)
- Register (`Promotional` - Non-DND Numbers between `09:00hrs - 21:00hrs IST asia/kolkata`)
- Register SMS Template using Variables and `Add Company Identification at the end of SMS Template`
- Current limit is supported at `160chars per text message SMS`
- Navigate to Template > Content Template Registration >
  
| Task  | Type  |  Prefixure
| ------------- | ------------- | ------------- |
| Content Category | Consumer Goods and Automobile  |  Header(s)
| Template Type | Service Implicit (Transactional)  |  PLNCLQ or 556577
```
Congratulations! Your recent order on https://planetcliq.com for {#var#} total INR {#var#}.
Payment has been processed via State Bank of India with txn id - {#var#}.
We will dispatch your order via one of our delivery partners and you may track your order in
real-time through the link you will receive shortly. Legal Terms & Conditions Apply.
PlanetCliq.com is a WE SKY PRINT LLP enterprise.
```

Additionally, you can enable - Push Notifications using `Kaleyra and WhatsApp Business`
Register with Kaleyra (`powered by Tata Communications`) for WhatsApp Green Tick Verified Account
on WhatsApp Business (managed by meta Business - facebook api)
You could `host on-premise instance for Amazon Web Services (AWS) to deploy the WhatsApp Business API`
If you are registered with a financial institution to collect payments using WhatsApp
- Your business can enable customers to pay for their orders through our partner payment gateways
  without leaving WhatsApp. Businesses can send customers order_details messages, then get notified
  about payment status updates via webhook notifications.
For integrations using `Social Channels` - Connect with `CCAvenue` on `service@ccavenue.com`

FLOW DIAGRAM
| Task  | Type  |  Prefixure
| ------------- | ------------- | ------------- |
| Launch Magento OS LTS via `https://bitnami.com/stack/magento/cloud` | r5a.d  |  ap-south1-a/-b/-c (Used in this payday)
| Attach Elastic IP | Map DNS via Cloudflare WAF  |  Enable ASN Filtering
| Run sudo /opt/bitnami/bncert-tool via SSH (SolarPuTTY) | issue .cert  |  via Let'sEncrypt TLS v1.3
| Access Magento Admin | Configure amazon SES  |  amazon SNS
| Enable Maintainence Mode | Optional - Use composer to install required Packages  |  Patch Installation
| Disable Maintainence Mode | Upload Theme via Themeforest.net using SFTP  |  - FileZilla
| Upload Pincode Serviceability List | ^ODA Filtered  |  FedEx ODA
| Upload Tax Rates | India Goods and Service Tax  |  Reverse GST 3% (2.92%) 5% (4.765%) 12% (10.72%) 18% (15.25%) 28% (21.875%)
| Upload Product Schema using .csv | Add Google Shopping Feed via MagModules.eu  | Frank Tiggleman
| Install Payment Module | Test Webhook / Callback URI |  Move to Production
| Initiate Tele-assist for redirect URL Success/Failure UAT | Optional  |  Move to Production

- SMTP Extension for Magento 2 (amazonSES) via MagePlaza
```
- https://www.mageplaza.com/blog/how-to-configure-amazon-ses-smtp-in-magento-2.html
- https://github.com/mageplaza/magento-2-smtp
```

Cloudflare WAF Custom Rule Expression (Copy-Paste by Editing Expression)
```
(ip.geoip.asnum ne 15169 and ip.geoip.asnum ne 56201 and ip.geoip.asnum ne 8075 and ip.geoip.asnum ne 132892 and ip.geoip.asnum ne 714 and ip.geoip.asnum ne 55163 and ip.geoip.asnum ne 13414 and ip.geoip.asnum ne 2635 and ip.geoip.asnum ne 33 and ip.geoip.asnum ne 71 and ip.geoip.asnum ne 99 and ip.geoip.asnum ne 108 and ip.geoip.asnum ne 109 and ip.geoip.asnum ne 125 and ip.geoip.asnum ne 151 and ip.geoip.asnum ne 158 and ip.geoip.asnum ne 163 and ip.geoip.asnum ne 196 and ip.geoip.asnum ne 516 and ip.geoip.asnum ne 521 and ip.geoip.asnum ne 543 and ip.geoip.asnum ne 547 and ip.geoip.asnum ne 577 and ip.geoip.asnum ne 601 and ip.geoip.asnum ne 602 and ip.geoip.asnum ne 603 and ip.geoip.asnum ne 609 and ip.geoip.asnum ne 676 and ip.geoip.asnum ne 701 and ip.geoip.asnum ne 702 and ip.geoip.asnum ne 703 and ip.geoip.asnum ne 704 and ip.geoip.asnum ne 705 and ip.geoip.asnum ne 706 and ip.geoip.asnum ne 714 and ip.geoip.asnum ne 792 and ip.geoip.asnum ne 793 and ip.geoip.asnum ne 794 and ip.geoip.asnum ne 795 and ip.geoip.asnum ne 796 and ip.geoip.asnum ne 797 and ip.geoip.asnum ne 800 and ip.geoip.asnum ne 812 and ip.geoip.asnum ne 824 and ip.geoip.asnum ne 851 and ip.geoip.asnum ne 1102 and ip.geoip.asnum ne 1103 and ip.geoip.asnum ne 1105 and ip.geoip.asnum ne 1106 and ip.geoip.asnum ne 1107 and ip.geoip.asnum ne 1108 and ip.geoip.asnum ne 1120 and ip.geoip.asnum ne 1129 and ip.geoip.asnum ne 1130 and ip.geoip.asnum ne 1131 and ip.geoip.asnum ne 1200 and ip.geoip.asnum ne 1294 and ip.geoip.asnum ne 1295 and ip.geoip.asnum ne 1313 and ip.geoip.asnum ne 1342 and ip.geoip.asnum ne 1343 and ip.geoip.asnum ne 1348 and ip.geoip.asnum ne 1360 and ip.geoip.asnum ne 1406 and ip.geoip.asnum ne 1424 and ip.geoip.asnum ne 1698 and ip.geoip.asnum ne 1705 and ip.geoip.asnum ne 1730 and ip.geoip.asnum ne 1760 and ip.geoip.asnum ne 1775 and ip.geoip.asnum ne 1781 and ip.geoip.asnum ne 1787 and ip.geoip.asnum ne 1790 and ip.geoip.asnum ne 1849 and ip.geoip.asnum ne 1873 and ip.geoip.asnum ne 1874 and ip.geoip.asnum ne 1889 and ip.geoip.asnum ne 1890 and ip.geoip.asnum ne 1931 and ip.geoip.asnum ne 1997 and ip.geoip.asnum ne 2002 and ip.geoip.asnum ne 2003 and ip.geoip.asnum ne 2051 and ip.geoip.asnum ne 2129 and ip.geoip.asnum ne 2130 and ip.geoip.asnum ne 2140 and ip.geoip.asnum ne 2154 and ip.geoip.asnum ne 2155 and ip.geoip.asnum ne 2156 and ip.geoip.asnum ne 2157 and ip.geoip.asnum ne 2158 and ip.geoip.asnum ne 2159 and ip.geoip.asnum ne 2160 and ip.geoip.asnum ne 2161 and ip.geoip.asnum ne 2162 and ip.geoip.asnum ne 2163 and ip.geoip.asnum ne 2164 and ip.geoip.asnum ne 2165 and ip.geoip.asnum ne 2166 and ip.geoip.asnum ne 2168 and ip.geoip.asnum ne 2169 and ip.geoip.asnum ne 2170 and ip.geoip.asnum ne 2171 and ip.geoip.asnum ne 2173 and ip.geoip.asnum ne 2532 and ip.geoip.asnum ne 2539 and ip.geoip.asnum ne 2554 and ip.geoip.asnum ne 2559 and ip.geoip.asnum ne 139509)
```

```
(ip.geoip.asnum ne 2571 and ip.geoip.asnum ne 2582 and ip.geoip.asnum ne 2648 and ip.geoip.asnum ne 2894 and ip.geoip.asnum ne 2906 and ip.geoip.asnum ne 3117 and ip.geoip.asnum ne 3134 and ip.geoip.asnum ne 3143 and ip.geoip.asnum ne 3209 and ip.geoip.asnum ne 3272 and ip.geoip.asnum ne 3358 and ip.geoip.asnum ne 3363 and ip.geoip.asnum ne 3387 and ip.geoip.asnum ne 3389 and ip.geoip.asnum ne 3424 and ip.geoip.asnum ne 3456 and ip.geoip.asnum ne 3458 and ip.geoip.asnum ne 3486 and ip.geoip.asnum ne 3495 and ip.geoip.asnum ne 3499 and ip.geoip.asnum ne 3571 and ip.geoip.asnum ne 3573 and ip.geoip.asnum ne 3607 and ip.geoip.asnum ne 3612 and ip.geoip.asnum ne 3613 and ip.geoip.asnum ne 3614 and ip.geoip.asnum ne 3615 and ip.geoip.asnum ne 3633 and ip.geoip.asnum ne 3654 and ip.geoip.asnum ne 3655 and ip.geoip.asnum ne 3705 and ip.geoip.asnum ne 3729 and ip.geoip.asnum ne 3725 and ip.geoip.asnum ne 3745 and ip.geoip.asnum ne 3760 and ip.geoip.asnum ne 3828 and ip.geoip.asnum ne 3836 and ip.geoip.asnum ne 3902 and ip.geoip.asnum ne 3921 and ip.geoip.asnum ne 4169 and ip.geoip.asnum ne 4197 and ip.geoip.asnum ne 4464 and ip.geoip.asnum ne 4615 and ip.geoip.asnum ne 4618 and ip.geoip.asnum ne 4642 and ip.geoip.asnum ne 4680 and ip.geoip.asnum ne 4694 and ip.geoip.asnum ne 4712 and ip.geoip.asnum ne 4847 and ip.geoip.asnum ne 4925 and ip.geoip.asnum ne 4953 and ip.geoip.asnum ne 4961 and ip.geoip.asnum ne 4983 and ip.geoip.asnum ne 4996 and ip.geoip.asnum ne 5020 and ip.geoip.asnum ne 5026 and ip.geoip.asnum ne 5049 and ip.geoip.asnum ne 5073 and ip.geoip.asnum ne 5091 and ip.geoip.asnum ne 5114 and ip.geoip.asnum ne 5383 and ip.geoip.asnum ne 5384 and ip.geoip.asnum ne 5407 and ip.geoip.asnum ne 5425 and ip.geoip.asnum ne 5462 and ip.geoip.asnum ne 5466 and ip.geoip.asnum ne 5635 and ip.geoip.asnum ne 5639 and ip.geoip.asnum ne 5640 and ip.geoip.asnum ne 5647 and ip.geoip.asnum ne 5651 and ip.geoip.asnum ne 5660 and ip.geoip.asnum ne 5662 and ip.geoip.asnum ne 5663 and ip.geoip.asnum ne 5658 and ip.geoip.asnum ne 5714 and ip.geoip.asnum ne 6095 and ip.geoip.asnum ne 6101 and ip.geoip.asnum ne 6116 and ip.geoip.asnum ne 6142 and ip.geoip.asnum ne 6185 and ip.geoip.asnum ne 6194 and ip.geoip.asnum ne 6195 and ip.geoip.asnum ne 6421 and ip.geoip.asnum ne 6427 and ip.geoip.asnum ne 6445 and ip.geoip.asnum ne 6446 and ip.geoip.asnum ne 6453 and ip.geoip.asnum ne 6462 and ip.geoip.asnum ne 6550 and ip.geoip.asnum ne 6552 and ip.geoip.asnum ne 6674 and ip.geoip.asnum ne 6779 and ip.geoip.asnum ne 6966 and ip.geoip.asnum ne 7008 and ip.geoip.asnum ne 7054 and ip.geoip.asnum ne 7060 and ip.geoip.asnum ne 7068 and ip.geoip.asnum ne 7105)
```

```
(ip.geoip.asnum ne 7116 and ip.geoip.asnum ne 7152 and ip.geoip.asnum ne 7198 and ip.geoip.asnum ne 7233 and ip.geoip.asnum ne 7251 and ip.geoip.asnum ne 7267 and ip.geoip.asnum ne 7280 and ip.geoip.asnum ne 7278 and ip.geoip.asnum ne 7298 and ip.geoip.asnum ne 7310 and ip.geoip.asnum ne 7334 and ip.geoip.asnum ne 7355 and ip.geoip.asnum ne 7505 and ip.geoip.asnum ne 7557 and ip.geoip.asnum ne 7646 and ip.geoip.asnum ne 7664 and ip.geoip.asnum ne 7726 and ip.geoip.asnum ne 7743 and ip.geoip.asnum ne 7748 and ip.geoip.asnum ne 7754 and ip.geoip.asnum ne 7756 and ip.geoip.asnum ne 7764 and ip.geoip.asnum ne 7792 and ip.geoip.asnum ne 7973 and ip.geoip.asnum ne 8182 and ip.geoip.asnum ne 8549 and ip.geoip.asnum ne 8729 and ip.geoip.asnum ne 8850 and ip.geoip.asnum ne 9130 and ip.geoip.asnum ne 9221 and ip.geoip.asnum ne 9230 and ip.geoip.asnum ne 9238 and ip.geoip.asnum ne 9447 and ip.geoip.asnum ne 9524 and ip.geoip.asnum ne 9536 and ip.geoip.asnum ne 9583 and ip.geoip.asnum ne 9600 and ip.geoip.asnum ne 9625 and ip.geoip.asnum ne 10228 and ip.geoip.asnum ne 10229 and ip.geoip.asnum ne 10230 and ip.geoip.asnum ne 10264 and ip.geoip.asnum ne 10497 and ip.geoip.asnum ne 10499 and ip.geoip.asnum ne 10504 and ip.geoip.asnum ne 10532 and ip.geoip.asnum ne 10543 and ip.geoip.asnum ne 10794 and ip.geoip.asnum ne 10896 and ip.geoip.asnum ne 10959 and ip.geoip.asnum ne 10998 and ip.geoip.asnum ne 10999 and ip.geoip.asnum ne 11000 and ip.geoip.asnum ne 11001 and ip.geoip.asnum ne 11002 and ip.geoip.asnum ne 11003 and ip.geoip.asnum ne 11030 and ip.geoip.asnum ne 11057 and ip.geoip.asnum ne 11360 and ip.geoip.asnum ne 11363 and ip.geoip.asnum ne 11405 and ip.geoip.asnum ne 11583 and ip.geoip.asnum ne 11634 and ip.geoip.asnum ne 11680 and ip.geoip.asnum ne 11757 and ip.geoip.asnum ne 11945 and ip.geoip.asnum ne 12068 and ip.geoip.asnum ne 12169 and ip.geoip.asnum ne 12184 and ip.geoip.asnum ne 12217 and ip.geoip.asnum ne 12274 and ip.geoip.asnum ne 12585 and ip.geoip.asnum ne 12635 and ip.geoip.asnum ne 12678 and ip.geoip.asnum ne 12801 and ip.geoip.asnum ne 13169 and ip.geoip.asnum ne 13414 and ip.geoip.asnum ne 13463 and ip.geoip.asnum ne 13484 and ip.geoip.asnum ne 13542 and ip.geoip.asnum ne 13788 and ip.geoip.asnum ne 13827 and ip.geoip.asnum ne 13877 and ip.geoip.asnum ne 13908 and ip.geoip.asnum ne 13982 and ip.geoip.asnum ne 13981 and ip.geoip.asnum ne 13989 and ip.geoip.asnum ne 14013 and ip.geoip.asnum ne 14033 and ip.geoip.asnum ne 14074 and ip.geoip.asnum ne 14170 and ip.geoip.asnum ne 14277 and ip.geoip.asnum ne 14298 and ip.geoip.asnum ne 14300 and ip.geoip.asnum ne 14327 and ip.geoip.asnum ne 14340 and ip.geoip.asnum ne 14341 and ip.geoip.asnum ne 14365 and ip.geoip.asnum ne 14413)
```

```
(ip.geoip.asnum ne 14824 and ip.geoip.asnum ne 14891 and ip.geoip.asnum ne 14898 and ip.geoip.asnum ne 14925 and ip.geoip.asnum ne 14975 and ip.geoip.asnum ne 15029 and ip.geoip.asnum ne 15130 and ip.geoip.asnum ne 15139 and ip.geoip.asnum ne 15160 and ip.geoip.asnum ne 15169 and ip.geoip.asnum ne 15238 and ip.geoip.asnum ne 15502 and ip.geoip.asnum ne 15611 and ip.geoip.asnum ne 15635 and ip.geoip.asnum ne 15666 and ip.geoip.asnum ne 15700 and ip.geoip.asnum ne 15709 and ip.geoip.asnum ne 15715 and ip.geoip.asnum ne 15768 and ip.geoip.asnum ne 15769 and ip.geoip.asnum ne 15854 and ip.geoip.asnum ne 15896 and ip.geoip.asnum ne 15951 and ip.geoip.asnum ne 16015 and ip.geoip.asnum ne 16398 and ip.geoip.asnum ne 16468 and ip.geoip.asnum ne 16469 and ip.geoip.asnum ne 16485 and ip.geoip.asnum ne 16493 and ip.geoip.asnum ne 16510 and ip.geoip.asnum ne 16515 and ip.geoip.asnum ne 16536 and ip.geoip.asnum ne 16551 and ip.geoip.asnum ne 16729 and ip.geoip.asnum ne 16730 and ip.geoip.asnum ne 16731 and ip.geoip.asnum ne 16733 and ip.geoip.asnum ne 16759 and ip.geoip.asnum ne 16831 and ip.geoip.asnum ne 16894 and ip.geoip.asnum ne 17062 and ip.geoip.asnum ne 17029 and ip.geoip.asnum ne 17110 and ip.geoip.asnum ne 17314 and ip.geoip.asnum ne 17370 and ip.geoip.asnum ne 17371 and ip.geoip.asnum ne 17427 and ip.geoip.asnum ne 17436 and ip.geoip.asnum ne 17442 and ip.geoip.asnum ne 17453 and ip.geoip.asnum ne 17462 and ip.geoip.asnum ne 17488 and ip.geoip.asnum ne 17493 and ip.geoip.asnum ne 17572 and ip.geoip.asnum ne 17616 and ip.geoip.asnum ne 17676 and ip.geoip.asnum ne 17812 and ip.geoip.asnum ne 17813 and ip.geoip.asnum ne 17825 and ip.geoip.asnum ne 18066 and ip.geoip.asnum ne 18101 and ip.geoip.asnum ne 18108 and ip.geoip.asnum ne 18252 and ip.geoip.asnum ne 18349 and ip.geoip.asnum ne 18359 and ip.geoip.asnum ne 18409 and ip.geoip.asnum ne 18428 and ip.geoip.asnum ne 18442 and ip.geoip.asnum ne 18473 and ip.geoip.asnum ne 18552 and ip.geoip.asnum ne 18666 and ip.geoip.asnum ne 18723 and ip.geoip.asnum ne 18730 and ip.geoip.asnum ne 18837 and ip.geoip.asnum ne 18856 and ip.geoip.asnum ne 18995 and ip.geoip.asnum ne 19238 and ip.geoip.asnum ne 19511 and ip.geoip.asnum ne 19512 and ip.geoip.asnum ne 19603 and ip.geoip.asnum ne 19604 and ip.geoip.asnum ne 19608 and ip.geoip.asnum ne 19612 and ip.geoip.asnum ne 19623 and ip.geoip.asnum ne 19641 and ip.geoip.asnum ne 19647 and ip.geoip.asnum ne 19668 and ip.geoip.asnum ne 19773 and ip.geoip.asnum ne 20145 and ip.geoip.asnum ne 20221 and ip.geoip.asnum ne 20231 and ip.geoip.asnum ne 20241 and ip.geoip.asnum ne 20253 and ip.geoip.asnum ne 20296 and ip.geoip.asnum ne 20426 and ip.geoip.asnum ne 20461 and ip.geoip.asnum ne 20666 and ip.geoip.asnum ne 20861 and ip.geoip.asnum ne 20963 and ip.geoip.asnum ne 20969 and ip.geoip.asnum ne 21420)
```

```
(ip.geoip.asnum ne 21532 and ip.geoip.asnum ne 21760 and ip.geoip.asnum ne 21938 and ip.geoip.asnum ne 21982 and ip.geoip.asnum ne 21987 and ip.geoip.asnum ne 22081 and ip.geoip.asnum ne 22086 and ip.geoip.asnum ne 22106 and ip.geoip.asnum ne 22135 and ip.geoip.asnum ne 22176 and ip.geoip.asnum ne 22183 and ip.geoip.asnum ne 22216 and ip.geoip.asnum ne 22220 and ip.geoip.asnum ne 22390 and ip.geoip.asnum ne 22510 and ip.geoip.asnum ne 22538 and ip.geoip.asnum ne 22560 and ip.geoip.asnum ne 22570 and ip.geoip.asnum ne 22577 and ip.geoip.asnum ne 22720 and ip.geoip.asnum ne 22859 and ip.geoip.asnum ne 22883 and ip.geoip.asnum ne 22983 and ip.geoip.asnum ne 23047 and ip.geoip.asnum ne 23098 and ip.geoip.asnum ne 23152 and ip.geoip.asnum ne 23217 and ip.geoip.asnum ne 23227 and ip.geoip.asnum ne 23454 and ip.geoip.asnum ne 23455 and ip.geoip.asnum ne 23616 and ip.geoip.asnum ne 23644 and ip.geoip.asnum ne 23658 and ip.geoip.asnum ne 23663 and ip.geoip.asnum ne 23664 and ip.geoip.asnum ne 23765 and ip.geoip.asnum ne 23766 and ip.geoip.asnum ne 23782 and ip.geoip.asnum ne 23816 and ip.geoip.asnum ne 23915 and ip.geoip.asnum ne 24029 and ip.geoip.asnum ne 24280 and ip.geoip.asnum ne 24296 and ip.geoip.asnum ne 24568 and ip.geoip.asnum ne 24572 and ip.geoip.asnum ne 25605 and ip.geoip.asnum ne 25685 and ip.geoip.asnum ne 25829 and ip.geoip.asnum ne 25859 and ip.geoip.asnum ne 25869 and ip.geoip.asnum ne 25876 and ip.geoip.asnum ne 25883 and ip.geoip.asnum ne 25931 and ip.geoip.asnum ne 25949 and ip.geoip.asnum ne 25996 and ip.geoip.asnum ne 26085 and ip.geoip.asnum ne 26086 and ip.geoip.asnum ne 26101 and ip.geoip.asnum ne 26134 and ip.geoip.asnum ne 26144 and ip.geoip.asnum ne 26234 and ip.geoip.asnum ne 26496 and ip.geoip.asnum ne 26583 and ip.geoip.asnum ne 26607 and ip.geoip.asnum ne 26662 and ip.geoip.asnum ne 26672 and ip.geoip.asnum ne 26762 and ip.geoip.asnum ne 26936 and ip.geoip.asnum ne 27299 and ip.geoip.asnum ne 27357 and ip.geoip.asnum ne 27376 and ip.geoip.asnum ne 27476 and ip.geoip.asnum ne 27564 and ip.geoip.asnum ne 27625 and ip.geoip.asnum ne 28723 and ip.geoip.asnum ne 30060 and ip.geoip.asnum ne 30261 and ip.geoip.asnum ne 30281 and ip.geoip.asnum ne 30284 and ip.geoip.asnum ne 30285 and ip.geoip.asnum ne 30320 and ip.geoip.asnum ne 30342 and ip.geoip.asnum ne 30560 and ip.geoip.asnum ne 30561 and ip.geoip.asnum ne 30648 and ip.geoip.asnum ne 31924 and ip.geoip.asnum ne 32067 and ip.geoip.asnum ne 32116 and ip.geoip.asnum ne 32186 and ip.geoip.asnum ne 32287 and ip.geoip.asnum ne 32389 and ip.geoip.asnum ne 32496 and ip.geoip.asnum ne 32567 and ip.geoip.asnum ne 32734 and ip.geoip.asnum ne 32741 and ip.geoip.asnum ne 32948 and ip.geoip.asnum ne 32975 and ip.geoip.asnum ne 32982 and ip.geoip.asnum ne 33739 and ip.geoip.asnum ne 34697 and ip.geoip.asnum ne 32934)
```

Packing Materials - GST Invoice
```
https://www.upack.in
```
- 5 Ply Corrugated Cardboard Box - Double Wall - `17 x 13 x 5 Inch`
- 5 Ply Corrugated Cardboard Box - Double Wall - `20 x 15 x 6 Inch`
- 3 Ply Corrugated Cardboard Box - Single Wall - `8 x 5 x 3 Inch`
- 5 Ply Corrugated Cardboard Box - Double Wall - `16 x 16 x 16 Inch`
- Shredded Tissue Paper (`Emerald Green`) - 350 gms
- Shredded Tissue Paper (`Flamingo Pink`) - 350 gms

eWay Bill Preparation -
`https://ewaybill.nic.in` with TSS^ for Returns to Supplier (Outward Supplies)

Accounting Template -
`GST Monthly or Quarterly Filing based on Legal Entity Name instead of Trade Name` + `Debit Notes based on CN Numbers Issued` via `https://gst.gov.in` for .json Utility Upload - Company Secretary - CS Parth Sharma & associates (Justdial)

TDS via .csi File (Download via Income Tax Portal) + .RPU (LTS) + .FVU (LTS) on TLS ver.1.3 Java Settings Panel
`https://www.incometax.gov.in`

Download and Sign `Form16A` via DSC Class-3 eMudhraCA (Authentication eSigner `VSign`) for Supplier engagement https://vsign.in

Mail Client for Secure OSAMLx
`Thunderbird Mail Client` with .asc and PGP via Actalis S/MIME Outlook `ZohoMail` Premium Plan
