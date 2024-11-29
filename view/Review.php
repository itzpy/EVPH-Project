<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <meta name="Author" content="EVPH">
    <title>Review Page</title>
    <link rel="stylesheet" href="../assets/css/akornor.css">
    <link rel="stylesheet" href="../assets/css/feedback.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <p style="text-align:center; 
    padding: 20px;font-size: 1.2em;color: #555;
    line-height: 1.6;max-width: 800px;margin: 0 auto;">Thank you for ordering from Akornor! We are always looking for
        ways to improve<br>
        your customer experience and we want to make sure that we collect all of your <br>
        feedback to improve our services.</p>

    <div class="form-container">
        <h2 class="form-title">Feedback</h2>
        <form id="FeedbackForm" class="form" action="../functions/submit_feedback.php" method="post">
            <label for="category" class="form-label">Review</label>
            <select id="category" name="category" required class="form-input">
                <option value="Customer Service">Customer Service</option>
                <option value="Food Quality">Food and Drinks</option>
                <option value="Pool table">Pool table</option>
            </select>

            <label for="comments" class="form-label">Feedback</label>
            <textarea id="comments" name="comments" placeholder="Let us know what you think" required
                class="form-input form-textarea"></textarea>

            <label for="rating" class="form-label">Rating</label>
            <select id="rating" name="rating" required class="form-input">
                <option value="1">1 - Poor</option>
                <option value="2">2 - Fair</option>
                <option value="3">3 - Good</option>
                <option value="4">4 - Very Good</option>
                <option value="5">5 - Excellent</option>
            </select>
            <button type="submit" class="form-button">Submit</button>
            <button type="button" class="form-button" id="cancelButton">Cancel</button>
        </form>
    </div>

    <!-- Thank you message -->
    <p id="thankYouMessage" style="display: none; color: green; font-weight: bold;"></p>

    <script>
        // Select the form and cancel button
        const form = document.getElementById("FeedbackForm");
        const cancelButton = document.getElementById("cancelButton");

        // Submit handler
        form.addEventListener("submit", function (event) {
            event.preventDefault(); // Prevent page reload

            // Get form data
            const formData = new FormData(form);

            // Send data to the server using Fetch API
            fetch("../functions/submit_feedback.php", {
                method: "POST",
                body: formData,
            })
                .then((response) => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        throw new Error("Failed to submit feedback");
                    }
                })
                .then((data) => {
                    // Display the thank you message
                    const message = document.getElementById("thankYouMessage");
                    message.textContent = data;
                    message.style.display = "block";

                    // Clear the form fields
                    form.reset();
                })
                .catch((error) => {
                    console.error(error);
                    const message = document.getElementById("thankYouMessage");
                    message.textContent = "Something went wrong. Please try again.";
                    message.style.color = "red";
                    message.style.display = "block";
                });
        });

        // Cancel button handler
        cancelButton.addEventListener("click", function () {
            form.reset(); // Clear the form fields
            const message = document.getElementById("thankYouMessage");
            message.style.display = "none"; // Hide the thank you message
        });
    </script>
</body>

</html>