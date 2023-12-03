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
![Brand Website](https://img.shields.io/website?down_color=not%20running&down_message=site%20under%20maintainence&style=flat-square&up_message=active%20and%20running&url=https://ccavenue.com)

Install using SSH
cd /opt/bitnami/magento
composer require dravasp / ccavenuepaymentgatewaymagentoseamless:dev-master
sudo magento-cli setup:upgrade

Login to Magento Admin > Configuration > Sales > Payment Methods

Instructions:
==================

[] Fill up CCAvenue integration form - Ref. to https://www.ccavenue.com/merchant_onboarding_requisites.jsp for Merchant Onboarding Requisites
  - Login to your CCAvenue Account and Go to My Account > Integration
  - Connect with your Dedicated Account Manager at CCAvenue
  - Complete KYC and Request Approval for Live Keys

[] Changes for going Live.
  - Insert your (variables) Merchant ID + Access Code + Encyrption Key for Production Environment in Stores > Configrations > Sales > Payment Methods > CCAvenue

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

  - Infibeam Avenues Limited (India - IN) 
    - Mumbai Office - Level II, Plaza Asiad, S. V. Road, Santa Cruz (West), Mumbai - 400054. Maharashtra, India.
		+91 22 35155072

  - Ahmedabad Office - 28th Floor, Gift Two Tower, Block No. 56, Road 5C, Zone 5, Gift City, Gandhinagar - 382355. Gujarat, India
  - Pune Office - TRIOS CoWorkplace, Mont Vert Spectra, Office #106, 3rd floor, Opp. Hotel Wadeshwar, Baner Rd, Pallod farms, Baner, Pune - 411045, India
  - Delhi Office - Insta Office B-39, Near PVR Plaza, Block B, Connaught Place, New Delhi - 110001, India
  - Bengaluru Office - Narayan Reddy Complex, 3rd Floor, Cornor Woods, Opp Vaibhav Theatre, Above Karnataka Bank, Sanjay Nagar, Bangalore - 5600094, India
  - Chennai Office - HQ10 CoWorking Office, Bristol IT Park, Plot No. 10, 4th Floor, South Phase, Thiru.vi.Ka Industrial Estate, Guindy, Chennai - 600032, India

  - Avenues World FZ LLC (United Arab Emirates - UAE)

  - Dubai Office - Avenues World FZ LLC
	- Dubai Internet City Building # 17, Level 2, Office # 253 Opp. DIC Metro Station (seaside), P.O. Box 500416, Dubai, United Arab Emirates
		+971 4 5531029

  - Infibeam Avenues Saudi Arabia For Information Systems Technology Co. (Kingdom of Saudi Arabia - k.s.a)
	- Riyadh Office - Unit No. 2, First Floor, Alakhwin Building, Al Amir Abdulaziz Ibn Musaid Ibn Jalawi, Al Murabba, 12613, Riyadh, Kingdom of Saudi Arabia.
		+966 55 024 6031

  - AI Fintech Inc. (United States of America - USA)
	- New York Office - One Penn Plaza 36th Floor - New York 10119, US

[] Important Emails for Corporate Communications and Risk Assessment
	- Marketing contact@ccavenue.com / Technical service@ccavenue.com / Account accounts@ccavenue.com / Cardholder - Risk risk@ccavenue.com

[] Install using composer require dravasp/ccavenuepaymentgatewaymagentoseamless
  - Please Do Not Run composer with sudo or install in project root directory / Please Do Not Upload Static Files to Webserver.
  - Request Integration Support or Seek Guidance from Repo Maintainers
   
  - Sandbox URL Set - https://test.ccavenue.com/transaction.do?command=initiateTransaction (Currently Enabled)
  - Alternate Sub-set URL - https://qasecure.ccavenue.com/transaction.do?command=initiateTransaction (RP Monei via Moneybookers)
  - Production URL Set - https://secure.ccavenue.com/transaction.do?command=initiateTransaction (Currently Enabled)
  - Production URL Set - 

  - For Testing UAT run 
		md5 <filename>

  - Example
	md5 /opt/bitnami/magento/var/log/system.log
	inside SSH Terminal to provide verification to VAS Team
	
  - One-page Checkout Enabled for Magento Commerce OS - Bitnami
