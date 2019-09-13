How to Use:

Clone the files

After clonning run npm install and edit the env.files to your database

Run php artisan migrate

and run php artisan db:seed 

The following users will be seeded 

Administrator:
Username: admin@admin.com
Password: admin123

User
Username: user@admin.com
Password: admin123

Then you can login to administrator and create a survey and questions that will belong to the survey created.

The user will be able to view the survey after they have been created, a user can take a survey only once.


The user can be the survey taker and the administrator can be a user who has administrator prevaledges.

I was having a scenario where the user is someone who takes the survey and administrator being users that have administrator prevaledges 

If there is a need for user registration, you need to configure mail program in the software.

For development purpose I use mailtrap, which can be configured in this way

Create an account with mailtrap, when done they provide smtp details, copy the user name and the password to the ENV file as specified
with the dots 

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=****************
MAIL_PASSWORD=****************
MAIL_ENCRYPTION=null

REM: This is only used by the developers to test for emails

For production we use mailgun, which is 10000 free emails and 100 redirects to it perday. I would have configured my app but unfortunatly am on a local host so it want respond to any of the required codes to send the email.





 
 
