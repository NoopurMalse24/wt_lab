# Currency Converter Application (Dollar to Rupees) using PHP

## Overview
This is a simple currency converter web application built with PHP. It allows users to input an amount in US Dollars and converts it to Indian Rupees using a hard-coded exchange rate.

## Folder Structure
- ExchangeRate_PHP/
  - index.php          # Frontend form for user input
  - convert.php        # Backend PHP script to perform conversion
  - css/
    - bootstrap.min.css  # Bootstrap CSS for responsive design
  - js/
    - jquery.min.js      # jQuery library (optional for enhancements)
  - README.md          # This file

## Setup Instructions
1. Install a local PHP development environment such as XAMPP, WAMP, or MAMP.
2. Place the `ExchangeRate_PHP` folder inside your web server's root directory (e.g., `htdocs` for XAMPP).
3. Start Apache server.
4. Open a browser and navigate to `http://localhost/ExchangeRate_PHP/index.php`.
5. Enter the amount in dollars and submit to see the converted amount in rupees.

## Exchange Rate
- The exchange rate is hard-coded in `convert.php` as 1 USD = 82.50 INR (can be updated as needed).

## Testing
- You can test the conversion by entering different dollar amounts.
- The application uses Bootstrap for responsive design and basic validation.

## Dependencies
- PHP 7.x or higher
- Bootstrap 4.x (included)
- jQuery 3.x (included)
