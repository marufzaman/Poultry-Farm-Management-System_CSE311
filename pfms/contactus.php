<?php
    include_once 'header.php';
?>
<div id="welcomeDiv">
    <form id="contact_form" name="contact_form" method="GET" action="postemail.php">
        <fieldset>
            <legend>Contact Us</legend>
                <table>
                    <tr>
                        <td><label for="Name">Name</label></td>
                        <td><input type="text" name="Name" id="Name" placeholder="Enter Name" autofocus="autofocus"/></td>
                    </tr>
                    <tr>
                        <td><label for="Email">Email</label></td>
                        <td><input type="email" name="Email" id="Email" placeholder="Enter Email Address"/></td>
                    </tr>
                    <tr>
                        <td><label for="Message">Message</label></td>
                        <td><textarea name="Message" id="message" cols="45" rows="5" placeholder="Enter Your Message"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="reset" name="Reset" id="Reset" value="Reset"/>
                        <input type="submit" name="Send" id="Send" value="Submit"/></td>
                    </tr>
                </table>
            </fieldset>
    </form>
</div>
