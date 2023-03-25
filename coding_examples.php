<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/normalize.css">
        <title>Theodore Lorenc Portfolio</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    </head>
    <body>
        <?php include('side_column.php') ?>
        <div class="cover"></div>
        <div class="main_column_examples main_column">
            <div class="menu_title">
                <button class="menu_button"><img src="icons/190-menu.png" alt="Menu Button"></button>
                <div class="coding_examples_title_container">
                    <h1 class="coding_examples_title">Coding Examples</h1>
                </div>
            </div>
            <div class="code_examples_container">
                <h2 class="code_example_title">Example: JavaScript Typing Animation</h2>
                <div class="example_description">
                    <p class="code_example">
                        1)  const text = document.querySelector('.name');<br>
                        2)  const strText = text.textContent;<br>
                        3)  const splitText = strText.split('');<br>
                        4)  text.textContent = '';<br>
                        5)  const career = document.querySelector('.career');<br>
                        6)  career.classList.add('gold_bg');<br>
                        7)<br>
                        8)  for (let i = 0; i &lt; splitText.length; i++) {<br>
                        9)      text.innerHTML += `<span>${splitText[i]}</span>`;<br>
                        10)  }<br>
                        11)<br>
                        12)  let char = 0;<br>
                        13)  let timer= setInterval(onTick, 150);<br>
                        14)<br>
                        15)  function onTick () {<br>
                        16)      const span = text.querySelectorAll('span')[char];<br>
                        17)      span.classList.add('fade');<br>
                        18)      char++;<br>
                        19)      if (char === splitText.length) {<br>
                        20)        career.classList.remove('gold_bg');<br>
                        21)        complete();<br>
                        22)        return;<br>
                        23)      }<br>
                        24)  }<br>
                        25)  function complete() {<br>
                        26)      clearInterval(timer);<br>
                        27)      timer = null;<br>
                        28)  }
                    </p>
                    <p class="description">
                    1 - 4 Selecting the name element that I intend to have typed on the screen, focusing on its text content,
                     splitting up the text content so that each character of the elements is selectable. Finally removing the existing
                    text content so that only one version of the text appears on the screen.<br><br> 
                    5 - 6 Selecting the career element, that I intend to display after the first element is typed out, and adding a gold background 
                    that will hide the gold text.<br><br>
                    8 - 9 A loop that iterates through the items in the splitText array, converts them into span elements then adds
                    them back to the text constant.<br><br>
                    12 - 28 A char that will allow a function to iterate through all the span elements in the text constant, a timer that
                    will dictate the delay between function cycles and there for the speed of the typing animation.<br><br>
                    15 - 24 A function that adds the class fade to the span elements within the text constant that makes them appear 
                    on the screen. This function is stopped but an if statement that checks if the char value is equal to the splitText length.
                    When the char value equals the splitText length career element is revealed by removing its background and the function
                    is made to stop iterating by deactivating the timer.  
                    </p>
                </div>
            </div>
            <div class="code_examples_container">
                <h2 class="code_example_title">Example: JavaScript display and retract menu</h2>
                <div class="example_description">
                    <p class="code_example">
                        1)  function toggleSidemenu () {<br>
                        2)      if (sideMenu.is(':hidden')) {<br>
                        3)          sideMenu.animate({width:'toggle'}, 400);<br> 
                        4)          mainColumn.classList.add('shift_left');<br> 
                        5)          mainColumn.style.height = '100vh';<br>
                        6)          mainColumn.style.overflow = 'auto';<br>
                        7)          cross.classList.add('active_2');<br>
                        8)          burger.classList.remove('active_2');<br>
                        9)          cover.style.display = 'block';<br>
                        10)         $('.cover').scrollTop(oldYPos);<br>  
                        11)     } else {<br>
                        12)         sideMenu.animate({width:'toggle'}, 400);<br>
                        13)         mainColumn.classList.remove('shift_left');<br>
                        14)         mainColumn.removeAttribute('style');<br>  
                        15)         cross.classList.remove('active_2');<br>
                        16)         burger.classList.add('active_2');<br> 
                        17)         cover.removeAttribute('style');<br>   
                        17)     }<br>
                        18) }
                    </p>
                    <p class="description">
                    1 Establishing a function that will display a menu on the left of the page when a button is clicked or retract the menu if the
                     button is clicked while the menu is visible.<br><br> 
                    2 - 10 If the menu is hidden when the function is called then the menu slides into the page from the right. The page shifts
                     to the left to make room for the menu. The page is unable to be scrolled through. The page scrollbar is displayed left of the menu.
                     An ex icon is displayed inside the button that executes the function. The burger icon is removed from the button.
                     A see-through grey element is displayed over the page.<br><br>
                    11 - 17 If the menu is visible when the function is called then the menu slides off the page to the right. The page is shifted right
                    to be fully visible. The page scrollable. The ex icon is removed from the button. A burger icon is displayed inside the button.
                    The grey overlay on the page is removed.<br><br>  
                    </p>
                </div>
            </div>
            <div class="code_examples_container">
                <h2 class="code_example_title">Example: JavaScript storing information in a database</h2>
                <div class="example_description">
                    <p class="code_example">
                        1)  function pushToDB(emailIn, image) {<br>
                        2)<br>  
                        3)      let emailExists;<br>
                        4)      for (let i = 0; i &lt; db.length; i++) {<br>
                        5)          if (db[i].email === emailIn) {<br>
                        6)              db[i].images.push(image)<br>
                        7)              emailExists = true;<br>
                        8)              break;<br>
                        9)          } else {<br>
                        10)             emailExists = false;<br>
                        11)         }<br>
                        12)     }<br>
                        13)     if (!emailExists) {<br>
                        14)         db.push({email: email.value, images: [image]});<br>
                        15)     }<br>
                        16)     pushToDBAnimations()<br> 
                        17) }
                    </p>
                    <p class="description">
                    1 Establishing a function that stores an email address and an image src array as an object in a database or adds an image src to an
                     existing image array.<br><br>
                    2 Establishing the variable "emailExists" that will be used to decide whether to create a new object or to add an item to an image array.<br><br>
                    4 - 12 A loop that iterates through the objects in the database and checks if the email address that is being inputted is already an
                     item in the database. If the email address exists "emailExists" will equal true and the inputted image src will be stored in the image array
                     associated with the inputted email address. Otherwise "emailExists" will equal false.<br><br>
                    13 - 15 If "emailExists" equals false an object is created in the database containing the inputted email address and an image array containing
                    the inputted image src.  
                    </p>
                </div>
            </div>
            <div class="code_examples_container">
                <h2 class="code_example_title">Example: SQL selecting data from a database</h2>
                <div class="example_description">
                    <div class="code_example">
                        <img src="https://www.w3resource.com/w3r_images/employee-database.png" alt="Table structure of an employee database">
                        <p class="code">
                            1)   SELECT emp_name, job_name FROM employees<br> 
                            3)   WHERE salary > 2000.00 AND<br>
                            4)   dep_id in<br> 
                            5)   (SELECT dep_id FROM department WHERE dep_name = 'FINANCE')<br>
                            6)   ORDER BY salary DESC;
                        </p>
                    </div>
                    <div class="description">
                        <div class="des_section">
                            <h3>Query objective</h3>
                            <P>
                                To select the names and job titles of all the employees that have a salary
                                greater than £2000 and work in finance. The employees selected will be ordered by
                                their salery in descending order. 
                            </P>
                        </div>
                        <div class="des_section">
                            <h3>Description</h3>
                            <p>
                                1 Selecting the columns that will be displayed after the query is executed.<br><br> 
                                2 Adding a condition that only the rows that have a salary greater than 2000.00
                                will be displayed.<br><br>
                                3 - 4 Adding a condition that only the rows with department-ids that have a department
                                name of 'FINANCE' in the department table will display.<br><br>
                                6 Ordering the selected rows from highest to lowest salary.    
                            </p>
                        </div>
                        <div class="des_section">
                            <h3>Query outcome</h3>
                            <P>
                                A table of two columns, emp_name and job_name, will be displayed ordered by salary in
                                descending order.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/jquery-3.6.3.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://kit.fontawesome.com/1e403b2a33.js" crossorigin="anonymous"></script>
    </body>
</html>
