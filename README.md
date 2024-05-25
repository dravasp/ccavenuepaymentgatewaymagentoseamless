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

aws Instance Type Information (Hosting Web Server) - `Recommended for Magento OS Commerce`
- `r5a.large` - `Memory Optimised` Web Server - 65 USD per month `Standard Reserved`
- `16.00GB - AMD EPYC 7571 2vCPUs and 1 CPU core` - `https://www.cpubenchmark.net/cpu.php?cpu=AMD+EPYC+7571`
- `0.75 Baseline / 10.0 Burst bandwidth (Gbps) - Network with ENA, x4 Max. network interfaces, x10 IP addresses per interface and IPv6 Network Support Capabilities.`

aws Instance Type Information (Hosting Web Server) - `Recommended for WooCommerce WordPress CMS`
- `m5ad.large` - `General Purpose EC2 with Nitro` - 31 USD per month `Standard Reserved`
- `8.00GB - AMD EPYC 7571 2vCPUs and 1 CPU core` - `https://www.cpubenchmark.net/cpu.php?cpu=AMD+EPYC+7571`
- `0.75 Baseline / 10.0 Burst bandwidth (Gbps) - Network with ENA, x3 Max. network interfaces, x10 IP addresses per interface and IPv6 Network Support Capabilities.`


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

To ensure maximum security on your smartphones, you'd want to `configure strict HTTP Layer 7 rules across ZeroTrust` and `enforce protective measures for a healthy outlook in the payment acceptance and processing space`. Create an account on `Cloudflare and navigate to Zero Trust via Menu on the left. You'll want to configure extensive options available for maximum security along with enablement of TwoFactor Authentication (2FA).`

If you're using `ZohoMail` as your default mailclient, it's advised to `upgrade to Premium and register OpenPGP signature and .asc file to send encrypted mails`. `Mozilla Thunderbird (Donate to Opensource) is preferred Desktop PC client to access emails via IMAP/POP3`. You can request uptodate public keys and add them to Thunderbird Mail Client to send encrypted mails to Security Experts at CCAvenue / Merchant Services / Attestation / DSC Services. You'd ideally want to disable integrations to external Zoho services (except Zoho Workdrive) for quick responses across Zoho Co-location Datacenter.

To get started, `purchase UPI Protection Plan offered via HDFCErgo (Cyber Sachet Policy) via Paytm Insurance Broking available via Paytm`. Link Policy to HDFCErgo CKYC (Individual) Web Interface. Your annual coverage includes UPI Protection upto INR 10,000/- It is essential to fill the `CERSAI (.pdf)` and share the same with your account manager of your respective bank account. You will be required to update your address, date of birth, phone number and other KYC details instead of set defaults as it is a `Master Group Policy that is issued to Individual`. It takes less than 24 hours to link and dispatch a physical copy to your registered address.

You can `Lock Biometrics via mAadhaar (Biometric and Authentication Lock) if you suspect your details are breached`. You should ideally have created an account on `DigiLocker` and `meriPehachan` and login via Mobile and 6 digit pin instead of Aadhaar Authentication. Instead `login with Virtual ID where KYC norms are requested` for example - `Authenticated pulls via CDAC to complete Payment Acceptance License`. To `unlock Aadhaar, you'd require your Enrollment ID` issued to you to state to Aadhaar Seva Kendra. In some cases, `you'd require a formal application to your local Police Authorization where OTP Authenticated Details are not accepted across UIDAI`. Ideally, you'd be protected from `sensitive Biometric Data Leak across all channels`. `You'd not be able to Authenticate yourself across external financial services personnel for Doorstep Banking (this includes Issuance of Credit Cards) via HDFC Bank, State Bank of India, Axis Bank, and IndusInd Bank`.

