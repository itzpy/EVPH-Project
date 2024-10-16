https://www.canva.com/design/DAGTqn_zT4k/m_qjnrnzXJ7QeIWbZrm6QA/edit?utm_content=DAGTqn_zT4k&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton

This is a link to our First Presentation Slides 


OUR PLANNED IMPLEMENTATIONS
Architecture Overview:
1. Planned Website Pages:
* Home Page: A welcoming page displaying the restaurant's basic information, promotions, and access to the menu.
* Menu Page: A dynamic page that displays the daily meal options, prices, and special offers.
* Order Page: Allows users to place online orders for dine-in or take-out, with options for customization.
* Reservation Page: Provides a system for customers to reserve tables, especially during peak hours.
* Feedback/Review Page: A section for users to leave feedback, rate meals, and view other customer reviews.
* Admin Dashboard: Restricted to staff, this page enables management of the menu, orders, customer feedback, and site updates.
2. Supporting Tables and PHP Functions:
* Database Tables:
    * users: Stores user information (e.g., name, email, role - admin or customer).
    * menu_items: Stores all available food items, prices, and descriptions.
    * orders: Logs order details (user, items ordered, status, payment info).
    * reservations: Manages table reservation information (user, time, number of people).
    * feedback: Stores customer feedback and reviews.
* Key PHP Functions:
    * getMenuItems(): Retrieves available menu items from the database for display on the menu page.
    * placeOrder(): Handles user orders, storing them in the orders table.
    * submitFeedback(): Stores customer feedback in the feedback table.
    * makeReservation(): Allows customers to reserve tables by entering data into the reservations table.
    * adminUpdateMenu(): Enables the admin to add, remove, or update menu items.
3. Implementation Status:
* Implemented Pages:
    * Home Page: Basic layout and some dynamic content completed.
    * Menu Page: Dynamic display of menu items with prices; partial functionality in place.
    * Order Page: Basic form for placing orders is functional but may require further integration with the back-end.
* In Development:
    * Reservation Page: Core structure done; awaiting integration with the reservations table.
    * Feedback Page: Layout completed; need to implement form functionality.
    * Admin Dashboard: Still in progress, awaiting integration with menu and order management functions.
4. Frontend Technologies:
* CSS: A custom stylesheet is being used to ensure a consistent color scheme and responsive layout across all pages.
* JavaScript/jQuery: Basic form validation and dynamic updates to the menu page rely on jQuery.
* No frameworks: No external CSS frameworks (e.g., Bootstrap) are being used to keep the code lightweight and custom.
The design also follows responsive web design principles to cater to both desktop and mobile users.
5. Demo:
The demo will showcase the Menu Page, where users can view the daily menu items and prices, and the Order Page, where they can place an order. The demo will illustrate the core functionality that helps Akornor handle online orders, demonstrating the website's value to students and staff.
