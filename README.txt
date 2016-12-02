# Shift Cipher

#### _Epicodus Drupal Independent Project Number Two, 2 December 2016_

#### By _**HK Kahng**_

## Description

Project Requirements: Create a custom module which encrypts user input using a Shift Cipher.

Present a custom form with 3 text inputs. We want you to use text inputs rather than radio buttons or menus so that you can practice validation.
One input should be a shift value, one should be a direction, and the third should be the phrase to be encrypted.
Then you should redirect to a second page to show the result - the encoded phrase. Here are a couple examples of input and output.

* The shift value is the number of places to shift each letter over.
* If the shift direction is "right" then you will add the shift value. For example: "a" with a shift value of 1 and a direction of right would become "b". A shift direction of "left" with a shift value of 1 would turn "b" into "a".
* If the shift amount takes you over the bounds of the alphabet then cycle back to the beginning. For example: a shift value of 3 with the direction of right would turn "z" into "c".
* Any spaces or punctuation in the input phrase should be ignored and reproduced in the final result without being shifted.
* Your final result should be in all lowercase.
* Be sure to validate all input before calculating the result. Here are the validation rules:

 * The shift value must be a positive integer
 * The shift direction must be either "left" or "right".
 * The only special characters that should be allowed in your input phrase are spaces and punctuation.

## Prerequisites

You will need MAMP/WAMP properly installed on your computer.

## Installation

* `git clone <repository-url>` this repository
* Import the `cipher.sql.zip` file into MySQL
* Create a database account (`cipher`, password: `cipher`) in MySQL and grant it full access to the database
* Set MAMP/WAMP's web server directory to the project folder
* Navigate to localhost:8888 (or whatever local server settings you have for MAMP/WAMP)
* Site maintenance user: `cipher`, password: `cipher`

## Known Bugs

There are no known bugs in this application.

## Support and contact details

Contact me via GitHub!

## Technologies Used

This app uses the following bits of Human ingenuity: Drupal 7.52, MySQL, PHP.

### License

Published under the MIT License.

Copyright (c) 2016 **_HK Kahng_**
