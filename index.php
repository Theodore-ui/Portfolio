<?php include('functions.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css?v=<?php echo time(); ?>">
    <title>Theodore Lorenc Portfolio</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
</head>
    <body>
        <?php include('side_column.php') ?>
        <div class="main_column">
            <div class="cover"></div>
            <header>
                <img class="enigma" src="https://sweatpantsandcoffee.com/wp-content/uploads/2016/11/1200x628-PSYAL-Header.png" alt="Enigma machine"> 
                <button class="menu_button"><img src="icons/190-menu.png" alt="Menu Button"></button>           
                <div class="name_career_menu">
                    <div class="name_career"> 
                        <h1 class="name">Theodore Lorenc</h1>
                        <span class="career">Computer Programer</span>
                    </div>
                </div>
                <div class="scroll_down_down_arrow">
                    <button class="down_button"><i class="fa-solid fa-chevron-down"></i></button>
                </div>
            </header>
            <main>
                <div class="projects" id="projects">
                    <div class="project_title_container">
                        <h1 class="projects_title">PROJECTS</h1>
                    </div>
                    <div class="project_card_container">
                        <div class="project_card">
                            <img class="project_img" src="images/netmatters.png" alt="Netmatters home page recreation">
                            <div class="project_card_bottom">
                                <h3>HTML &#38; CSS Reflection</h3>
                                <p>A recreation of the Netmatters home and contact pages.</p>
                                <div class="project_links">
                                    <p class="page_link"><a href="http://netmatters.theodore-lorenc.netmatters-scs.co.uk/" target=”_blank”>Project Page</a></p>
                                    <p class="rep_link"><a href="https://github.com/Theodore-ui/HTML_and_CSS_Reflection" target=”_blank”>GitHub Repository</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="project_card">
                            <img class="project_img" src="images/link_image.png" alt="Linking an image to an email">
                            <div class="project_card_bottom">
                                <h3>JavaScript Array Reflection</h3>
                                <p>A randomly generated can be linked to an email. All images linked to an email can be viewed and unlinked.</p>
                                <div class="project_links">
                                    <p class="page_link"><a href="http://javascript-array.theodore-lorenc.netmatters-scs.co.uk/" target=”_blank”>Project Page</a></p>
                                    <p class="rep_link"><a href="https://github.com/Theodore-ui/Javascript_Array_Reflection" target=”_blank”>GitHub Repository</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form_wrapper" id="contact">
                    <form id="contact_form" method="POST" action="index.php#contact" accept-charset="UTF-8" novalidate="novalidate">
                        <div class="form_title_container">
                            <h1 class="form_title">CONTACT ME</h1>
                        </div>
                        <?php 
                        if(!empty($success_message)) {
                            echo $success_message;
                        } else {
                            echo "<br/><br/>";
                        }
                        ?>
                        <div id="error"></div>
                        <div class="form_first_rows">
                            <div class="label_input right_input">
                                <label for="first_name">First name</label>
                                <input type="text" id="first_name" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["first_name"];} ?>" name="first_name" required>
                                <?php 
                                if(!empty($first_name_error)) {
                                    echo $first_name_error;
                                } else {
                                    echo "<br/><br/>";
                                }
                                ?>
                            </div>
                            <div class="label_input">
                                <label for="last_name">Last name</label>
                                <input type="text" id="last_name" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["last_name"];} ?>" name="last_name">
                                <?php 
                                if(!empty($first_name_error)) {
                                    echo $first_name_error;
                                } else {
                                    echo "<br/><br/>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="form_first_rows">
                            <div class="label_input right_input">
                                <label for="email">Email address</label>
                                <input type="text" id="email" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["email"];} ?>" name="email">
                                <?php 
                                if(!empty($email_error)) {
                                    echo $email_error;
                                } else {
                                    echo "<br/><br/>";
                                }
                                ?>
                            </div>
                            <div class="label_input">
                                <label for="subject">Subject</label>
                                <input id="subject" value="<?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["subject"];} ?>" name="subject">
                                <?php 
                                if(!empty($subject_error)) {
                                    echo $subject_error;
                                } else {
                                    echo "<br/><br/>";
                                }
                                ?>
                            </div>
                        </div>
                        <div class="label_input">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" rows="7"><?php if (isset($_POST['submit_info']) && $is_errors) {echo $_POST["message"];} ?></textarea>
                            <?php 
                            if(!empty($message_error)) {
                                echo $message_error;
                            } else {
                                echo "<br/><br/>";
                            }
                            ?>
                        </div>
                        <button type="submit" name="submit_info" value="send" class="form_button">Send</button>
                    </form>
                </div>
            </main>
        </div>
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="js/main.js?v=<?php echo time(); ?>"></script>
        <script src="https://kit.fontawesome.com/1e403b2a33.js" crossorigin="anonymous"></script>
    </body>
</html>