You can `complete your security enforcement on Income Tax of India CPC-IT Login by enablement of Aadhaar Authentication`. You can `login to Central Processing (TRACES) from your respective Netbanking Channel` to download your `Annual Information Statement (AIS)` and `Tax Information Summary (TIS)`. You can use `UTILS` or `NSDL` to download your `Electronic (Digitally Signed) PAN Card` by paying nominal fees, however `banks will require you to verify using Original Issued PAN Card via Income Tax Department of India`. Similarly, you'll be required to `provide original UIDAI Aadhaar Letter on Passport Application along with other documents`. Currently, `hospitals request state issued ABHA ID on Admission for relatives (Non-Emergency)`. It is advised to `update Co-WIN Registration on your fresh Passport (India) for eBoarding` via CSIA Arrivals.

Your primary KYC will be sent to `eMudhra Government CA upon DSC Issuance (Class 3) issued via V-Sign (Verasys) or Pentasign or SIFY Technologies`. Only a single DSC can be issued to Individual valid for a specified tenure applied for. You can use the `DSC Java Util. to file returns to Goods and Service Tax (GST) Zonal Officer, EXIM Authority, and Legal Attestation for post processing`. You can use `HyperPKI 2003 to install your freshly issued .cert across acceptance platforms`.

You might be required to `switch to a Diskette for installing specific security drivers made available to you via your Payment Partner/s`. Most workstations via `#Lenovo` such as `Lenovo Thinkstation` offer `reverse engineered OS / COBOL` to run similar drivers. Your local systems can host a simulated OS such as CIS-2003 Office that require redundancy (further below).

It is advised to host a `Paid account on CIBIL Transunion, Experian or CSRIF for monitoring your financial activity such as Credit Inquiries, Loan Accounts, Implied Checks from Banks for Large Credit Transfers`. However, your `PAN issued via CPC IT and TRACES will be sufficient for most accuracy if you have invested in NSE/BSE Listed Equities for STCG or LTCG via your Depository Participant`. `PaytmMoney with CDSL is a performant combination if you require low charges on your Dematerialization of Share Certificates (ASBA enabled Demat Account). However, you'd absolutely require 2FA enabled on Login.`

To avoid calls from Hidden Numbers, several measures can be enforced on your device -

```
Switch Mobile Network from Automatic to Manual Select Operator. Choose LTE only as your Network Mode. Inside Access Point Configuration, enable IPV6 for APN and set Bearer to LTE (deselect others). MCC or MNC as provided. Set rest to Not Set or None. These are applicable on eSim.
Remove all Payment Methods and Enable Google Play Recharge Balance.
Enable nord32 Mobile AV Subscription (Annual on Single Device). Configure to Maximum Security Settings such as enable Rules to Automatically Block Hidden Numbers (Keep Unknown Numbers allowed). You can use Truecaller as your Default Calling App for Number Identification with nord32 as default for your Spam Protection.
Disable network access to apps for bandwidth condition via Zero Trust and monitor Network Logs in Diagnostics. You can also use Quickheal Technologies for India GST Billing or select amazon India B2B2C for ESET AV Ultimate Premium.

Prior to scanning UPI QR Codes for sending out payments, you should ideally use balance/history for Pay Again to same merchant as most merchants support plug and play for enterprise payment acceptance. This is a great feature when specific datacenters or colocation centers (across several zones) face downtime or maintenance.
```

ZeroTrust and DNS Services offered by Cloudflare on Chrome Browser (Mobile and Desktop) allow unprecedented security based on the data colocation of your residency. You should configure your Android Device, Mobile Browser and Desktop Browser to clear browsing history, delete cookies via site settings, force logout of all apps and disable smart tech if altered results over secure channel.

Most of these settings will allow users to `avoid installation of custom roms or enablement of developer settings for unexpected results.`

`Samsung Devices offer Secured by Knox with Security Updates for Android.`

If you're an avid user of Chip EVM Cards on Tap NFC with your Samsung device, you'll want to secure your payment limits on your Netbanking portal.

To conclude, many concurrent payments are usually affected with large data and hence split or segmented payments are preferred. Unfortunately, split payments aren't processing concurrent and expected price to buy ratio might change over time lost </ proportional.

