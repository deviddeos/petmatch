<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form | Petmatch</title>
  <link rel="icon" type="image/x-icon" href="image/tabeicon.png">

  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .feedback-form {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
    }
    .feedback-form label {
      display: block;
      margin-bottom: 10px;
    }
    .feedback-form input[type="text"],
    .feedback-form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      resize: vertical;
    }
    .feedback-form .stars {
      display: inline-block;
    }
    .feedback-form .stars input[type="radio"] {
      display: none;
    }
    .feedback-form .stars label {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
    }
    .feedback-form .stars label:hover,
    .feedback-form .stars label:hover ~ label,
    .feedback-form .stars input[type="radio"]:checked ~ label {
      color: #ffcc00;
    }
    .feedback-form .submit-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .feedback-form .submit-btn:hover {
      background-color: #45a049;
    }
    
  </style>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "inc/header.php";
    ?>
  <div class="feedback-form my-5">
    <h2>Feedback Form</h2>
    <form action="submit_feedback.php" method="post" enctype="multipart/form-data" >
      <label for="image">Upload an image:</label>
      <input type="file" id="image" name="image" accept="image/*">
      <label for="message">Message:</label>
      <textarea id="message" name="message" rows="4" placeholder="Enter your feedback here..."></textarea>
      <div class="stars">
        <input type="radio" id="star5" name="rating" value="5">
        <label for="star5" title="5 stars">&#9733;</label>
        <input type="radio" id="star4" name="rating" value="4">
        <label for="star4" title="4 stars">&#9733;</label>
        <input type="radio" id="star3" name="rating" value="3">
        <label for="star3" title="3 stars">&#9733;</label>
        <input type="radio" id="star2" name="rating" value="2">
        <label for="star2" title="2 stars">&#9733;</label>
        <input type="radio" id="star1" name="rating" value="1">
        <label for="star1" title="1 star">&#9733;</label>
      </div>
      <button type="submit" class="submit-btn">Submit Feedback</button>
    </form>
  </div>
  <?php
    include "inc/footer.php";
    ?>
</body>
</html>
