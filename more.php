<?php
include './db_connection.php';

$sql1 = "SELECT COUNT(ID) FROM student";
$result1 = $conn->query($sql1);
$result1 = $result1->fetch();


$sql2 = "SELECT COUNT(Parent_code) FROM parent";
$result2 = $conn->query($sql2);
$result2 = $result2->fetch();

$sql3 = "SELECT COUNT(Dno) FROM department";
$result3 = $conn->query($sql3);
$result3 = $result3->fetch();

$sql4 = "SELECT COUNT(staff_id) FROM staff";
$result4 = $conn->query($sql4);
$result4 = $result4->fetch();

$sql5 = "SELECT COUNT(Teacher_ID) FROM teacher";
$result5 = $conn->query($sql5);
$result5 = $result5->fetch();

$sql6 = "SELECT COUNT(ID) FROM finance_officer";
$result6 = $conn->query($sql6);
$result6 = $result6->fetch();

$sql7 = "SELECT COUNT(ID) FROM admission_officer";
$result7 = $conn->query($sql7);
$result7 = $result7->fetch();

$sql8 = "SELECT COUNT(ID) FROM admins";
$result8 = $conn->query($sql8);
$result8 = $result8->fetch();

$sql9 = "SELECT COUNT(Task_number) FROM tasks WHERE Done = 'Yes'";
$result9 = $conn->query($sql9);
$result9 = $result9->fetch();

