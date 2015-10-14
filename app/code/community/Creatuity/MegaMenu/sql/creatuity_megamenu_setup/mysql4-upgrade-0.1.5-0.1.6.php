<?php

/* @var $installer Creatuity_MegaMenu_Model_Resource_Setup */ 
$installer = $this;

$installer->addCategoryAttribute(
    "megamenu_frontend_class", 
    array(
        "type"     => "varchar",
        "backend"  => "",
        "frontend" => "",
        "label"    => "Frontend Class",
        "input"    => "text",
        "frontend_class"    => "",
        "source"   => "",
        "global"   => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'group'    => Creatuity_MegaMenu_Model_Config::MEGA_MENU_TAB_NAME,
        "visible"  => true,
        "required" => false,
        "user_defined"  => false,
        "default" => null,
        "sort_order" => 5,
        "searchable" => false,
        "filterable" => false,
        "comparable" => false,
        "visible_on_front"  => false,
        "unique"     => false,
        "note"       => ""
    ));
