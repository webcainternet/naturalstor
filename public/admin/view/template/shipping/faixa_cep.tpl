<?php echo $header; ?>
<div id="content">
      <div class="breadcrumb">
            <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                  <?php echo $breadcrumb['separator']; ?><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a>
            <?php } ?>
      </div>
      <?php if ($error_warning) { ?>
            <div class="warning"><?php echo $error_warning; ?></div>
      <?php } ?>
      <div class="box">
            <div class="heading">
                  <h1><img src="view/image/shipping.png" alt="" /> <?php echo $heading_title; ?></h1>
                  <div class="buttons"><a onclick="$('#form').submit();" class="button"><?php echo $button_save; ?></a><a href="<?php echo $cancel; ?>" class="button"><?php echo $button_cancel; ?></a></div>
            </div>
            <div class="content">
                  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form">
                        <table class="form">
                              <tr>
                                    <td><?php echo $entry_status; ?></td>
                                    <td><select name="faixa_cep_status">
                                                <?php if ($faixa_cep_status) { ?>
                                                      <option value="1" selected="selected"><?php echo $text_enabled; ?></option>
                                                      <option value="0"><?php echo $text_disabled; ?></option>
                                                <?php } else { ?>
                                                      <option value="1"><?php echo $text_enabled; ?></option>
                                                      <option value="0" selected="selected"><?php echo $text_disabled; ?></option>
                                                <?php } ?>
                                          </select></td>
                              </tr>
                              <tr>
                                    <td><?php echo $entry_sort_order; ?></td>
                                    <td><input type="text" name="faixa_cep_sort_order" value="<?php echo $faixa_cep_sort_order; ?>" size="1" /></td>
                              </tr>
                        </table>

                        <h3><?php echo $text_interval; ?></h3>
                        <p><?php echo $text_interval_info; ?></p>
                        <?php if ($error_faixa_cep_interval) { ?>
                                    <p class="required"><?php echo $error_faixa_cep_interval; ?></p>
                              <?php } ?>
                        <table id="faixa_cep" class="list">
                              <thead>
                                    <tr>
                                          <td width="" class="left"><?php echo $entry_title; ?></td>
                                          <td width="15%" class="left"><?php echo $entry_total; ?></td>
                                          <td width="15%" class="left"><?php echo $entry_cep; ?></td>
                                          <td width="15%" class="left"><?php echo $entry_cost; ?></td>
                                          <td></td>
                                    </tr>
                              </thead>
                              <?php $row = 0; ?>
                              <?php foreach ($faixa_cep_interval as $interval) { ?>
                                    <tbody id="faixa_cep-row<?php echo $row; ?>">
                                          <tr>
                                                <td class="left"><input type="text" name="faixa_cep_interval[<?php echo $row; ?>][title]" value="<?php echo $interval['title']; ?>" size="50" /></td>
                                                <td class="left"><input type="text" name="faixa_cep_interval[<?php echo $row; ?>][order_total]" size="8" value="<?php echo $interval['order_total']; ?>" /></td>
                                                <td class="left"><input type="text" name="faixa_cep_interval[<?php echo $row; ?>][cep]" value="<?php echo $interval['cep']; ?>" /></td>
                                                <td class="right"><input type="text" name="faixa_cep_interval[<?php echo $row; ?>][cost]" value="<?php echo $interval['cost']; ?>" size="8" /></td>
                                                <td class="left"><a onclick="$('#faixa_cep-row<?php echo $row; ?>').remove();" class="button"><?php echo $button_remove; ?></a></td>
                                          </tr>
                                    </tbody>
                                    <?php $row++; ?>
                              <?php } ?>
                              <tfoot>
                                    <tr>
                                          <td colspan="4"></td>
                                          <td class="left"><a onclick="addCEP();" class="button"><?php echo $button_add ?></a></td>
                                    </tr>
                              </tfoot>
                        </table>
                  </form>
            </div>
      </div>
</div>
<script type="text/javascript"><!--
      var row = <?php echo $row; ?>;

      function addCEP() {	
            html  = '<tbody id="faixa_cep-row' + row + '">';
            html += '  <tr>';
            html += '    <td class="left"><input type="text" name="faixa_cep_interval[' + row + '][title]" value="" size="50" /></td>';
            html += '    <td class="left"><input type="text" name="faixa_cep_interval[' + row + '][order_total]" value="" size="8" /></td>';
            html += '    <td class="left"><input type="text" name="faixa_cep_interval[' + row + '][cep]" value="" /></td>';
            html += '    <td class="right"><input type="text" name="faixa_cep_interval[' + row + '][cost]" value="" size="8" /></td>';
            html += '    <td class="left"><a onclick="$(\'#faixa_cep-row' + row + '\').remove();" class="button"><?php echo $button_remove; ?></a></td>';
            html += '  </tr>';
            html += '</tbody>';
	
            $('#faixa_cep tfoot').before(html);
	
            row++;
      }
      //--></script>
<?php echo $footer; ?> 