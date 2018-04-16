<!--Body Start -->
<div class="row">
  <!-- Left Nav Start -->
    <div class="col-1">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link <?php if(preg_match('^data_get_set/create_db/cr_data/get_existing_databases$^',current_url())) echo 'active'; ?>" id="v-pills-home-tab" data-toggle="pill" href="<?php echo base_url("data_get_set/create_db/cr_data/get_existing_databases"); ?>" role="tab" aria-controls="v-pills-home" aria-selected="true">Select Database</a>
        <a class="nav-link <?php if(preg_match('^db/create_db$^',current_url())) echo 'active'; ?>" id="v-pills-profile-tab" data-toggle="pill" href="<?php echo base_url("data_get_set/create_db/cr_data/get_existing_databases"); ?>" role="tab" aria-controls="v-pills-profile" aria-selected="false">Meta Data</a>
        <a class="nav-link <?php if(preg_match('^db/create_db$^',current_url())) echo 'active'; ?>" id="v-pills-messages-tab" data-toggle="pill" href="<?php echo base_url("data_get_set/create_db/cr_data/get_existing_databases"); ?>" role="tab" aria-controls="v-pills-messages" aria-selected="false">Auto Link Tables</a>
        <a class="nav-link <?php if(preg_match('^db/create_db$^',current_url())) echo 'active'; ?>" id="v-pills-settings-tab" data-toggle="pill" href="<?php echo base_url("data_get_set/create_db/cr_data/get_existing_databases"); ?>" role="tab" aria-controls="v-pills-settings" aria-selected="false">Manually Link Tables</a>
        <a class="nav-link <?php if(preg_match('^db/create_db$^',current_url())) echo 'active'; ?>" id="v-pills-settings-tab" data-toggle="pill" href="<?php echo base_url("data_get_set/create_db/cr_data/get_existing_databases"); ?>" role="tab" aria-controls="v-pills-settings" aria-selected="false">Create Data Sources</a>      </div>
    </div>
  <!-- Left Nav END -->