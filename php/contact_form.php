<?php
$name = $_POST['firstName'];
$email = $_POST['email'];
$select = $POST['subject'];
$formcontent="From: $name \n Message: $select";
$recipient = "bastanley1211@gmail.com";
$subject = "bastanley.dev contact form entry";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! I'll get back to you as soon as I can.";
?>

<form class="mx-auto mt-4" action="/php/contact_form.php" method="POST">
                <div class="form-group row text-center">
                    <label for="firstName" class="col-md-3 col-form-label">First Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="John"
                            required>
                    </div>
                </div>
                <div class="form-group row text-center">
                    <label for="company" class="col-md-3 col-form-label">Company/<br />Organization</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="company" name="company"
                            placeholder="ABC Company, LLC.">
                    </div>
                </div>
                <div class="form-group row text-center">
                    <label for="email" class="col-md-3 col-form-label">Email</label>
                    <div class="col-md-9">
                        <input type="email" class="form-control" id="email" name="email" placeholder="name@email.com"
                            required />
                    </div>
                </div>
                <div class="form-group row text-center">
                    <label for="subject" class="col-md-2 col-form-label">I am interested in...</label>
                    <select class="form-select mx-auto mt-2" id="subject" multiple aria-label="multiple select example"
                        required>
                        <option selected value="hire">Hiring You</option>
                        <option value="collab">Collaborating</option>
                        <option value="freelance">Freelance Project/Contract</option>
                        <option value="question">Asking a Question</option>
                    </select>
                </div>
                <div class="form-group row mx-auto text-center">
                    <div class="col-md-10 mx-auto">
                        <button type="submit" class="btn btn-primary btn-lg mt-3" id="contactSubmit">Contact</button>
                    </div>
                </div>
            </form>