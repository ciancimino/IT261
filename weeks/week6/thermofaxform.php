<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thermofax Test Form</title>
    
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>
                <h1>Request Repair</h1>

                <p>No payment is collected on this form.</p>

                <p>Review pricing under the Services Page</p>

                <p>The information you share is private.</p>
            </legend>
            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

            <label>Phone</label>
            <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">  

            <label>What state are you shipping your machine from?</label>
            <input type="text" name="state" value="<?php if(isset($_POST['state'])) echo htmlspecialchars($_POST['state']) ;?>">   

            <label>Do you need emergency service + faster return shipping? We will reach out with the estimated surcharge.</label>
            <ul>
                <li><input type="radio" name="emergency" value="yes" <?php if(isset($_POST['emergency']) && $_POST['emergency'] == 'yes') echo 'checked="checked"' ;?>>Yes</li>
                <li><input type="radio" name="emergency" value="no" <?php if(isset($_POST['emergency']) && $_POST['emergency'] == 'no') echo 'checked="checked"' ;?>>No</li>
                <li><input type="radio" name="emergency" value="maybe" <?php if(isset($_POST['emergency']) && $_POST['emergency'] == 'maybe') echo 'checked="checked"' ;?>>Maybe</li>
            </ul>    
            
            <label>What Service Package Do You Need?</label>
            <ul>
                <li><input type="radio" name="package" value="gold" <?php if(isset($_POST['package']) && $_POST['package'] == 'gold') echo 'checked="checked"' ;?>>Gold (Clean and Dusting, Lube and Tune, Belt Conditioning)</li>
                <li><input type="radio" name="package" value="diamond" <?php if(isset($_POST['package']) && $_POST['package'] == 'diamond') echo 'checked="checked"' ;?>>Diamond (Gold + Electrical System, Mechanical System, Temperature System Diagnosis and Repair Optional Exterior Paint Finish)</li>
                <li><input type="radio" name="package" value="restoration" <?php if(isset($_POST['package']) && $_POST['package'] == 'restoration') echo 'checked="checked"' ;?>>Full Restoration (Diamond + Fully Custom Machine Rebuilding, Plastic Repair and Optional Sandblasting/Exterior Paint Finish)</li>
                <li><input type="radio" name="package" value="unsure" <?php if(isset($_POST['package']) && $_POST['package'] == 'unsure') echo 'checked="checked"' ;?>>I'm unsure what repair my thermofax needs and would like someone to contact me</li>
            </ul>   

            <label>Describe the issues with the machine:</label>
            <input type="text" name="issue" value="<?php if(isset($_POST['issue'])) echo htmlspecialchars($_POST['issue']) ;?>">     

            <label>What type of machine do you have?</label>
            <select name="machine">
                <option value="" <?php if(isset($_POST['machine']) && is_null($_POST['machine'])) echo 'selected="unselected"' ;?>>
                Select One!</options>
                <option value="thermofax" <?php if(isset($_POST['machine']) && $_POST['machine'] == "thermofax") echo 'selected="selected"' ;?>>
                Thermofax / 3M / Secretary</options>
                <option value="grs" <?php if(isset($_POST['machine']) && $_POST['machine'] == "grs") echo 'selected="selected"' ;?>>
                Glass Roller System</options>
                <option value="vintage" <?php if(isset($_POST['machine']) && $_POST['machine'] == "vintage") echo 'selected="selected"' ;?>>
                Unknown - Vintage Transparency Printer</options>
                <option value="other" <?php if(isset($_POST['machine']) && $_POST['machine'] == "other") echo 'selected="selected"' ;?>>
                Other</options>
            </select>

            <label>Do you have any questions? We're here to help.</label>
            <textarea name="comments"> <?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
           
            <input type="submit" value="Send Repair Request!">

            <p><b>We will respond within a few business days!</b></p>

            <p><a href=""><i>Reset form</i></a></p>

            

        </fieldset>
    </form>
</body>
</html>