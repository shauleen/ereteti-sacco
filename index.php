<?php
$page_title = 'Welcome to Ereteti';
include 'includes/header.php';
?>
<main>
    <section class="hero">
        <h2>Milk collected twice a day, paid once a month</h2>
        <p>Ereteti Dairy Sacco has collected milk on the Ngong road since 1998. Around eight hundred farmers deliver to us twice a day, and we pay for every accepted litre once a month.</p>
        <p>Any farmer on one of our three routes may join. You need a national ID and a bank account, and you may deliver from the day your membership number is issued.</p>
        <p><a class="button-link" href="register.php">Apply for membership</a></p>
    </section>
    <section>
        <h2>Where we collect</h2>
        <ul class="route-cards">
            <li><a href="routes.php#kiserian">Kiserian route</a></li>
            <li><a href="routes.php#ngong">Ngong route</a></li>
            <li><a href="routes.php#rongai">Rongai route</a></li>
        </ul>
        <img class="feature-image" src="img/collection-centre.jpg" alt="Farmers queuing with churns at a milk collection centre">
    </section>
</main>
<?php include 'includes/footer.php'; ?>
