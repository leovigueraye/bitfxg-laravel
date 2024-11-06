# Investment Management Website

## Introduction

This is an implementation of a High Yield Investment platform 

### At a glance

- Create an account
- Make a deposit into your Account
- Purchase a trading plan or package
- Receive ROI/Profit on your account
-Withdraw funds

## Features

Key features
=> Signal providing module – free addon
=> Flexible investment management system
=> API for registration (This helps in signing up leads from remote sources)
=> Crypto swapping module
=> Automated and dynamic ROI (Return on investment topup)
=> Email notification on registration, when ROI drops and at the end of investment circle.
=> Admin roles
=> User to user wallet transfer
=> Social login (Google Auth)
=> Google 2FA
=> Google Translate
=> Recaptcha

More
Advance users management.
Fully responsive design.
Automatic top up to users account (Hourly, daily, weekly or monthly). As specified by admin
Manual top up also included
Stop ROI auto top up on users account on non working days (weekends or holidays)
Withdrawal and deposit methods.
Informative USER Panel.
Deposit history.
withdrawal history.
Earning history.


## Installation

- Clone this repo using any method (https, ssh, gh cli)

- Set the configuration file using the command 
``` cp .env.example .env ```

- Install all required packages via composer. ``` composer install ```

- Set up Database configuration inside .env file.

- Run the migration 

```
php artisan migrate 
```

- Install all dependencies via `npm` and Compile all assets based on your deployment environment. 

#### Npm
```bash
#Install all dependencies
npm install

#Development
npm dev

#Production
npm prod
```

- Create symbolic link 
```
php artisan storage:link
```

- Start the local server using the command
```
php artisan serve
```
