webdeSign – Website Design Consultancy

Project Overview

webdeSign is a website design consultancy website developed to showcase web design services and provide potential clients with information about the business. The website aims to deliver a simple, professional, and user-friendly experience through responsive design, intuitive navigation, and interactive features.

The project is developed as part of a semester-based web development project, building on an evolutionary prototype to create a functional website for a small website design consultancy business.

Project Objectives

Develop a professional online presence for a website design consultancy.
Create five webpages with consistent and intuitive navigation.
Implement responsive layouts for desktop, tablet, and mobile devices.
Use an external CSS stylesheet to maintain consistent styling across the website.
Implement JavaScript to provide client-side interactivity and form validation.
Use PHP to handle server-side processing and contact form submissions.
Run and test the website locally using XAMPP.
Technologies Used

HTML5 – Structures the website content.
CSS3 – Provides styling, layout, and responsive design.
JavaScript – Adds interactivity and client-side form validation.
PHP – Handles server-side form processing.
Apache (XAMPP) – Runs the website locally.
Git and GitHub – Used for version control and project hosting.
No external frameworks are used in this project.

Project Structure


text
webdeSign/
│
├── home.html          # Homepage
├── about.html         # About the business
├── services.html      # Services offered
├── faq.html            # Frequently asked questions
├── contact.php         # Contact page and form
├── submit.php          # Processes contact form submissions
├── webstyle.css        # External stylesheet
└── README.md            # Project documentation
Website Pages

1. Home – home.html

Introduces webdeSign, communicates the purpose of the business, and provides visitors with an overview of the website design consultancy.

2. About – about.html

Provides information about the business, its objectives, and its approach to website design.

3. Services – services.html

Showcases the website design and consultancy services offered to potential clients.

4. FAQ – faq.html

Answers common questions about the services, website development process, and working with the consultancy.

5. Contact – contact.php

Allows visitors to get in touch with webdeSign through a contact form.

Form Processing – submit.php

Processes contact form submissions using PHP. Depending on the implementation, it can validate submitted information and display an appropriate success or error message.

Key Features

Responsive Design

The website uses CSS media queries and flexible layouts to adapt to different screen sizes, including smartphones, tablets, and desktop computers.

Consistent Navigation

All five webpages share a consistent navigation structure, allowing users to move between sections easily.

Interactive Elements

JavaScript can be used to enhance the user experience through interactive page elements and client-side form validation.

Contact Form

The contact form provides a way for potential clients to submit enquiries. PHP handles the form submission on the server.

External CSS

The webstyle.css stylesheet separates presentation from content, helping maintain consistent colours, typography, spacing, and layout throughout the website.

Installation and Setup

To run webdeSign locally, you will need XAMPP installed on your computer.

Prerequisites

XAMPP with Apache and PHP.
A web browser.
A code editor, such as Visual Studio Code (optional).
Steps to Run the Website

Download or clone this repository to your computer.

bash
git clone <your-github-repository-url>
Locate the XAMPP installation directory.
Copy the project folder into the htdocs directory.
Example for Windows:


text
C:\xampp\htdocs\webdeSign\
Open the XAMPP Control Panel and start Apache.
Open your browser and navigate to:

text
http://localhost/webdeSign/home.html
Navigate through the webpages and test the contact form.
Important: Open the website through localhost, rather than opening the files directly from your computer. PHP scripts require a server with PHP support to execute correctly.

Testing

The website should be tested to confirm that its pages and interactive features work as expected.

Verify that all five webpages load correctly.
Check that navigation links lead to the correct pages.
Test the layout on desktop, tablet, and mobile screen sizes.
Confirm that JavaScript validation responds appropriately to invalid form inputs.
Submit the contact form and check that submit.php processes the information correctly.
Test form submissions with missing or invalid information.
Confirm that the external stylesheet is applied consistently across all pages.
Future Improvements

Potential improvements include:

Adding a portfolio of completed website design projects.
Introducing client testimonials and case studies.
Enhancing accessibility and keyboard navigation.
Adding more comprehensive server-side validation and spam protection.
Integrating a database to store client enquiries, if required.
Improving search engine optimisation (SEO).
Author

Project Name: webdeSign
Project Type: Website Design Consultancy
Project Context: Semester Web Development Project
Development Approach: HTML, CSS, JavaScript, and PHP without frameworks

Licence

This project was developed for educational purposes. Unless otherwise specified, all rights to the original project code and content remain with the author.
