<!-- Sir Collins Eel
https://colehove.co.za
-->
<div class="tab-pane" id="about">
    <div class="row">
        <h4 class="info-text"> Let's start with the basic information</h4>
        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label>Full Name <small> * </small></label>
                <input name="fullname" type="text" class="form-control" placeholder="Name & Surname" required>
            </div>
            <div class="form-group">
                <label>Email Address <small> * </small></label>
                <input name="email" type="text" class="form-control" placeholder="Email address">
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label for="#gender"> Gender </label>
                <br>
                <select name="gender" id="gender" class="form-control valid" required>
                    <option disabled="" selected></option>
                    <option value="male"> Male </option>
                    <option value="female"> Female </option>
                </select>
                 <!-- <input name="gender" type="text" class="form-control" placeholder="Male or Female"> -->
            </div>
            <div class="form-group">
                <label>Contact Number <small> * </small></label>
                <input name="mobile" type="text" class="form-control" placeholder="+27" required>
            </div>
        </div>

        <div class="col-sm-5 col-sm-offset-1">
            <div class="form-group">
                <label>Physical Address <small> * </small></label>
                <input name="address" type="text" class="form-control" placeholder="Street Name & City" required>
            </div>
            <div class="form-group">
                <label><strong>Select Location</strong></label>
                <br>
                <select name="branch" id="branch" class="form-control valid" required>
                    <option disabled="" selected></option>
                    <option value="kempton_park"> Kempton Park </option>
                    <option value="pretoria"> Pretoria </option>
                    <option value="randburg"> Randburg </option>
                    <option value="joburg"> Turffontein - JHB </option>
                    <option value="hazyview"> Hazyview </option>
                    <option value="roodepoort"> Roodepoort </option>
                    <option value="virtual">Taalnet Virtual School </option>
                    <option value="distance_learning" style="color: white;background-color: rgba(12,145,2,0.7);"> Opt For Distance Learning </option>
                </select>
                <!-- <input type="text" name="branch" id="branch" class="form-control" placeholder="Taal-NET Branch"> -->
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">
                <label>When Did You Write Your Matric ?</label>
                <input type="text" name="matric_year" id="matric_year"  class="form-control" placeholder="2010 - 2019" required>
            </div>
            <div class="form-group">
                <label><strong>Matric Interest</strong></label>
                <br>
                <select name="matric_interest" id="matric_interest" class="form-control valid" required>
                    <option disabled="" selected></option>
                    <option value="CAPS"> CAPS </option>
                    <option value="Technical_Matric"> Technical Matric </option>
                    <option value="Cambridge"> Cambridge </option>
                    <option value="NSC"> NSC </option>
                </select>
                <!-- <input type="text" name="matric_interest" id="matric_interest" class="form-control" placeholder="CAPS or Technical Matric"> -->
            </div>
        </div>
    </div>
</div>