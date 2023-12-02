<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include FontAwesome directly from the official website -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-LmSTqQj+oIuDZ0kP2kWv9ZmGsMOCiKaEGTF2HtI9FJlOgtPJh3Sp4BPeY0rlrru0" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .booking-form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #555;
        }
        .cta-button{
            color: white;
            text-decoration: none;
        }
    </style>

    <title>Reliable Ride - Car Rentals</title>
</head>
<body>

    <section class="booking-form">
        <h2>Book Your Ride</h2>
        <!-- Booking Form -->
        <form action="submit_booking.php" method="post">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="last-name">Phone Number:</label>
            <input type="text" id="last-name" name="Phone" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="bus-type">Bus Type:</label>
            <select id="bus-type" name="bus_type" required>
                <option value="standard">Standard</option>
                <option value="executive">Executive</option>
            </select>

            <label for="pickup-point">Pickup Point:</label>
            <select id="pickup-point" name="pickup_point" required>
                <option value="circle">Circle</option>
                <option value="abeka-junction">Abeka Junction</option>
                <option value="achimota">Achimota</option>
                <option value="mile7">Mile 7</option>
                <option value="pokuasi">Pokuasi</option>
                <option value="amansaman">Amansaman</option>
                <option value="nsawam">Nsawam</option>
            </select>

            <button type="submit">Submit Booking</button>
            <a href="index.php">
            <button><a href="index.php" class="cta-button">Go Back</a></button>
            </a>
           


        </form>
    </section>

</body>
</html>
