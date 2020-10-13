<?php
/**
 * This was contained in an addon until version 1.0.0 when it was rolled into
 * core.
 *
 * @package    WBOLT
 * @author     WBOLT
 * @since      1.1.0
 * @license    GPL-2.0+
 * @copyright  Copyright (c) 2019, WBOLT
 */

?>

<div style=" display:none;">
    <svg aria-hidden="true" style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <defs>
            <symbol id="sico-upload" viewBox="0 0 16 13">
                <path d="M9 8v3H7V8H4l4-4 4 4H9zm4-2.9V5a5 5 0 0 0-5-5 4.9 4.9 0 0 0-4.9 4.3A4.4 4.4 0 0 0 0 8.5C0 11 2 13 4.5 13H12a4 4 0 0 0 1-7.9z" fill="#666" fill-rule="evenodd"/>
            </symbol>
        </defs>
    </svg>
</div>

<div class="wb-post-sitting-panel">
    <div class="selector-bar switch-bar">
        <label><strong>下载功能</strong> <input class="wb-switch" id="J_DLIPP_SWITCH" type="checkbox" data-target="#J_DIPPMain" name="wb_dl_type"<?php echo $wb_dipp_switch ? ' checked':'';?> value="1"></label>
    </div>

    <div class="wbsp-main default-hidden-box<?php echo $wb_dipp_switch ? ' active':''; ?>" id="J_DIPPMain">
        <h3><strong>文件上传方式</strong></h3>

        <label class="wb-post-sitting-item section-upload">
            <span class="wb-form-label">上传文件</span>
            <div class="wbs-upload-box">
                <input class="wbs-input upload-input" type="text" placeholder="点击右侧上传按钮或者直接贴入下载链接" name="wb_down_local_url" id="wb_down_local_url" value="<?php echo $meta_value['wb_down_local_url'];?>">
                <button type="button" class="wbs-btn wbs-upload-btn">
                    <svg class="wb-icon sico-upload"><use xlink:href="#sico-upload"></use></svg><span>上传</span>
                </button>
            </div>
        </label>

        <label class="wb-post-sitting-item">
            <span class="wb-form-label">城通网盘</span>
            <input class="wbs-input" type="text" name="wb_down_url_ct" placeholder="留意填写完整url" value="<?php echo $meta_value['wb_down_url_ct'];?>">
        </label>

        <div class="wb-post-sitting-item dlipp-item-bdp">
            <label class="bdp-url-item">
                <span class="wb-form-label">百度网盘</span>
                <input class="wbs-input" type="text" name="wb_down_url" placeholder="留意填写完整url" id="wb_down_url" value="<?php echo $meta_value['wb_down_url'];?>">
            </label>
            <label class="bdp-psw-item">
                <span class="wb-form-label">网盘密码</span>
                <input class="wbs-input" type="text" name="wb_down_pwd" placeholder="" id="wb_down_pwd" value="<?php echo $meta_value['wb_down_pwd'];?>">
            </label>
        </div>
        <p class="wb-tip-txt">填入百度网盘客户端或者网页端分享链接及提取码，可自动识别链接和提取码填入哦。</p>



        <h3><strong>下载方式</strong></h3>

        <div class="selector-bar">
            <label><input class="wbs-radio" type="radio" name="wb_dl_mode"<?php echo !$dl_mode?' checked="checked"':'';?> value="0"> 免费下载</label>
            <label><input class="wbs-radio" type="radio" name="wb_dl_mode"<?php echo $dl_mode=='1'?' checked="checked"':'';?> value="1"> 回复后下载</label>
        </div>
    </div>
</div>


