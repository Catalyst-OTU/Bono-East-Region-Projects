<?php 
session_start();
include('includes/header.php');
include('includes/main_navbar.php');

?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT ATEBUBU / AMANTIN CONSTITUENCY NPP MEMBER PROFILE</h6>
        </div>
        <div class="card-body">

        <?php

                $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                if (isset($_POST['edit_btn']))
           {
                $id = $_POST['edit_id'];
            
                $query = "SELECT * FROM npp WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="u_code.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

<div class="form-group">
    <label>Username</label>
    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
</div>

<div class="form-group">
    <label>Voter's ID</label>
    <input type="text" name="edit_voters" value="<?php echo $row['voters'] ?>" class="form-control" placeholder="Enter voter's id" required>
</div>

<div class="form-group">
    <label>Phone</label>
    <input type="phone" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Phone Number" required>
</div>

<div class="form-group">
    <label>Gender</label>
    <input name="update_gender" value="<?php echo $row['gender'] ?>" class="form-control">
</div>

<div class="form-group">
    <label>Date of Birth</label>
    <input type="date" name="edit_dob" value="<?php echo $row['dob'] ?>" class="form-control" placeholder="Enter Date of Birth" required>
</div>


<div class="form-group">
    <label>Polling Stations</label>
                  <input name="edit_polling_stations" value="<?php echo $row['polling_stations'] ?>" class="form-control">

                  <!-- <select>
                    <option value="">Select Polling Station</option>

                    <option value="DUDUSO D/A PRIM SCH"> DUDUSO D/A PRIM SCH </option>
                    <option value="OPEN SPACE KONKROMPE"> OPEN SPACE KONKROMPE </option>
                    <option value="ABAMBA CAMP D/A PRIM. SCH"> ABAMBA CAMP D/A PRIM. SCH </option>
                    <option value="ABAMBA D/A PRIM SCH(K060104)"> ABAMBA D/A PRIM SCH </option>
                    <option value="ENGLISH/ARABIC JHS ATEBUBU"> ENGLISH/ARABIC JHS ATEBUBU </option>
                    <option value="SDA PRIM SCH AMANTIN"> SDA PRIM SCH AMANTIN </option>
                    <option value="PRESBY JHS ATEBUBU 2"> PRESBY JHS ATEBUBU 2 </option>
                    <option value="ATECO DEM. SCH ATEBUBU"> ATECO DEM. SCH ATEBUBU </option>
                    <option value="D/A PRIM SCH ABUO"> D/A PRIM SCH ABUO </option>
                    <option value="ANGLICAN J H S ATEBUBU"> ANGLICAN J H S ATEBUBU </option>
                    <option value="D/A JHS ATEBUBU"> D/A JHS ATEBUBU </option>
                    <option value="OPEN SPACE, CHOKOSI LINE"> OPEN SPACE, CHOKOSI LINE </option>
                    <option value="ANGLICAN PRIM SCH DOBIDI"> ANGLICAN PRIM SCH DOBIDI </option>
                    <option value="ANGLICAN PRIM SCH DOBIDI-NKWANTA"> ANGLICAN PRIM SCH DOBIDI-NKWANTA </option>
                    <option value="D/A PRIM SCH DUABONE NO 1"> D/A PRIM SCH DUABONE NO 1 </option>
                    <option value="R/C PRIM SCH DUABONE NO 2"> R/C PRIM SCH DUABONE NO 2 </option>
                    <option value="PUBLIC SHED ISSIFU AKURAA"> PUBLIC SHED ISSIFU AKURAA </option>
                    <option value="D/A PRIM SCH AWOROSO"> D/A PRIM SCH AWOROSO </option>
                    <option value="D/A PRIM SCH SABIDI"> D/A PRIM SCH SABIDI </option>
                    <option value="PUBLIC SHED BYEBYE"> PUBLIC SHED BYEBYE </option>
                    <option value="ANG. PRIM SCH OLD BONIAFO"> ANG. PRIM SCH OLD BONIAFO </option>
                    <option value="PUBLIC SHED TENTARE"> PUBLIC SHED TENTARE </option>
                    <option value="PUBLIC SHED AKYERMADE"> PUBLIC SHED AKYERMADE </option>
                    <option value="D/A JHS, NEW KONKROMPE"> D/A JHS, NEW KONKROMPE </option>
                    <option value="D/A KG NEW KONKROMPE"> D/A KG NEW KONKROMPE </option>
                    <option value="D/A PRIM SCH SANWAKYI"> D/A PRIM SCH SANWAKYI </option>
                    <option value="MALAM TAHIRU'S MOSQUE"> MALAM TAHIRU'S MOSQUE </option>
                    <option value="D/A PRIM SCH FEANO NO 2"> D/A PRIM SCH FEANO NO 2 </option>
                    <option value="D/A PRIM SCH NWOWAM"> D/A PRIM SCH NWOWAM </option>
                    <option value="OPEN SPACE ADOM"> OPEN SPACE ADOM </option>
                    <option value="D/A PRIM SCH OHIANTI"> D/A PRIM SCH OHIANTI </option>
                    <option value="D/A PRIM SCH NYANSIBU NO.1"> D/A PRIM SCH NYANSIBU NO.1 </option>
                    <option value="D/A PRIM SCH TANKANI"> D/A PRIM SCH TANKANI </option>
                    <option value="D/A KG NYOMOASE"> D/A KG NYOMOASE </option>
                    <option value="D/A PRIM SCH BOLGA VILLAGE"> D/A PRIM SCH BOLGA VILLAGE </option>
                    <option value="D/A PRIM SCH TROHWE"> D/A PRIM SCH TROHWE </option>
                    <option value="PUBLIC SHED GYANGYANWURA"> PUBLIC SHED GYANGYANWURA </option>
                    <option value="OPEN SPACE, SAMBO"> OPEN SPACE, SAMBO </option>
                    <option value="PAUL ADUNIA D/A PRIM SCH"> PAUL ADUNIA D/A PRIM SCH </option>
                    <option value="D/A PRIM SCH NKONTONSUA"> D/A PRIM SCH NKONTONSUA </option>
                    <option value="D/A PRIM SCH. KOFI DENTE"> D/A PRIM SCH. KOFI DENTE </option>
                    <option value="OPEN SPACE JOMPA"> OPEN SPACE JOMPA </option>
                    <option value="D/A PRIM SCH. PRUSO NO.2"> D/A PRIM SCH. PRUSO NO.2 </option>
                    <option value="ZONGO NURSERY A. SCH. ATEBUBU"> ZONGO NURSERY A. SCH. ATEBUBU </option>
                    <option value="ALHAJI MAISAMARI MOSQUE"> ALHAJI MAISAMARI MOSQUE </option>
                    <option value="METHODIST JHS ATEBUBU"> METHODIST JHS ATEBUBU </option>
                    <option value="OSAGYEFO EDUC. COMPLEX, ATEBUBU"> OSAGYEFO EDUC. COMPLEX, ATEBUBU </option>
                    <option value="D/A PRIM SCH TIATIA"> D/A PRIM SCH TIATIA </option>
                    <option value="ANGLICAN PRIM SCH ATEBUBU"> ANGLICAN PRIM SCH ATEBUBU </option>
                    <option value="ANGLICAN PRIM SCH NIGRIGYATO"> ANGLICAN PRIM SCH NIGRIGYATO </option>
                    <option value="D/A KG GARADIMA"> D/A KG GARADIMA </option>
                    <option value="D/A PRIM SCH BOANYO"> D/A PRIM SCH BOANYO </option>
                    <option value="ANGLICAN KG JATO ZONGO"> ANGLICAN KG JATO ZONGO </option>
                    <option value="D/A PRIM SCH ASEMPANAYE"> D/A PRIM SCH ASEMPANAYE </option>
                    <option value="EBUOSO D/A PRIM SCH"> EBUOSO D/A PRIM SCH </option>
                    <option value="OPEN SPACE NEW MARKET 1"> OPEN SPACE NEW MARKET 1 </option>
                    <option value="PUBLIC SHED TUBUR AKURAA"> PUBLIC SHED TUBUR AKURAA </option>
                    <option value="R/C PRIM SCH AMANTIN"> R/C PRIM SCH AMANTIN </option>
                    <option value="D/A PRIM SCH YABRASO"> D/A PRIM SCH YABRASO </option>
                    <option value="TUSE D/A PRIM SCH. ATEBUBU"> TUSE D/A PRIM SCH. ATEBUBU </option>
                    <option value="TUSE D/A KG ATEBUBU"> TUSE D/A KG ATEBUBU </option>
                    <option value="PRESBY PRIM SCH 'A' ATEBUBU"> PRESBY PRIM SCH 'A' ATEBUBU </option>
                    <option value="PRESBY KG ATEBUBU"> PRESBY KG ATEBUBU </option>
                    <option value="D/A PRIM SCH AMANSANO"> D/A PRIM SCH AMANSANO </option>
                    <option value="D/A PRIM SCH MURUCHUSO"> D/A PRIM SCH MURUCHUSO </option>
                    <option value="D/A PRIM SCH NYANSIBU NO. 2"> D/A PRIM SCH NYANSIBU NO. 2 </option>
                    <option value="D/A PRIM SCH BOLGA NKWANTA"> D/A PRIM SCH BOLGA NKWANTA </option>
                    <option value="OPEN SPACE SABON ZONGO 2"> OPEN SPACE SABON ZONGO 2 </option>
                    <option value="YAW NKRUMAH D/A PRIM SCH"> YAW NKRUMAH D/A PRIM SCH </option>
                    <option value="ENGLISH/ARABIC A. SCH ATEBUBU"> ENGLISH/ARABIC A. SCH ATEBUBU </option>
                    <option value="METHODIST PRIM SCH. ATEBUBU"> METHODIST PRIM SCH. ATEBUBU </option>
                    <option value="PRESBY JHS ATEBUBU 1"> PRESBY JHS ATEBUBU 1 </option>
                    <option value="PUBLIC SHED MEMPEASEM"> PUBLIC SHED MEMPEASEM </option>
                    <option value="DEEPER LIFE PREP SCH ATEBUBU"> DEEPER LIFE PREP SCH ATEBUBU </option>
                    <option value="D/A PRIM SCH ATEBUBU"> D/A PRIM SCH ATEBUBU </option>
                    <option value="PRESBY JHS FAKWASI"> PRESBY JHS FAKWASI </option>
                    <option value="D/A PRIM SCH HIAMANKYENE"> D/A PRIM SCH HIAMANKYENE </option>
                    <option value="ENGLISH/ARABIC PRIM SCH AMANTIN"> ENGLISH/ARABIC PRIM SCH AMANTIN </option>
                    <option value="ENGLISH/ARABIC JHS AMANTIN"> ENGLISH/ARABIC JHS AMANTIN </option>
                    <option value="D/A J H S JATO ZONGO"> D/A J H S JATO ZONGO </option>
                    <option value="ANGLICAN PRIM SCH JATO ZONGO"> ANGLICAN PRIM SCH JATO ZONGO </option>
                    <option value="ANGLICAN PRIM SCH BONIAFO"> ANGLICAN PRIM SCH BONIAFO </option>
                    <option value="DA PRIM. SCH NEW KONKROMPE"> DA PRIM. SCH NEW KONKROMPE </option>
                    <option value="D/A PRIM SCH OLD KONKROMPE"> D/A PRIM SCH OLD KONKROMPE </option>
                    <option value="D/A J H S AFREFRESO"> D/A J H S AFREFRESO </option>
                    <option value="D/A PRIM SCH FANTE NEW TOWN"> D/A PRIM SCH FANTE NEW TOWN </option>
                    <option value="D/A PRIM SCH MASUO"> D/A PRIM SCH MASUO</option>
                    <option value="D/A PRIM SCH AKWAGYINA KRANE"> D/A PRIM SCH AKWAGYINA KRANE </option>
                    <option value="OPEN SPACE EBOASE"> OPEN SPACE EBOASE </option>
                    <option value="D/A PRIM SCH KUMFIA"> D/A PRIM SCH KUMFIA </option>
                    <option value="D/A JHS KUMFIA"> D/A JHS KUMFIA </option>
                    <option value="D/A PRIM SCH SEINTI"> D/A PRIM SCH SEINTI </option>
                    <option value="TUSE D/A JHS ATEBUBU"> TUSE D/A JHS ATEBUBU </option>
                    <option value="D/A PRIM SCH FEANO NO I"> D/A PRIM SCH FEANO NO I </option>
                    <option value="D/A PRIM SCH NYOMOASE"> D/A PRIM SCH NYOMOASE </option>
                    <option value="PUBLIC SHED KOTOPE"> PUBLIC SHED KOTOPE </option>
                    <option value="OPEN SPACE SABON ZONGO 1"> OPEN SPACE SABON ZONGO 1Sene West </option>
                    <option value="OPEN SPACE NAJATIA MAKALANTA 1"> OPEN SPACE NAJATIA MAKALANTA 1Techiman North </option>
                    <option value="OPEN SPACE NAJATIA MAKALANTA 2"> OPEN SPACE NAJATIA MAKALANTA 2 </option>
                    <option value="D/A PRIM SCH AHOTOR 2"> D/A PRIM SCH AHOTOR 2 </option>
                    <option value="YAKUBU KONKOMBA"> YAKUBU KONKOMBA </option>
                    <option value="AMANGOASE NO.1"> AMANGOASE NO.1 </option>
                    <option value="D/A PRIM SCH. YAW BRUKU"> D/A PRIM SCH. YAW BRUKU </option>
                    <option value="D/A PRIM SCH. ASANTE AKURAA"> D/A PRIM SCH. ASANTE AKURAA </option>
                    <option value="D/A PRIM SCH. ADENTWO"> D/A PRIM SCH. ADENTWO </option>
                    <option value="D/A PRIM SCH. KAFANO"> D/A PRIM SCH. KAFANO </option>
                    <option value="D/A PRIM SCH LAILAI"> D/A PRIM SCH LAILAI </option>
                    <option value="ZONGO NURSERY B. SCH. ATEBUBU"> ZONGO NURSERY B. SCH. ATEBUBU </option>
                    <option value="ENGLISH/ARABIC B. SCH ATEBUBU"> ENGLISH/ARABIC B. SCH ATEBUBU </option>
                    <option value="ANGLICAN J.H.S AMANTIN"> ANGLICAN J.H.S AMANTIN </option>
                    <option value="ANGLICAN PRIM SCH. AMANTIN"> ANGLICAN PRIM SCH. AMANTIN </option>
                    <option value="D/A PRIM SCH AMANTIN"> D/A PRIM SCH AMANTIN </option>
                    <option value="ZONGO COMMUNITY AMANTIN"> ZONGO COMMUNITY AMANTIN </option>
                    <option value="ASSEMBLIES OF GOD PREP SCH ATEBUBU"> ASSEMBLIES OF GOD PREP SCH ATEBUBU </option>
                    <option value="D/A JHS AKOKOA"> D/A JHS AKOKOA </option>
                    <option value="ANGLICAN PRIM SCH AKOKOA"> ANGLICAN PRIM SCH AKOKOA </option>
                    <option value="D/A PRIM SCH FAMFOUR"> D/A PRIM SCH FAMFOUR </option>
                    <option value="ST. MARTINS R/C PRIM ATEBUBU"> ST. MARTINS R/C PRIM ATEBUBU </option>
                    <option value="S.D.A. CHURCH ATEBUBU 1"> S.D.A. CHURCH ATEBUBU 1 </option>
                    <option value="S.D.A. CHURCH ATEBUBU 2"> S.D.A. CHURCH ATEBUBU 2 </option>
                    <option value="CENTRAL MOSQUE LYE-LYE"> CENTRAL MOSQUE LYE-LYE </option>
                    <option value="KHAIRIYA ISLAMIC PRIM"> KHAIRIYA ISLAMIC PRIM </option>
                    <option value="PUBLIC SHED DENSI"> PUBLIC SHED DENSI </option>
                    <option value="PUBLIC SHED DABIDABI"> PUBLIC SHED DABIDABI </option>
                    <option value="PRESBY PRIM SCH FAKWASI"> PRESBY PRIM SCH FAKWASI </option>
                    <option value="PUBLIC SHED BOMPA"> PUBLIC SHED BOMPA </option>
                    <option value="D/A PRIM GARADIMA"> D/A PRIM GARADIMA </option>
                    <option value="PUBLIC SHED KWABANA BOAME"> PUBLIC SHED KWABANA BOAME </option>
                    <option value="PUBLIC SHED BUGRI AKURAA"> PUBLIC SHED BUGRI AKURAA </option>
                    <option value="D/A PRIM SCH PATUDA"> D/A PRIM SCH PATUDA </option>
                    <option value="PUBLIC SHED ASANTEBOA"> PUBLIC SHED ASANTEBOA </option>
                    <option value="OPEN SPACE CONGO"> OPEN SPACE CONGO </option>
                    <option value="R/C PRIM SCH KOKOFU"> R/C PRIM SCH KOKOFU </option>
                    <option value="SDA CHURCH, NEW KONKROMPE"> SDA CHURCH, NEW KONKROMPE </option>
                    <option value="D/A PRIM SCH FORTY-FOUR"> D/A PRIM SCH FORTY-FOUR </option>
                    <option value="OPEN SPACE DENTESO"> OPEN SPACE DENTESO </option>
                    <option value="OPEN SPACE NEW MARKET 2"> OPEN SPACE NEW MARKET 2 </option>
                    <option value="D/A PRIM SCH GRUMAGRUMA"> D/A PRIM SCH GRUMAGRUMA </option>
                    <option value="PUBLIC SHED ADEEKRO"> PUBLIC SHED ADEEKRO </option>
                    <option value="D/A PRIM SCH KUMKUMSO"> D/A PRIM SCH KUMKUMSO </option>
                    <option value="D/A PRIM SCH APESIKA"> D/A PRIM SCH APESIKA </option>
                    <option value="R/C J.H.S. AMANTIN"> R/C J.H.S. AMANTIN </option>
                    <option value="D/A PRIM SCH BRESUOANO"> D/A PRIM SCH BRESUOANO </option>
                    <option value="D/A PRIM SCH. MEM"> D/A PRIM SCH. MEM </option>
                    <option value="D/A PRIM SCH. AMANFROM"> D/A PRIM SCH. AMANFROM </option>
                    <option value="D/A PRIM SCH. ABREWANKO"> D/A PRIM SCH. ABREWANKO </option>
                    <option value="UMMUL QURAH ISLAMIC PRIM. ATEBUBU"> UMMUL QURAH ISLAMIC PRIM. ATEBUBU </option>
                    <option value="PRESBY PRIM SCH 'B' ATEBUBU"> PRESBY PRIM SCH 'B' ATEBUBU </option>
                    <option value="PRESBY CHURCH ATEBUBU"> PRESBY CHURCH ATEBUBU </option>
                    <option value="PUBLIC SHED TWEWOPASE"> PUBLIC SHED TWEWOPASE </option>
                    <option value="R/C PRIM SCH PREMUKYEA"> R/C PRIM SCH PREMUKYEA </option>
                    <option value="D/A PRIM SCH PRAPRABON"> D/A PRIM SCH PRAPRABON </option>
                    <option value="D/A PRIM SCH BEPOSO"> D/A PRIM SCH BEPOSO </option>
                    <option value="D/A JHS BEPOSO"> D/A JHS BEPOSO </option>
                    <option value="D/A PRIM SCH BACHASO"> D/A PRIM SCH BACHASO </option>
                    <option value="D/A PRIM SCH ADEAMRA"> D/A PRIM SCH ADEAMRA </option>
                    <option value="D/A PRIM SCH AHOTOR 1"> D/A PRIM SCH AHOTOR 1 </option>
                    <option value="D/A PRIM SCH WATRO"> D/A PRIM SCH WATRO </option>
                    <option value="C M B SHED SENESO"> C M B SHED SENESO </option>
                    <option value="R/C CHURCH NYAMEANI"> R/C CHURCH NYAMEANI </option>
                    <option value="D/A PRIM SCH. SAMPA"> D/A PRIM SCH. SAMPA </option>
                    <option value="D/A PRIM SCH. DARGARTI AKURAA"> D/A PRIM SCH. DARGARTI AKURAA </option>
                    <option value="D/A PRIM SCH HYEWANHYE"> D/A PRIM SCH HYEWANHYE </option>
                    <option value="D/A PRIM SCH YAW TUFFOUR(K060603)"> D/A PRIM SCH YAW TUFFOUR </option>
                    <option value="ALHAJI FUSEINI MOSQUE(K061703)"> ALHAJI FUSEINI MOSQUE </option>
                    
                 
            </select> -->
                </div>


<div class="form-group">
    <label>Place of Birth</label>
    <input type="text" name="edit_placeofbirth" value="<?php echo $row['placeofbirth'] ?>" class="form-control" placeholder="Enter Place of Birth" required>
</div>

<div class="form-group">
    <label>Occupation</label>
    <input type="text" name="edit_occupation" value="<?php echo $row['occupation'] ?>" class="form-control" placeholder="Enter Occupation" required>
</div>



<div class="form-group">
    <label>Usertype</label>
    <select name="update_usertype" value="<?php echo $row['usertype'] ?>" class="form-control">
      <option value="user">user</option>
      <option value="admin">admin</option>
    </select>
</div>


<a href="atebubu_amantin_npp.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="update_atebubu/amantin_npp_btn" class="btn btn-primary"> UPDATE </button>

</form>

            <?php
                }
                }
            ?>





</div>
</div>
</div>
</div>
</div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>