Quick Tip - Select CERT-IN for Authenticated Pulls across Organization - Apply Tally OCSP to cert.in
You can also use TAFCOP service to check the mobile numbers registered to you.

You should moat definitely add filtered keywords to your social media and other websites that support this feature. `Meta Services Framework` currently supports this.

Depending on your Local Machine Operating System (OS) - Microsoft Windows 10 / 11 - Pro Edition 64-bit, you will need to configure 1-click `Local Group Policies (LGPO)` available via `DoD Cyber Exchange Public` - https://public.cyber.mil/stigs/scap - `Security Technical Implementation Guides (STIGs)` or `Security Content Automation Protocol (SCAP)` sponsored by `Defense Information Systems Agency (DISA)` - You can use STIG/SCAP for quickly configuring your local machine to highest security standards according to CATI, CATII, and/or CATIII to protect your data from breaches and security leaks. Note - STIG/SCAP are primarily technical guidelines provided as Best Practices Standard via DISA - You will need to enforce any/all via steps outlined below. The following process will ensure approx. 64.8% security automation score on Windows 11 Home Edition and 48% Microsoft security automation score - Tested on March 29th 2024 IST (asia/kolkata +5:30 time.nist.gov).

Create new folder `"DISA"` as C:\
Create new folders `"Important", "Reports", and "Checklists"` as C:\DISA
Download the following .zip files - https://public.cyber.mil/stigs/scap - Sort by Date (latest) and Show (50 entries) - Choose the latest security automation guidelines.

	SCAP TOOLS

`scc-5.8_Windows_bundle - SCC 5.8 Windows - 153.92 MB - Published on 18 Sep 2023`

	SCAP 1.2 CONTENT

`U_MS_Windows_11_V1R3_STIG_SCAP_1-2_Benchmark - Microsoft Windows 11 STIG Benchmark - Ver 1, Rel 3 - 96.95 KB - Published on 30 Oct 2023` - You can choose to download `Microsoft Windows 10 STIG Benchmark - Ver 2, Rel 9` if your local machine is currently using Windows 10 Pro or Windows 11 Pro if your local machine supports TPM2.0 module (Hardware-backed encryption)

Download the following .zip file from STIG Viewer 3.x - https://public.cyber.mil/stigs/srg-stig-tools
```
U_STIGViewer-win32_x64-3-3-0 - STIG Viewer 3.3-Win64 - 140.36 MB - 07 Feb 2024
U_MS_Defender_Antivirus_V2R5_STIG_SCAP_1-2_Benchmark - Microsoft Defender Antivirus STIG Benchmark - Ver 2, Rel 5 - 22.36 KB - Published on 22 Jan 2024
U_Google_Chrome_V2R9_STIG_SCAP_1-2_Benchmark - Google Chrome STIG Benchmark - Ver 2, Rel 9 - 23.71 KB - Published on 22 Jan 2024
U_MS_Edge_V1R3_STIG_SCAP_1-2_Benchmark - Microsoft Edge STIG Benchmark - Ver 1, Rel 3 - 24.2 KB	- Published on 23 Oct 2023
U_MS_IE11_V2R6_STIG_SCAP_1-2_Benchmark - Microsoft Internet Explorer 11 STIG Benchmark - Ver 2, Rel 6 - 1.11 MB	- Published on 22 Jan 2024
```

Download the following .zip file from - https://public.cyber.mil/stigs/downloads
`U_MS_Windows_11_V1R5_STIG - Microsoft Windows 11 STIG - Ver 1, Rel 5 - 1.34 MB	- Published on 30 Oct 2023`

Download the following .zip file from - https://public.cyber.mil/stigs/gpo
`U_STIG_GPO_Package_January_2024 - Group Policy Objects (GPOs) - January 2024 - 6.91 MB - Published on 05 Feb 2024`

