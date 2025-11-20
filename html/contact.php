
<?php include 'includes/head.php'; ?>

<main class="centered-page">
    <h1>Contact Us</h1>

    <p>Use the form below to send us a message!</p>

    <form action="">
        <fieldset>
            <legend>Contact Us</legend>
            <label for="email">Email Address</label>
            <input type="text" id="email" placeholder="jane.doe@gmail.com" required>
            <label for="message">Your Message</label>
            <textarea id="message" placeholder="Type your message here..." required></textarea>
            <button type="submit">Send</button>
        </fieldset>
    </form>

</main>

<?php include 'includes/foot.php'; ?>
