# Ecommerce application

The Ecommerce Application is a web-based platform that allows users to browse and purchase various products.
It provides features such as user registration, login, product listing, shopping cart management, coupon code application, and secure checkout using the Stripe API.

Features
* User Registration: Users can create an account by providing their personal information.
* User Login: Registered users can log in to their accounts securely.
* Product Listing: Users can view a list of available products with details such as name, description, price, and image.
* Shopping Cart: Users can add products to their shopping cart, modify quantities, and remove items.
* Coupon Code Application: Users can apply coupon codes to avail discounts on their purchases.
* Checkout with Stripe: Users can securely complete their purchases using the Stripe API for payment processing.

Instalation 

1- Clone the repository:

https://github.com/mossaab-zegaoui/Ecommerce-app-laravel.git

2- Navigate to the project directory

cd Ecommerce-app-laravel

3- Install the dependencies

npm install

composer install

4- Set up the environment variables:

cp .env.example .env

php artisan key:generate

5- Run database migrations

php artisan migrate
php artisan db:seed
6- Start the application
php artisan serve

Images

![home_page](https://github.com/mossaab-zegaoui/Ecommerce-app-laravel/assets/97173944/b6c26334-ca72-46e1-ae37-4598999faf74)
![products_page](https://github.com/mossaab-zegaoui/Ecommerce-app-laravel/assets/97173944/fd6c7b98-6dd8-4806-8404-7ab6d9ae28b0)
![product](https://github.com/mossaab-zegaoui/Ecommerce-app-laravel/assets/97173944/12e48ab0-5af3-4475-a45e-3c611c3881e4)
![cart_page](https://github.com/mossaab-zegaoui/Ecommerce-app-laravel/assets/97173944/3af2eea1-e442-4d6e-b4c6-d250bd86f304)
![checkout_page](https://github.com/mossaab-zegaoui/Ecommerce-app-laravel/assets/97173944/631bdab7-b7eb-41a7-b033-52b2d357d2d3)


