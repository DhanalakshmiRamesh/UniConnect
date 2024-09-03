<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="problem.css">
    <a href="https://fonts.googleapis.com/css2?family=Crimson+Pro"></a>
    <title>Uniconnect Projects</title>
	<link href="C:\xampp\htdocs\logo.png" rel="icon" type="image/x-icon">
	
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <nav>
        <div class="container main-nav flex">
            <a href="#" class="company-logo">
                <img src="assett.jpg" alt="company logo"> <div class="nav-links" id="nav-links">
                <ul class="flex">
                    <li><a href="index.html" class="hover-link1">Home</a></li>
                    <li><a href="#" class="hover-link1">About</a></li>
                    <li><a href="#" class="hover-link1">Team</a></li>
                    <li><a href="#" class="hover-link1">Project</a></li>
                    <li><a href="#" class="hover-link1">Result</a></li>


                </ul>
            </div>
            <a href="#" class="nav-toggle hover-link" id="nav-toggle">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </nav>


    <h1 class="hed">Online Integrated Platform For Projects </h1>


    <!-- second page -->
    <!--
    <form class="box" action="" method="post">
        <div class="cont1">

            <input type="text" class="sel1" placeholder=" Search.." name="Search" id="state" class="form-control">
            <button type="submit" name="chack" class="btn3">Check</button>

        </div>
        <div class="cont">
            <label for="value"> Degree<label>
                    <select class="sel" name="degree"  id="degree1" class="form-control">
                        <option value="degree">Select your degree</option>
                        <option value="degree">B.Tech</option>
                        <option value="degree">M.Tech</option>
                        <option value="degree">B.S.C</option>
                        <option value="degree">M.S.C</option>
                        <option value="degree">M.B.A</option>
                        <option value="degree">B.B.A</option>
                    </select>

                    <label for="value"> Categories </label>
                    <select class="sel" name="Categories"   id="degree1" class="form-control">
                        <option value="Categories">Select Here</option>
                        <option value="Categories">Software</option>
                        <option value="Categories">Hardware</option>
                    </select>
        </div>


        <div class="cont">
            <label for="value"> State</label>
            <select class="sel" name="state"  id="state" class="form-control">
                <option  value="state">Select Here</option>
                <option  value="state">Andhra Pradesh</option>
                <option  value="state">Andaman and Nicobar Islands</option>
                <option  value="state">Arunachal Pradesh</option>
                <option  value="state">Assam</option>
                <option  value="state">Bihar</option>
                <option  value="state">Chandigarh</option>
                <option  value="state">Chhattisgarh</option>
                <option  value="state">Dadar and Nagar Haveli</option>
                <option  value="state">Daman and Diu</option>
                <option  value="state">Delhi</option>
                <option  value="state">Lakshadweep</option>
                <option  value="state">Puducherry</option>
                <option  value="state">Goa</option>
                <option  value="state">Gujarat</option>
                <option  value="state">Haryana</option>
                <option  value="state">Himachal Pradesh</option>
                <option  value="state">Jammu and Kashmir</option>
                <option  value="state">Jharkhand</option>
                <option  value="state">Karnataka</option>
                <option  value="state">Kerala</option>
                <option  value="state">Madhya Pradesh</option>
                <option  value="state">Maharashtra</option>
                <option  value="state">Manipur</option>
                <option  value="state">Meghalaya</option>
                <option  value="state">Mizoram</option>
                <option  value="state">Nagaland</option>
                <option  value="state">Odisha</option>
                <option  value="state">Punjab</option>
                <option  value="state">Rajasthan</option>
                <option  value="state">Sikkim</option>
                <option  value="state">Tamil Nadu</option>
                <option  value="state">Telangana</option>
                <option  value="state">Tripura</option>
                <option  value="state">Uttar Pradesh</option>
                <option  value="state">Uttarakhand</option>
                <option  value="state">West Bengal</option>
            </select>

            <label for="value"> Year Making<label>
                    <select class="sel" name=" Making"   id="degree1" class="form-control">
                        <option  value=" Making">Select Here</option>
                        <option  value=" Making">1 Year</option>
                        <option  value=" Making">2 Year</option>
                        <option  value=" Making">3 Year</option>
                        <option  value=" Making">4 Year</option>
                    </select>
        </div>
        <div class="cont">
            <label for="value">Collage Name</label>
            <input type="text" class="sel" placeholder=" Collage Name" name="collage_name" id="state" class="form-control">

            <label for="value">University Name</label>
            <input type="text" class="sel" placeholder=" University Name" name="Univercity_name" id="state" class="form-control">
        </div>
    </form>
	-->


    <?php
    $connection = mysqli_connect('localhost', 'root', '', 'users');
    if (isset($_POST['chack'])) {
        $Title = $_POST['Search'];
        $Degree = $_POST['degree'];
        $categories = $_POST['Categories'];
        $State = $_POST['state'];
        $making = $_POST['Making'];
        $Collage_name = $_POST['collage_name'];
        $univercity_Name = $_POST['Univercity_name'];
        $query = "SELECT * FROM problem_table WHERE 
        Project_Title = '$Title' OR
        Graduate_Degree = '$Degree' OR 
        Project_Category = '$categories' OR 
        College_State = '$State' OR 
        Year_making = '$making' OR 
        College_Name = '$Collage_name' OR 
        Univercity_Name = '$univercity_Name'";

        //   ID='$id',Graduate_Degree=' $Degree ',Project_Category ='$categories',College_State ='  $State',Year_making =' $making',College_Name=' $Collage_name',University_Name=' $university_Name'";
        $query_run = mysqli_query($connection, $query);

        // echo $row['Graduate_Degree'];

    ?>
        <table class="Tab">
            <tbody>
                <tr>
                    <th>Graduate_Degree</th>
                    <th>Univercity_Name</th>
                    <th>Branch</th>
                    <th>Project_Category</th>
                    <th>Year_making </th>
                    <th>Project_Title</th>
                    <th>Project_Type</th>
                    <th>Refrence_Project</th>
                </tr>
            </tbody>
            <?php
            if (mysqli_num_rows($query_run) >  0) {
                while ($row = mysqli_fetch_array($query_run)) {
            ?>
                    <tr>
                        <td><?php echo $row['Graduate_Degree']; ?></td>
                        <td><?php echo $row['Univercity_Name']; ?></td>
                        <td><?php echo $row['Branch']; ?></td>
                        <td><?php echo $row['Project_Category']; ?></td>
                        <td><?php echo $row['Year_making']; ?></td>
                        <td><?php echo $row['Project_Title']; ?></td>
                        <td><?php echo $row['Project_Type']; ?></td>
                        <td><?php echo $row['Refrence_Project']; ?></td>
                    </tr>
                <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="6">No Recode data not Found</td>
                </tr>
            <?php
            }
            ?>

            <!-- Add more rows as needed -->
        </table>
    <?php
    }
    ?>



    <!-- //////// -->



    <!-- footer -->

    <!--<footer>
        <div class="container flex footer-container">

            <div class="link-column flex">
                <h4>Product</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Methodology</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
            <div class="link-column flex">
                <h4>Resources</h4>
                <a href="#" class="hover-link">Overview</a>
                <a href="#" class="hover-link">Pricing</a>
                <a href="#" class="hover-link">Usability Hub</a>
                <a href="#" class="hover-link">Customers Page</a>
                <a href="#" class="hover-link">Status Page</a>
            </div>
        </div>
    </footer> -->

    <!-- subfooter -->

 <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
				<img src="formimg.png">
                    <div class="signup-img-content">
                        <h2>Create </h2>
                        <p>Import a Project</p>
                    </div>
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Owner </label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Project Name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="">Description</label>
                                    <input type="textbox" name="company" id="company" />
                                </div>

                                <h1>
                                    <!--  <a target="_blank" href="https://github.com/safrazik/knockout-file-bindings">knockout-file-bindings</a>-->
                                </h1>
                                <div class="well" data-bind="fileDrag: fileData">

                                    <!--        <div class="">-->
                                             <img style="height: 125px;" class="img-rounded  thumb" data-bind="attr: { src: fileData().dataURL }, visible: fileData().dataURL">
                                    <div data-bind="ifnot: fileData().dataURL">
                                        <label class="drag-label" class="required">Upload images ( at least one)</label>
                                    </div>

                                    <div class="">
                                        <input type="file" data-bind="fileInput: fileData, customFileInput: {
              buttonClass: 'btn btn-success',
              fileNameClass: 'disabled form-control',
              onClear: onClear,
            }" accept="image/*">
                                    </div>

                                </div><br>
                                <form action="https://upload.embed.ly/1/video?key=YOUR_API_KEY" method="POST" enctype="multipart/form-data" name="upload_form">
                                    <div data-bind="ifnot: fileData().dataURL">
                                        <label class="drag-label">Upload Video ( Optional )</label>
                                    </div>
                                    <!--  <div id="upload-button" class="button">Upload Video</div>-->
                                    <div id="upload-input">
                                        <input id="video_file" name="video_file" type="file">
                                    </div>
                                </form>
                                <div class="url-display"></div>
                                <div class="embed-code"></div>
                                <div class="video-display"></div>


                                <!--  <button class="btn btn-default" data-bind="click: debug">Debug</button>-->

                                <!--
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
-->
                                <!--
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
-->
                            </div>
                            <div class="form-group">
                                <!--
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">meal preference</label>
                                        <a href="#" class="form-link">Lunch detail</a>
                                    </div>
                                    <div class="select-list">
                                        <select name="meal_preference" id="meal_preference">
                                            <option value="Vegetarian">Vegetarian</option>
                                            <option value="Kosher">Kosher</option>
                                            <option value="Asian Vegetarian">Asian Vegetarian</option>
                                        </select>
                                    </div>
                                </div>
-->
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Difficulty level</label>

                                    </div>
                                    <div class="form-radio-group">
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cash" checked>
                                            <label for="cash">Beginner</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="cheque">
                                            <label for="cheque">Intermediate</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="payment" id="demand">
                                            <label for="demand"> Advanced</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <label for="payable">Tech Stack </label>
                                    <input type="text" name="payable" id="payable" />
                                </div>
                                <div class="form-input">
                                    <label for="chequeno">Project Link</label>
                                    <input type="text" name="chequeno" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="blank_name">Github Link</label>
                                    <input type="text" name="blank_name" id="blank_name" />
                                </div>

                            </div>
                        </div>
                        <!--
                        <div class="donate-us">
                            <label>Donate us</label>
                            <div class="price_slider ui-slider ui-slider-horizontal">
                                <div id="slider-margin"></div>
                                <span class="donate-value" id="value-lower"></span>
                            </div>
                        </div>
-->
						 <form action="/action_page.php" enctype="multipart/form-data">
						<label for="myfile">Select a file:</label>
						<input type="file" id="myfile" name="myfile"><br><br>
                        <input type="submit">
						</form>
					
                        <div class="form-submit">
                            <center> <input type="submit" value="Create" class="submit" id="submit" name="submit" /></center><br>
                            <!--                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />-->
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="main.js"></script>
</body>

    <div class="subfooter">
        <div class="container flex subfooter-container">
            <a class="hover-link1" href="#">Privacy policy</a>
            <a class="hover-link1" href="#">Terms & Condition</a>
            <a class="hover-link1" href="#">Security Information</a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-facebook"></i></a>
            <a class="hover-link1" href="#"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>


    <!-- <h1>welcome<?php echo $_SESSION['username'] ?> </h1> -->

</body>

</html>