<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Author" content="EVPH">
    <title>Review Page</title>
    <link rel="stylesheet" href="../assets/css/akornor.css">
    <link rel="stylesheet" href="../assets/css/feedback.css">

</head>

<body>
    <p style="text-align:center; 
    padding: 20px;font-size: 1.2em;color: #555;
    line-height: 1.6;max-width: 800px;margin: 0 auto;">Thank you for ordering from Akornor as always, we want to
        improve<br>
        your customer experience and we want to make sure that we capture all of your <br>
        comfort needs as well as your food desires</p>

    <div class="form-container">
        <h2 class="form-title">Feedback</h2>
        <form id="FeedbackForm" class="form">
            <label for="ReviewType" class="form-label">Review</label>
            <select id="ReviewType" name="Review Type" required class="form-input">
                <option value="CustomerService">Customer Service</option>
                <option value="FoodQuality">Food and Drinks</option>
                <option value="Pool table">Pool table</option>
            </select>

            <label for="feedback" class="form-label">Feedback</label>
            <textarea id="feedback" name="feedback" placeholder="Let us know what you think" required
                class="form-input form-textarea"></textarea>

            <button type="submit" class="form-button">
                Submit
            </button>
        </form>
    </div>



    </div>

    <!-- Thank you message -->
    <p id="thankYouMessage" style="display: none; color: green; font-weight: bold;"></p>

    <script>
        const form = document.getElementById("FeedbackForm");
        const message = document.getElementById("thankYouMessage");
        const reviewType = document.getElementById("ReviewType").value;
        //handle submission
        form.addEventListener("submit", function (event) {
            event.preventDefault(); //prevent page from reloading


            // Set the thank you message text
            message.textContent = `Thank you for your ${reviewType} feedback, it means a lot to us!`;
            message.style.display = "block"; // Show the message

            // Clear the form fields
            form.reset();
        });


    </script>
</body>