Download only `LGPO.zip (~519.2 KB)` from https://www.microsoft.com/en-us/download/details.aspx?id=55319 - Security Compliance Toolkit and Baselines - This set of tools allows enterprise security administrators to download, analyze, test, edit and store Microsoft-recommended security configuration baselines for Windows and other Microsoft products, while comparing them against other security configurations.

If you are using WinRAR 64-bit, you can extract each archive to separate folder or extract each folder - one - by - one and move the .zip to Important for safe vault.

Follow these steps to proceed -

Navigate to `scc-5.8_Windows_bundle` > Extract `scc-5.8_Windows.zip` and open the folder > `C:\DISA\scc-5.8_Windows_bundle\scc-5.8_Windows\scc-5.8_Windows\scc_5.8.exe`
Right-click and Delete the currently pre-loaded SCAP on Windows dropdown

Click on Install and Select the following files - Keep YES checked for Options Checkbox >
```
U_MS_Defender_Antivirus_V2R5_STIG_SCAP_1-2_Benchmark - Microsoft Defender Antivirus STIG Benchmark - Ver 2, Rel 5 - 22.36 KB - Published on 22 Jan 2024
U_Google_Chrome_V2R9_STIG_SCAP_1-2_Benchmark - Google Chrome STIG Benchmark - Ver 2, Rel 9 - 23.71 KB - Published on 22 Jan 2024
U_MS_Edge_V1R3_STIG_SCAP_1-2_Benchmark - Microsoft Edge STIG Benchmark - Ver 1, Rel 3 - 24.2 KB	- Published on 23 Oct 2023
U_MS_IE11_V2R6_STIG_SCAP_1-2_Benchmark - Microsoft Internet Explorer 11 STIG Benchmark - Ver 2, Rel 6 - 1.11 MB	- Published on 22 Jan 2024
U_MS_Windows_11_V1R3_STIG_SCAP_1-2_Benchmark - Microsoft Windows 11 STIG Benchmark - Ver 1, Rel 3 - 96.95 KB - Published on 30 Oct 2023
```
Navigate to Options on top menu > Output Options > Set Path : `C:\DISA\Reports` for Save Results to a Custom Directory - Scan Results will be made available post querying.
Minimize Window
Open `C:\DISA\U_STIGViewer-win32_x64-3-3-0.exe - STIG Viewer 3.3-Win64 - 140.36 MB - 07 Feb 2024` > You can choose to customise your DISA STIG Viewer ver.3x. by enabling dark mode > Click Open Multiple Stigs by Selecting > `U_MS_Windows_11_V1R3_STIG_SCAP_1-2_Benchmark.xmlfile (STIGFile present in path - C:\DISA\U_MS_Windows_11_V1R3_STIG_SCAP_1-2_Benchmark\)` if you would like to run automation for Windows 11 benchmark or select the additional `.xmlfile` files inside `C:\DISA` folder - 
```
U_Google_Chrome_V2R9_STIG_SCAP_1-2_Benchmark.xml
U_MS_Defender_Antivirus_V2R5_STIG_SCAP_1-2_Benchmark.xml
U_MS_Edge_V1R3_STIG_SCAP_1-2_Benchmark.xml
U_MS_IE11_V2R6_STIG_SCAP_1-2_Benchmark.xmlfile
```

Click on Gear Icon and Select Create Checklist from STIG and Save Checklist inside `C:\DISA\Checklists`
Open Terminal or Command Prompt as Administrator and run the following commands one by one for `Windows 11 Benchmarks` present for automation inside `C:\DISA\LGPO\LGPO_30` folder

