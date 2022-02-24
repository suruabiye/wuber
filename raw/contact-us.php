<?php require_once('layouts/header.php'); ?>

    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Deliver with Wuber</a></li>
                    </ol>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h2>Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="assets/images/icon/contact_info.png" alt="icon">
                        <h4>Address</h4>
                        <p>Address :SW8/518, Alafia Street Ososanmi, Ibadan, Oyo, Nigeria</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-contact-info text-center">
                        <img src="assets/images/icon/contact_info-2.png" alt="icon">
                        <h4>Phone number</h4>
                        <p>Phone : +234(0)811 8239 1119</p>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-0 col-sm-6 offset-sm-3">
                    <div class="single-contact-info text-center">
                        <img src="assets/images/icon/contact_info-3.png" alt="icon">
                        <h4>E-mail</h4>
                        <p>Email : contact@wuber.com.ng</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding contact-form-section p-t-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" id="contactForm">
                    <form method="post" action="#contactForm">
                        <h2>Send us an Email</h2>
                        <?php
                        $errors = [];

                        if($_SERVER['REQUEST_METHOD'] === 'POST'){

                            //Variable
                            $name = filter_input(INPUT_POST, 'name');
                            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
                            $phone = filter_input(INPUT_POST, 'phone');
                            $subject = filter_input(INPUT_POST, 'subject');
                            $content = filter_input(INPUT_POST, 'content');

                            if(!$email && empty($email)){
                                $errors['email'] = "Please enter a valid email";
                            }
                            if(!$phone && empty($name)){
                                $errors['name'] = "Kindly ensure information on the name field is valid";
                            }
                            if(!$phone && empty($phone)){
                                $errors['phone'] = "Kindly ensure information on the phone field is valid";
                            }
                            if(!$subject && empty($subject)){
                                $errors['subject'] = "Kindly ensure information on the subject field is valid";
                            }
                            if(!$content && empty($content)){
                                $errors['content'] = "Kindly ensure information on the content field is valid";
                            }


                        }
                        ?>
                        <div class="form-group">
                            <label>Name: </label>
                            <input type="text" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : null ?>" placeholder="Name" class="form-control">
                            <div class="text-danger"><?= !empty($errors['name']) ? $errors['name']: null; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Email: </label>
                            <input type="text" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : null ?>" placeholder="E-mail" class="form-control">
                            <div class="text-danger"><?= !empty($errors['email']) ? $errors['email']: null; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Phone: </label>
                            <input type="text" name="phone" value="<?= isset($_POST['phone']) ? $_POST['phone'] : null ?>" placeholder="Phone" class="form-control">
                            <div class="text-danger"><?= !empty($errors['phone']) ? $errors['phone']: null; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Subject:</label>
                            <input type="text" name="subject" value="<?= isset($_POST['subject']) ? $_POST['subject'] : null ?>" placeholder="Subject" class="form-control">
                            <div class="text-danger"><?= !empty($errors['subject']) ? $errors['subject']: null; ?></div>
                        </div>
                        <div class="form-group">
                            <label>Content: </label>
                            <textarea class="form-control" name="content" placeholder="Text Content" rows="3"
                            ><?= isset($_POST['content']) ? $_POST['content'] : null ?></textarea>
                            <div class="text-danger"><?= !empty($errors['content']) ? $errors['content']: null; ?></div>

                        </div>
                        <button class="button button-dark tiny" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-lg-6"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.884955871717!2d3.8783353143095467!3d7.36679031483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x272db7072f21b539!2zN8KwMjInMDAuNCJOIDPCsDUyJzQ5LjkiRQ!5e0!3m2!1sen!2sng!4v1637680169700!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

<?php require_once('layouts/footer.php');