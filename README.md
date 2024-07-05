# Resort Website

Welcome to the repository for the Resort Website. This project showcases a fully functional website for a resort, including pages for accommodations, dining, activities, booking, and more. The website is designed with a responsive layout, ensuring a seamless experience on both desktop and mobile devices.

## Table of Contents

- [Overview](#overview)
- [Folder Structure](#folder-structure)
- [Installation](#installation)
- [Usage](#usage)
- [Routes](#routes)
- [Views](#views)
- [Contributing](#contributing)
- [License](#license)

## Overview

The Resort Website is built using HTML, CSS, and JavaScript for the front end, with a Node.js and Express backend. It features a variety of pages and functionalities, including a gallery, booking form, dining options, and user authentication.

## Folder Structure

.
├── static
│   ├── photos
│   ├── accommodations.html
│   ├── activities.html
│   ├── booking.html
│   ├── confirmation.html
│   ├── dining.html
│   ├── gallery.html
│   ├── home.html
│   ├── index.html
│   ├── index.sql
│   ├── location.html
│   ├── RestaurantMenu.html
│   ├── SeafoodGrillMenu.html
│   ├── SignUp.html
│   ├── SignUp.php
│   └── styles.css
├── views
│   ├── Booking.ejs
│   ├── ConfirmationSuccess.ejs
│   ├── error.ejs
│   └── index.ejs
├── routes
│   ├── index.js
│   └── users.js
├── app.js
└── database.js



### Static Files

- **home.html**: Home page of the resort website.
- **accommodations.html**: Page detailing the accommodation options.
- **dining.html**: Page detailing the dining options.
- **activities.html**: Page listing activities available at the resort.
- **location.html**: Page with location details and map.
- **gallery.html**: Photo gallery of the resort.
- **booking.html**: Booking form for making reservations.
- **confirmation.html**: Booking confirmation page.
- **index.html**: Main index page.
- **index.sql**: SQL file for database setup.
- **RestaurantMenu.html**: Menu for the main restaurant.
- **SeafoodGrillMenu.html**: Menu for the seafood grill.
- **SignUp.html**: Sign-up form for new users.
- **SignUp.php**: PHP script for handling sign-ups.
- **styles.css**: CSS stylesheet for styling the website.

### Views

- **Booking.ejs**: EJS template for the booking page.
- **ConfirmationSuccess.ejs**: EJS template for the booking confirmation success page.
- **error.ejs**: EJS template for the error page.
- **index.ejs**: EJS template for the index page.

### Routes

- **index.js**: Handles routing for the home and other static pages.
- **users.js**: Handles user-related routes, including authentication and user management.

### Other Files

- **app.js**: Main application file that sets up the Express server and routes.
- **database.js**: Database connection and query handling.

## Installation

To run this project locally, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/resort-website.git
   

2.  Navigate to the project directory:

    ```bash
    cd resort-website
    ```

3.  Install the dependencies:

    ```bash
    npm install
    ```

4.  Set up the database:
    -   Import the `index.sql` file into your database.

5.  Start the server:

    ```bash
    node app.js
    ```

## Usage

Once the server is running, you can access the website at `http://localhost:3000`. The main functionalities include:

-   **Home Page**: Introduction to the resort.
-   **Accommodations**: Information about rooms and suites.
-   **Dining**: Details of dining options and menus.
-   **Activities**: List of available activities.
-   **Location**: Directions and map.
-   **Gallery**: Photo gallery of the resort.
-   **Booking**: Form for making reservations.
-   **Confirmation**: Displays booking confirmation details.
-   **Sign Up**: User registration form.

## Routes

-   **GET /**: Home page.
-   **GET /accommodations**: Accommodations page.
-   **GET /dining**: Dining page.
-   **GET /activities**: Activities page.
-   **GET /location**: Location page.
-   **GET /gallery**: Gallery page.
-   **GET /booking**: Booking form page.
-   **POST /booking**: Handle booking form submission.
-   **GET /confirmation**: Booking confirmation page.
-   **GET /signup**: Sign-up form page.
-   **POST /signup**: Handle sign-up form submission.
-   **GET /login**: Login form page.
-   **POST /login**: Handle login form submission.

## Views

The `views` folder contains EJS templates that render the dynamic parts of the website. These templates are used for the booking page, confirmation success page, error page, and index page.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request for any improvements or new features.

## License

This project is licensed under the MIT License. See the LICENSE file for details.