`cd C:\DISA\LGPO\LGPO_30`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows 11 v1r5\GPOs\{8E534F4D-DD7E-4B14-B09A-B944F6341F6E}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows 11 v1r5\GPOs\{82432779-89EA-4CFC-8759-7B6759037DE1}"
```

Continue with Command Prompt as Administrator and run the following commands one by one for `Windows 10 Benchmarks`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows 10 v2r8\GPOs\{876C5A1E-7050-4D3F-9FA5-99E9B31BF80E}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows 10 v2r8\GPOs\{D44AA262-F641-4083-87B1-1BC05572792D}"
```
Note the folder value and folder name inside `C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows 10 v2r8\GPOs\` will be different for your downloaded file.

For `Google Chrome Benchmarks`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Google Chrome v2r8\GPOs\{0FBEE738-6902-4E7E-8E79-9A0B1B2668B9}"
```

For `Internet Explorer 11 Benchmarks`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Internet Explorer 11 v2r5\GPOs\{843FA335-CE04-4647-9118-C4BB301D7F3A}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Internet Explorer 11 v2r5\GPOs\{932CA0DB-0AC9-413F-8EE3-9ACB5D15C4DD}"
```

For `Microsoft Defender Antivirus`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Microsoft Defender Antivirus STIG v2r4\GPOs\{1733BFC6-8E8E-41F7-BB76-EB2070330C89}"
```
For `Microsoft Edge`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Microsoft Edge v1r7\GPOs\{7121E30A-6426-45FA-9DA0-3C60AA4C130A}"
```

For `Microsoft Office 2019-Microsoft 365 Apps`
```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office 2019-M365 Apps v2r11\GPOs\{8EDEFBA3-AABA-4066-A63B-D15914BF56A8}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office 2019-M365 Apps v2r11\GPOs\{75586EAD-D728-49D5-8BC1-402C1E9A8A01}"
```

For `Microsoft Office 2013`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{9DDE8B7D-AADE-4F26-B769-DD36CEC7CBB0}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{9F715CEC-6EB4-41AE-804C-DFF512FCB278}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{27DA054A-1B6B-485F-A981-46810AF32CF7}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{45A93B3A-F8C4-4102-8509-FEC3B216CC43}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{46C22333-24E4-4F5A-BEBA-48634CC51E85}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{240F74C2-0465-4A87-ACE1-364066A15641}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{455AA1D6-C22A-41F6-8D86-20145139400A}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{07990314-3443-473C-9CCD-CDFEA1D5DDC2}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{B39248FF-4EC8-4E6E-A805-DE639EC598D1}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{D26A6107-F206-43A6-9C5F-3595093364D5}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{D6775239-5E9A-481C-B56B-8170C5130B54}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{FDCCB0A2-D5C0-4CD1-9AC9-98442968E3A7}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2013 and Components\GPOs\{FE1C2053-1C1C-4837-9D55-3EBBC395C642}"
```

For `Microsoft Office 2016`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{1A04C73B-CA54-45C6-AFE9-0BDC0FFCC0AA}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{2CA857D3-5B8D-4855-8A48-3D882386DB4A}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{4C16D0DC-6741-4952-A9B2-C81C409BAF5A}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{16D14A17-26E7-4EA5-87EC-21441E1A68E1}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{44C3946C-D604-41F3-BE67-C93BEDB80E9A}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{91FF921B-86F1-425E-9B86-F9750D3B6BA7}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{32550A92-7AE6-4A3A-805F-16925DD80219}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{68848ECD-6852-48F1-B576-DFD636820C26}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{300290AA-9189-4756-AFE1-40BBA5C23C22}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{A6642CD0-707C-46E3-80E4-9154FAA00188}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{B7997B35-2FA8-469E-9B4C-C6149044BC60}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{B3851818-412D-4844-8E79-A57D5D503B83}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{DE983C8C-5592-456A-9FD2-F716C6A40477}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{E5FC5A64-B14B-4C11-B377-A47A4572AA70}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Office System 2016 and Components\GPOs\{EA5ACE7F-77F7-4059-B72B-A9BBBEBCD6ED}"
```

For `Microsoft Defender Firewall`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Windows Defender Firewall v2r2\GPOs\{EB82B913-90A2-4599-A554-90B3A116B382}"
```

