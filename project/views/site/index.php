<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?=SITE_FILES?>/css/style.css">

</head>
<body>

<div id="loader_incon"></div>



<div class="share_body animate_load_page clearfix" id="hdn_load_section">
    <div class="sh_header clearfix">
        <div class="sh_logo clearfix">
            <a href=""> </a>
        </div>

        <div class="sh_close_icn clearfix">
            <!-- <a href=""></a> -->
            <!-- <button onclick="closeWin()"> </button> -->
        </div>
    </div>

    <div class="bdy_content_sect clearfix">
        <div class="sh_link">
            https://azerforum.com/az/boyuk-debilqe-nicat-sixelizade-orxan-seferovu-meglub-etdi
        </div>
        <div class="sh_img clearfix">
            <img src="<?=$data['image']?>" alt="">
        </div>
        <div class="sh_head">
            <h1><?=$data['title']?> </h1>
        </div>

    </div>

    <form action="" method="" class="clearfix">
        <div class="sh_row clearfix">
            <div class="info_are_txt clearfix">
                <div class="col_l">
                    <label for="sum1">Məbləğ (Azn):</label>
                </div>
                <div class="col_r">
                    <div class="cnt_inp_row">
                        <input type="text"  name="" id="sum1" value="1"> <!-- <span class="cnt_nm">azn</span> -->
                    </div>
                </div>
            </div>
            <div class="info_are_txt clearfix">
                <div class="col_l">
                    <span class="dth_time">Bitmə tarixi: </span>
                </div>
                <div class="col_r">
                    <select name="" id="">
                        <option value="volvo">3 gün</option>
                        <option value="saab">1 həftə</option>
                        <option value="saab">1 ay</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="sh_sbmt_bnt">
            <button type="submit">Paylaş </button>
        </div>
    </form>

</div>
</html>
