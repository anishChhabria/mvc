<?php require APPROOT . '/views/inc/header.php'; ?>

        
       <a href="<?php echo URLROOT;?>/posts" class="btn btn-primary"> Back</a>
            <div class="card card-body bg-light mt-5">
               
                <h2><b>Add assets</b></h2>
                <p>Add assets using this <b>form</b></p>
                <form action="<?php echo URLROOT;?>/posts/add" method="post">
                       
                        <div class="form-group">
                            <label for="title">ASSET  <sup>*</sup></label>
                            <input type="text" name="title" class="form-control form-control-lg <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['title']; ?>">
                            <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                        </div>
                        <div class="form-group">
                            <label for="body">WHY is ASSET required and quantity also <sup>*</sup></label>
                            <textarea name="body" class="form-control form-control-lg <?php echo (!empty($data['body_err'])) ? 'is-invalid' : ''; ?>"><?php echo $data['body']; ?></textarea>
                            <span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
                        </div>
                        <input type="submit" value="submit" class="btn btn-success pull-right ">
                    

                       
                </form>
            </div>
      
   

<?php require APPROOT . '/views/inc/footer.php'; ?>