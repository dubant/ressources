<style type="text/css">
.container-result-search {padding-top: 10px;}
#sectionMenu{height: 45px;background-color: #F4F4F6;;padding: 5px;text-align: center;border: 1px solid #bbb;}
.btn-add{background-color: #2BB0C6;color:white;border: 1px solid #333; }
</style>
<div class="col-xs-12 center" id="sectionMenu">
    <?php 
        $currentSection = 1;
        foreach ($categories["sections"] as $key => $section) { ?>
            <button class="btn btn-default  text-dark elipsis btn-select-type-anc" 
                    data-type-anc="<?php echo @$section["label"]; ?>" data-key="<?php echo @$section["key"]; ?>" 
                    data-type="ressources"
                    style="border-radius:0px; border-color: transparent; text-transform: uppercase;">
              <i class="fa fa-<?php echo $section["icon"]; ?> hidden-xs"></i> <?php echo Yii::t("category",$section["labelFront"]); ?>
            </button>
    <?php } ?>  
    <button class="btn margin-left-5 btn-default btn-select-type-anc letter-<?php echo @$section["color"]; ?>" 
            data-type="ressources" data-type-anc=""  data-key="all">
      <i class="fa fa-circle-o"></i>
      <span class="hidden-xs hidden-sm"> <?php echo Yii::t("common","All"); ?> </span>
    </button> 

    <button class="btn margin-left-5 btn-add " onclick="dyFObj.openForm('ressources')">
      <i class="fa fa-plus"></i>
      <span class="hidden-xs hidden-sm"> <?php echo Yii::t("common","Add"); ?> </span>
    </button> 

  </div>


  <div class="col-lg-2 col-md-2 col-sm-3 col-xs-8 margin-top-15 text-right subsub classifiedFilters" id="sub-menu-left">
    <?php 
        foreach ($categories['filters'] as $key => $cat) {
    ?>
        <?php if(is_array($cat)) { ?>
          <button class="btn btn-default text-dark margin-bottom-5 btn-select-category-1" style="margin-left:-5px;" data-keycat="<?php echo $key; ?>">
            <i class="fa fa-<?php echo @$cat["icon"]; ?> hidden-xs"></i> <?php echo Yii::t("category",$key); ?>
          </button><br>
          <?php foreach (@$cat["subcat"] as $key2 => $cat2) { 
            $lbl2 = (isset($cat2["label"])) ? $cat2["label"] : $cat2 ;
            
            ?>
            <button class="btn btn-default text-azure margin-bottom-5 margin-left-15 hidden keycat keycat-<?php echo $key; ?>" data-categ="<?php echo $key; ?>" data-keycat="<?php echo $lbl2; ?>">
              <i class="fa fa-angle-right"></i> <?php echo Yii::t("category",$lbl2); ?>
            </button><br class="hidden">
          <?php } ?>
        <?php } ?>
    <?php } ?>
    
  </div>
 
  

  