$sql10 = "SELECT COUNT(Task_number) FROM tasks WHERE Done ='NO'";
$result10 = $conn->query($sql10);
$result10 = $result10->fetch();

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>More</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="more.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.10.5, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Database project",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#2799b1">
    <meta property="og:title" content="More">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap u-xl-mode"><header class="u-clearfix u-grey-80 u-header u-sticky u-sticky-cf2b u-header" id="sec-9c34"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">School Portal</h3>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 500;">
            <a class="u-button-style u-custom-active-color u-custom-border u-custom-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-2 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-grey-5 u-button-style u-hover-grey-10 u-nav-link u-text-active-grey-90 u-text-grey-90 u-text-hover-grey-90" href="Home.html" style="padding: 10px 20px;">Home</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-973e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-tab-links-align-left u-tabs u-tabs-1">
          <ul class="u-border-9 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true"> Statistics </a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Tasks</a>
            </li>
            <li class="u-tab-item" role="presentation">
              <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-3" id="link-tab-2917" href="#tab-2917" role="tab" aria-controls="tab-2917" aria-selected="false">Salaries</a>
            </li>
          </ul>
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" data-animation-name="customAnimationIn" data-animation-duration="2500" data-animation-direction="Left" data-animation-delay="0">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-large-text u-text u-text-default u-text-variant u-text-1">Students number: <?php echo $result1['COUNT(ID)']; ?><br>Parents number: <?php echo $result2['COUNT(Parent_code)']; ?>&nbsp;<br>Departments number: <?php echo $result3 ['COUNT(Dno)']; ?><br>Staff number: <?php echo $result4['COUNT(staff_id)']; ?><br>Teachers number: <?php echo $result5['COUNT(Teacher_ID)']; ?>&nbsp;<br>finance officers number: <?php echo $result6['COUNT(ID)']; ?>&nbsp;<br>Admission officers number: <?php echo $result7['COUNT(ID)']; ?>&nbsp;<br>Admins number: <?php echo $result8['COUNT(ID)']; ?>
                </p>
                <div class="u-table u-table-responsive u-table-1">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="25%">
                      <col width="25%">
                      <col width="25.000000000000007%">
                      <col width="24.900000000000006%">
                    </colgroup>
                    <thead class="u-palette-1-base u-table-header u-table-header-1">
                      <tr style="height: 33px;">
                        <th class="u-table-cell">Student name</th>
                        <th class="u-table-cell">Level</th>
                        <th class="u-table-cell">ID</th>
                        <th class="u-table-cell">Parent ID</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                     <?php 
                     $sql2 = "SELECT First_name, Last_Name, Level, ID , Parent_code FROM student";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 42px;">
                        <td class="u-table-cell"><?php echo $row[0]; echo " "; echo $row[1]; ?></td>
                        <td class="u-table-cell"><?php echo $row[2]; ?></td>
                        <td class="u-table-cell"><?php echo $row[3]; ?></td>
                        <td class="u-table-cell"><?php echo $row[4]; ?></td>
                      </tr>

                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-table u-table-responsive u-table-2">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <thead class="u-palette-1-base u-table-header u-table-header-2">
                      <tr style="height: 31px;">
                        <th class="u-table-cell">Parent name</th>
                        <th class="u-table-cell">ID</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                      <?php 
                     $sql2 = "SELECT First_name, Last_Name,  Parent_code FROM parent";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 42px;">
                        <td class="u-table-cell"><?php echo $row[0]; echo " "; echo $row[1]; ?></td>
                        <td class="u-table-cell"><?php echo $row[2]; ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-table u-table-responsive u-table-3">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="33.5%">
                      <col width="33.5%">
                      <col width="33%">
                    </colgroup>
                    <thead class="u-palette-1-base u-table-header u-table-header-3">
                      <tr style="height: 42px;">
                        <th class="u-table-cell">Teacher name</th>
                        <th class="u-table-cell">ID</th>
                        <th class="u-table-cell">Department</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                       <?php 
                     $sql2 = "SELECT First_name, Last_Name,  Teacher_ID , Dname FROM department , teacher WHERE Dno = D_Code";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 42px;">
                        <td class="u-table-cell"><?php echo $row[0]; echo " "; echo $row[1]; ?></td>
                        <td class="u-table-cell"><?php echo $row[2]; ?></td>
                        <td class="u-table-cell"><?php echo $row[3]; ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-table u-table-responsive u-table-4">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <thead class="u-palette-1-base u-table-header u-table-header-4">
                      <tr style="height: 42px;">
                        <th class="u-table-cell">Finance name</th>
                        <th class="u-table-cell">ID</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                       <?php 
                     $sql2 = "SELECT First_name, Last_Name,  ID FROM finance_officer";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 42px;">
                        <td class="u-table-cell"><?php echo $row[0]; echo " "; echo $row[1]; ?></td>
                        <td class="u-table-cell"><?php echo $row[2]; ?></td>
                      </tr>
                      <?php
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
                <div class="u-table u-table-responsive u-table-5">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="50%">
                      <col width="50%">
                    </colgroup>
                    <thead class="u-palette-1-base u-table-header u-table-header-5">
                      <tr style="height: 42px;">
                        <th class="u-table-cell">Admission name</th>
                        <th class="u-table-cell">ID</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-alt-grey-5 u-table-body">
                       <?php 
                     $sql2 = "SELECT First_name, Last_Name,  ID FROM admission_officer";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 42px;">
                        <td class="u-table-cell"><?php echo $row[0]; echo " "; echo $row[1]; ?></td>
                        <td class="u-table-cell"><?php echo $row[2]; ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" data-animation-name="customAnimationIn" data-animation-duration="2500" data-animation-direction="Left" data-animation-delay="0">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-large-text u-text u-text-default u-text-variant u-text-2">Done Tasks: <?php echo $result9['COUNT(Task_number)']; ?> <br>Not done tasks: <?php echo $result10['COUNT(Task_number)']; ?>&nbsp;
                </p>
                <div class="u-table u-table-responsive u-table-6">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="33.3%">
                      <col width="33.3%">
                      <col width="33.400000000000006%">
                    </colgroup>
                    <thead class="u-palette-1-dark-1 u-table-header u-table-header-6">
                      <tr style="height: 21px;">
                        <th class="u-table-cell">Task ​description</th>
                        <th class="u-table-cell">Staff name</th>
                        <th class="u-table-cell"> Task number</th>
                        <th class="u-table-cell">Done</th>

                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                       <?php 
                     $sql2 = "SELECT taskdescrip, Firstname,Lastname,  Task_number, Done FROM tasks , staff WHERE tasks.Staff_ID = staff.staff_id";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[0]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[1]; echo " "; echo $row[2]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[3]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[4]; ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="u-container-style u-tab-pane u-white u-tab-pane-3" id="tab-2917" role="tabpanel" data-animation-name="customAnimationIn" data-animation-duration="2500" data-animation-direction="Left" data-animation-delay="0">
              <div class="u-container-layout u-container-layout-3">
                <div class="u-table u-table-responsive u-table-7">
                  <table class="u-table-entity">
                    <colgroup>
                      <col width="20%">
                      <col width="20%">
                      <col width="20%">
                      <col width="19.999999999999993%">
                      <col width="20.099999999999994%">
                    </colgroup>
                    <thead class="u-palette-1-dark-1 u-table-header u-table-header-7">
                      <tr style="height: 50px;">
                        <th class="u-border-1 u-border-palette-1-dark-1 u-table-cell">Date (YYYY/MM/DD)</th>
                        <th class="u-table-cell">Amount (LE)</th>
                        <th class="u-table-cell">Status</th>
                        <th class="u-table-cell">Transaction</th>
                        <th class="u-table-cell">Rewards</th>
                      </tr>
                    </thead>
                    <tbody class="u-table-body">
                       <?php 
                     $sql2 = "SELECT Datee ,Amount, Claimed, Transaction , reward FROM salary";
                      $result1 = $conn->prepare($sql2);
                      $result1->execute();
                      while ($row = $result1->fetch(PDO::FETCH_NUM)) {
                      ?>
                      <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-38"><?php echo $row[0]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[1]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[2]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[3]; ?></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell"><?php echo $row[4]; ?></td>
                      </tr>
                      <?php 
                    }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-90c0"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href=""><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4c67"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4c67"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="twitter" target="_blank" href=""><span class="u-icon u-social-icon u-social-twitter u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5829"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5829"><circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href=""><span class="u-icon u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-80b2"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-80b2"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9cc8"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9cc8"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
      </div></footer>
   
  </body>
</html>