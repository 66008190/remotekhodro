<script type="text/javascript" language="javascript" class="init">

  $(document).ready(function() {

    // DataTable
    var table = $('#example').DataTable();

    // Apply the search
    table.columns().every( function () {
      var that = this;

      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
              .search( this.value )
              .draw();
        }
      } );
    } );
    ////
    // Apply the search
  } );
</script>
<div class="content-control">
  <!--control-nav-->
  <ul class="control-nav pull-right">
      <li><a class="rtl text-24"><i class="fa fa-file-image-o"></i> لیست درخواست همکاری</a></li>
  </ul><!--/control-nav-->
</div><!-- /content-control -->
<div class="content-body">
    <div class="row xsmallSpace"></div>
    <div id="panel-1" class="panel panel-default border-blue">
        <div class="panel-heading bg-blue">
            <h3 class="panel-title rtl">لیست درخواست همکاری</h3>
            <div class="panel-actions">
                <button data-expand="#panel-1" title="نمایش" class="btn-panel">
                    <i class="fa fa-expand"></i>
                </button>
                <button data-collapse="#panel-1" title="بازکردن" class="btn-panel">
                    <i class="fa fa-caret-down"></i>
                </button>
            </div>
        </div>
        <div class="panel-body">
            <?php  if($msg!=''){
                echo $msg;
            }?>

            <!-- separator -->
            <div class="row smallSpace"></div>

            <div class="table-responsive table-responsive-datatables">
                <table id="example" class="companyTable table table-striped table-bordered rtl" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ردیف</th>
                        <th>عنوان</th>
                        <th>نام متقاضی</th>
                        <th>سرویس مورد نظر</th>
                        <th>توضیح</th>
                        <th>تلفن</th>
                        <th>ایمیل</th>
                        <th>فایل رزومه</th>
                        <th>تصویر</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?
                    $cn = 1;


                    foreach ($list['list'] as $id => $fields)
                    {
                    ?>
                        <tr>
                            <td><?php echo $fields['Cv_id']; ?></td>
                            <td><?php echo $fields['subject']; ?></td>
                            <td><?php echo $fields['name']; ?></td>
                            <td><?php echo $fields['services']; ?></td>
                            <td><?php echo $fields['comment']; ?></td>
                            <td><?php echo $fields['phone']; ?></td>
                            <td><?php echo $fields['email']; ?></td>
                            <td dir="ltr" align="center">

                                <a href="<?=RELA_DIR.'statics/cv/'. $fields['cvfile'] ?>"><?=$fields['cvfile']?></a>
                            </td>
                            <td dir="ltr" align="center"><img height="60px" src="<?=RELA_DIR.'statics/cv/'. $fields['image'] ?>"/></td>
                            <td>

                                <a href="<?= RELA_DIR ?>admin/?component=cv&action=deleteCv&id=<?php echo $fields['Cv_id']; ?>">حذف</a>
                            </td>
                        </tr>
                    <?

                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <th><input type="hidden" name="search_1" class="search_init form-control"/></th>
                        <th><input type="text" name="search_2" class="search_init form-control"/></th>
                        <th><input type="text" name="search_3" class="search_init form-control"/></th>
                        <th><input type="text" name="search_4" class="search_init form-control"/></th>
                        <th><input type="text" name="search_5" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_6" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_7" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_8" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_9" class="search_init form-control"/></th>
                        <th><input type="hidden" name="search_10" class="search_init form-control"/></th>

                    </tfoot>
                </table>
            </div>
        </div>
        <div class="panel-footer clearfix">
        </div>
    </div>
</div><!--/content-body -->


