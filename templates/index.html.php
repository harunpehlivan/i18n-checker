<?php
$title = "W3C I18n Checker";
$css[] = "base_ucn.css";
$js[] = "mootools-1.2.4-core-more-yc.js";
$js[] = "w3c_unicorn_index.js";
include('includes/head.html.php');
?>

	<div id="frontforms">
		<ul id="tabset_tabs">
			<li><a href="#validate-by-uri"><?php _lang('validate-by-uri') ?></a></li><li><a href="#validate-by-upload"><?php _lang('validate-by-upload') ?></a></li><li><a href="#validate-by-input"><?php _lang('validate-by-input') ?></a></li>
		</ul>

		<div id="fields">
			<form action="check.php" method="get" id="validate-by-uri" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-uri') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-uri') ?></p>
						<p>
							<label title="<?php _lang('uri_title') ?>" for="ucn_uri"><span><?php _lang('uri_label') ?></span>
								<input type="text" name="docAddr" id="ucn_uri" size="45" value="<?php /*#if($param_uri && $param_uri!='referer')$!param_uri#end*/ ?>"/>
							</label>
						</p>
					</div>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form>
			<form action="check" method="post" enctype="multipart/form-data" id="validate-by-upload" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-upload') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-upload') ?></p>
						<p>
							<label title="<?php _lang('instruction-by-upload') ?>" for="ucn_file"><span><?php _lang('local_file_label') ?></span>
								<input type="file" id="ucn_file" name="file" size="30" />
							</label>
						</p>
					</div>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form>
			<form action="check" method="post" id="validate-by-input" class="ucn_form">
				<fieldset>
					<legend><?php _lang('legend-by-input') ?></legend>
					<div class="input">
						<p class="instructions"><?php _lang('instruction-by-input') ?></p>
						<p>
							<textarea id="ucn_text" name="text" rows="12" cols="70"><?php /*$!param_text*/ ?></textarea>
						</p> 
					</div>
					<div class="submit">
						<?php if(isset($_REQUEST['lang']) && $_REQUEST['lang'] == $lang) { ?>
						<input type="hidden" name="lang" value="<?php echo $lang ?>" class="lang" />
						<?php } ?>
						<input type="submit" value="<?php _lang('submit') ?>" />
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<div class="intro">
			<p>This checker performs various tests on a Web Page to determine its level of internationalisation-friendliness.  It also summarises key internationalization information about a page, such as character encoding and language declarations, etc. Please refer to the <a href="about.html">About</a> page for more details. </p>
			<p>If you wish to validate specific content such as <a title="W3C Markup Validation Service" href="http://validator.w3.org/">markup validation</a>,   <a title="W3C mobileOK Checker" href="http://validator.w3.org/mobile/">mobileOK</a>,  <a title="Feed validator, hosted at W3C" href="http://validator.w3.org/feed/">RSS/Atom feeds</a>,  <a title="W3C CSS Validation Service" href="http://jigsaw.w3.org/css-validator/">CSS stylesheets</a>, or to <a title="W3C Link Checker" href="http://validator.w3.org/checklink">find broken links</a>, there are <a href="http://www.w3.org/QA/Tools/">other validators and 
				tools</a> available.</p>
	</div>
	<div id="don_program">
		<script type="text/javascript" src="http://www.w3.org/QA/Tools/don_prog.js"></script>
	</div>
	

<?php include('includes/footer.html.php');