### Subscriber platform

### environment requirements

* PHP 7.4 (compatible with PHP 7.2)
* Composer
* Mysql 8

### Environment setup

   * `clone repository from https://github.com/pk70/subscription-platform.git .`
   *  `install mysql 8`
   *  `create databse in mysql` 
   * `inside project folder rename env.example to .env file and change the DB_CONNECTION,DB_HOST,DB_PORT,DB_DATABASE,DB_USERNAME,DB_PASSWORD as per your mysql database crendentials`
   * `composer install`
   * `run php artisan migrate`
   * `run php artisan db:seed`
   * `run php artisan serve`
   * `finally run php artisan queue:listen in new terminal`

### email setup
 * `open .env file from root project folder and update MAIL_MAILER,MAIL_HOST,MAIL_PORT,MAIL_USERNAME,MAIL_PASSWORD,MAIL_ENCRYPTION as per your email configuration`

### api documentation
* `https://documenter.getpostman.com/view/4364265/VV4wSGgY`

### work flow for new post email sending
* when a new post created an event will fire and send email through listner.
* php artisan queue:retry all for queue faild jobs.