For `Adobe Acrobat Reader DC Continuous`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Adobe Acrobat Reader DC Continuous V2R1\GPOs\{45606343-8AFB-48D5-848E-2A6D22B3BA70}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Adobe Acrobat Reader DC Continuous V2R1\GPOs\{BFDDF882-A145-4758-B1B5-F8A207880C61}"
```

Adobe `Acrobat Pro DC Continuous`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Adobe Acrobat Pro DC Continuous V2R1\GPOs\{58B892A3-ECB0-4DAD-91D4-B647524DFF30}"
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Adobe Acrobat Pro DC Continuous V2R1\GPOs\{67BE380B-ADBA-4E71-B702-821D607D4A9B}"
```

For `Mozilla Firefox`

```
.\LGPO.exe /g "C:\DISA\U_STIG_GPO_Package_January_2024\DoD Mozilla Firefox v6r5\GPOs\{F1176AFA-BA81-47FB-A41E-5CDE92DA0EF4}"
```
You can now run a query to Scan on SCAP Compliance Checker (minimized window) to generate security benchmark scores in native .HTML Format for Digital Sign-off to SOC Auditor. `View Results under Results Menu.`

Make sure to enable `Zerotrust Gateway *(Cloudflare) > Preferences > Account > Login with Org. created inside Cf. Dashboard Zero Trust Settings.`

You can enable DNS to `1.1.1.1 (Cloudflare DNS)` inside `Google Chrome Browser Settings` and further level up your browsing experience by `disable preload and continue in background.`

`Enable TLS 1.3 by searching for Internet Options > Advanced > uncheck TLS 1.1 and 1.2`

You can partition your local SSD nVME m.2 into 3 spheres by accessing Storage options on Windows Partition Manager. This will help in keeping your CMS data redundant alongwith Product Images/Videos/AR(beta) clipped from Background with SEO-ready filenames (Altags) and installation folders for Packagist.org and Github Repositories or Windows Installation Folders attributed by your Administrator - `Localdisk C (Operating System + mbr)`, `Localdisk D (Bitlocker Information and Redundancy on Phantom Drive created using ESET nord32)`, and `Localdisk Z (Media and Payment Information)`. Noteworthy recommendation for local storage and memory - Crucial (Micron) storage and unlocked memory DDR5 or higher.

For 1-click cloud deploys you can use `Bitnami Hardened Images (CMS pre-bundeled Ubuntu OS)` or configure manually using `CIS Benchmarks` and proceed with manual installation of `CMS image on Bare Metal Servers (awsCloud, Azure, or GCP)`. 

Bitnami Application Catalog hosts a wide gammut of CMS eCommerce applications such as WordPress, Prestashop, and OroCommerce (Requested - currently available on GCP or Google Cloud) - `Currently OROCommerce requires Payment Gateways for Acceptance in Mumbai Metropolitan Region`. CCAvenue allows CC Validation Checks as well. Connect with your CCAvenue Security Expert to customise a solution based on the above Document.

Additional Notes - For non-compliant businesses proofing invalid invoices or declaring perishable items on Audit Trail - Your analyst can check traces and amend the following -

| eCommerce/In-store/Offline Transaction Xf-Value | Freight on Board Value  |  Annoted Declaration
| ------------- | ------------- | ------------- |
| 40557024169041165/DL15028274652425/IN65 | Optional 18% |  H2334349595303
| 40557024169041165/DL15028274652425/IN65-TRANS1 | Optional 21.785% |  H2334349595303 | 0.00

To learn CMUD project - `https://dbdb.io/db/aurora`

To host `aws Aurora Relational Database Service (RDS)` or a multi-tenant ver. bitnami Magento Commerce OS - You can select `Multi-tier` and costs^performance ratio will vary accordingly.

