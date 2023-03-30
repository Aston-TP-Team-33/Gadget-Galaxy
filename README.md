# Gadget-Galaxy
#### Gadget-galaxy is a fully functional online tech eCommerce where you can buy smrtphones, tablets, tvs, laptops and cameras which has a modern and appealing design for young adults.
In this repository you you can find a website project made with Laravel. This website has different features such as:
- A fully functional Basket
- A stock management system
- Customer log in and registration system
- An admin page*
- A filtering system and a search bar
- A home, product, contact and about us page
- a fully functional navigation bar and footer
*in the admin page you can edit stock level, update orders status and a list of registered users we also have developed a dedicated admin java application from whre you do these and many more things (`https://github.com/Aston-TP-Team-33/Inventory-Management-System`).\
In this file you will know how to download and use the code in this repository

## Essential softwares 

Before pulling this code you need some essential softwares:

- Composer
- Laravel (Version 8+)
- NodeJS
- XAMPP (For locally host the website) (Version 8+)
- An IDE (Preferably VSCode)
- PHP (Only if you are using macOS) (Version 8+)
- We suggest to mac users to install PHP and Composer from Homebrew through your mac Terminal.

## Pulling the code

Now you have installed all the required software, it is time to pull the code from git.\
Copy the Git repository link and run the `git pull` command followed by the repository link.\
Once you have successfully pulled the file from git, copy and paste the entire folder inside\
`/Applications/XAMPP/htdocs` if you are on macOS\
`C:\xampp\htdocs\` if you are on Windows\
Once you have copied and pasted the Git project inside the htdocs folder we can now attempt to open our website.

## First run

Now that you have pulled the code it is time to run the website.\
First of all, open XAMPP and start the `MySQL Database` and the `Apache Web Server`\
Now go on your web browser (We suggest Google Chrome) and paste the following URL on your in it `http://localhost/team33/public/homepage`.  If you have installed all the softwares correctly you would be able to access a local version of our website.

## macOS Users
If you are a macOS user you might face a storage error from Laravel, this is due to macOS which limits Laravel and doesn't allow it to read or write any changes.\
To fix this error please go inside the htdocs folder, click with 2 fingers on the project folder and select `New Terminal at Folder`. This will open a new Terminal window in where you will have to write this command `sudo chmod -R 777 storage` this will give read and write permissions to the storage file in Laravel.

## Editing the code
All our pages can be found inside `/team33/resources/views` and the styling files are located in `/team33/public/css`.\
All the functions used for our website are in `/team33/app/Http/Controllers` and all the routing are in `team33/routes/web.php`

## Troubleshooting

Log in and registration system not working
- If you have an issue with the log in/registration system in our website run the following commands in the Terminal/command prompt `npm install` and `npm run dev`. Now everything should work fine.

## Useful Links

- Composer (`https://getcomposer.org/download/`)
- Laravel (`https://laravel.com/docs/10.x/installation`)
- NodeJS (`https://nodejs.org/en/download`)
- XAMPP (`https://www.apachefriends.org/download.html`)
- Homebrew (`https://formulae.brew.sh`)
- Git Repository (`https://github.com/Aston-TP-Team-33/Gadget-Galaxy.git`)
