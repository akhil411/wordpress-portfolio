<?php
/**
 * Template Name: Contact
 */
?>

<?php get_header(); ?>

            <div class="centre">
                <div class="middle">
                    <div class="about-me">
                        <h2>Contact</h2>
                    </div>
                    <hr>
                    <div class="form">
                        <form action="#">
                            <div class="form-data">
                                <label for="fullname">Name</label>
                                <input type="text" id="fullname" name="fullname" placeholder="Your full name..">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" placeholder="Your Email..">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" cols="30" rows="10" placeholder="Write your message"></textarea>
                                <input type="submit" value="Submit">
                            </div>
                            
    
                        </form>
                    </div>
                   
                </div>
            </div>
            <?php get_footer(); ?>
