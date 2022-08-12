<div class="container">
    <ol class="breadcrumb">
        <li>List</li>
        <li><a href="<?php echo base_url() . 'manage_running/'; ?>">Data</a></li>
        <li class="active">Add</li>
    </ol>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;">
        <h3>Tambah Running Teks</h3>
        <br>
        <?php echo form_open_multipart('manage_running/tambahrunning/')?>
        <div class="row">
            <div class="col-md-2">
                <label>Teks</label>
            </div>
            <div class="col-md-10">
                <textarea name="teks" type="text" class="form-control"></textarea>
            </div>
        </div>
        <br>
         <div class="row">
            <div class="col-md-2">
                <label>Status</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="status" value="Show"> Show
                <input type="radio" name="status" value="Hide"> Hidden<br>
            </div>
        </div>
        <br>
        <div>
            <?php if (isset($results))
            {
                foreach ($results as $result)
                {
                    echo $result;
                }
            }; ?>
        </div>
        <div id="errors">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
        <div class="col-md-12 text-center">
             <a href="<?php echo base_url() . 'manage_running/' ?>" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
        <?php form_close(); ?></div>
</div>