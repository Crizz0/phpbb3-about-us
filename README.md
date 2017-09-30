"About us" extension for phpBB 3.2
======
About us is an extension which adds to phpBB 3.2 an about us or legal notice-page, where you can add your contact details and the links to the terms of use and privacy policies and more. 

Author: Christian Schnegelberger

URL: http://www.crizzo.de

Version: v2.1.2

## Install instructions:
1. Download the extension
2. Copy the whole unpacked archive to: phpBB/ext/crizzo/aboutus
3. Go to your phpBB-Board --> Admin Control Panel --> Customise --> Manage extensions --> About us: Enable
4. A new tab "Extension" appears, where you setup the "About us"-page. 

## Update instructions:
1. Go to you phpBB-Board > Admin Control Panel > Customise > Manage extensions > About us: disable
2. Delete all files of the extension from phpBB/ext/crizzo/aboutus
3. Upload all the new files to the same locations
4. Go to you phpBB-Board > Admin Control Panel > Customise > Manage extensions > About us: enable
5. Purge the board cache

## Automated Testing

We use automated unit tests to prevent regressions. Check out our travis build below:

2.1.x: [![Build Status](https://travis-ci.org/Crizz0/phpbb3-about-us.png?branch=2.1.x)](https://travis-ci.org/Crizz0/phpbb3-about-us/)