# webdeSign – Website Design Consultancy

## Project Overview

**webdeSign** is a website design consultancy website developed to showcase web design services and provide potential clients with information about the business. The website aims to deliver a simple, professional, and user-friendly experience through responsive design, intuitive navigation, and interactive features.

This project was developed as part of a semester-based web development module, building on an evolutionary prototype to create a fully functional website for a small website design consultancy business.

---

## Project Objectives

*   **Professional Online Presence:** Develop a credible online presence for a website design consultancy.
*   **Structured Content:** Create five interconnected webpages with consistent and intuitive navigation.
*   **Responsive Design:** Implement responsive layouts for seamless viewing on desktop, tablet, and mobile devices.
*   **Consistent Styling:** Utilise an external CSS stylesheet to maintain a unified visual identity across the entire website.
*   **Client-Side Interactivity:** Implement JavaScript to provide dynamic interactivity and form validation.
*   **Server-Side Processing:** Use PHP to securely handle server-side processing and contact form submissions.
*   **Local Development Environment:** Run, test, and debug the website locally using XAMPP.

---

## Technologies Used

This project relies on core web technologies and does **not** use any external frameworks (like Bootstrap or React).

*   **HTML5** – Structures the semantic content of the website.
*   **CSS3** – Provides styling, layout management, and responsive design (media queries).
*   **JavaScript** – Adds dynamic interactivity and client-side form validation.
*   **PHP** – Handles server-side form processing and backend logic.
*   **Apache (XAMPP)** – The local server environment used to run the website.
*   **Git & GitHub** – Used for version control and project hosting.

---

## Project Structure

```text
webdeSign/
│
├── home.html        # Homepage
├── about.html       # About the business
├── services.html    # Services offered
├── faq.html         # Frequently asked questions
├── contact.php      # Contact page and form
├── submit.php       # Processes contact form submissions
├── webstyle.css     # External stylesheet
└── README.md        # Project documentation
```

---

## Website Pages

1.  **Home (`home.html`)**: Introduces webdeSign, communicates the core purpose of the business, and provides visitors with a high-level overview of the consultancy.
2.  **About (`about.html`)**: Details the business's background, objectives, and unique approach to website design.
3.  **Services (`services.html`)**: Showcases the specific website design and consultancy packages offered to potential clients.
4.  **FAQ (`faq.html`)**: Answers common questions regarding services, the website development process, and what it's like working with the consultancy.
5.  **Contact (`contact.php`)**: Allows visitors to get in touch with webdeSign through an interactive contact form.
6.  **Form Processing (`submit.php`)**: Processes contact form submissions using PHP. It validates submitted information and displays appropriate success or error messages.

---

## Key Features

*   **Responsive Design:** Uses CSS media queries and flexible layouts to adapt flawlessly to smartphones, tablets, and desktop monitors.
*   **Consistent Navigation:** All webpages share a unified navigation structure, ensuring users can easily move between sections.
*   **Interactive Elements:** JavaScript enhances the user experience through interactive page elements and immediate client-side form validation before submission.
*   **Functional Contact Form:** A robust contact form allowing potential clients to submit enquiries, with PHP handling the secure server-side processing.
*   **Separation of Concerns:** The `webstyle.css` stylesheet effectively separates presentation from content, making it easier to maintain consistent colours, typography, spacing, and layouts.

---

## Installation and Setup

To run the webdeSign website locally, you must use a local server environment like XAMPP, as standard file viewing (`file://`) will not execute the PHP scripts.

### Prerequisites

*   **XAMPP** (with Apache and PHP installed).
*   A modern web browser (Chrome, Firefox, Safari, Edge).
*   A code editor, such as Visual Studio Code (optional, for viewing code).

### Steps to Run the Website

1.  **Download or clone** this repository to your local machine:
    ```bash
    git clone <your-repository-url>
    ```
2.  **Locate** your XAMPP installation directory (e.g., `C:\xampp` on Windows or `/Applications/XAMPP` on macOS).
3.  **Copy** the entire `webdeSign` project folder into the XAMPP `htdocs` directory:
    ```text
    C:\xampp\htdocs\webdeSign  # Example for Windows
    ```
4.  **Open** the XAMPP Control Panel and **start the Apache module**.
5.  **Open** your web browser and navigate to the following URL:
    ```text
    http://localhost/webdeSign/home.html
    ```
6.  Navigate through the webpages and test the contact form functionality.

> **Important:** Always open the website through `http://localhost/...`. Do not open the files directly from your computer's file explorer, as the PHP processing in `contact.php` and `submit.php` will fail without the Apache server running.

---

## Testing Protocol

Ensure the following tests are conducted to verify website functionality:

*   [ ] Verify that all five webpages load correctly without errors.
*   [ ] Check that all internal navigation links route to the correct pages.
*   [ ] Test the layout responsiveness on simulated desktop, tablet, and mobile screen sizes using browser developer tools.
*   [ ] Confirm that JavaScript validation immediately catches and highlights invalid form inputs (e.g., missing required fields, invalid email format).
*   [ ] Submit a valid contact form and verify that `submit.php` processes the information and displays a success message.
*   [ ] Submit an invalid contact form (bypassing client-side checks if possible) and verify PHP error handling.
*   [ ] Confirm that `webstyle.css` is applied consistently, checking fonts, colours, and alignment across all pages.

---

## Future Improvements

*   **Portfolio Section:** Add a dedicated page displaying a portfolio of completed website design projects.
*   **Social Proof:** Introduce client testimonials and detailed case studies.
*   **Accessibility (a11y):** Enhance accessibility features, ensuring full keyboard navigation and screen reader compatibility.
*   **Enhanced Security:** Add more comprehensive server-side validation and implement spam protection (e.g., reCAPTCHA) on the contact form.
*   **Database Integration:** Integrate a MySQL database (via PHPMyAdmin in XAMPP) to store and manage client enquiries persistently, rather than just processing them.
*   **SEO:** Improve Search Engine Optimisation with meta tags, semantic HTML improvements, and XML sitemaps.

---

## Author & Project Context

*   **Project Name:** webdeSign
*   **Project Type:** Website Design Consultancy
*   **Project Context:** Semester Web Development Project
*   **Development Approach:** Native HTML, CSS, JavaScript, and PHP (No frameworks used)

## Licence

This project was developed for educational purposes. Unless otherwise specified, all rights to the original project code and content remain with the author.
