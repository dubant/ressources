<style type="text/css">
.container-result-search {
  padding-top: 10px;
}
#sectionMenu{
  /*background-color: #F4F4F6;*/
  padding: 10px;
  /*border: 1px solid #bbb;*/
}
.btn-add, .btn-select-type-anc{
  border-radius: 5px;
}
.btn-select-type-anc{
  text-transform: uppercase;
}
.btn-select-type-anc, .btn-select-type-anc:hover, .btn-select-type-anc:active{
  border-color: transparent;
}
#sub-menu-left.subsub .btn{
  text-transform: uppercase;
  font-size:12px;
}
</style>
<?php 
   /* ***********************
        LIB FROM THIS MODULE (Classified)
    ************************ */
    $cssAnsScriptFilesModule = array('/assets/css/default/classified.css');
    HtmlHelper::registerCssAndScriptsFiles($cssAnsScriptFilesModule, Yii::app()->theme->baseUrl);
?>
<div class="col-xs-12 col-sm-12 col-md-12" id="sectionMenu">
  <div class="col-md-2 col-sm-2 col-xs-2">
    <button class="btn btn-default bg-white col-md-12 col-sm-12 pull-right font-montserrat btn-select-type-anc letter-<?php echo @$section["color"]; ?> padding-10" 
            data-type="classified" data-type-anc=""  data-key="all">
      <i class="fa fa-refresh"></i> <?php echo Yii::t("common","All"); ?>
    </button>
  </div>
  <div class="col-md-10 col-sm-10 col-xs-10">
    <?php 
    $currentSection = 1;
    foreach ($categories["sections"] as $key => $section) { ?>

        <div class="col-md-4 col-sm-5 col-xs-3 no-padding">
          <button class="btn btn-default col-md-12 col-sm-12 padding-10 font-montserrat elipsis btn-select-type-anc" 
                data-type-anc="<?php echo @$section["label"]; ?>" data-key="<?php echo @$section["key"]; ?>" 
                data-type="ressources">
          <i class="fa fa-<?php echo $section["icon"]; ?>"></i> 
          <?php echo Yii::t("category", $section["labelFront"]); ?>
        </button>
      </div>
    <?php } ?>
      <div class="col-md-4 col-sm-2 col-xs-2 no-padding pull-right">
          <button class="btn btn-default col-md-12 col-sm-12 bg-green-k padding-10 font-montserrat elipsis btn-add-classified btn-open-form" 
                data-form-type="ressources"
                data-type-anc="<?php echo @$section["label"]; ?>" data-key="<?php echo @$section["key"]; ?>" 
                data-type="ressources">
          <i class="fa fa-plus-circle hidden-xs"></i> 
          <span class="hidden-xs">
            <?php echo Yii::t("classified", "Publier"); ?>
          </span>
        </button>
      </div>
  </div>
   <hr class="col-md-12 col-sm-12 col-xs-12 margin-top-10 margin-bottom-10 no-padding" id="before-section-result">
</div>
<div class="col-md-10 col-sm-9 col-xs-12 text-left headerSearchContainer no-padding  pull-right"></div>

<div class="col-lg-2 col-md-2 col-sm-3 col-xs-8 margin-top-15 text-right subsub classifiedFilters font-montserrat" id="sub-menu-left">
  <button class="open-type-filter tooltips" data-toggle="tooltip" data-placement="right" data-title="<?php echo Yii::t("common","Open filtering by type") ?>"><i class="fa fa-chevron-right"></i></button>
  <?php 
      foreach ($categories['filters'] as $key => $cat) {
  ?>
      <?php if(is_array($cat)) { ?>
        <button class="btn btn-default text-dark margin-bottom-5 btn-select-category-1 elipsis" 
                style="margin-left:-5px;" data-keycat="<?php echo $key; ?>">
                <i class="fa fa-<?php echo @$cat["icon"]; ?> hidden-xs"></i> <?php echo Yii::t("category",$cat["label"]); ?>
        </button><br>
        
        <?php foreach (@$cat["subcat"] as $key2 => $cat2) { 
                $lbl2 = (isset($cat2["label"])) ? $cat2["label"] : $cat2 ;
        ?>
          <button class="btn btn-default text-azure margin-bottom-5 margin-left-15 hidden elipsis keycat keycat-<?php echo $key; ?>"
                  data-categ="<?php echo $key; ?>" data-keycat="<?php echo $key2; ?>">
                  <i class="fa fa-angle-right"></i> <?php echo Yii::t("category",$cat2["label"]); ?>
          </button>
        <?php } ?>
      <?php } ?>
  <?php } ?>
  <!-- <button onclick="dyFObj.openForm('ressources');" class="col-md-2 col-sm-4 col-xs-6 no-padding letter-vine btn btn-default margin-top-5">
      <i class="fa fa-plus-circle hidden-xs fa-2x "></i> 
    </button> -->
</div>
 
  

  