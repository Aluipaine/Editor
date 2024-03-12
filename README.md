Documentation This project allows you to create projects for the construction of houses.

On 24-07-2023, there are three roles:

Mittaus (measurement)
Commentator
Admin
All the main work is in the first role. Comments the comments table is attached by the role of the commentator, the administrator can change the general settings of the moderator

installation:

Download this repository
Install the database from the DB folder to your local server in phpmyadmin. It is recommended to use the Open Server program
Connect the project to the database in files vendor/config.php and config.php
The editor is ready to use
Test accesses:

Measuring Jyri Ipah6Xae!
Commenting on duunari Nakkimakkara456
Admin administration Nakkimakkara123!
Login via the Site Name on локалке/login.php

HOW TO PUSH?

Upload the current database to the db folder
Write to readme.txt or directly tell us what has been done (which of the things done to check)
Push all files into the repository
The jamb of the project is what happens in php files, so we kindly provide a description of the functionality of each:

Connecting to the database: Edit vendor/config.php

Functional:

addcomment.php - Adds a comment to the database (role 2)

ajaxupload.php - Uploads files to a folder when uploading a new project to new-project.php (role 1)

comment__kuittaus.php - Marks a comment as made (role 2)

commentattachmentupload.php - Adds an attachment to the comment (role 2)

commentreport.php - When entering, throws a report on completed comments to the administration's email (role 3)

get-added-users.php - Returns users added to the project in JSON format. Requires project_id as an argument (POST) (role 2)

getanswers.php - Returns responses to a comment in the same format as regular comments. Requires answer_to and user as arguments (POST) (role 2)

get-walls.php - Returns names, descriptions, installation order and hiding of walls in JSON format (roles 1 and 2)

kumoa.php - Undo changes from the kumoalog table. Accepts the project_id and username (POST) arguments (Role 1)

updateproject.php - Pushes updated project data into the database (role 1)

update-walls.php - Allows you to change the names, descriptions, installation order and hiding of walls (role 1)

upload.php - Old file downloader (role 1)

db/updatepohjat.php - Saves and updates new room templates to the database (role 1)

vendor/settings__update.php - updates the Administrator settings (role 3)

Parts header.php - Site header, scripts are connected in the front-end

footer.php - The basement of the site, scripts are connected and html is closed (role 3)

footer-post.php - The basement of the site, scripts are connected and html is closed (role 1, 2)

+php files in the 'templates' folder

levynakyma.php - The page for creating a single panel (will be public)

new-project.php - A new project is being created here (role 1)

post.php and the components in templates - the main page of the project (roles 1 and 2)

register.php - user registration page, not working 02-08-23

reset-password.php - password reset page (role 1, 2, 3)

welcome.php - home page for work (roles 1 and 2)

welcome-marko.php - the main page of the administrator (role 3)

templates/commentator.php - Pop-up window for commenting on points (role 2)

logout.php - Exit page

login.php - Login page 2

index.php - Login page 1

IT is IMPORTANT to observe the proportion of 5 millimeters per 1 pixel in drawarea (roles 1 and 2)

