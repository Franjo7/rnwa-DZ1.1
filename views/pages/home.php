<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        line-height: 1.5;
        background-color: #f2f2f2;
    }
    p {
        margin-bottom: 20px;
    }
    .welcome-message {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.3);
        max-width: 600px;
        margin: 50px auto;
    }
    h1 {
        font-size: 36px;
        margin-top: 0;
    }
</style>
<div class="welcome-message">
    <h1>Hello there <?php echo $first_name . ' ' . $last_name; ?>!</h1>
    <p>You successfully landed on the home page. Congrats!</p>
    </div>