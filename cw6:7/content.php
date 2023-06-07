<div data-e2e="landing-landing-ProductsContainer" class="css-vo8pxt emtp4d25">

    <?php

    define("DATA_FILE", __DIR__ . "/data.json");

    function getData() {
        if (!file_exists(DATA_FILE)) {
            return [];
        }
    
        return json_decode(file_get_contents(DATA_FILE), true);
    }

    $data = getData();
    foreach ($data["entries"] as $id => $entry) {

        $uploadPath = $entry["uploadPath"];
        $fileName = $entry["fileName"];
        $poster = $entry["poster"];
        $header = $entry["header"];
        $paragraph = $entry["paragraph"];
        $linkTekst = $entry["linkTekst"];
        $href = $entry["href"];

        ?>
        
        <div data-e2e="landing-landing-ProductCardWrapper" class="css-1i06hfn emtp4d24">
        <video muted="muted" loop="" preload="true" src="<?php echo $uploadPath . '/'. $fileName?>"
                poster="<?php echo $poster?>"
                autoplay="autoplay" itemtype="video/mp4" data-e2e="landing-landing-ProductVideo"
                class="css-f2ul5v emtp4d22"></video>
            <div height="24px" data-testid="spacer" data-e2e="src-spacer-StyledSpacerDiv" class="css-g33lus e13wderq0">
            </div>
            <h6 class="css-1g74mlr eblccp11"><?php echo $header?></h6>
            <div height="8px" data-testid="spacer" data-e2e="src-spacer-StyledSpacerDiv" class="css-1wmddk2 e13wderq0">
            </div>
            <p class="css-1rg4h7z eblccp12" data-e2e="landing-landing-TUXText">
            <?php echo $paragraph?>
            </p>
            <div height="16px" data-testid="spacer" data-e2e="src-spacer-StyledSpacerDiv" class="css-q8uki0 e13wderq0">
            </div>
            <span class="css-1w933sv eblccp12" data-e2e="landing-landing-TUXText"><a
                    href="<?php echo $href?>" title="" style="white-space:normal"
                    data-e2e="src-link-a"><?php echo $linkTekst?></a>
            </span>
            <div height="64px" data-testid="spacer" data-e2e="src-spacer-StyledSpacerDiv" class="css-lay8ii e13wderq0">
            </div>
        </div>
    <?php
    }
?>
   
</div>
