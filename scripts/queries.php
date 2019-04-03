<?php
    function getFeatures(){ 
        return
        "SELECT PkgName, PkgBasePrice, PackageId
        FROM packages
        WHERE Featured=1";
    }
    function packageFeature($id) {
        return
        "SELECT packageoptions.Feature
        FROM featuredpackages
        INNER JOIN packageoptions ON featuredpackages.Feature = packageoptions.OptionId
        WHERE PackageId=$id";
    }
?>