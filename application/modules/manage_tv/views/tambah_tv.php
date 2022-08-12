<div class="container">
    <ol class="breadcrumb">
        <li>List</li>
        <li><a href="<?php echo base_url() . 'manage_tv/'; ?>">Data</a></li>
        <li class="active">Add</li>
    </ol>
</div>
<div class="container">
    <div class="container" style="background: #f5f5f5;">
        <h3>Tambah Data</h3>
        <br>
        <?php echo form_open_multipart('manage_tv/tambahtv/')?>
        <div class="row">
            <div class="col-md-2">
                <label>Date And Time</label>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                <div class='input-group date' id='datetimepicker1'>
                    <input name="date" type='text' class="form-control" value="<?php echo $this->session->flashdata('date'); ?>" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
				<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Title</label>
            </div>
            <div class="col-md-10">
                <input name="title" type="text" class="form-control" value="<?php echo $this->session->flashdata('title'); ?>" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Content</label>
            </div>
            <div class="col-md-10">
                <?php echo $this->ckeditor->editor("content",$this->session->flashdata('content')); ?>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-2">
                <label>Source Youtube</label>
            </div>
            <div class="col-md-10">
                <input name="source" type="text" class="form-control" required value="<?php echo $this->session->flashdata('source'); ?>"/>
            </div>
        </div>
        <br>
        <!-- <div class="row">
            <div class="col-md-2">
                <label>Hit</label>
            </div>
            <div class="col-md-10"> -->
                <input name="hit" type="text" value="1" class="form-control" style="display: none;" />
            <!-- </div>
        </div>
        <br> -->
        <div class="row">
            <div class="col-md-2">
                <label>Status</label>
            </div>
            <div class="col-md-10">
                <input type="radio" name="status" value="Show" required> Show
                <input type="radio" name="status" value="Hide" required> Hidden<br>
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
             <a href="<?php echo base_url() . 'manage_tv/' ?>" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-success">Save</button>
        </div>
        <?php form_close(); ?></div>
</div>