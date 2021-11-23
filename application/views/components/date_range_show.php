<?php if(!empty($_POST['date']['from']) || !empty($_POST['date']['to'])){ ?>
    <div class="hide">
        <table class="table table-bordered table2">
            <tr>
               <th colspan="9" class="text-center">
                   Date From : <?php echo $_POST['date']['from']; ?>
                   &nbsp;  &nbsp;
                   Date To : <?php echo $_POST['date']['to']; ?>
               </th>
            </tr>
        </table>
    </div>
<?php } ?>

<?php if(!empty($_POST['datefrom']) || !empty($_POST['dateto'])){ ?>
    <div class="hide">
        <table class="table table-bordered table2">
            <tr>
               <th colspan="9" class="text-center">
                   Date From : <?php echo $_POST['datefrom']; ?>
                   &nbsp;  &nbsp;
                   Date To : <?php echo $_POST['dateto']; ?>
               </th>
            </tr>
        </table>
    </div>
<?php } ?>

<?php if(!empty($_POST['from']) || !empty($_POST['to'])){ ?>
    <div class="hide">
        <table class="table table-bordered table2">
            <tr>
               <th colspan="9" class="text-center">
                   Date From : <?php echo $_POST['from']; ?>
                   &nbsp;  &nbsp;
                   Date To : <?php echo $_POST['to']; ?>
               </th>
            </tr>
        </table>
    </div>
<?php } ?>