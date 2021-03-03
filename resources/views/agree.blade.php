<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/css/fitu.css">
<title>Applicationform</title>
</head>
<body>
<tr>
<h1>Application form</h1>
        <form action="/agree" enctype="multipart/form-data" method="POST">
        @csrf
            <h2>Registration info</h2>
            <!--<legend>NOtESHEET</legend><br>
            <label for="forward_filup_detail">list the forward the list</label>
            <textarea name="message" style="width:100px; height:70px;">forward</textarea>-->
            <!-- <label>Registration No.</label>
            <input type="number"name="register_no"placeholder="Registration No."size="90" > -->
            <label>Ration card number:</label>
            <input type="number"name="ration_no"placeholder="Ration card No."size="60" value="369" >
            <h2>Address information</h2>
            <label>Address-Door_number:</label>
                <input type="number" name="door_number"placeholder="Address_Door_N0" size="40"  value="123">
                <br><br>
                <label>Address-Sub_locality 1</label>
                <input type="text"name="sub_number"placeholder="Adress_Sub_locality 1" size="40" value="sub1"><br><br>
                <label>Address-sub_locality 2</label>    
                <input type="text"name="sub_number"placeholder="Address-Sub_location_2" size="40"  value="sub2">
            <br><br>
            <label>Address-Ward Number</label>
            <input type="ward number" name="ward_number"placeholder="Address_ward_number" size="6"  value="7789">
                <br><br>
                <label>Address_location</label>
                <input type="Location" name="location"placeholder="Address_Location"size="20"  value="Treasury"><br><br>
                
                <label>Address_Select_sub_District</label>
                <select name="select_sub_District">
                    <option value="Aizawl">Aizawl</option>
                    <option value="champhai">champhai</option>
                    <option value="mamit">Mamit</option>
                    <option value="lunglei">Lunglei</option>
                    <option value="lawnglai">Lawnglai</option>
                    <option value="serchhip">Serchhip</option>
                    <option value="saiha">Saiha</option>
                <!--<input type="select sub District" name="select_sub_District"placeholder="Address- select_sub_district" size="30">-->
                </select>
                <br><br>
                <label>Address_District</label>
                <input type="District"name="District"placeholder="Address_district"size="40"  value="Aizawl"><br><br>
                <label>Address_State</label>
                <input type="state"name="state"placeholder="Address_state" size="20"  value="Mizoram"><br><br>
                <label>Address_pin_code</label>
                <input type="pin code"name="pin_code"placeholder="Pin code" size="20"  value="796001">
                <br><br>
                <label>Address_Country</label>
                <select name="country">
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="England">England</option>
                    <option value="Africa">Africa</option>
                    <option value="Dubai">Dubai</option>
                    <option>etc</option>
                </select>
                <br><br>
                <label>Address_Police_Station</label>
                <input type="Police_Station"name="police_Station"placeholder="Address_police_Station"size="30"  value="Dubhai"><br><br>
                <label>Post_Office</label>
                <input type="Post office" name="post_office"placeholder="post office"size="20"  value="Chanmary"><br><br>
                <h2>Family Details</h1>
                <p>Name of the head of the family:</p>
                <label>Name</label>
                <input type="text"name="name"placeholder="name"size="30"  value="Kit kat"><br><br>
                <label>father name:</label>
                <input type="father name"name="fathername"placeholder="Father name:"size="20" value="Raju">
                <br><br>
                <label>Mother name:</label>
                <input type="Mother name"name="Mothername"placeholder="Mother name:"size="30"  value="Sita"><br><br>
                <label>Date of Birth</label>
                <input type="date"name="dob"placeholder="Date Birth"size="20">
                @error('dob')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              
                <p>GENDER</p>
                <select name="gender" >
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
                </select>
                <br><br>
                <label>Age of each member of the family</label>
                <input type="Age of each member of the family"name="Age_each_member_family"placeholder="Age of each member of the family"size="20"  value="7"><br><br>
                <label>Relation with karta of the family</label>
                <input type="Relation with karta of the family" name="Relation_karta_family"placeholder="Relation with karta of the family" size="20"  value="Brother" ><br><br>
                <label>Monthly income of karta</label>
                <input type="monthly income of karta"name="monthly_income_karta"placeholder="monthly income of family"size="30"  value="7777">
                <br><br>
                <label>occupation</label>
                <input type="Occupation"name="occupation"placeholder="Occupation"size="10"  value="programmer"><br><br>
                <label>Religion</label>
                <input type="religion"name="Religion"placeholder="Religion"size="30"  value="relion"><br><br>
                <h2>Document</h2>
                <label>Electricity Connection:</label>
                <select name="Electricity_connection">
                    <option  value="yes">Yes</option>
                    <option  value="no">No</option>
                </select>
                <label>Cooking Gas Connection:</label>
                <select  name="cooking_gas_connection">
                <option  value="yes">Yes</option>
                <option  value="no">No</option>
                </select><br>
                
                <p>Residing period of above Address:</p>
              <!--<p>Remark/Suggestion/Comments to be enclosed with the list forwarded by the forwarder</p>-->
              <!--<form action="/action_page.php">-->
               <textarea name="message" style="width:100px; height:70px;">remark:</textarea>
                <!--</form>-->
              -<!--<p>I here by declare that all the document attached are verified with originals</p>-->
              <!--<div class='but'style="text-align:left;width:60%;flaot:right">
              <form action="forawd"id="forward" required>
            
              <input type="sunmit"Forward>
              </div>--><br>
              <input type="radio" id="forward" name="status" value="forward">
                <label for="forward">Forward</label><br>
                <input type="radio" id="reject" name="status" value="reject">
                <label for="reject">Reject</label><br>
              
              <button type="submit" >Submit</button>
        </form>
    </body>
</html>  