<?php 
    require('header.php');
?>
    <div class="container cm">
        <div class="row justify-content-md-center">
            <div class="col-lg-8">
                <h1>FORM CONTACT</h1>
                <form action="submit.php" method="POST">
                    <div class="form-group" >
                        <label for="nameInput">*ชื่อ - นามสกุล :</label>
                        <input class="form-control" type="text" placeholder="ชื่อ - นามสกุล" 
                            name="nameInput" id="nameInput" required>
                    </div>  
                    <div class="form-group">
                        <label for="Province">*จังหวัด :</label>
                        <select required class="form-control" name="Province" id="Province">
                        </select>
                    </div>  
                    <div class="form-group">
                        <label for="Amphur">*อำเภอ :</label>
                        <select required class="form-control" name="Amphur" id="Amphur">
                        </select>  
                    </div>  
                    <div class="form-group">
                        <label for="District">*ตำบล :</label>
                        <select required class="form-control" name="District" id="District">
                        </select>
                    </div>  
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php 
    require('footer.php');
?>