Hardening your Microsoft Windows Desktop PC / Laptop running Windows 10 Pro / 11 `Pro` / Server 2022 / 2019 requires you to have several security configurations remediated prior to setting out in the payment space. This includes `installing and automating the process using buildkits that scan and remediate the system (local or server) according to security standards as uniananmously agreed upon`. Process of Hardening your system requires your Company IT Administrator or Workgroup Admin to select your desired workable OSx - `https://www.cisecurity.org/cis-benchmarks` (..with search filters for compatibility with CIS-CAT Pro) or `https://www.cisecurity.org/benchmark` (list)- adept a `paid end-user license` - `CIS Membership Suite (1-year, 2-year recommended or 3-year ^cost-savings)` - `https://www.cisecurity.org/cybersecurity-tools/cis-cat-pro` and follow the below steps outlined -

- `Login` using your credentials to `https://workbench.cisecurity.org/registration` > Escalate Issues - mailto:learn@cisecurity.org
- Verify Checksum - `certutil -hashfile ./ Downloads/CIS-CAT-Assessor-windows-GUI-jre-v4.24.0.zip MD5` or even better `Get-FileHash C:\Users\user1\Downloads\CIS-CAT-Assessor-windows-GUI-jre-v4.24.0.zip -Algorithm SHA256 | Format-List` Replace user1 with your DesktopName - Learn more for various formats SHA256 | 384 | 512 - `https://learn.microsoft.com/en-us/powershell/module/microsoft.powershell.utility/get-filehash?view=powershell-7.4` - Make sure to validate the checksum values exactly as is with `Bitnami` or `CIS Workbench` or `Magento Opensource`
- Download and Extract the CIS Buildkit for your desired Operating System (Choose Level 1 or Level 2) (Server or Local Workstation) with GUI or Graphical User Interface 64-bit ver. 
- Note - (View CIS-CAT Pro Supported ver. - select your desired workable OSx - `https://www.cisecurity.org/cis-benchmarks` (..with search filters for compatibility with CIS-CAT Pro)
- `Copy the license.xml file` to `license folder` after extracting .zip
- Run the `Assessor-GUI.exe`

If license.xml file is placed correctly in the license folder, the program will automatically deploy as `CIS CAT Pro - Assessor Toolkit`. You will `NOT` be able to remediate hardening steps with `1-click remediation` using Buildkits (that allow the automation on system) if you're planning to use CIS CAT Assessor Toolkit (as Free ver.)

You can complete this process on all employee/organisation workstations including Network `Routers` and local systems running `Microsoft Office` products and enable security enhanced ver. of your software. CIS Suite offers remediation for `Linux` / `Windows` and `MacOSx` + Cisco Routers IEEE 802.3ab and IEEE 802.3z that are generally configured.

These steps `differ from DISA STIGs and SCAPs outlined above as you're simply configuring Local Group Policies on Pro ver. of your Operating Systems - fresh out of the box`. Enabling and remediating your systems using CIS CAT Assessor Toolkit Pro will result in hardening your systems - `Making changes to your OS functions and programs to Security Standards`. I have personally used the Toolkit on my systems and experienced `a security enhanced experience, saving me hours of deployment and compliance/audit checks for OCC compliance (or SOC - India)`.

Your `CIS Account Manager will connect with you`, on registration, for screening, ~if required.

I personally use CIS CAT Assessor Toolkit Pro 64-bit by verifying the checksum values MD5 / SHA on the CIS Workbench (Administrator Dashboard) to not request and install a false positive.

It is `NOT` legal to create, distribute or sell AMI or Machine Image in any form post altering the system using CIS CAT Assessor Toolkit Pro as you'd directly violate End-user License (`Microsoft OS or its affiliates` and `Center for Internet Security`). You could `opt-in to CIS Hardened Images for your choice of Cloud OS via Azure or AWS Marketplace` instead for `continued support and staying resilient` against erroneous deploys. `Advisories - https://www.cisecurity.org/advisory` - You can subscribe to `CIS Hardened` `AMI` or `Containers` hosted on `AWS Cloud` by clicking on the link here - https://go.aws/3TZkolO

`Some IT Administrators prefer to enable Network on Boot to deploy stable OS which is purchasing a (Pro ver.) licensed copy of your OS, and boot image through Network, however, this is quite complicated as you'd need to alter .win file from the OS Image and several other steps. Ideally, not recommended for incremental ver. upgrades for examole. Windows 7 / 10 2019 to 2022. Resilience to your local/cloud systems is a vector landscape that you define. Works for some though.`

Deployments across Multiple Cloud Infrastracture and Cancellations will result in ingress `Subscription Fees`. Make sure to `add/modify/cancel a valid Payment Method across CIS Administrator Dashboard`, AWS Marketplace (aws Console) or Azure Marketplace. If you are planning on securing an `Apple OSx device (On-prem / for Cloud)` - You can `seek support from your CIS Account Manager` regarding `LTS and Apple Developer Support`.

The following settings apply to mostly any smartphone or cellular device connecting to a mobile network in India.

- `Settings` - `Connections` - `Mobile Networks` - `Network Operators` - Disable Select Automatically and Search for Your Sim Provider - `Choose Reliance Jio`

- Set `Network Mode` (Manual - Disable Select Automatically)
- If `Reliance` - `5G or LTE` (Disable Others)
- If `Vodafone` - `LTE/3G/2G` (Select Automatically) or LTE
- If `Airtel` - `LTE/3G/2G` (Select Automatically) or LTE if available

- You can `create a new APN Profile` by navigating to `Settings` - `Connections` - `Mobile Networks` - `Access Point Names (APN)` - Make sure to select it after settings are applied on your end.

- Access Point Names (APN Settings)
Settings for Reliance Jio
- `Name` - Jio 4G (You can give it a relevant name of choice)
- `APN` - `jionet`
- (`Proxy`, `Port`, `Username`, `Password`, `Server`, `MMSC`, `Multimedia Message Proxy`, `Multimedia Message Port`) - `Not Set`
- `MCC` - `405`
- `MNC` - `874`
- `Authentication` - `CHAP`
- `APN Type` - Enter `default,xcap,supl`
- `APN Protocol` - `IPV4`
- `APN Roaming Protocol` - `IPV4`
- `Bearer` - `LTE`
- `Mobile Virtual Network Operator Type` - 
(Set Any One)
- If `SPN`
Mobile Virtual Network Operator Value - `Jio`
- If `IMSI`
Mobile Virtual Network Operator Value - `405874x`
- If `GID`
Mobile Virtual Network Operator Value - `FFFFFFFFFFFFFFFFFFFF`

Click on the three dot menu on the right and select `Save`.

For `Video KYC`, these settings remain as stated above. `Kindly do not approve telecallers claiming to revoke the above settings. These are cellular network settings fetched for servicing data plans on your smartphone.`

These are configuration settings sent over SMS via Carrier Network on SIM insert but the options are not enabled as set above. Data Services should be fully compliant for banking channels, communications and others.

You can confirm these settings are successfully set by navigating to `Settings` - `About Phone` - `Status Information` - `Sim Card Status`.

`Quick note for IPV6` - Browsing data can be made possible, but unfortunately, many mobile applications do not support IPV6. This is mostly because Mobile App Developers do not enable (inbound/outbound) traffic to be served over IPV6 Protocol when deploying apps via Network Interface.

For `dual sim`, SIM1 will be applied for the above settings, SIM2 will have LTE or 3G automatically set as the values are not passed to SIM2.

Users on Xiaomi and Apple iOS are unable to save the APN after creating it, and the default setting is set, over again. You can individually select and enable as many options as possible from above to save the APN Profile as intended.

Network Carriers are selectively deploying Reliance Jio LTE and Reliance Jio to allow clients to migrate network applications to IPV6 sub-net NAT on pushback request. The redundancy change would take a while to come in effect though.

[Subscribe to future updates to this repo by click here](https://github.com/dravasp/ccavenuepaymentgatewaymagentoseamless/commits.atom) - View .atom RSS file to import to Thunderbird
