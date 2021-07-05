<!DOCTYPE html>
<html lang="en-CA">
    <head>
        <meta charset="utf-8">
        <meta name="portfolio" content="all">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">
        <meta name="description" content="Frank Nguyen is a new media web developer residing in Surrey, BC, Canada.">
         <meta name ="author" content="Frank Nguyen">
        <title>Web Developer | Frank Nguyen</title>
        <?php require("assets/partials/favicons.php"); ?>
        <link rel="stylesheet" href="assets/css/reset.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Julius+Sans+One&display=swap">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <header class="header">
            <nav class="gn">

            </nav>
        </header>
        <main>
            <section class="landing-screen is-relative">
                <div id="circle-container" class="circle-container">
                    
                </div>
                <div class="hero-content is-center container">
                    <h2>Nice to meet ya, i'm Frank</h2>
                    <h1>I'm a web developer based in Vancouver, Canada</h1>
                    <a class="btn" href="#" title="About Author">Learn More</a>
                    <div class="arrow-wrap m-auto neon-arrow-shadow">
                        <div class="arrow arrow-left"></div>
                        <div class="arrow arrow-right"></div>
                    </div>
                </div>
            </section>
            <section class="mission">
                <div class="container neon-shadow">
                    <h2 class="header-txt neonText">MISSION</h2>
                    <p>The internet is a wonderful intangible place that allows anyone to connect and interact with each other. It is a treasure cove of wonder, people, and experience like no other.</p>
                    <p>With the world rapidly evolving and becoming more digitally connected, making sure no one is left behind in enjoying the culture of the internet. This means ensuring that the internet is accessible to everyone.</p>
                    <p>My mission is to be able to increase human connection in a world going digital. The more people we can connect, the more people who can enjoy and expand this endless frontier. Let's grow this space together!</p>
                </div>
            </section>
            <section class="featured-work">
                <div class="container">
                    <h2 class="is-txt-center header-txt">featured work</h2>
                    <div class="feature-cards is-md-flex">
                        <div class="card-content">
                            <h4>App Development</h4>
                            <h3>Mind Talk</h3>
                            <p>cordova using onsenui application that allows users to posts their thoughts and have others reply to them</p>
                            <a class="btn" href="#" title="description of artifacts">View Project</a>
                        </div>
                        <div>
                            <div class="temp-img"></div>
                        </div>
                    </div>
                    <div class="feature-cards card-two is-md-flex">
                        <div class="card-content">
                            <h4>App Development</h4>
                            <h3>Translink Open Api</h3>
                            <p>This is a cordova app using onsen ui to build an application that gives bus stops in a certain radius and their schedule</p>
                            <a class="btn" href="#" title="description of artifacts">View Project</a>
                        </div>
                        <div>
                            <div class="temp-img"></div>
                        </div>
                    </div>
                    <div class="feature-cards is-md-flex">
                        <div class="card-content">
                            <h4>Web Development</h4>
                            <h3>To-do App</h3>
                            <p>Built with PHP and SQL, this app allows you to log in and create your own to-do list</p>
                            <a class="btn" href="#" title="description of artifacts">View Project</a>
                        </div>
                        <div>
                            <div class="temp-img"></div>
                        </div>
                    </div>
                </div>       
            </section>
        </main>
        <footer class="footer">
            <h2 class="is-txt-center header-txt">let's have a conversation!</h2>
        <div class="container">
            <form class="contact-form" action="assets/app/contact.php" method="POST">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="visitor_name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Your E-mail</label>
                    <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
                </div>
                <div class="form-group">
                    <label for="title">What's the topic of today about?</label>
                    <input type="text" id="title" name="email_title" required placeholder="Portfolio Site Inquiry">
                </div>
                <div class="form-group">
                    <label for="message">Write your message</label>
                    <textarea id="message" name="visitor_message" placeholder="Type what's on your mind here!" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
            <div class ="is-flex social-icons">
                <div class="placeholder-icon"></div>
                <div class="placeholder-icon"></div>
                <div class="placeholder-icon"></div>
            </div>
            <p class="is-txt-center">&copy; Frank Nguyen Portfolio 2021 </p>
        </div>
        </footer>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="assets/scripts/main.js"></script>
    </body>
</html>