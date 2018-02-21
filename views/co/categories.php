<style type="text/css">
.container-result-search {
  padding-top: 10px;
}
#sectionMenu{
  /*background-color: #F4F4F6;*/
  padding: 10px;
  /*border: 1px solid #bbb;*/
  margin:15px 0 15px 10px;
}
.btn-add{}

#sub-menu-left.subsub .btn{
  text-align: left !important;
}
</style>

<div class="col-xs-12 col-sm-10 col-md-10" id="sectionMenu">

  <button class="btn btn-link bg-white text-azure margin-left-5 btn-default btn-select-type-anc letter-<?php echo @$section["color"]; ?>" 
          data-type="ressources" data-type-anc=""  data-key="all">
    <i class="fa fa-circle-o"></i>
    <span class="hidden-xs hidden-sm"> <?php echo Yii::t("common","Show all"); ?> </span>
  </button> 

  <?php 
$currentSection = 1;
foreach ($categories["sections"] as $key => $section) { ?>
  <button class="btn btn-link bg-azure elipsis btn-select-type-anc" 
          data-type-anc="<?php echo @$section["label"]; ?>" data-key="<?php echo @$section["key"]; ?>" 
          data-type="ressources">
    <i class="fa fa-<?php echo $section["icon"]; ?> hidden-xs"></i> 
    <?php echo Yii::t("category", $section["labelFront"]); ?>
  </button>
<?php } ?> 

  <button class="btn margin-left-5 btn-link bg-green-k btn-add" onclick="dyFObj.openForm('ressources')">
    <i class="fa fa-plus"></i>
    <span class="hidden-xs hidden-sm"> <?php echo Yii::t("common","Add"); ?> </span>
  </button> 
</div>

<div class="col-xs-12"><hr class="col-xs-12 col-sm-10 col-md-10"></div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-8 margin-top-15 text-right subsub classifiedFilters" id="sub-menu-left">
  <button class="open-type-filter tooltips" data-toggle="tooltip" data-placement="right" data-title="<?php echo Yii::t("common","Open filtering by type") ?>"><i class="fa fa-chevron-right"></i></button>
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
            <i class="fa fa-angle-right"></i> <?php echo Yii::t("category",$key2); ?>
          </button>
        <?php } ?>
      <?php } ?>
  <?php } ?>
  
</div>
 
  

  