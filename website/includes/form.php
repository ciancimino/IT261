<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
            <fieldset>
                <label>First Name</label>
                <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
                <span>
                    <?php echo $first_name_err ;?>
                </span>
                <label>Last Name</label>
                <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
                <span>
                    <?php echo $last_name_err ;?>
                </span>

                <label>Email</label>
                <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
                <span>
                    <?php echo $email_err; ?>
                </span>

                <label>Phone Number</label>
                <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">
                <span>
                    <?php echo $phone_err; ?>
                </span>

                <!-- privacy -->
                <label>Agree to Privacy Policy</label>
                    <ul>
                    <li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == "yes") echo 'checked="checked"' ;?>>Yes</li>
                    </ul>
                <span>
                    <?php echo $privacy_err; ?>
                </span>


                <!-- check boxes -->
                <label>Your Availability</label>
                <ul>
                    <li><input type="checkbox" name="days[]" value="monday" <?php if(isset($_POST['days']) && in_array('monday',$days)) echo'checked="checked"' ;?>>Monday</li>
                    <li><input type="checkbox" name="days[]" value="tuesday" <?php if(isset($_POST['days']) && in_array('tuesday',$days)) echo'checked="checked"' ;?>>Tuesday</li>
                    <li><input type="checkbox" name="days[]" value="wednesday" <?php if(isset($_POST['days']) && in_array('wednesday',$days)) echo'checked="checked"' ;?>>Wednesday</li>
                    <li><input type="checkbox" name="days[]" value="thursday" <?php if(isset($_POST['days']) && in_array('thursday',$days)) echo'checked="checked"' ;?>>Thursday</li>
                    <li><input type="checkbox" name="days[]" value="friday" <?php if(isset($_POST['days']) && in_array('friday',$days)) echo'checked="checked"' ;?>>Friday</li>
                </ul> 
                <span>
                    <?php echo $days_err ;?>
                </span>   

                <!-- contact_option -->
                <label>Perfered method of contact:</label>
                <select name="contact_option">
                    <option value="" <?php if(isset($_POST['contact_option']) && is_null($_POST['contact_option'])) echo 'selected="unselected"' ;?>>
                    Select One!</option>
                    <option value="phone" <?php if(isset($_POST['contact_option']) && $_POST['contact_option'] == "phone") echo 'selected="selected"' ;?>>
                    Phone</option>
                    <option value="email" <?php if(isset($_POST['contact_option']) && $_POST['contact_option'] == "email") echo 'selected="selected"' ;?>>
                    Email</option>
                    <option value="either" <?php if(isset($_POST['contact_option']) && $_POST['contact_option'] == "either") echo 'selected="selected"' ;?>>
                    Either Phone or Email</option>
                </select>
                <span>
                    <?php echo $contact_option_err; ?>
                </span>

                <input type="submit" value="Submit">
                <p><a href="">Reset form</a></p>
            </fieldset>
        </form>