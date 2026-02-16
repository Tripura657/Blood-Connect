<?php error_reporting(0);
session_start(); ?>
<!-- header -->
    <header>
        <!--  -->

    <!-- header 2 -->
    <div id="home">
        <!-- navigation -->
        <div class="main-top py-1">
            <nav class="navbar navbar-expand-lg navbar-light fixed-navi">
                <div class="container">
                    <!-- logo -->
                    <h1>
                        <a class="navbar-brand font-weight-bold font-italic" href="index.php">
                            <span>BB</span>DMS
                            <i class="fas fa-syringe"></i>
                        </a>
                    </h1>
                    <!-- //logo -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto">
                            <li class="nav-item mx-lg-4 mt-lg-0 mt-3">
                                <a class="nav-link" href="index.php">Home
                                </a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                            <!-- this is extra  -->
                            <!-- <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="profile.php">profile</a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="change-password.php">change-password</a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="request-received.php">request-received</a>
                            </li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-4">
                                <a class="nav-link" href="logout.php">logout</a>
                            </li> -->
                            <!-- upto here -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Donors
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="donor-list.php">Donor List</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="search-donor.php">Search Donor</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown" style="padding-left:25px">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Blood Banks
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blood_banks.php">Create Blood Bank</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="view_blood_banks.php">View Blood Banks</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="search_blood_banks.php">Search Blood Banks</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown" style="padding-left:25px">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Blood Camps
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blood_camp.php">Add Blood Camp</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="view_blood_camps.php">View Blood Camps</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="search_blood_camps.php">Search Blood Camps</a>
                                </div>
                            </li>

                            <?php if (strlen($_SESSION['bbdmsdid']!=0)) {?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="profile.php">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="change-password.php">Change Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="request-received.php">Request Received</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                </div>
                            </li>
                            <?php } ?>
                            <?php if (strlen($_SESSION['bbdmsdid']==0)) {?>
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
                                <a class="nav-link" href="admin/index.php">Admin</a>
                            </li>
                        </ul>
                        <!-- login -->
                        <a href="login.php" class="login-button ml-lg-5 mt-lg-0 mt-4 mb-lg-0 mb-3" >
                            <i class="fas fa-sign-in-alt mr-2"></i>Login</a><?php } ?>
                        <!-- //login -->
                    </div>
                </div>
            </nav>
        </div>
        <!-- //navigation -->
        <!-- modal -->
   
        <!-- register -->
        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-2">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="login px-4 mx-auto mw-100">
                            <h5 class="text-center mb-4">Register Now</h5>
                            <form action="#" method="post"  name="signup" onsubmit="return checkpass();">
                                <div class="form-group">
                                    <label>Full Name</label>
                                     <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control" name="mobileno" id="mobileno" required="true" placeholder="Mobile Number" maxlength="10" pattern="[0-9]+">
                                </div>
                                
                                <div class="form-group">
                                    <label class="mb-2">Email Id</label>
                                    <input type="email" name="emailid" class="form-control" placeholder="Email Id">
                                </div>
                                <div class="form-group">
                                    <label class="mb-2">Age</label>
                                    <input type="text" class="form-control" name="age" id="age" placeholder="Age" required="">
                                </div>
                                <div class="form-group">
                                    <label class="mb-2">Gender</label>
                                    <select name="gender" class="form-control" required>
<option value="">Select</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
                                </div>
                                <div class="form-group">
                                    <label class="mb-2">Blood Group</label>
                                    <select name="bloodgroup" class="form-control" required>
<?php $sql = "SELECT * from  tblbloodgroup ";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  
<option value="<?php echo htmlentities($result->BloodGroup);?>"><?php echo htmlentities($result->BloodGroup);?></option>
<?php }} ?>
</select>
                                </div>
                               
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" id="address" required="true" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" name="message" required> </textarea>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" id="password" required="">
                                </div>
                               
                                <button type="submit" class="btn btn-primary submit mb-4" name="submit">Register</button>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //register -->
         
        <!-- //modal -->
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Handle buttons, links, and forms with `restricted-action` class
    document.querySelectorAll('.restricted-action').forEach(function (element) {
        element.addEventListener('click', function (event) {
            <?php if (!isset($_SESSION['bbdmsdid'])): ?>
            event.preventDefault(); // Prevent the default action
            alert('You must log in to perform this action.'); // Show an alert popup
            <?php endif; ?>
        });
    });

    // Handle form submissions with restricted access
    document.querySelectorAll('form.restricted-form').forEach(function (form) {
        form.addEventListener('submit', function (event) {
            <?php if (!isset($_SESSION['bbdmsdid'])): ?>
            event.preventDefault(); // Prevent the form submission
            alert('You must log in to submit this form.'); // Show an alert popup
            <?php endif; ?>
        });
    });
});
</script>

    <!-- //header 2 -->
     <script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
